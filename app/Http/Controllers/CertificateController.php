<?php

namespace App\Http\Controllers;

use App\Models\certificate;
use Dotenv\Validator;
use Illuminate\Http\Request;


class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flag=false;
        return view('certificate',compact('flag'));
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
     * @param  \App\Models\certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function show(certificate $certificate,Request $request)
    {
//    return    gettype($request->id);

        try {
            $val=$request->validate([
                'id' =>'digits_between:8,8',
            ]);
            $cer= $certificate::where('int_id','=',$request->id)->firstOrFail(['name','rank','pdf']);
            return view('certificate2',compact('cer'));
        }catch (\Exception $e){
            $flag=true;
            return view('certificate',compact('flag'));
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function edit(certificate $certificate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, certificate $certificate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function destroy(certificate $certificate)
    {
        //
    }
}
