<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Carmodel;
use App\Http\Requests\StoreCarmodelRequest;
use App\Http\Requests\UpdateCarmodelRequest;
use App\Models\Manufacturer;
use Illuminate\Support\Facades\Storage;

class CarmodelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carmodels = Carmodel::get();
        return view('admin.carmodels.index', compact('carmodels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $manufacturers = Manufacturer::get();
        return view('admin.carmodels.create', compact('manufacturers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCarmodelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarmodelRequest $request)
    {
        $params = $request->all();
        unset($params['image']);
        if ($request->has('image')) {
            $params['image'] = $request->file('image')->store('carmodels');
        }

        Carmodel::create($params);
        return redirect()->route('admin.carmodels.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carmodel  $carmodel
     * @return \Illuminate\Http\Response
     */
    public function show(Carmodel $carmodel)
    {
        return view('admin.carmodels.show', compact('carmodel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carmodel  $carmodel
     * @return \Illuminate\Http\Response
     */
    public function edit(Carmodel $carmodel)
    {
        $manufacturers = Manufacturer::get();
        return view('admin.carmodels.edit', compact('carmodel', 'manufacturers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarmodelRequest  $request
     * @param  \App\Models\Carmodel  $carmodel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarmodelRequest $request, Carmodel $carmodel)
    {
        $params = $request->all();
        unset($params['image']);
        if ($request->has('image')) {
            Storage::delete($carmodel->image);
            $params['image'] = $request->file('image')->store('carmodels');
        }
        $carmodel->update($params);
        return redirect()->route('admin.carmodels.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carmodel  $carmodel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carmodel $carmodel)
    {
        $carmodel->delete();
        Storage::delete($carmodel->image);
        return redirect()->route('admin.carmodels.index');
    }
}
