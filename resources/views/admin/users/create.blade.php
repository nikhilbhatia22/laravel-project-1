@extends('admin.layouts.master')

@section('title')
    Create User - {{ env('APP_NAME') }}
@endsection

@section('page_headers')
    <h3><i class="fa-duotone fa-users mr-2"></i>Users</h3>
@endsection

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">Users</a></li>
    <li class="breadcrumb-item active">Create</li>
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            @include('adminlte-templates::common.errors')
                            {!! Form::open(['route' => 'admin.users.store',  'files' => true]) !!}
                            <div class="row">
                                @include('admin.users.fields')
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
