<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserRegRcrg;
use App\UserReg;
use Illuminate\Http\Request;

class UserRegCtrl extends Controller
{

    public function index()
    {

       return UserRegRcrg::collection(UserReg::paginate(2));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {

        $userReg = new UserReg();
        $userReg->username = $request->username;
        $userReg->mobile = $request->mobile;
        $userReg->email = $request->email;
        if ($userReg->save()) {
            return "success";
        } else {
            return 'fail';
        }
    }

    public function show($id)
    {

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
