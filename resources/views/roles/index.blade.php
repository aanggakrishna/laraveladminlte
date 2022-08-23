@extends('layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Role {{ __('Page') }} {{ session('status') }}</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Role</a></li>
              <li class="breadcrumb-item active">Create Role</li>
            </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>
          <!-- /.content-header -->
          <!-- Main content -->
          <div class="content">
            <div class="container-fluid">
              <!-- /.col-md-6 -->
              <div class="col-lg-12">
                <div class="card card-info">
                  <div class="card-header">
                    <h1 class="card-title">Role List</h1>
                    <div class="card-tools"><a class="btn btn-success" href="{{ route('roles.create') }}"> Create New Role</a></div>
                  </div>
                  
                  <div class="card-body">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                      <p>{{ $message }}</p>
                    </div>
                    @endif
                    <table class="table table-bordered">
                      <tr>
     <th>No</th>
     <th>Name</th>
     <th width="280px">Action</th>
  </tr>
                      @foreach ($roles as $key => $role)
                      <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $role->name }}</td>
                        <td>
                          <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
                          @can('role-edit')
                          <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
                          @endcan
                          @can('role-delete')
                          {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                          {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                          {!! Form::close() !!}
                          @endcan
                        </td>
                      </tr>
                      @endforeach
                    </table>
                    {!! $roles->render() !!}
                  </div>
                </div>
              </div>
              <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>
          <!-- /.content -->
        </div>
        @endsection