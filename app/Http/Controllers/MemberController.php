<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Members;

class MemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data['member'] = Members::get();
        return view('admin.member.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.member.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $member = new Members;
        $member->nama = $request->nama;
        $member->alamat = $request->alamat;
        $member->no_telp = $request->no_telp;
        $member->point = $request->point;
        if($member->point == null){
        	$member->point = 0;
        }
        $member->save();
        return redirect('member');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $data['buku'] = Buku::find($id);
        $data['member'] = Members::find($id);
        return view('admin.member.detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       // $data['buku'] = Buku::find($id);
       // $data['buku'] = Members::getmember($id);
       // dd($data['buku']);
       $data['member'] = Members::find($id);
       return view('admin.member.edit',$data);
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
        $member= Members::find($id);
        $member->nama = $request->nama;
        $member->alamat = $request->alamat;
        $member->no_telp = $request->no_telp;
        $member->point = $request->point;
        $member->update();
        return redirect('member');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = Members::find($id)->delete();
        return redirect('member');
    }
}
