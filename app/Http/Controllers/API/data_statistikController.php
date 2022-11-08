<?php

namespace App\Http\Controllers\API;

use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\data_statistikModel;
use Illuminate\Http\Request;
use Exception;

class data_statistikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = data_statistikModel::all();

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
        //try {
            $request->validate([
                'ppm' => 'required',
                'suhu' => 'required',
                'v_air' => 'required',
                'ph' => 'required'
            ]);

            $data_statistik = data_statistikModel::create([
                'ppm' => $request->ppm,
                'suhu' => $request->suhu,
                'v_air' => $request->v_air,
                'ph' => $request->ph
            ]);

            $data = data_statistikModel::where('id', '=', $data_statistik->id)->get();

            if ($data) {
                return ApiFormatter::createApi(200, 'Success', $data);
            } else {
                return ApiFormatter::createApi(400, 'Failed');
            }
        //} catch (Exception $error) {
            return ApiFormatter::createApi(400, 'Failed');
        //}

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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {

        data_statistikModel::truncate();
        $data = data_statistikModel::all();

        if($data){
            return ApiFormatter::createApi(200,'Delete Success', $data);
        }else {
            return ApiFormatter::createApi(400,'Delete Failed');
        }
    }
}
