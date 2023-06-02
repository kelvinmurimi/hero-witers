<<<<<<< HEAD
create
=======
@extends('admin.master')

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Create Category</h4>
             
                <form class="forms-sample" action="{{ route('categories.store') }}" method="post">
                    @csrf
                    
                    <div class="form-group">
                        <label for="category_name">Category Name</label>
                        <input type="text" class="form-control" id="categoryname" name="category_name">

                        @error('category_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>

                    <input type="submit" class="btn btn-primary " value="Create">
                    <a href="{{ route('categories.index') }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection
>>>>>>> 3fdc48e7fbdc9947ba4693a9ae1fc93d056ec893
