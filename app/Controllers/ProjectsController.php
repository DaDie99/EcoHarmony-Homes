<?php

namespace App\Controllers;

use App\Models\ProjectModel;

class ProjectsController extends BaseController
{
    public function index()
    {
        // Load the ProjectModel
        $model = new ProjectModel();

        // Fetch all projects
        $projects = $model->findAll();

        // Pass the projects to the view
        return view('home/projects', ['projects' => $projects]);
    }

    public function create()
    {
        if ($this->request->getMethod() === 'post') {
            // Retrieve form data
            $title = $this->request->getPost('title');
            $description = $this->request->getPost('description'); // Ensure this is capturing the description

            // Handle image uploads
            $images = [];
            if ($this->request->getFiles()) {
                $files = $this->request->getFiles('images');
                foreach ($files['images'] as $file) {
                    if ($file->isValid() && !$file->hasMoved()) {
                        // Move the uploaded file to the intended directory (make sure this path is correct)
                        $file->move(FCPATH . 'uploads/services'); // Adjusted path to services
                        $images[] = $file->getName(); // Get the uploaded file name
                    }
                }
            }

            // Prepare data for insertion
            $data = [
                'title' => $title,
                'description' => $description, // Ensure description is included here
                'images' => json_encode($images), // Store images as JSON
            ];

            // Insert data into the database
            $model = new ProjectModel();
            if ($model->insert($data)) {
                return redirect()->to('projects')->with('success', 'Project created successfully!');
            } else {
                return redirect()->back()->with('error', 'Failed to create project.');
            }
        }

        return view('projects/create');
    }


    public function edit($id)
    {
        // Logic for editing an existing project
        // Fetch the project by ID and render an edit form
        $model = new ProjectModel();
        $project = $model->find($id);

        if (!$project) {
            return redirect()->to('projects')->with('error', 'Project not found.');
        }

        return view('projects/edit', ['project' => $project]);
    }

    public function update($id)
    {
        if ($this->request->getMethod() === 'post') {
            // Retrieve form data
            $title = $this->request->getPost('title');
            $description = $this->request->getPost('description');

            // Prepare data for updating
            $data = [
                'title' => $title,
                'description' => $description,
            ];

            // Update the project in the database
            $model = new ProjectModel();
            if ($model->update($id, $data)) {
                return redirect()->to('projects')->with('success', 'Project updated successfully!');
            } else {
                return redirect()->back()->with('error', 'Failed to update project.');
            }
        }

        // Render the edit form if not a POST request
        return redirect()->to('projects');
    }

    public function delete($id)
    {
        // Logic for deleting a project by ID
        $model = new ProjectModel();
        $model->delete($id);

        return redirect()->to('home/projects'); // Redirect after deletion
    }
    public function details($id)
    {
        $model = new ProjectModel();
        $project = $model->find($id); // Fetch project details by ID

        if ($project) {
            $project['images'] = json_decode($project['images'], true); // Decode images
            return view('home/project_details', $project); // Render a view with project details
        } else {
            return json_encode(['error' => 'Project not found.']);
        }
    }
}
