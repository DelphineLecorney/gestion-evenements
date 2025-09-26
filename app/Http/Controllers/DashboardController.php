<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $role = $request->user()->role;

        return match ($role) {
            'admin' => view('admin.dashboard'),
            default => view('user.dashboard'),
        };
    }
}
