@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div>
                    {{ __('Users') }}
                </div>
                <a href="users/create" class="btn btn-primary">Create</a>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Create At</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td>
                                    <button id="{{ $user->id }}" class="btn btn-danger btn-delete">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(".btn-delete").on("click", function() {
            var id = $(this).attr("id");
            var _token   = $('meta[name="csrf-token"]').attr('content');
            var tr = $(this).parents('tr');
            // console.log(tr);
            $.ajax({
                url: '/users/destroy',
                type: 'delete',
                data: {id: id, _token: _token},
                dataType: 'json'
            });

            tr.remove()
        })
    </script>
@endsection
