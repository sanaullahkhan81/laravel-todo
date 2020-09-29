<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $categories = Categories::get();
        return Task::orderBy('id', 'desc')->get();
    }

    public function archived()
    {
        return Task::onlyTrashed()->orderBy('id', 'desc')->get();
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required|max:500'
        ]);

        return Task::create(['body' => request('body')]);
    }

    public function edit(Request $request)
    {
        $this->validate($request, [
            'body' => 'required|max:500'
        ]);
        $task = Task::findOrFail($request->id);
        $task->body = $request->body;
        $task->save();
    }

    public function archive($id)
    {
        $task = Task::withTrashed()->findOrFail($id);
        if($task->deleted_at == null)
        {
            $task->delete();

        }else{
            $task->restore();
        }


    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->forceDelete();
    }
}
