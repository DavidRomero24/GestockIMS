@extends('layouts.app')

@section('title','Edit Service')

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
                        <form method="POST" action="{{ route('services.update', $service->id_service) }}">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Service ID</label>
                                            <input type="text" class="form-control" value="{{ $service->id_service }}" disabled>
                                            <input type="hidden" name="id_service" value="{{ $service->id_service }}">
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Description <strong style="color:red;">(*)</strong></label>
                                            <textarea class="form-control" name="description" rows="3" placeholder="Enter service description" required>{{ old('description', $service->description) }}</textarea>
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Price <strong style="color:red;">(*)</strong></label>
                                            <input type="number" step="0.01" class="form-control" name="price" placeholder="0.00" autocomplete="off" value="{{ old('price', $service->price) }}" required>
                                        </div>
                                        <div class="form-group label-floating">
                                            <label class="control-label">Service Type <strong style="color:red;">(*)</strong></label>
                                            <select class="form-control" name="service_type_id_service" required>
                                                <option value="">Select Service Type</option>
                                                @if(isset($serviceTypes) && count($serviceTypes) > 0)
                                                    @foreach($serviceTypes as $serviceType)
                                                        <option value="{{ $serviceType->id_service_type }}" {{ (old('service_type_id_service', $service->service_type_id_service) == $serviceType->id_service_type) ? 'selected' : '' }}>
                                                            {{ $serviceType->service_category }}
                                                        </option>
                                                    @endforeach
                                                @else
                                                    <option value="" disabled>No service types available.</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-lg-2 col-xs-4">
                                        <button type="submit" class="btn btn-block btn-flat" style="background-color: #103f7d; color:white;">Update</button>
                                    </div>
                                    <div class="col-lg-2 col-xs-4">
                                        <a href="{{ route('services.index') }}" class="btn btn-block btn-flat" style="background-color: #103f7d; color:white;">Back</a>
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