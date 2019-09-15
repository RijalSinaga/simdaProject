<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\ref_rek_1;

class Rekening1Controller extends Controller
{
    public function index()
    {
        $rek1=ref_rek_1::all();
        return view('rekening1.index', compact('rek1'));
    }

    public function create(Request $request)
    {
        // $rek1=ref_rek_1::all();
        ref_rek_1::create($request->all());
        return redirect('/rekening1')->with('success','Data success added!!');
        // return $request->all();
        // return view('rekening1.create', compact('rek1'));
    }

    public function store(Request $request)
    {
        //
    }

  
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        $rek1 = ref_rek_1::find($id);
        // {{ dd($rek1); }}
        return view('rekening1.edit', ['rek1'=>$rek1]);
    }

   
    public function update(Request $request, $id)
    {
        $rek1=ref_rek_1::where('id',$rek1->id)
        -> update ([
            'kd_rek_1' => $request -> kd_rek_1,
            'nm_rek_1' => $request -> nm_rek_1
        ]);

        // $rek1=ref_rek_1::find($id);
        // $rek1->update($request->all());
        return redirect('/rekening1')->with('success','Data success updated!!');
    }

  
    public function destroy($id)
    {
        delete();
    }
}
