<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $role = $request->user()->role;

        return match ($role) {
            'admin' => view('dashboard.admin'),
            'organisateur' => view('dashboard.organisateur'),
            default => view('dashboard.participant'),
        };
    }
}
