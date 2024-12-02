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

    public function remove(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'project_id' => 'required|exists:projects,id',
        ]);

        $member = Member::where('user_id', $validated['user_id'])
                        ->where('project_id', $validated['project_id'])
                        ->first();

        if (!$member) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Member not found in the project'
            ], 404);
        }

        $member->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Member removed from project successfully'
        ], 200);
    }
}
