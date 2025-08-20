<?php

namespace App\Http\Controllers;

use App\Models\User;
use Rap2hpoutre\FastExcel\FastExcel;

class UserController extends Controller
{

    public function index()
    {

        $users = User::all();
        (new FastExcel($users))->export('users.xlsx');
    }

}
