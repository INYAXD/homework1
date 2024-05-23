<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admincontroller extends Controller
{
    public function index() {
        return redirect(route("admin.dailyChart"));
    }
    public function dashborad() {
        return "dashborad";
    }

    public function dailyChart() {
        return "dailyChart";
    }
}
