<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function showTasks()
    {
        $tasks = Task::all();
        return view('tasks', ['tasks' => $tasks]);
    }

    public function create()
    {
        return view('task-create');
    }

    public function edit(Task $task)
    {
        return view('task-edit', ['task' => $task]); 
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'task' => 'required|string|max:255',
        ]);

        Task::create(array_merge($validated, ['status' => 'pending']));
        return redirect()->route('showTasks')->with('success', 'Task created successfully.');
    }

    public function update(Request $request, Task $task) 
    {
        $validated = $request->validate([
            'status' => 'required|in:completed,pending',
        ]);

        $task->status = $validated['status'];
        $task->save();

        return redirect()->route('showTasks')->with('success', 'Task status updated successfully.');
    }

    public function delete(Task $task) 
    {
        $task->delete();
        return redirect()->route('showTasks')->with('success', 'Task deleted successfully.'); 
    }
}
