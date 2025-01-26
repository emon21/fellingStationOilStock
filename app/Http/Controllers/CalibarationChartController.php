<?php

namespace App\Http\Controllers;

use App\Models\CalibarationChart;
use App\Models\Category;
use Illuminate\Http\Request;

class CalibarationChartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $calibarations = CalibarationChart::orderBy('id','ASC')->simplePaginate(10);

        $categories = Category::with('calibaration')->get();
        // return $categories;
        // return CalibarationChart::with('category')->get();

        return view('calibaration.index',compact('calibarations', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('calibaration.create',['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, CalibarationChart $calibaration)
    {
        //

        $calibaration->dip_in_mm = $request->dip_in_mm;
        $calibaration->qty_in_ltr = $request->qty_in_ltr;
        $calibaration->cat_id = $request->tank_id;
        $calibaration->save();
        return redirect()->route('calibaration.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CalibarationChart $calibaration)
    {
        //
        $categories = Category::all();
        return view('calibaration.edit',['categories' => $categories,'calibaration'=> $calibaration]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CalibarationChart $calibaration)
    {
        $calibaration->dip_in_mm = $request->dip_in_mm;
        $calibaration->qty_in_ltr = $request->qty_in_ltr;
        $calibaration->cat_id = $request->tank_id;
        $calibaration->save();
        return redirect()->route('calibaration.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CalibarationChart $calibaration)
    {
        //
        $calibaration->delete();
        return redirect()->route('calibaration.index');

    }
}
