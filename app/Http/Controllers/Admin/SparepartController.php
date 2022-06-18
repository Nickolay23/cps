<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SparepartRequest;
use App\Models\Category;
use App\Models\Partmanufacturer;
use App\Models\Sparepart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SparepartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spareparts = Sparepart::get();
        return view('admin.spareparts.index', compact('spareparts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Sparepart::class);

        $categories = Category::get();
        $partmanufacturers = Partmanufacturer::get();
        return view('admin.spareparts.create', compact('categories', 'partmanufacturers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SparepartRequest $request)
    {
        $this->authorize('create', Sparepart::class);

        $params = $request->all();
        unset($params['image']);
        if ($request->has('image')) {
            $params['image'] = $request->file('image')->store('spareparts');
        }

        Sparepart::create($params);
        return redirect()->route('admin.spareparts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sparepart  $sparepart
     * @return \Illuminate\Http\Response
     */
    public function show(Sparepart $sparepart)
    {
        return view('admin.spareparts.show', compact('sparepart'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sparepart  $sparepart
     * @return \Illuminate\Http\Response
     */
    public function edit(Sparepart $sparepart)
    {
        $this->authorize('update', $sparepart);

        $categories = Category::get();
        $partmanufacturers = Partmanufacturer::get();
        return view('admin.spareparts.edit', compact('sparepart','categories', 'partmanufacturers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sparepart  $sparepart
     * @return \Illuminate\Http\Response
     */
    public function update(SparepartRequest $request, Sparepart $sparepart)
    {
        $this->authorize('update', $sparepart);

        $params = $request->all();
        unset($params['image']);
        if ($request->has('image')) {
            Storage::delete($sparepart->image);
            $params['image'] = $request->file('image')->store('spareparts');
        }
        $sparepart->update($params);
        return redirect()->route('admin.spareparts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sparepart  $sparepart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sparepart $sparepart)
    {
        $this->authorize('delete', $sparepart);

        $sparepart->delete();
        Storage::delete($sparepart->image);
        return redirect()->route('admin.spareparts.index');
    }
}
