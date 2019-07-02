<?php

namespace App\Http\Controllers;

use App\baiviet;
use Illuminate\Http\Request;

class ChuyenMucConController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $baiviet =BaiViet::join('chuyenmuccons', 'chuyenmuccons.id', '=', 'baiviets.Id_ChuyenMucCon')
       ->join('chuyenmucs', 'chuyenmucs.id', '=', 'chuyenmuccons.Id_ChuyenMuc')
       ->where([['Id_TinhTrang','1'],['chuyenmuccons.id',$id]])->offset(0)->take(5) ->select('baiviets.*', 'chuyenmuccons.TenChuyenMucCon')->get();
        return view('ListOfPosts',['baiviet'=>$baiviet]);
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
