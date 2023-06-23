<?php

namespace App\Http\Controllers;

use App\Models\HocSinh;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HocSinhController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hocSinhs = HocSinh::all();
        return view('hoc_sinh.index', compact('hocSinhs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hoc_sinh.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $hocSinh = new HocSinh;
        $hocSinh->HoTen = $request->HoTen;
        $hocSinh->ThoiGianCapNhap = now();
        $hocSinh->save();

        return redirect()->route('hoc_sinh.index')->with('success', 'Thêm thành công!');
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
    public function edit($id)
    {
        $hocSinh = HocSinh::find($id);
        return view('hoc_sinh.edit', compact('hocSinh'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $hocSinh = HocSinh::find($id);
        $hocSinh->ho_ten = $request->ho_ten;
        $hocSinh->thoi_gian_cap_nhap = now();
        $hocSinh->save();

        return redirect()->route('hoc_sinh.index')->with('success', 'Cập nhật thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $hocSinh = HocSinh::find($id);
        $hocSinh->delete();

        return redirect()->route('hoc_sinh.index')->with('success', 'Xoá thành công!');
    }
}
