<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Auth;
use Image;
use File;


class SettingsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('settings.settings');
    }

    public function profileimg()
    {
        return view('settings.profileimg');
    }

    public function updateProfileImage(Request $request)
    {
        if($request->hasFile('profileimage')) {
            $user = Auth::user();
            $profileimage = $request->file('profileimage');

            $filename = time() . '.' . $profileimage->getClientOriginalExtension();

            $path = public_path('uploads/profile_images/') . $user->id . '/';

            File::makeDirectory($path, 0777, true, true);

            Image::make($profileimage)->resize(300, 300)->save($path . $filename);

            $user->profileimgurl = $filename;
            $user->save();
        }

        return view('settings.profileimg');
    }

    public function getAllProfileImages()
    {
        $user = Auth::user();
        $path = public_path('uploads/profile_images/') . $user->id;

        $files = File::allFiles($path);

        foreach($files as $file){
            echo json_encode($file);
        }
    }
}