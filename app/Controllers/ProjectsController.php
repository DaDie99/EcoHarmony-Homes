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
        // Logic for creating a new project
        // This could include rendering a form and handling the submission
    }

    public function edit($id)
    {
        // Logic for editing an existing project
        // This could include fetching the project by ID and rendering an edit form
    }

    public function delete($id)
    {
        // Logic for deleting a project by ID
        $model = new ProjectModel();
        $model->delete($id);
        
        return redirect()->to('home/projects'); // Redirect after deletion
    }
}
