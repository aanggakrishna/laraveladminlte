@extends('layouts.master')
@section('content')
<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Roles {{ __('Page') }} {{ session('status') }}</h1>
					</div><!-- /.col -->
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">Edit Role</li>
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
										<h1 class="card-title">Show Role</h1>
										<div class="card-tools"><a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a></div>
									</div>
									
									<div class="card-body">
										
										<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $role->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Permissions:</strong>
            @if(!empty($rolePermissions))
                @foreach($rolePermissions as $v)
                    <label class="label label-success">{{ $v->name }},</label>
                @endforeach
            @endif
        </div>
    </div>
</div>
										
									</div>
								</div>
							</div>
							<!-- /.col-md-6 -->
						</div>
						<!-- /.row -->
						</div><!-- /.container-fluid -->
					</div>
@endsection