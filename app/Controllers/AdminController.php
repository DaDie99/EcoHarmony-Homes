<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ServiceModel;
use App\Models\ProjectModel;
use App\Models\FeedbackModel;
use CodeIgniter\Controller;

class AdminController extends BaseController
{
    protected $userModel;
    protected $serviceModel;
    protected $projectModel;
    protected $feedbackModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->serviceModel = new ServiceModel();
        $this->projectModel = new ProjectModel();
        $this->feedbackModel = new FeedbackModel();
    }

    public function index()
    {
        // Ensure only admin can access this page
        if (!session()->get('is_admin')) {
            return redirect()->to('/home/dashboard')->with('error', 'Access Denied');
        }

        // Fetch data for the admin dashboard
        $data = [
            'users' => $this->userModel->findAll(),
            'services' => $this->serviceModel->findAll(),
            'projects' => $this->projectModel->findAll(),
            'feedbacks' => $this->feedbackModel->findAll(),
        ];

        // Load the admin dashboard view
        return view('admin/dashboard', $data);
    }

    // Method to delete a user
    public function deleteUser($id)
    {
        if (session()->get('is_admin')) {
            $this->userModel->delete($id);
            return redirect()->to('/admin')->with('message', 'User deleted successfully.');
        } else {
            return redirect()->to('/home/dashboard')->with('error', 'Access Denied');
        }
    }

    // Method to delete a project
    public function deleteProject($id)
    {
        if (session()->get('is_admin')) {
            $this->projectModel->delete($id);
            return redirect()->to('/admin')->with('message', 'Project deleted successfully.');
        } else {
            return redirect()->to('/home/dashboard')->with('error', 'Access Denied');
        }
    }

    // Similar methods for deleting services and feedbacks can be added here
}
