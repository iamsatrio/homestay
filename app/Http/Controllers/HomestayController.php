<?php

namespace App\Http\Controllers;

use App\Homestay;
use Illuminate\Http\Request;

class HomestayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Homestay::all();
        return view('homestay.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('homestay.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $homestay = new Homestay();
        $homestay->name = $request->name;
        $homestay->phone = $request->phone;
        $homestay->address = $request->address;
        $homestay->save();
        return redirect(route('homestay.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Homestay  $homestay
     * @return \Illuminate\Http\Response
     */
    public function show(Homestay $homestay)
    {
        return view('homestay.show',compact('homestay'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Homestay  $homestay
     * @return \Illuminate\Http\Response
     */
    public function edit(Homestay $homestay)
    {
        return view('homestay.edit',compact('homestay'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Homestay  $homestay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Homestay $homestay)
    {
        $home = Homestay::find($homestay->id);
        $home->name = $request->name;
        $home->phone = $request->phone;
        $home->address = $request->address;
        $home->update();
        return redirect(route('homestay.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Homestay  $homestay
     * @return \Illuminate\Http\Response
     */
    public function destroy(Homestay $homestay)
    {
        $home = Homestay::find($homestay->id);
        $home->delete();
        return redirect(route('homestay.index'));
    }
}
