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

    public function getData($id)
    {
        $project = Project::find($id);

        if (!$project) {
            return response()->json([
                'status' => 'failed',
                'message' => 'Project not found'
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'project' => $project
        ], 200);
    }

    public function create(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $project = Project::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Project created successfully',
            'project' => $project
        ], 201);
    }

}
