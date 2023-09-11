{{-- @extends('layouts.adminLayout') --}}
@extends('layouts.app')
{{-- <style>
    form {}

    * {
        box-sizing: border-box;
    }

    /* Add padding to containers */
    .container {
        padding: 16px;
        background-color: white;
    }

    /* Full-width input fields */
    input[type=text],
    input[type=password] {
        width: 50%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
    }

    input[type=text]:focus,
    input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    /* Overwrite default styles of hr */
    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
    }

    /* Set a style for the submit button */
    .registerbtn {
        background-color: #04AA6D;
        color: white;
        padding: 16px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 50%;
        opacity: 0.9;
    }


    /* Add a blue text color to links */
    a {
        color: dodgerblue;
    }

    /* Set a grey background color and center the text of the "sign in" section */
    .signin {
        background-color: #f1f1f1;
        text-align: center;
    }
</style> --}}

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        {{ $rolename }} {{ __('Dashboard Panel') }}
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center mt-4 fs-xs">

            <div class="col-md-8 col-lg-6 offset-md-2 offset-lg-3">

                <div class="card">
                    <div class="card-header">
                        
                        {{ __('Register') }}

                        @if (session()->has('success_msg')) 
                            <br>                       
                            <p class="card-body text-success my-2">
                                {{ session()->get('success_msg') }}
                            </p>
                        @endif                    
                    </div>

                    <div class="card-body fs-xs">
                        <form method="POST" action="{{ route('access.register-user') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-start">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') ?? '' }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-start">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') ?? '' }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-start">{{ __('Role') }}</label>

                                <div class="col-md-6">
                                    <select id="role" type="role" class="form-control @error('role') is-invalid @enderror" name="role" required >
                                        
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->name }}" @if (old('role') == $role->name) selected @endif>
                                                {{ $role->name }}
                                            </option>
                                        @endforeach
                                        
                                        {{-- <option value="{{ __('admin') }}" @if (old('role') == 'admin') selected @endif>Admin</option>
                                        <option value="{{ __('user') }}" 
                                            @if (old('role') == 'user' || old('role') == '')
                                            selected @endif>Normal User</option> --}}
                                    </select>                                    
                                    @error('role')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-2">
                                    <button type="submit" class="btn btn-outline-info rounded-pill">
                                        {{ __('Register User') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
