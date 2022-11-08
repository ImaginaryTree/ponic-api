<?php

namespace App\Http\Controllers\API;

use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\hydroModel;
use App\Models\data_statistikModel;

class hydroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = hydroModel::all(); //get all query data from database hydro_ctrl
        $data2 = data_statistikModel::all(); //get all query data from database hydro_ctrl

        //ph value
        $data_ph = [ // append $min_ph, $max_ph, $ph_value to array/dictionary
            "ph_value" => $data2[0]['ph'], //get ph kolom data by accessing 2 dimensional array of dictionary
            "max_ph" => $data[0]['max_ph'], //get max_ph data by accessing 2 dimensional array of dictionary
            "min_ph" => $data[0]['min_ph'] //get min_ph data by accessing 2 dimensional array of dictionary
        ];
        $data[0]['min_ph'] = $data_ph; // passing value of $data_ph to $data
        $data[0]['data_ph'] = $data[0]['min_ph']; //rename key value by creating new key

        //ppm
        $data_ppm = [ // append $min_ppm, $max_ppm, $ppm_value to array/dictionary
            "ppm_value" => $data2[0]['ppm'], //get ppm kolom data by accessing 2 dimensional array of dictionary
            "max_ppm" => $data[0]['max_ppm'], //get max_ppm data by accessing 2 dimensional array of dictionary
            "min_ppm" => $data[0]['min_ppm'] //get min_ppm data by accessing 2 dimensional array of dictionary
        ];
        $data[0]['min_ppm'] = $data_ppm; // passing value of $data_ph to $data
        $data[0]['data_ppm'] = $data[0]['min_ppm']; //rename key value by creating new key

        //deleting old key
        unset($data[0]['max_ph']);
        unset($data[0]['min_ph']);
        unset($data[0]['max_ppm']);
        unset($data[0]['min_ppm']);

        if($data){
            return ApiFormatter::createApi(200,'Success', $data);
        }else {
            return ApiFormatter::createApi(400,'Failed');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $column)
    {

        $request->validate([
            $column => 'required' // validating data value
        ]);
        $hydro = hydroModel::findOrFail(1); //get data and checking wether the data of specified index or exist or not
        $hydro->update([
            $column => $request->$column // updating value of specified column using value from request
        ]);
        $data = hydroModel::all(); // get all query data of table hydroModel

        if($data){
            return ApiFormatter::createApi(200,'Success', $data);
        }else {
            return ApiFormatter::createApi(400,'Failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
