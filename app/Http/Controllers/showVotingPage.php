<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;

class showVotingPage extends Controller
{
    public function TampilVote(){
        // Ambil data kandidat dari database
        $candidates = Candidate::all();

        //kirim data kandidat ke view
        return view('vote', ['candidates' => $candidates]);
    }
}
