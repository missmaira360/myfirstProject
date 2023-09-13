@extends('layouts.app')
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
    </div>
<div class="col-md-8 offset-md-2 mt-5">
    <a class="btn btn-outline-info text-end ml-5" href="{{ route('property.users') }}">list of property</a>
</div>
@endsection

