@extends('layouts.app')

@section('title','Service Details')

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
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <strong>Service ID:</strong>
                                    <p class="text-muted">{{ $service->id_service }}</p>
                                </div>
                                <div class="col-md-6">
                                    <strong>Service Type:</strong>
                                    <p class="text-muted">{{ $service->serviceType->service_category }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <strong>Price:</strong>
                                    <p class="text-muted">${{ number_format($service->price, 2) }}</p>
                                </div>
                                <div class="col-md-6">
                                    <strong>Created At:</strong>
                                    <p class="text-muted">{{ $service->created_at->format('d/m/Y H:i') }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <strong>Description:</strong>
                                    <p class="text-muted">{{ $service->description }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('services.index') }}" class="btn btn-flat" style="background-color: #103f7d; color:white;">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection