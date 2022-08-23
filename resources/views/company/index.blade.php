@extends('layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Company{{ __('Page') }} {{ session('status') }}</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Company</a></li>
                <li class="breadcrumb-item active">Create Company</li>
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
                  <h1 class="card-title">Company List</h1>
                  
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
                     <th>address</th>
                     <th>phone</th>
                     
                     <th width="280px">Action</th>
                   </tr>
                   @foreach ($data as $key => $company)
                    <tr>
                      <td>{{ ++$i }}</td>
                      <td>{{ $company->name }}</td>
                      <td>{{ $company->address }}</td>
                      <td>{{ $company->phone }}</td>
                      <td>
                         <a class="btn btn-info" href="{{ route('company.show',$company->id) }}">Show</a>
                         <a class="btn btn-primary" href="{{ route('company.edit',$company->id) }}">Edit</a>
                          {!! Form::open(['method' => 'DELETE','route' => ['company.destroy', $company->id],'style'=>'display:inline']) !!}
                              {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                          {!! Form::close() !!}
                      </td>
                    </tr>
                   @endforeach
                  </table>


                 
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
