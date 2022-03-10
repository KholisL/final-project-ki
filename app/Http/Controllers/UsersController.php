<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use File;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data['user'] = Users::get();
        return view('admin.user.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new Users;
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = \Hash::make($request->password);
        // $user->photo = $request->photo;
        $user->photo = UploadFile("photo", "profile_images");
        $user->role = $request->role;
        $user->is_superadmin = $request->is_superadmin;
        // $data = g('photo');
        // dd($user->photo);
        $user->save();

        // if($user->photo == NULL)
        // {
        //     $user->photo == NULL;
        // }
        // else
        // {
        //     $user->photo = asset($user->photo);
        // }
        return redirect('user');
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
        $data['user'] = Users::find($id);
        return view('admin.user.detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $data['user'] = Users::find($id);
       return view('admin.user.edit',$data);
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
        $user = Users::find($id);
        $user->name = $request->nama;
        $user->email = $request->email;
        if($request->password != ''){
        	$user->password = \Hash::make($request->password);
        }else{
        	$user->password = $user->password;
        }
        if($request->photo != '') {

        	Users::deleteOldPhoto($id);
        	$user->photo = UploadFile("photo", "profile_images");
        }else{
        	$user->photo = $user->photo;
        }

        $user->role = $request->role;
        $user->is_superadmin = $request->is_superadmin;
        
        $user->save();
        // if($user->photo == NULL)
        // {
        //     $user->photo == NULL;
        // }
        // else
        // {
        //     $user->photo = asset($user->photo);
        // }
        $user->update();
        return redirect('user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Users::find($id)->delete();
        return redirect('user');
    }
}
