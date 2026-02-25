<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\Hash;

class MemberController extends Controller
{
    public function index() {
        return view('dang-ky');
    }

    public function store(Request $request) {
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email|unique:members',
            'password' => 'required|min:6',
            'gioitinh' => 'required'
        ]);

        Member::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'gender' => $request->gioitinh,
        ]);

        return "Đăng ký thành công cho: " . $request->fullname;
    }
}