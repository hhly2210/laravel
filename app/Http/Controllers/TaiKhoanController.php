<?php

namespace App\Http\Controllers;
use App\Models\TaiKhoan;
use Illuminate\Http\Request;

class TaiKhoanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $taiKhoans = TaiKhoan::all()->sortByDesc('id');
        return view('admin.tai_khoan.index', compact('taiKhoans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tai_khoan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $taiKhoan = TaiKhoan::find($id);
        return view('admin.tai_khoan.edit', compact('taiKhoan'));
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
    public function destroy($id)
    {
        $taiKhoan = TaiKhoan::find($id);
        $taiKhoan->delete();

        return redirect()->route('tai_khoan.index')->with('success', 'Xoá thành công!');
    }
}
