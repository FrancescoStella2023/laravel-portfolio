<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view("projects.index", compact("projects"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("projects.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        if (empty($data['name']) || empty($data['category']) || empty($data['description'])) {
            return redirect()->route('projects.index');
        }

        $new_project = new Project();
        $new_project->name = $data['name'];
        $new_project->category = $data['category'];
        $new_project->description = $data['description'];

        $new_project->save();

        return redirect()->route('projects.show', $new_project);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view("projects.show", compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view("projects.edit", compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->all();

        if (empty($data['name']) || empty($data['category']) || empty($data['description'])) {
            return redirect()->route('projects.index');
        }

        $project->name = $data['name'];
        $project->category = $data['category'];
        $project->description = $data['description'];

        $project->save();

        return redirect()->route('projects.show', $project);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index');
    }
}
