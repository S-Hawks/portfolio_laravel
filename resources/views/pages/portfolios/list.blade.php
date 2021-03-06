@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">List Of Services</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">List of Services</li>
            </ol>
            <!-- Session -->
            @if($message = Session::get('msg'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Icon</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col" colspan="2">Action</th>
                </tr>
                </thead>
                <tbody>
                @if(count($services) > 0)
                    @foreach($services as $service)
                        <tr>
                            <th scope="row">{{ $service->id }}</th>
                            <td>{{ $service->icon }}</td>
                            <td>{{ $service->title }}</td>
                            <td>{{ Str::limit(strip_tags($service->description),40) }}</td>
                            <td>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-primary">Edit</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <form action="{{ route('admin.services.destroy', $service->id) }}" method="POST">
                                            @csrf
                                            @method("DELETE")
                                            <input type="submit" name="submit" value="delete" class="btn btn-danger">
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif

                </tbody>
            </table>
        </div>
    </main>
@endsection

