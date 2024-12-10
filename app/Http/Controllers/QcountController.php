<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;

class QcountController extends Controller
{
    public function quickCount(){
        $candidates = Candidate::all();

        return view('count', compact('candidates'));
    }
}
