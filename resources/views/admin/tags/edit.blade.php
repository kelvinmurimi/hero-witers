@extends('admin.master')
@section('content')
@include('admin.includes.success')
@include('admin.includes.danger')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Update Tag</h4>
             
                <form class="forms-sample" action="{{ route('tags.update', $tag->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="category_name">Tag Name</label>
                        <input type="text" class="form-control" id="tagname" name="tag_name" value="{{ $tag->name }}">

                        @error('tag_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>

                    <input type="submit" class="btn btn-primary " value="Update">
                    <a href="{{ route('tags.index') }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection