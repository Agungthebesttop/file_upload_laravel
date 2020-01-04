<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserProfileController extends Controller
{
    public function edit()
    {
      return view('user.edit');
    }

    public function update(Request $request)
    {
      // dd($request->file('avatar'));
      $avatar = $request->file('avatar')->store('avatars');
      // dd($avatar);
      $request->user()->update([
        'avatar' => $avatar
      ]);
      // return redirect()->back();
      // User::where('id', $fileupload->id)
      //   ->update([
      //     'avatar' => $request->avatar
      //   ]);

      return redirect('/profil')->with('status', 'File Berhasil Diupload!');

    }
}
