<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GearboxRequest;
use App\Managers\GearboxesManager;
use App\Models\Gearbox;
use Illuminate\Http\Request;

class GearboxesController extends Controller
{
    public function __construct(protected GearboxesManager $gearboxesManager)
    {
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gearboxes = $this->gearboxesManager->getGearboxes();
        return view('admin.gearboxes.index', compact('gearboxes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gearboxes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GearboxRequest $request)
    {
        $gearbox=$this->gearboxesManager->createGearbox($request);
        return redirect()->route('gearboxes.show', $gearbox);
    }

    /**
     * Display the specified resource.
     */
    public function show(Gearbox $gearbox)
    {
        return view('admin.gearboxes.show', compact('gearbox'));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Gearbox $gearbox)
    {
        return view('admin.gearboxes.edit', compact('gearbox'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GearboxRequest $request, Gearbox $gearbox)
    {
        $gearbox=$this->gearboxesManager->updateGearbox($request, $gearbox);
        return redirect()->route('gearboxes.show', $gearbox);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gearbox $gearbox)
    {
        $this->gearboxesManager->deleteGearbox($gearbox);
        return redirect()->route('gearboxes.index');
    }
}
