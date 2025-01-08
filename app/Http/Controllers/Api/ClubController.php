<?php

namespace App\Http\Controllers\Api;

use App\Models\Club;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clubs = Club::all();
        return view('clubs.index', compact('clubs'));
        return response()->json([
            'status' => true,
            'message' => 'data berhasil diambil',
            'data' => $clubs
        ]);
    }

    public function create()
    {
        return view('clubs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'country' => 'required|string',
            'established' => 'required|integer', 
        ]);
 
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'validasi error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $club = Club::create($request->all());

        return response()->json([
            'status' => true,
            'message' => 'data berhasil disimpan',
            'data' => $club,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $club = Club::findOrFail($id);
        
        return view('clubs.show', compact('club'));
        return response()->json([
            'status' => true,
            'message' => 'data berhasil diambil',
            'data' => $club
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'country' => 'required|string',
            'established' => 'required|integer', 
        ]);
 
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'validasi error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $club = Club::findOrFail($id);
        $club->update($request->all());

        return response()->json([
            'status' => true,
            'message' => 'data berhasil diupdate',
            'data' => $club,
        ], 200);
    }

    public function edit(string $id)
    {
        $club = Club::findOrFail($id);
        
        return view('clubs.edit', compact('club'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $club = Club::findOrFail($id);
        $club->delete();
        return response()->json([
            'status' => true,
            'message' => 'data berhasil dihapus',
        ], 204);
    }

    public function delete(string $id)
    {
        $club = Club::findOrFail($id);
        
        return view('clubs.delete', compact('club'));
    }
}
