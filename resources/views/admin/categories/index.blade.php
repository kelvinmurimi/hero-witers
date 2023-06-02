@extends('admin.master')
@section('content')
@include('admin.includes.success')
@include('admin.includes.danger')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Categories</h4>
                <p class="card-description">
                    <code>All categories</code>
                </p>
                
                <div class="table-responsive">
                    <a href="{{ route('categories.create') }}" class="btn btn-success  "> <i class="mdi mdi-plus-box"></i>Add Category</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>

                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td><a href="{{ route('categories.edit', $category->id) }}"class="btn btn-primary">Edit</a></td>
                                    <td>
                                        <form action="{{ route('categories.destroy', $category->id) }}" class="btn btn-danger" method="post">
                                            @method('delete')
                                            @csrf
                                            <input type="submit" value="delete">
                                        </form>
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>

                    </table>
                {{ $categories->links()}}
                </div>
            </div>
        </div>

    </div>
@endsection