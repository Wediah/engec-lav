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
            'firm' => 'required|max:255',
            'type' => 'required|max:255',
            'status' => 'required|max:255',
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
            'firm' => $validatedData['firm'],
            'type' => $validatedData['type'],
            'status' => $validatedData['status'],
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

    public function show($slug)
    {
        $project = projects::with('projectImages')->where('slug', $slug)->first();

        return view('show', compact('project'));
    }

    public function dash()
    {
        $projects = projects::with('projectImages')->get();

        return view('dash', compact('projects'));
    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function delete($id)
    {
        $project = projects::findOrFail($id);

        $project->delete();

        return redirect()->intended(route('dashboard', absolute: false));
    }
}
