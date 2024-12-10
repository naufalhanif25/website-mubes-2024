<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;
use App\Models\Vote;

class VoteController extends Controller
{
    public function vote(Request $request){
        $request->validate([
            'user_id' => 'required|exists:users,npm',
            'candidate_npm' => 'required|exists:candidate,npm',
        ]);

        $user_id = $request->user_id;
        $candidate_npm = $request->candidate_npm;

        // Cek apakah user sudah pernah voting
        $existingVote = Vote::where('user_id', $user_id)->first();

        if ($existingVote) {
            return response()->json(['message' => 'Anda sudah melakukan voting!'], 403);
        }

        // Tambahkan suara ke kandidat
        $candidate = Candidate::where('npm', $candidate_npm)->first();
        if ($candidate) {
            $candidate->increment('votes'); // Tambah 1 suara
        }

        // Catat voting ke tabel votes
        Vote::create([
            'user_id' => $user_id,
            'candidate_npm' => $candidate_npm,
        ]);

        return response()->json(['message' => 'Vote berhasil disimpan!'], 200);
    }
}
