@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="page-title">Todo List</h1>
            </div>
            <div class="col-lg-12">
                <form action="{{ route('todo.store') }}" method="POST" enctype="multipart/form">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Enter Task" name="title">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <button class="btn btn-success">Submit</button>
                        </div>
                    </div>
                    <br>

                </form>
            </div>
            <div class="col-lg-12">
                <table class="table table-success table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Task</th>
                            <th scope="col">status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $key => $task)
                            <tr>
                                <th scope="row">{{ $key++ }}</th>
                                <td>{{ $task->title }}</td>
                                <td>
                                    @if ($task->done == 1)
                                        <span class="badge text-bg-success">Completed</span>
                                    @else
                                        <span class="badge text-bg-warning">Not Completed</span>
                                    @endif
                                </td>
                                <td><a href="{{ route('todo.delete',$task->id) }}" >Delete</a href="todo.delete.{{ $task->id }}"></td>
                            </tr>
                        @endforeach
                    <tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@once
    <style>
        .page-title {
            padding-top: 3vh;
            font-size: 3rem;
            color: rgb(38, 106, 223);
        }
    </style>
@endonce
