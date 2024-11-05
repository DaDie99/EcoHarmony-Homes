<?php

namespace App\Controllers;

use App\Models\ServiceModel;
use App\Models\FeedbackModel;
use App\Models\ProjectModel;

class HomeController extends BaseController
{
    private $serviceMapping = [
        1 => 'Property',
        2 => 'Material Supplier',
        3 => 'Construction',
        4 => 'Planning & Design',
        5 => 'Architecture Design',
        6 => 'Interior Design',
        7 => 'Fixing & Support',
        8 => 'Painting',
        9 => 'Garden Design',
        10 => 'Furniture',
        11 => 'Electrics',
        12 => 'Dream Homes',
    ];

    protected $serviceModel;
    protected $feedbackModel;
    protected $projectModel;

    public function __construct()
    {
        // Load models
        $this->serviceModel = new ServiceModel();
        $this->feedbackModel = new FeedbackModel();
        $this->projectModel = new ProjectModel();
    }

    public function index()
    {
        // Fetch 3 random projects directly from the ProjectModel
        $randomProjects = $this->projectModel->orderBy('RAND()')->findAll(3);

        // Fetch the latest 5 feedback entries
        $feedbacks = $this->feedbackModel->orderBy('created_at', 'DESC')->findAll(5);

        // Pass both random projects and feedbacks to the homepage view
        return view('homepage', [
            'randomProjects' => $randomProjects,
            'feedbacks' => $feedbacks,
        ]);
    }


    public function dashboard()
    {
        // Check if the user is logged in
        if (!session()->get('logged_in')) {
            return redirect()->to('/login')->with('error', 'Please log in to access the dashboard.');
        }

        // Retrieve user data from session
        $user = [
            'ownerName' => session()->get('ownerName'),
            'email' => session()->get('email'),
            'companyName' => session()->get('companyName'),
            'contactNumber' => session()->get('contactNumber'),
            'created_at' => session()->get('created_at'),
        ];

        // Fetch services created by the logged-in user
        $userId = session()->get('user_id');
        $userServices = $this->serviceModel->where('user_id', $userId)->findAll();

        // Prepare data for the view
        $data = [
            'user' => $user,
            'serviceMapping' => $this->serviceMapping,
            'services' => $userServices,
        ];

        // Load the dashboard view
        return view('home/dashboard', $data);
    }
}
