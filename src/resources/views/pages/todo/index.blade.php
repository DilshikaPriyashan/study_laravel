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
                </form>
            </div>
        </div>
    </div>
@endsection

@once
    <style>
        .page-title{
            padding-top: 3vh;
            font-size: 3rem;
            color: rgb(38, 106, 223);
        }
    </style>
@endonce
