<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\OilStock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OilStockController extends Controller
{
    //

    public function index()
    {
        $oilStock = OilStock::all();
        return view('oil.index', ['oilStock' => $oilStock]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('oil.create', ['categories' => $categories]);
    }

    public function store(Request $request, OilStock $oilStock)
    {
        $oilStock->tank_name = $request->tank_name;
        $oilStock->tank_no = $request->tank_no;
        $oilStock->matien_no = $request->matien_no;

        $oilStock->last_reading = $request->last_reading;
        $oilStock->fast_reading = $request->fast_reading;

        $oilStock->fast_dip = $request->fast_dip;
        $oilStock->fast_qty = $request->fast_qty;

        $oilStock->last_dip = $request->last_dip;
        $oilStock->last_qty = $request->last_qty;

        $oilStock->save();

        return redirect('oil')->with('success', 'Oil created successfully');
    }


    public function edit(OilStock $oil)
    {
        $categories = Category::all();

        return view('oil.edit', ['oil' => $oil, 'categories' => $categories]);
    }


    public function update(Request $request, OilStock $oil)
    {
        // return $request->all();
        $oil->tank_name = $request->tank_name;
        $oil->tank_no = $request->tank_no;
        $oil->matien_no = $request->matien_no;

        $oil->last_reading = $request->last_reading;
        $oil->fast_reading = $request->fast_reading;

        $oil->fast_dip = $request->fast_dip;
        $oil->fast_qty = $request->fast_qty;

        $oil->last_dip = $request->last_dip;
        $oil->last_qty = $request->last_qty;

        $oil->save();

        return redirect('oil')->with('success', 'Oil updated successfully');
    }

    public function destroy(OilStock $oilStock)
    {
        return $oilStock;
        $oilStock->delete();
        return redirect('oil')->with('success', 'Oil updated successfully');

    }

    #parcess
    # parche



    public function driver()
    {
        return view('oil.driver.create');
    }
    public function createDriver(Request $request)
    {

        DB::table('driver_infos')->insert([

            'driver_name' => $request->driver_name,
            'driver_mob_no' => $request->driver_mob_no,
            'driver_dip_require' => $request->driver_dip_require,
            'driver_present_dip' => $request->driver_present_dip,
            'veichale_no' => $request->veichale_no,
            'inv_no' => $request->inv_no,
            'pay_of_name' => $request->pay_of_name,
            'pay_of_tk' => $request->pay_of_tk,
            'pay_of_date' => $request->pay_of_date,
        ]);

        return redirect()->route('driver');
    }
}
