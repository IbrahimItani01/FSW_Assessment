<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class Projects extends Controller
{
    public function getAll()
    {
        $projects = Project::all();
        
        if ($projects->isEmpty()) {
            return response()->json([
                'status' => 'failed',
                'message' => 'No projects found'
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'projects' => $projects
        ], 200);
    }
}
