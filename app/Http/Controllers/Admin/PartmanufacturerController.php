<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partmanufacturer;
use App\Http\Requests\StorePartmanufacturerRequest;
use App\Http\Requests\UpdatePartmanufacturerRequest;
use Illuminate\Support\Facades\Storage;

class PartmanufacturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partmanufacturers = Partmanufacturer::get();
        return view('admin.partmanufacturers.index', compact('partmanufacturers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.partmanufacturers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePartmanufacturerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePartmanufacturerRequest $request)
    {
        $params = $request->all();
        unset($params['image']);
        if ($request->has('image')) {
            $params['image'] = $request->file('image')->store('partmanufacturers');
        }
        Partmanufacturer::create($params);
        return redirect()->route('admin.partmanufacturers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partmanufacturer  $partmanufacturer
     * @return \Illuminate\Http\Response
     */
    public function show(Partmanufacturer $partmanufacturer)
    {
        return view('admin.partmanufacturers.show', compact('partmanufacturer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partmanufacturer  $partmanufacturer
     * @return \Illuminate\Http\Response
     */
    public function edit(Partmanufacturer $partmanufacturer)
    {
        return view('admin.partmanufacturers.edit', compact('partmanufacturer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePartmanufacturerRequest  $request
     * @param  \App\Models\Partmanufacturer  $partmanufacturer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePartmanufacturerRequest $request, Partmanufacturer $partmanufacturer)
    {
        $params = $request->all();
        unset($params['image']);
        if ($request->has('image')) {
            Storage::delete($partmanufacturer->image);
            $params['image'] = $request->file('image')->store('partmanufacturers');
        }
        $partmanufacturer->update($params);
        return redirect()->route('admin.partmanufacturers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partmanufacturer  $partmanufacturer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partmanufacturer $partmanufacturer)
    {
        $partmanufacturer->delete();
        Storage::delete($partmanufacturer->image);
        return redirect()->route('admin.partmanufacturers.index');
    }
}
