@extends('layouts.app')

@section('title','Edit Employee')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
		<div class="container-fluid">
		</div>
    </section>
	@include('layouts.partial.msg')
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header" style="background-color: #103f7d; color:white;">
							<h3>@yield('title')</h3>
						</div>
						<form method="POST" action="{{ route('employees.update',$employee) }}" enctype="multipart/form-data">
                            @csrf
							@method('PUT')
							<div class="card-body">
								<div class="row">
									<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
										<div class="form-group label-floating">
											<label class="control-label">Name <strong style="color:red;">(*)</strong></label>
											<input type="text" class="form-control" name="name" placeholder="Enter name" autocomplete="off" value="{{ $employee->name }}">
										</div>
										<div class="form-group label-floating">
											<label class="control-label">Date of Birth <strong style="color:red;">(*)</strong></label>
											<input type="date" class="form-control" name="date_birth" placeholder="Enter date of birth" autocomplete="off" value="{{ $employee->date_birth }}">
										</div>
                                        <div class="form-group label-floating">
											<label class="control-label">Email <strong style="color:red;">(*)</strong></label>
											<input type="email" class="form-control" name="email" placeholder="Enter email" autocomplete="off" value="{{ $employee->email }}">
										</div>
                                        <div class="form-group label-floating">
											<label class="control-label">Phone Number <strong style="color:red;">(*)</strong></label>
											<input type="text" class="form-control" name="phone_number" placeholder="Enter phone number" autocomplete="off" value="{{ $employee->phone_number }}">
										</div>
                                        <div class="form-group label-floating">
											<label class="control-label">Salary <strong style="color:red;">(*)</strong></label>
											<input type="number" step="0.01" class="form-control" name="salary" placeholder="Enter salary" autocomplete="off" value="{{ $employee->salary }}">
										</div>
                                        <div class="form-group label-floating">
											<label class="control-label">Type Staff <strong style="color:red;">(*)</strong></label>
											<select class="form-control" name="type_staff">
												<option value="">Select type</option>
												<option value="Full-time" {{ $employee->type_staff == 'Full-time' ? 'selected' : '' }}>Full-time</option>
												<option value="Part-time" {{ $employee->type_staff == 'Part-time' ? 'selected' : '' }}>Part-time</option>
												<option value="Contract" {{ $employee->type_staff == 'Contract' ? 'selected' : '' }}>Contract</option>
												<option value="Temporary" {{ $employee->type_staff == 'Temporary' ? 'selected' : '' }}>Temporary</option>
											</select>
										</div>
                                        <div class="row">
                                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Image</label>
                                                    <input type="file" class="form-control-file" name="image" id="image">
                                                    @if($employee->image)
                                                        <div class="mt-2">
                                                            <img src="{{ asset('uploads/employees/' . $employee->image) }}" alt="Employee Image" style="height: 100px; width: 100px; object-fit: cover;">
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
									    </div>
									</div>
								</div>
								<input type="hidden" class="form-control" name="registerby" value="{{ Auth::user()->id }}">
							</div>
							<div class="card-footer">
								<div class="row">
									<div class="col-lg-2 col-xs-4">
										<button type="submit" class="btn btn-block btn-flat" style="background-color: #103f7d; color:white; ">Update</button>
									</div>
									<div class="col-lg-2 col-xs-4">
										<a href="{{ route('employees.index') }}" class="btn btn-block btn-flat" style="background-color: #103f7d; color:white; ">Back</a>
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