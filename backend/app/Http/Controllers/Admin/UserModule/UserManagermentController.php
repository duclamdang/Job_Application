<?php

namespace App\Http\Controllers\Admin\UserModule;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserManagermentController extends Controller
{
    


    public function index() {

        $name = 'John Doe';

        return view('admin.user')->with('user_name', $name);
    }
}
