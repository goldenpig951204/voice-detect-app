<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use App\User;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        if ($id) {
            $request->validate([
                'new_password' => 'required|same:confirm_password'
            ]);
            $password = $request->input('new_password');
            User::find(auth()->user()->id)->update(['password' => Hash::make($password)]);
        } else {
            $existPhoto = $request->hasFile('photo');
            $data = $request->all();
            if (isset($existPhoto)) {
                $photo = $request->file('photo');
                $fileName = uniqid() . '.' . $photo->getClientOriginalExtension();
                $oldUser = User::find(auth()->user()->id);
                $oldPhoto = $oldUser->photo;
                if ($oldPhoto) {
                    Storage::disk('public_uploads')->delete('users/' . $oldPhoto);
                }
                Storage::disk('public_uploads')->putFileAs('users', $photo, $fileName);
                $data['photo'] = $fileName;
            }
            User::find(auth()->user()->id)->update($data);
        }
        return redirect()->route('profile.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
