@extends('layouts.master')
@section('content')
<div class="content-wrapper">
 <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Company {{ __('Page') }} {{ session('status') }}</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Company</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

<div class="content">
        <div class="container-fluid">
            <!-- /.col-md-6 -->
            <div class="col-lg-12">
              <div class="card card-info">
                <div class="card-header">
                  <h1 class="card-title">Company List</h1>
                  <div class="card-tools"><a class="btn btn-primary" href="{{ route('company.index') }}"> Back</a></div>
                </div>
                
                  <div class="card-body">
                    

                    @if (count($errors) > 0)
                      <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                           @foreach ($errors->all() as $error)
                             <li>{{ $error }}</li>
                           @endforeach
                        </ul>
                      </div>
                    @endif



                    {!! Form::open(array('route' => 'company.store','method'=>'POST')) !!}
                    <div class="">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Name:</strong>
                                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Address:</strong>
                                {!! Form::text('address', null, array('placeholder' => 'address','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <strong>Phone:</strong>
                                {!! Form::text('phone', null, array('placeholder' => 'phone','class' => 'form-control')) !!}
                            </div>
                        </div>
                        
                        
                        <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                
                  </div>
                </div>
            </div>
            <!-- /.col-md-6 -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

@endsection