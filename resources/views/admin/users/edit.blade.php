@extends('layouts.app')

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Redaguoti naudotoja: {{$user->name}}</div>

                    <div class="card-body">
                        <form action="{{route('admin.users.update', $user)}}" method="POST">

                            <div class="form-group row">
                                <label for="email" class="col-md-2 col-form-label text-md-right">El. pastas</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="name" class="col-md-2 col-form-label text-md-right">Vardas</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" requiredautofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            @csrf
                            {{method_field('PUT')}}
                            <div class="form-group row">
                                <label for="role" class="col-md-2 col-form-label text-md-right">Role</label>
                                <div class="col-md-6">
                                    <select name="role" id="role">
                                        @foreach($roles as $role)
                                            @if($user->role_id===$role->id)
                                                <option value="{{$role->id}}" selected="selected">{{$role->name}} </option>
                                            @else
                                                <option value="{{$role->id}}">{{$role->name}}</option>
                                            @endif

                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                Atnaujinti
                            </button>
                        <a href="{{ route('admin.users.index') }}">
                            <button type="button" class="btn btn-primary">Atgal</button>
                        </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
