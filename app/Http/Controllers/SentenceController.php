<?php

namespace App\Http\Controllers;

use App\Models\Sentences;
use Illuminate\Http\Request;

class SentenceController extends Controller
{
    public function random()
    {
        $sentence = Sentences::inRandomOrder()->first();
        return response()->json($sentence);
    }
} 