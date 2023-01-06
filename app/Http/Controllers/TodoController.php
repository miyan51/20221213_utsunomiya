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

    return view('index', compact('todos', 'user', 'tags'));
  }

  function add(ClientRequest $request)
  {

    $todo = new Todo();
    $todo->text = $request->text;
    $todo->tag_id = $request->kinds;
    $todo->user_id = Auth::id();
    $todo->save();

    $tag = new Tag();
    $tag->kinds = $request->kinds;
    $tag->save();

    return redirect('/');
  }

  function edit(Request $request, $id)
  {
    $todo = Todo::find($id);
    unset($todo['_token']);
    $todo->text = $request->text;
    $todo->save();
    return redirect('/');
  }

  function delete($id)
  {
    $todo = Todo::find($id);
    $todo->delete();
    return redirect('/');
  }

  public function getLogout()
  {
    Auth::logout();
    return redirect('/');
  }

  public function search(Request $request)
  {
    $search = $request->search;
    $query = Todo::search($search);
    $todos = $query->select('text', 'created_at', 'tag_id')->paginate(20);

    $tags = Tag::all();

    $user = '「' .  Auth::user()->name . '」でログイン中';
    return view('search', compact('todos', 'user', 'tags'));
  }
}
