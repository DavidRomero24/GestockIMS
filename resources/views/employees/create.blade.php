@extends('layouts.app')

@section('title','Create Employee')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
		<div class="container-fluid">
		</div>
    </section>
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header" style="background-color: #103f7d; color:white;">
							<h3>@yield('title')</h3>
						</div>
						<form method="POST" action="{{route('employees.store')}}" enctype="multipart/form-data">
							@csrf
							<div class="card-body">
								<div class="row">
									<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
										<div class="form-group label-floating">
											<label class="control-label">Name <strong style="color:red;">(*)</strong></label>
											<input type="text" class="form-control" name="name" placeholder="Example, Pedro Perez" autocomplete="off" value="{{ old('name') }}" required>
										</div>
										<div class="form-group label-floating">
											<label class="control-label">Date of Birth <strong style="color:red;">(*)</strong></label>
											<input type="date" class="form-control" name="date_birth" placeholder="Enter date of birth" autocomplete="off" value="{{ old('date_birth') }}" required>
										</div>
                                        <div class="form-group label-floating">
											<label class="control-label">Email <strong style="color:red;">(*)</strong></label>
											<input type="email" class="form-control" name="email" placeholder="email@example.com" autocomplete="off" value="{{ old('email') }}" required>
										</div>
                                        <div class="form-group label-floating">
											<label class="control-label">Phone Number <strong style="color:red;">(*)</strong></label>
											<input type="text" class="form-control" name="phone_number" placeholder="Enter phone number" autocomplete="off" value="{{ old('phone_number') }}" required>
										</div>
                                        <div class="form-group label-floating">
											<label class="control-label">Salary <strong style="color:red;">(*)</strong></label>
											<input type="number" step="0.01" class="form-control" name="salary" placeholder="Enter salary" autocomplete="off" value="{{ old('salary') }}" required>
										</div>
                                        <div class="form-group label-floating">
											<label class="control-label">Type Staff <strong style="color:red;">(*)</strong></label>
											<select class="form-control" name="type_staff" required>
												<option value="">Select type</option>
												<option value="Full-time" {{ old('type_staff') == 'Full-time' ? 'selected' : '' }}>Full-time</option>
												<option value="Part-time" {{ old('type_staff') == 'Part-time' ? 'selected' : '' }}>Part-time</option>
												<option value="Contract" {{ old('type_staff') == 'Contract' ? 'selected' : '' }}>Contract</option>
												<option value="Temporary" {{ old('type_staff') == 'Temporary' ? 'selected' : '' }}>Temporary</option>
											</select>
										</div>
                                        <div class="row">
                                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Image</label>
                                                    <input type="file" class="form-control-file" name="image" id="image">
                                                </div>
                                            </div>
									    </div>
									</div>
								</div>
								<input type="hidden" class="form-control" name="status" value="1">
								<input type="hidden" class="form-control" name="registerby" value="{{ Auth::user()->id }}">
							</div>
							<div class="card-footer">
								<div class="row">
									<div class="col-lg-2 col-xs-4">
										<button type="submit" class="btn btn-block btn-flat" style="background-color: #103f7d; color:white;">Create</button>
									</div>
									<div class="col-lg-2 col-xs-4">
										<a href="{{ route('employees.index') }}" class="btn btn-block btn-flat" style="background-color: #103f7d; color:white;">Back</a>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection