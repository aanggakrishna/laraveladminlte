@extends('layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">User {{ __('Page') }} {{ session('status') }}</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">User</a></li>
                <li class="breadcrumb-item active">Create User</li>
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
                  <h1 class="card-title">Users List</h1>
                  <div class="card-tools"><a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a></div>
                </div>
                
                  <div class="card-body">
                    @if ($message = Session::get('success'))
                  <div class="alert alert-success">
                    <p>{{ $message }}</p>
                  </div>
                  @endif
                  <div class="container">
                      <h1>User <br/> Management</h1>
                      <table class="table table-bordered data-table">
                          <thead>
                              <tr>
                                  <th>No</th>
                                  <th>Name</th>
                                  <th>Email</th>
                                  <th width="100px">Action</th>
                              </tr>
                          </thead>
                          <tbody>
                          </tbody>
                      </table>
                  </div>

                 <!--  <table class="table table-bordered">
                   <tr>
                     <th>No</th>
                     <th>Name</th>
                     <th>Email</th>
                     <th>Roles</th>
                     <th width="280px">Action</th>
                   </tr>
                   @foreach ($data as $key => $user)
                    <tr>
                      <td>{{ ++$i }}</td>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->email }}</td>
                      <td>
                        @if(!empty($user->getRoleNames()))
                          @foreach($user->getRoleNames() as $v)
                             <label class="badge badge-success">{{ $v }}</label>
                          @endforeach
                        @endif
                      </td>
                      <td>
                         <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
                         <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                          {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                              {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                          {!! Form::close() !!}
                      </td>
                    </tr>
                   @endforeach
                  </table>


                  {!! $data->render() !!} -->
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
