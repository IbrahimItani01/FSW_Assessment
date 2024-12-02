<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Users extends Controller
{
    public function getAll()
    {
        $users = User::all();
        if ($users->isNotEmpty()) {
            return response()->json([
                'status' => 'success',
                'users' => $users
            ], 200);
        }
        return response()->json([
            'status' => 'failed',
            'message' => "Not found"
        ], 404);
    }

}
