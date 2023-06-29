<?php

namespace App\Http\Controllers;
use App\Models\HosoDiem;
use Illuminate\Http\Request;

class HosoDiemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hosoDiems = HosoDiem::all()->sortByDesc('id');
        return view('admin.hoso_diem.index', compact('hosoDiems'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.hoso_diem.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $hosoDiem = new HosoDiem;
        $hosoDiem->IDHocSinh = $request->IDHocSinh;
        $hosoDiem->IDMon = $request->IDMon;
        $hosoDiem->Diem = $request->Diem;
        $hosoDiem->ThoiGianCapNhap = now();
        $hosoDiem->save();

        return redirect()->route('hoso_diem.index')->with('success', 'Thêm thành công!');
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
        $hosoDiem = HosoDiem::find($id);
        return view('admin.hoso_diem.edit', compact('hosoDiem'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hosoDiem = HosoDiem::find($id);
        $hosoDiem->delete();

        return redirect()->route('hoso_diem.index')->with('success', 'Xoá thành công!');
    }
}
