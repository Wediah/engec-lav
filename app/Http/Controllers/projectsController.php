<?php

namespace App\Http\Controllers;

use App\Models\projectImages;
use App\Models\projects;
use Cloudinary\Api\Exception\ApiError;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class projectsController extends Controller
{
    public function create()
    {
        return view('projects.create');
    }

    /**
     * @throws ApiError
     */
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'location' => 'required|max:255',
            'project_images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePaths = [];

        if ($request->hasFile('project_images')) {
            foreach ($request->file('project_images') as $key => $project_image) {
                $uploadedFileUrl = cloudinary()->upload($project_image->getRealPath())->getSecurePath();
                $imagePaths[] = $uploadedFileUrl;
            }
        }

        $projectData = [
            'name' => $validatedData['name'],
            'slug' => SlugService::createSlug(projects::class, 'slug', request('name')),
            'description' => $validatedData['description'],
            'start_date' => $validatedData['start_date'],
            'end_date' => $validatedData['end_date'],
            'location' => $validatedData['location'],
        ];

        $project = projects::create($projectData);

        foreach ($imagePaths as $imagePath) {
            projectImages::create([
                'project_id' => $project->id,
                'image_path' => $imagePath,
            ]);
        }

        return redirect()->back()->with('success', 'Project created successfully!');
    }
}