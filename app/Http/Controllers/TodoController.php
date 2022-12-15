<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Http\Requests\ClientRequest;

class TodoController extends Controller
{
 function index()
 {
   $todos = Todo::all();
   return view('index', ['todos' => $todos]);
 }

 function add(ClientRequest $request) 
 {
    
   $todo = new Todo();
   $todo->text = $request->text;
   $todo->save();
   return redirect('/');
 }

 function edit(Request $request, $id) 
 {
   $todo = Todo::find($id);
   unset($todo ['_token']);
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
}