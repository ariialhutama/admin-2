<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('member.index_member');
    }

    public function data()
     {
         $member = Member::orderBy('id', 'desc')->get();
 
         return datatables()
             ->of($member)
             ->addIndexColumn()
             ->addColumn('aksi', function ($member) {
                 return '
                 
                     <button onclick="editForm(`'. route('member.update', $member->id) .'`)" class="btn btn-success btn-lg text-white">Edit</button>
                     <button onclick="deleteData(`'. route('member.destroy', $member->id) .'`)" class="btn btn-danger btn-lg text-white">Delete</button>
                 
                 ';
             })
             ->rawColumns(['aksi'])
             ->make(true);
     }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $member = Member::create($request->all());

        return response()->json('Data berhasil disimpan', 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $member = Member::find($id);

        return response()->json($member);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $member = Member::find($id);
        $member = Member::update($request->all());

        return response()->json('Data berhasil disimpan', 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $member = Member::find($id);
        $member->delete();

        return response(null, 204);
    }
}
