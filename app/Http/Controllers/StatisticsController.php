<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    public function index() {
        $users = DB::select('select * from users');
        $count = DB::select('select user_id, COUNT(id) as total_count from posts group by user_id');

        // return view('pages.statistics')->with('users', $users);
        return view('pages.statistics')->with('users', $users)->with('count', $count);
    }
}
