<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Email\Email;

class ContactController extends Controller
{
    public function index()
    {
        return view('home/contact'); // Load the contact form view
    }

    public function send()
    {
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $message = $this->request->getPost('message');

        // Set up email
        $emailService = \Config\Services::email();
        $emailService->setFrom('your_email@example.com', 'EcoHarmony Homes');
        $emailService->setTo('admin@example.com'); // Admin email address
        $emailService->setSubject('Contact Form Submission');
        
        // Compose the message
        $emailService->setMessage("Name: $name\nEmail: $email\n\nMessage:\n$message");

        // Send email and check if it was successful
        if ($emailService->send()) {
            return redirect()->to('contact')->with('success', 'Your message has been sent successfully!');
        } else {
            return redirect()->to('contact')->with('error', 'Failed to send your message. Please try again later.');
        }
    }
}
