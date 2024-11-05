<?php

namespace App\Controllers;

use App\Models\FeedbackModel;

class FeedbackController extends BaseController
{
    public function index()
    {
        $feedbackModel = new FeedbackModel();
        $feedbacks = $feedbackModel->orderBy('created_at', 'DESC')->findAll(5);

        // Debugging: output the feedbacks array
        echo "<pre>";
        print_r($feedbacks);
        echo "</pre>";
        die();  // Stop script execution here temporarily

        return view('homepage', ['feedbacks' => $feedbacks]);
    }

    public function submit()
    {
        $feedbackModel = new FeedbackModel();

        // Validate the form input
        $validation = \Config\Services::validation();
        $validation->setRules([
            'name' => 'required|min_length[3]|max_length[100]',
            'feedback' => 'required|min_length[5]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Insert feedback into the database
        $feedbackModel->insert([
            'name' => $this->request->getPost('name'),
            'feedback' => $this->request->getPost('feedback')
        ]);

        return redirect()->to('/')->with('message', 'Thank you for your feedback!');
    }

    public function display()
    {
        $feedbackModel = new FeedbackModel();
        $feedbacks = $feedbackModel->orderBy('created_at', 'DESC')->findAll(5);
        return view('homepage', ['feedbacks' => $feedbacks]);
    }
}
