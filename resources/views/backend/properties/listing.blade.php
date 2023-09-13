@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        {{ __($title) }}

                        <a class="btn btn-outline-info text-end ml-12" href="{{ route('property.createProperty') }}">Add Properties</a>
                    </div>
                    @if (session()->has('success_msg')) 
                        <br>                       
                        <p class="card-body text-success my-2">
                            {{ session()->get('success_msg') }}
                        </p>
                    @endif
                </div>
            </div>
        </div>

        <div class="row fs-xs">
            <div class="col-12 mt-4">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">fullname</th>
                            <th scope="col">email</th>
                            <th scope="col">roles</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $key => $user)          
                            <tr>
                                <th scope="row">{{ ($loop->iteration) }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->getRoleNames() }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection 
