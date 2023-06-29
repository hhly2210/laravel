<?php

namespace App\Http\Controllers;
use App\Models\Mon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mons = Mon::all()->sortByDesc('id');
        return view('mon.index', compact('mons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mon.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mon = new Mon;
        $mon->TenMon = $request->TenMon;
        $mon->ThoiGianCapNhap = now();
        $mon->save();

        return redirect()->route('mon.index')->with('success', 'Thêm thành công!');
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
        $mon = Mon::find($id);
        return view('mon.edit', compact('mon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $mon = Mon::find($id);
        $mon->TenMon = $request->TenMon;
        $mon->ThoiGianCapNhap = now();
        $mon->save();

        return redirect()->route('mon.index')->with('success','Cập nhập thành công ❤️');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $mon = Mon::find($id);
        $mon->delete();

        return redirect()->route('mon.index')->with('success','Xoá thành công ❤️');
    }
}
