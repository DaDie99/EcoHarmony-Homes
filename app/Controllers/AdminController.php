<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ServiceModel;
use App\Models\ProjectModel;
use App\Models\FeedbackModel;
use CodeIgniter\Controller;
use Config\Database;

class AdminController extends BaseController
{
    protected $userModel;
    protected $serviceModel;
    protected $projectModel;
    protected $feedbackModel;
    protected $db;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->serviceModel = new ServiceModel();
        $this->projectModel = new ProjectModel();
        $this->feedbackModel = new FeedbackModel();
        $this->db = Database::connect();
    }

    public function index()
    {
        if (!session()->get('is_admin')) {
            return redirect()->to('/home/dashboard')->with('error', 'Access Denied');
        }

        $data = [
            'users' => $this->userModel->findAll(),
            'services' => $this->serviceModel->findAll(),
            'projects' => $this->projectModel->findAll(),
            'feedbacks' => $this->feedbackModel->findAll(),
        ];

        return view('admin/dashboard', $data);
    }

    public function deleteUser($id)
    {
        if (!session()->get('is_admin')) {
            return redirect()->to('/home/dashboard')->with('error', 'Access Denied');
        }

        if ($this->userModel->find($id)) {
            $this->userModel->delete($id);
            return redirect()->to('/admin')->with('message', 'User deleted successfully.');
        } else {
            return redirect()->to('/admin')->with('error', 'User not found.');
        }
    }

    public function deleteProject($id)
    {
        if (!session()->get('is_admin')) {
            return redirect()->to('/home/dashboard')->with('error', 'Access Denied');
        }

        if ($this->projectModel->find($id)) {
            $this->projectModel->delete($id);
            return redirect()->to('/admin')->with('message', 'Project deleted successfully.');
        } else {
            return redirect()->to('/admin')->with('error', 'Project not found.');
        }
    }

    public function deleteService($id)
{
    if (!session()->get('is_admin')) {
        return redirect()->to('/home/dashboard')->with('error', 'Access Denied');
    }

    // Start a transaction to handle multiple deletions
    $this->db->transBegin();

    // Related tables that need their records deleted first
    $relatedTables = ['fixing_and_support', 'material_supplier', 'electrics', 'property'];
    
    foreach ($relatedTables as $table) {
        if ($this->db->tableExists($table)) {
            // Delete related entries in each table where `service_id` matches
            $this->db->table($table)->where('service_id', $id)->delete();
        }
    }

    // Now delete the main service entry
    if ($this->serviceModel->find($id)) {
        $this->serviceModel->delete($id);
    }

    // Check transaction status
    if ($this->db->transStatus() === FALSE) {
        $this->db->transRollback();
        return redirect()->to('/admin')->with('error', 'Failed to delete service due to a database error.');
    } else {
        $this->db->transCommit();
        return redirect()->to('/admin')->with('message', 'Service deleted successfully.');
    }
}




    public function deleteFeedback($id)
    {
        if (!session()->get('is_admin')) {
            return redirect()->to('/home/dashboard')->with('error', 'Access Denied');
        }

        if ($this->feedbackModel->find($id)) {
            $this->feedbackModel->delete($id);
            return redirect()->to('/admin')->with('message', 'Feedback deleted successfully.');
        } else {
            return redirect()->to('/admin')->with('error', 'Feedback not found.');
        }
    }
}
