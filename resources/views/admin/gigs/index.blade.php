@extends('admin.master')
@section('content')
@include('admin.includes.success')
@include('admin.includes.danger')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Gigs</h4>
                <p class="card-description">
                    <code>All Gigs</code>
                </p>

                <div class="table-responsive">
                    <a href="{{ route('gigs.create') }}" class="btn btn-success  "> <i class="mdi mdi-plus-box"></i>Add Gig</a>
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
                            @foreach ($gigs as $gig)
                                <tr>

                                    <td>{{ $gig->id }}</td>
                                    <td>{{ $gig->gig_title }}</td>
                                    <td><a href=""class="btn btn-primary">Edit</a></td>
                                    <td>
                                        <form action="" class="btn btn-danger" method="post">
                                            @method('delete')
                                            @csrf
                                            <input type="submit" value="delete">
                                        </form>
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>

                    </table>
                {{-- $gigs->links()--}}
                </div>
            </div>
        </div>

    </div>
@endsection
