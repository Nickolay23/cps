<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFeaturegroupRequest;
use App\Http\Requests\UpdateFeaturegroupRequest;
use App\Models\FeatureGroup;
use Illuminate\Http\Request;

class FeatureGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $featuregroups = FeatureGroup::get();
        return view('admin.featuregroups.index', compact('featuregroups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.featuregroups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\StoreFeaturegroupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFeaturegroupRequest $request)
    {
        $params = $request->all();

        FeatureGroup::create($params);

        return redirect()->route('admin.featuregroups.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FeatureGroup $featuregroup
     * @return \Illuminate\Http\Response
     */
    public function show(FeatureGroup $featuregroup)
    {
        return view('admin.featuregroups.show', compact('featuregroup'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FeatureGroup $featuregroup
     * @return \Illuminate\Http\Response
     */
    public function edit(FeatureGroup $featuregroup)
    {
        return view('admin.featuregroups.edit', compact('featuregroup'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\UpdateFeaturegroupRequest  $request
     * @param  \App\Models\FeatureGroup $featuregroup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFeaturegroupRequest $request, FeatureGroup $featuregroup)
    {
        $params = $request->all();
        $featuregroup->update($params);
        return redirect()->route('admin.featuregroups.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FeatureGroup $featuregroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(FeatureGroup $featuregroup)
    {
        $featuregroup->delete();
        return redirect()->route('admin.featuregroups.index');
    }
}
