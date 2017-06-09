<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use Auth;

class UserController extends Controller {

    public function checkLogin(Request $request) {

        $validator = Validator::make($request->all(), [
                    'email' => 'required|email',
                    'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response(['status' => 'error', 'message' => $validator->errors()->all()]);
        }

        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];

        if (!Auth::attempt($data)) {
            return response(['status' => "error", 'message' => ["Please Check Email Or Password"], 'data' => null]);
        }

        return response(['status' => "success", 'message' => "Login Successfully", 'data' => Auth::user()]);
    }

    public function logOut() {
        Auth::logout();
    }

}
