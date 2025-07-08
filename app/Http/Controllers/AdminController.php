<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Blog;
use App\Models\Banner;
use App\Models\Proposal;
use App\Models\Profile;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;

class AdminController extends BaseController
{
    public function dashboard()
    {
        $banners = Banner::with('user')->latest()->get();
        $teams = User::with('banner')->where('role', 'user')->get(); // ambil semua user yang role-nya user
        $blogs = Blog::with('user')->latest()->get(); // ambil semua blog + relasi user

        return view('admin.dashboard', compact('teams', 'blogs', 'banners'));
    }

    public function banner()
    {
        return $this->hasOne(Banner::class);
    }

    public function blog()
    {
        // Ambil semua blog dengan user pembuatnya
        $blogs = Blog::with('user')->latest()->get();

        return view('admin.blog', compact('blogs'));
    }

    public function showProposals()
    {
        $usersWithProposals = User::whereNotNull('proposal_path')->get();
        return view('admin.proposals', compact('usersWithProposals'));
    }

    public function showProfiles()
    {
        $usersWithProfiles = User::whereNotNull('profil_startup_path')->get();
        return view('admin.profiles', compact('usersWithProfiles'));
    }

    public function downloadUserFile($id, $type)
    {
        $user = User::findOrFail($id);

        if ($type === 'proposal') {
            if (!$user->proposal_path) abort(404, 'File proposal tidak ditemukan');
            return Storage::disk('public')->download(
                $user->proposal_path,
                $user->proposal_original_name ?? 'proposal.pdf'
            );
        }
        elseif ($type === 'profil_startup') {
            if (!$user->profil_startup_path) abort(404, 'File profil startup tidak ditemukan');
            return Storage::disk('public')->download(
                $user->profil_startup_path,
                $user->profil_startup_original_name ?? 'profil_startup.pdf'
            );
        }

        abort(404, 'Tipe file tidak valid');
    }

    public function toggleProposal($id, $action)
    {
        $user = User::findOrFail($id);

        if ($action === 'approve') {
            $user->proposal_approved = 1;
        } elseif ($action === 'unapprove') {
            $user->proposal_approved = 0;
        } else {
            return redirect()->back()->with('error', 'Aksi tidak valid.');
        }

        $user->save();

        return redirect()->back()->with('success', 'Status proposal diperbarui.');
    }


}
