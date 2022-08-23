@extends('layouts.master')
@section('content')
<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Company{{ __('Page') }} {{ session('status') }}</h1>
					</div><!-- /.col -->
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">Company User</li>
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
										<h1 class="card-title">Show Company</h1>
										<div class="card-tools"><a class="btn btn-primary" href="{{ route('company.index') }}"> Back</a></div>
									</div>
									
									<div class="card-body">
										
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-12">
												<div class="form-group">
													<strong>Name:</strong>
													{{ $company->name }}
												</div>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-12">
												<div class="form-group">
													<strong>Email:</strong>
													{{ $company->email }}
												</div>
											</div>
											<div class="col-xs-12 col-sm-12 col-md-12">
												<div class="form-group">
													<strong>Address:</strong>
													{{ $company->address }}
													
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