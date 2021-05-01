@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Create</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
            <!-- Session -->
            @if($message = Session::get('msg'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="form-group-col-md-4 mt-3">
                        <div class="mb-3">
                            <label for="icon"><h4>Font Awesome</h4></label>
                            <input type="text" class="form-control @error('icon') is-invalid @enderror" id="icon" name="icon">
                            @error('icon')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label for="title"><h4>Title</h4></label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title">
                            @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label for="description"><h4>Description</h4></label>
                            <textarea type="text" class="form-control" @error('description') is-invalid @enderror id='description' name='description'></textarea>
                            @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <input type="submit" name="submit" class="btn btn-primary">
            </form>
        </div>
    </main>
@endsection

