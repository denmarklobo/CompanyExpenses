<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        // Fetch all admins
        $admins = Admin::all();
        return response()->json(['admins' => $admins]);
    }

    public function create()
    {
        // You may return a JSON response with a message indicating that creating admins is not supported via API
        return response()->json(['message' => 'Creating admins is not supported via API.'], 405);
    }

    public function store(Request $request)
    {
        // You may return a JSON response with a message indicating that creating admins is not supported via API
        return response()->json(['message' => 'Creating admins is not supported via API.'], 405);
    }

    // Add other controller methods for editing, updating, and deleting admins
}
