<?php

namespace App\Models;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserJournaling extends Controller
{
    public function index() {
        return view("dashboard.journal");
    }
}
