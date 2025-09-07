<?php

namespace App\Http\Controllers;

use App\Models\ServiceType;
use Illuminate\Http\Request;

class ServiceTypeController extends Controller
{
    public function index()
    {
        $serviceTypes = ServiceType::all();
        return view('service-types.index', compact('serviceTypes'));
    }

    public function create()
    {
        return view('service-types.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_service_type' => 'required|string|max:15|unique:service_types,id_service_type',
            'service_category' => 'required|string|max:30'
        ]);

        ServiceType::create($request->all());

        return redirect()->route('service-types.index')->with('success', 'Service Type created successfully.');
    }

    public function show($id)
    {
        $serviceType = ServiceType::findOrFail($id);
        return view('service-types.show', compact('serviceType'));
    }

    public function edit($id)
    {
        $serviceType = ServiceType::findOrFail($id);
        return view('service-types.edit', compact('serviceType'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'service_category' => 'required|string|max:30'
        ]);

        $serviceType = ServiceType::findOrFail($id);
        $serviceType->update($request->all());

        return redirect()->route('service-types.index')->with('success', 'Service Type updated successfully.');
    }

    public function destroy($id)
    {
        $serviceType = ServiceType::findOrFail($id);
        $serviceType->delete();

        return redirect()->route('service-types.index')->with('success', 'Service Type deleted successfully.');
    }

    public function changestatusservicetype(Request $request)
    {
        // Implementar cambio de estado si es necesario
    }
}