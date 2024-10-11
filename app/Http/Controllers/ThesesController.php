<?php

namespace App\Http\Controllers;

use App\Models\Students;
use App\Models\Theses;
use Illuminate\Http\Request;

class ThesesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $theses = Theses::with('student')->paginate(10);
        return view('theses.index',compact('theses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('theses.create');
        $students = Students::all(); // Lấy danh sách sinh viên để chọn
        return view('theses.create', compact('students'));
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
    public function edit(string $id)
    {
        $theses = Theses::with('student')->findOrFail($id);
        $students = Students::all();
        return view("theses.edit",compact('theses','students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
