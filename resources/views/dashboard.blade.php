@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Bold Heading -->
    <h1  class="text-3xl font-extrabold text-gray-900 ">Welcome, {{ Auth::user()->name }}!</h1>
    
    <p class="text-muted">This is your task manager dashboard.</p>
    
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title fw-semibold">Quick Actions</h5>
                    <div class="d-grid gap-2">
                        <a href="{{ route('tasks.index') }}" class="btn btn-primary btn-lg">📋 View All Tasks</a>
                        <a href="{{ route('tasks.create') }}" class="btn btn-success btn-lg">➕ Create New Task</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection