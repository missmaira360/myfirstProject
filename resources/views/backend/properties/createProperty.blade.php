@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        {{ __($title) }}
                        <a class="btn btn-outline-info text-end ml-5" href="{{ route('property.users') }}">property List</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center mt-4 fs-xs">
            <div class="col-md-8 col-lg-6 offset-md-2 offset-lg-3">

                <div class="card">
                    <div class="card-header">
                        {{ __('Register') }}
                    </div>

                    <div class="card-body fs-xs">
                        <form method="POST" action="{{ route('property.register-user') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-start">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') ?? '' }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-start">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') ?? '' }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-start">{{ __('Role') }}</label>

                                <div class="col-md-6">
                                    <select id="role" type="role"
                                        class="form-control @error('role') is-invalid @enderror" name="role" required>

                                        {{-- @foreach ($roles as $role)
                                        <option value="{{ $role->name }}"
                                            @if (old('role') == $role->name) selected @endif>
                                            {{ $role->name }}
                                        </option>
                                    @endforeach --}}

                                        <option value="{{ __('admin') }}"
                                            @if (old('role') == 'admin') selected @endif>Admin</option>
                                        <option value="{{ __('user') }}"
                                            @if (old('role') == 'user' || old('role') == '') selected @endif>Normal User</option>
                                        <option value="{{ __('agent') }}"
                                            @if (old('role') == 'agent' || old('role') == '') selected @endif>agent </option>


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

