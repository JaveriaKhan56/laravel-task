@extends('layouts.app')

@section('content')
<div class="container">
 <div class="d-flex justify-content-between align-items-center mb-4">
    <a href="{{ route('tasks.create') }}" class="btn btn-primary fw-bold">➕ New Task</a>    
    <h2 class="fw-bold">📋 My Tasks</h2>
    </div>
    
    @if($tasks->isEmpty())
        <p>No tasks found. Create your first task!</p>
    @else
        <table class="border-separate border-spacing-y-3 w-full">
            <thead>
                <tr>
                    <th>Title</th> 
                    <th>Description</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
                <tr>
                    <td>{{ $task->title }}</td>
                    <td>{{ Str::limit($task->description, 50) }}</td>
                    <td>
                        <form action="{{ route('tasks.toggle', $task) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-sm {{ $task->is_completed ? 'btn-success' : 'btn-warning' }}">
                                {{ $task->is_completed ? 'Completed' : 'Pending' }}
                            </button>
                        </form>
                    </td>
                    <td>
                        <a href="{{ route('tasks.edit', $task) }}" class="btn btn-sm btn-info">Edit</a>
                        <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection