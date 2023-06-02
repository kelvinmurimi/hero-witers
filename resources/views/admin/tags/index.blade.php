@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tags</h4>
                    <p class="card-description">
                        <code>All Tags</code>
                    </p>
                    <div class="table-responsive">
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
                                @foreach ($tags as $tag)
                                    <tr>

                                        <td>{{ $tag->id }}</td>
                                        <td>{{ $tag->name }}</td>
                                        <td><a href="{{ route('tags.edit', $tag->id) }}"class="btn btn-primary">Edit</a></td>
                                        <td>
                                            <form action="{{ route('tags.destroy', $tag->id) }}" class="btn btn-danger">
                                                <input type="submit" value="delete">
                                            </form>
                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>

                        </table>
				    {{ $tags->links()}}
                    </div>
                </div>
            </div>

        </div>
    @endsection
