<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Samsung;

class SamsungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $samsungs = null;
        if(!is_null($request->id)){
            $samsungs = Samsung::find($request->id);
            if(is_null($samsungs)){
                return response()->json('Not Found',404);
            }
        } else {
            $samsungs= Samsung::all();
        }
        
        return response()->json($samsungs,200);
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
        // $samsung = new Samsung;
        // $samsung->nama=$request->nama;
        // $samsung->gambar=$request->gambar;
        // $samsung->harga=$request->harga;

        // $success = $samsung->save();

        // if(!$success){
        //     return response()->json('Error Saving',500);
        // }
        // else
        //     return response()->json('Successfully Create Book
        //     !',201);      

        Samsung::create($request->all());
        return(['message' => 'sukses']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nama)
    {
        $samsung=Samsung::where('nama', $nama)->get();
        if(is_null($samsung)){
            return response()->json('Not Found',404);
        }
        else
            return response()->json($samsung,200);
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
        $samsung=Samsung::find($id);

        if(!is_null($request->Nama)){
            $samsung->nama=$request->nama;
        }
        if(!is_null($request->gambar)){
            $samsung->gambar=$request->gambar;
        }
        if(!is_null($request->harga)){
            $samsung->harga=$request->harga;
        }
       

        $success=$samsung->save();

        if(!$success){
            return response()->json('Error Updating',500);
        }
        else
            return response()->json(['Successfully Update Book!', $samsung],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $samsung= Samsung::find($id);
        if(is_null($samsung)){
            return response()->json('Not Found',404);
        }

        $hapus=$samsung->delete();

		if(!$hapus)
		{
			return response()->json('Error Deleting',500);
		}
		else{
			return response()->json('Successfully Delete !',200);
		}
    }
}
