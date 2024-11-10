<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function index()
        {
            return Inertia::render('Projects', ['projects' => DB::table('projects')->paginate(10)]);
        }
}

