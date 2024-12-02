<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class Members extends Controller
{
    public function add(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'project_id' => 'required|exists:projects,id',
        ]);

        $member = Member::create([
            'user_id' => $validated['user_id'],
            'project_id' => $validated['project_id'],
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Member added to project successfully',
            'member' => $member
        ], 201);
    }

}
