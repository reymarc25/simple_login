<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // 1. Bilangin kung ilan ang registered users sa database
        $totalUsers = User::count();

        // 2. Kunin ang huling 5 users na nag-register para sa table
        $recentUsers = User::latest()->take(5)->get();

        // 3. I-pasa ang data sa dashboard view
        return view('dashboard', compact('totalUsers', 'recentUsers'));
    }
}