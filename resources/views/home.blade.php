@extends('layouts.app')

@section('content')

<div class='container'>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header bg-info">
                    <h4 class="card-title text-black">Users</h4>
                </div>
                <div class="card-body">
                    <table id="users_table" class="table table-striped table-border" style="vertical-align: middle; font-size: 14px">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Roles</th>
                                <th scope="col">Coins</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{implode(', ', $user->roles()->get()->pluck('name')->toArray())}}</td>
                                <td>{{$user->coins ?? 'N/A'}}</td>
                                <td width='20%'>
                                    <form action="" method="POST" class="form-delete">
                                        @csrf

                                        <a href="{{route('users.edit', $user->id)}}"><button type="button" class="btn btn-sm btn-info"><i class="fa fa-pencil"></i> Add Coins</button></a>
                                        @method('DELETE')
                                        <button type="button" class="btn btn-sm btn-danger"><i class="fa fa-remove"></i> Delete</button>

                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection