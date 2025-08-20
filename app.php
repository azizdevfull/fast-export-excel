<?php

use App\Models\User;
use Rap2hpoutre\FastExcel\FastExcel;

$users = User::all();
(new FastExcel($users))->export('azizdev.xlsx');

// export 10_000 users
// in 1.90 s
// on a Windows :)