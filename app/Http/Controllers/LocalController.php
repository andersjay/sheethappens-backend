<?php

namespace App\Http\Controllers;

use App\Models\Local;
use Illuminate\Http\Request;

class LocalController extends Controller
{
    public function index()
    {
        $locais = Local::all();
        return response()->json($locais);
    }

    public function allWithPoopCount()
    {
        $locals = \App\Models\Local::withCount('poopCounts')->get();
        return response()->json($locals);
    }
} 