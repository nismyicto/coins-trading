@extends('layouts.app')

@section('content')

<div class='container'>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header bg-info">
                    <h3 class="card-title text-black">Add Coins to {{$user->name}} user</h3>
                </div>
                <div class="card-body">
                    User {{$user->name}} has {{$user->coins}} coins
                    <form action="{{route('users.update',$user)}}" method="POST" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="coins" class="col-md-2 col-form-label text-md-right">Coins</label>
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
                            <div class="col-md-6">
                                <input id="coins" type="text" class="form-control @error('coins') is-invalid @enderror" name="coins" value="0" required autofocus>

                                @error('coins')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Update Coins</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection