@extends('layouts.app')

@section('title','List of Services')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header" style="font-size: 1.75rem;font-weight: 500; line-height: 1.2; margin-bottom: 0.5rem; background-color: #103f7d; color:white;">
                            @yield('title')

                            <a href="{{ route('services.create') }}" class="btn btn-light float-right" title="Create"><i class="fas fa-plus nav-icon" style="color: #103f7d;"></i></a>

                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-hover" style="width:100%">
                                <thead class="text-primary">
                                    <tr>
                                        <th>Id</th>
                                        <th>Service ID</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Service Type</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(isset($services) && count($services) > 0)
                                        @foreach($services as $service)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $service->id_service }}</td>
                                            <td>{{ $service->description }}</td>
                                            <td>${{ number_format($service->price, 2) }}</td>
                                            <td>{{ $service->serviceType->service_category ?? 'N/A' }}</td>
                                            <td>
                                                <a href="{{ route('services.edit', $service->id_service) }}" class="btn btn-success btn-sm" title="Edit"><i class="fas fa-pencil-alt" style="justify-content: center;"></i></a>
                                                <form class="d-inline delete-form" action="{{ route('services.destroy', $service->id_service) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete"><i class="fas fa-trash-alt"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="6" class="text-center">No hay datos disponibles en la tabla</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        // Verificar si DataTable ya está inicializado y destruirlo primero
        if ($.fn.DataTable.isDataTable('#example1')) {
            $('#example1').DataTable().destroy();
        }
        
        // Inicializar DataTable con todas las opciones
        $('#example1').DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": false,
            "language": {
                "sLengthMenu": "Show _MENU_ entries",
                "sEmptyTable": "No hay datos disponibles en la tabla",
                "sInfo": "Mostrando _START_ a _END_ de _TOTAL_ entradas",
                "sInfoEmpty": "Mostrando 0 a 0 de 0 entradas",
                "sSearch": "Search:",
                "sZeroRecords": "No se encontraron registros coincidentes en la tabla",
                "sInfoFiltered": "(Filtrado de _MAX_ entradas totales)",
                "oPaginate": {
                    "sFirst": "First",
                    "sPrevious": "Previous",
                    "sNext": "Next",
                    "sLast": "Last"
                }
            }
        });
    });
</script>
<script>
    $('.delete-form').submit(function(e) {
        e.preventDefault();
        Swal.fire({
            title: 'Estas seguro?',
            text: "Este registro se eliminara definitivamente",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Aceptar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                this.submit();
            }
        })
    });
</script>
@if(session('success'))
<script>
    Swal.fire(
        'Éxito!',
        '{{ session('success') }}',
        'success'
    )
</script>
@endif
@endpush