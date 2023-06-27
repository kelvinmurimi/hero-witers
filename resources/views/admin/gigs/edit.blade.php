

@extends('admin.master')

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Create Gig</h4>

                <form class="forms-sample" action="{{ route('gigs.update',$gig->id) }}" method="post">
                    @csrf
                    @method('patch')

                    <div class="form-group">
                        <label for="gig_title">Gig Title</label>
                        <input type="text" class="form-control" id="categoryname" name="gig_title" value=" {{$gig->gig_title ?? old('gig_title') }}">

                        @error('gig_title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>
                    {{-- gig body --}}
                    <div class="form-group">
                        <label for="gig_body">Gig Description</label>
                        <textarea type="text" class="form-control" name="gig_body" rows="8">
                            {{ $gig->gig_body ?? old('gig_body') }}
                        </textarea>

                        @error('gig_body')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>

                    <input type="submit" class="btn btn-primary " value="Create">
                    <a href="{{ route('gigs.index') }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

