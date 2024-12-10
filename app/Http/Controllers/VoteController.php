<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Candidate;
use Illuminate\Http\Request;
use App\Models\Vote;

class VoteController extends Controller
{
    public function submitVote(Request $request)
    {
        
        // Validasi input
        $request->validate([
            'npm'=>'required|exists:users,npm',
            'candidate_id' => 'required|exists:candidate,id', // Kandidat harus valid
        ]);

        // Cek apakah user sudah voting
        $userId = $request->npm; // Ambil user ID dari sesi
        $existingVote = Vote::where('user_id', $userId)->first();
        if ($existingVote) {
            return redirect()->back()->with('error', 'Anda sudah memberikan suara!');
        }


        User::where('npm', $userId)->update([
            'has_voted' => true,
        ]);
        
        

        $candidate = Candidate::find($request->candidate_id);
        if ($candidate) {
            $candidate->increment('votes'); // Tambah nilai vote sebesar 1
        }

        // Simpan data voting
        Vote::create([
            'user_id' => $userId,
            'candidate_id' => $request->candidate_id,
        ]);
        

        return redirect()->Route('end.Tampil');
    }
    public function tampilanAkhir(){
        return view('end');
    }
}

