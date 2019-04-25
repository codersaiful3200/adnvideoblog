<?php

namespace App\Http\Controllers;

use App\Http\Resources\LoginResc;
use App\UserReg;
use Illuminate\Http\Request;

class LoginCtrl extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {

        $mobile = $request->mobile;
        $password = $request->password;

        $result = UserReg::where('mobile', $mobile)->where('password', $password)->get();

        if ($result) {
            return LoginResc::collection($result);
        } else {
            return 2;
        }

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
