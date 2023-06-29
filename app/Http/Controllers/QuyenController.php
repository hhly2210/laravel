<?php

namespace App\Http\Controllers;
use App\Models\Quyen;
use Illuminate\Http\Request;

class QuyenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quyens = Quyen::all();
        return view('quyen.index', compact('quyens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('quyen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $quyen = new Quyen;
        $quyen->TenQuyen = $request->TenQuyen;
        $quyen->save();

        return redirect()->route('quyen.index')->with('success', 'Thêm thành công!');
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
    public function edit( $id)
    {
        $quyen = Quyen::find($id);
        return view('quyen.edit', compact('quyen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $quyen = Quyen::find($id);
        $quyen->TenQuyen = $request->TenQuyen;
        $quyen->save();

        return redirect()->route('quyen.index')->with('success', 'Cập nhật thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $quyen = Quyen::find($id);
        $quyen->delete();

        return redirect()->route('quyen.index')->with('success', 'Xoá thành công!');
    }
}
