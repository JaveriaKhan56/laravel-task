<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;


class TaskController extends Controller
{
    public function index()
    {
        $tasks = Auth::user()->tasks()->latest()->get();
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'nullable'
        ]);

        Auth::user()->tasks()->create($request->all());
        
        return redirect()->route('tasks.index')
            ->with('success', 'Task created successfully!');
    }

    public function edit(Task $task)
    {
         Gate::authorize('update', $task);
        return view('tasks.edit', compact('task'));
    }

    // ✅ CHANGE THIS METHOD
    public function update(Request $request, Task $task)  // Change string $id to Task $task
    {
        Gate::authorize('update', $task);
        
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'nullable'
        ]);

        $task->update($request->all());
        
        return redirect()->route('tasks.index')
            ->with('success', 'Task updated successfully!');
    }

    // ✅ CHANGE THIS METHOD
    public function destroy(Task $task) 
    {
         Gate::authorize('delete', $task);
        $task->delete();
        
        return redirect()->route('tasks.index')
            ->with('success', 'Task deleted successfully!');
    }

    public function toggleComplete(Task $task)
    {
        $this->authorize('update', $task);
        $task->update(['is_completed' => !$task->is_completed]);
        
        return back()->with('success', 'Task status updated!');
    }
}