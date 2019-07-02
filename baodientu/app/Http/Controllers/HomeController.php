<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BaiViet;
use Illuminate\Support\Facades\DB;

class HomeController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       $baiviet =BaiViet::join('chuyenmuccons', 'chuyenmuccons.id', '=', 'baiviets.Id_ChuyenMucCon')
       ->join('chuyenmucs', 'chuyenmuccons.Id_ChuyenMuc', '=', 'chuyenmucs.id')
       ->where('Id_TinhTrang','1')->offset(0)->take(5) ->select('baiviets.*', 'chuyenmuccons.TenChuyenMucCon')->get();
       $baiviet2 =BaiViet::join('chuyenmuccons', 'chuyenmuccons.id', '=', 'baiviets.Id_ChuyenMucCon')
       ->join('chuyenmucs', 'chuyenmuccons.Id_ChuyenMuc', '=', 'chuyenmucs.id')
       ->where('Id_TinhTrang','1')->offset(6)->take(15) ->select('baiviets.*', 'chuyenmuccons.TenChuyenMucCon')->get();
       $baiviet3 = BaiViet::join('chuyenmuccons', 'chuyenmuccons.id', '=', 'baiviets.Id_ChuyenMucCon')
       ->join('chuyenmucs', 'chuyenmuccons.Id_ChuyenMuc', '=', 'chuyenmucs.id')
       ->where('Id_TinhTrang','1')
       ->select('baiviets.*', 'chuyenmuccons.TenChuyenMucCon')->get();  
       $baiviet4=DB::select('call BV_CMC_1()');
       $baiviet5=DB::select('call BV_NBTT()');
       $baiviet6=DB::select('call BV_MMN()');
        return view('home',["baiviet"=>$baiviet,"baiviet2"=>$baiviet2,"baiviet3"=>$baiviet3,'baiviet4'=>$baiviet4,"baiviet5"=>$baiviet5,'baiviet6'=>$baiviet6]);
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
    public function destroy($id)
    {
        //
    }
}
