@extends('layouts.master')
@section('content')
<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">User {{ __('Page') }} {{ session('status') }}</h1>
					</div><!-- /.col -->
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">Edit User</li>
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
										<h1 class="card-title">Show User</h1>
										<div class="card-tools"><a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a></div>
									</div>
									
									<div class="card-body">
										
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-12">
												<div class="form-group">
													<strong>Name:</strong>
													{{ $user->name }}
												</div>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-12">
												<div class="form-group">
													<strong>Email:</strong>
													{{ $user->email }}
												</div>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-12">
												<div class="form-group">
													<strong>Roles:</strong>
													@if(!empty($user->getRoleNames()))
													@foreach($user->getRoleNames() as $v)
													<label class="badge badge-success">{{ $v }}</label>
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