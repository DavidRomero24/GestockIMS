<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceType;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::with('serviceType')->get();
        return view('services.index', compact('services'));
    }

    public function create()
    {
        $serviceTypes = ServiceType::all();
        return view('services.create', compact('serviceTypes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_service' => 'required|string|max:15|unique:services,id_service',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'service_type_id_service' => 'required|exists:service_types,id_service_type'
        ]);

        Service::create($request->all());

        return redirect()->route('services.index')->with('success', 'Service created successfully.');
    }

    public function show($id)
    {
        $service = Service::with('serviceType')->findOrFail($id);
        return view('services.show', compact('service'));
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        $serviceTypes = ServiceType::all();
        return view('services.edit', compact('service', 'serviceTypes'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'service_type_id_service' => 'required|exists:service_types,id_service_type'
        ]);

        $service = Service::findOrFail($id);
        $service->update($request->all());

        return redirect()->route('services.index')->with('success', 'Service updated successfully.');
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        return redirect()->route('services.index')->with('success', 'Service deleted successfully.');
    }

    /**
     * Change status of service
     */
    public function changestatusservice(Request $request)
    {
        $service = Service::find($request->service_id);
        if ($service) {
            // Si tu modelo Service tiene un campo 'status', descomenta las siguientes líneas:
            // $service->status = $request->status;
            // $service->save();
            return response()->json(['success' => 'Status changed successfully.']);
        }
        return response()->json(['error' => 'Service not found.']);
    }
}