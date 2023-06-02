@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Update Category</h4>
             
                <form class="forms-sample" action="{{ route('categories.update', $category->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="category_name">Category Name</label>
                        <input type="text" class="form-control" id="categoryname" name="category_name" value="{{ $category->name }}">

                        @error('category_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>

                    <input type="submit" class="btn btn-primary " value="Update">
                    <a href="{{ route('categories.index') }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection