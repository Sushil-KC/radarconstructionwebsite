<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use App\Models\user;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    //Admin Logout
    public function AdminLogout()
    {
        Auth::logout();
        return redirect('login');
    }
    //Admin Profile View
    public function AdminProfile()
    {
        $user = Auth::user();
        return view('backend.user.profile', compact('user'));
    }

    //Admin Profile Store
    public function AdminProfileStore(Request $request)
    {
        $user_info = User::find(Auth::user()->id);
        $user_info->name = $request->name;
        $user_info->age = $request->age;
        $user_info->position = $request->position;
        $user_info->address = $request->address;
        $user_info->mobile = $request->mobile;
        $user_info->gender = $request->gender;
        $user_info->telephone = $request->telephone;
        $user_info->save();
        Toastr::success('Success', 'User Profile Updated Successfully');
        return redirect()->back();
    }
    public function AdminProfileImgStore(Request $request)
    {
        $user_info =  User::find(Auth::user()->id);;
        if ($request->file('profile_photo_path')) {
            $file = $request->file('profile_photo_path');
            @unlink('./uploads/profile_photo_path/' . $user_info->profile_photo_path);
            $filename = date('YmsHi') . $file->getClientOriginalName();
            $file->move(public_path('./uploads/profile_photo_path/'), $filename);
            $user_info['profile_photo_path'] = $filename;
        }

        $user_info->save();
        Toastr::success('Success', 'User Profile Updated Successfully');
        return redirect()->back();
    }


    //Admin Add View
    public function AdminListView()
    {
        $user = User::latest()->get();
        return view('backend.user.view_user',compact("user"));
    }

    //Admin Add View
    public function AdminAddView()
    {
        return view('backend.user.view_add');
    }

    //Admin Data Store
    public function AdminDataStore(Request $request)
    {
        $user_info = new User();
        $user_info->name = $request->name;
        $user_info->email = $request->email;
        $user_info->age = $request->age;
        $user_info->position = $request->position;
        $user_info->address = $request->address;
        $user_info->mobile = $request->mobile;
        $user_info->gender = $request->gender;
        $user_info->telephone = $request->telephone;
        $user_info->web_position = $request->web_position;
        $user_info->password = Hash::make('radar017');
        if ($request->file('profile_photo_path')) {
            $file = $request->file('profile_photo_path');
            @unlink('./uploads/profile_photo_path/' . $user_info->profile_photo_path);
            $filename = date('YmsHi') . $file->getClientOriginalName();
            $file->move(public_path('./uploads/profile_photo_path/'), $filename);
            $user_info['profile_photo_path'] = $filename;
        }
        $user_info->save();
        Toastr::success('Success', 'User Add Successfully');
        return redirect()->back();
    }

    //Edit User Information 
    public function AdminDataEdit($id)
    {
        $user_edit = User::find($id);
        return view('backend.user.user_edit', compact('user_edit'));
    }

    //Admin Data Update
    public function AdminDataUpdate(Request $request,$id)
    {
        $user_info =User::find($id);
        $user_info->name = $request->name;
        $user_info->email = $request->email;
        $user_info->age = $request->age;
        $user_info->position = $request->position;
        $user_info->address = $request->address;
        $user_info->mobile = $request->mobile;
        $user_info->gender = $request->gender;
        $user_info->telephone = $request->telephone;
        $user_info->web_position = $request->web_position;
        $user_info->password = Hash::make('radar017');
        if ($request->file('profile_photo_path')) {
            $file = $request->file('profile_photo_path');
            @unlink('./uploads/profile_photo_path/' . $user_info->profile_photo_path);
            $filename = date('YmsHi') . $file->getClientOriginalName();
            $file->move(public_path('./uploads/profile_photo_path/'), $filename);
            $user_info['profile_photo_path'] = $filename;
        }
        $user_info->save();
        Toastr::success('Congrats', 'User Updated Successfully');
        return redirect()->back();
    }

    //Edit Password 
    public function EditPassword()
    {
        return view('backend.user.password_reset');
    }


    public function checkUserPassword(Request $request)
    {
        $current_pass = $request->current_password;
        $id = Auth::user()->id;
        $user = User::find($id);
        if (Hash::check($current_pass, $user->password)) {
            return "true";
            die;
        } else {
            return "false";
            die;
        }
    }
    public function ChangePasswordUpdate(Request $request)
    {
        $new_pass = $request->password;
        $current_pass = $request->current_password;
        $id = Auth::user()->id;
        $user = User::find($id);
        $data = $request->all();
        if (Hash::check($current_pass, $user->password)) {
            $user->password = Hash::make($new_pass);
            $user->save();
            Toastr::success('User Password Has Been Updated Successfully', 'Success');
            return redirect()->route('login');
        } else {
            Toastr::success('User Password does not match with our database', 'Success');
            return redirect()->route('login');
        }
    }

    public function AdminDelete($id)
    {
        $user = User::find($id);
        $user->delete();
        Toastr::warning('Success', 'User Deleted Successfully');
        return redirect()->back();
    }
}
