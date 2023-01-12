<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Models\Tag;
use App\Models\User;
use App\Http\Requests\ClientRequest;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
  function index()
  {
    $user = '「' .  Auth::user()->name . '」でログイン中';
    $todos = Todo::all();
    $tags = Tag::all();

    $user_id = Auth::user()->id;
    $todos = $todos->wherein('user_id', $user_id);

    return view('index', compact('todos', 'user', 'tags'));
  }

  function add(ClientRequest $request)
  {

    $tag = new Tag();
    $tag->kinds = $request->kinds;
    $tag->save();

    $todo = new Todo();
    $todo->text = $request->text;
    $todo->tag_id = $tag->id;
    $todo->user_id = Auth::id();
    $todo->save();
    return redirect('/');
  }

  function edit(Request $request, $id)
  {
    $todo = Todo::find($id);
    $todo->text = $request->text;
    $todo->save();

    $tag = Tag::find($todo->tag_id);
    $tag->kinds = $request->kinds;
    $tag->save();
    return redirect('/');
  }

  function delete($id)
  {
    $todo = Todo::find($id);
    $todo->delete();

    $tag = Tag::find($todo->tag_id);
    $tag->delete();
    return redirect('/');
  }

  public function getLogout()
  {
    Auth::logout();
    return redirect('/');
  }

  public function search(Request $request)
  {
    $tags = Tag::all();


    $search = $request->search;
    $query = Todo::query();
    if (!empty($search)) {
      $query->where('text', 'LIKE', "%{$search}%");
    }
    $todos = $query->get();


    $kinds = $request->kinds;
    if (!empty($kinds)) {
      $tag_id = Tag::where('kinds', "$kinds")->pluck('id');
      $query->wherein('tag_id', $tag_id);
    }

    $todos = $query->get();
    $user_id = Auth::user()->id;
    $todos = $todos->wherein('user_id', $user_id);

    $user = '「' .  Auth::user()->name . '」でログイン中';
    return view('/search', compact('todos', 'user', 'tags'));
  }
}
