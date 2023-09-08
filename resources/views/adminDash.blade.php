{{-- @extends('layouts.adminLayout') --}}
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ $rolename }} {{ __('Dashboard Panel') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

 
