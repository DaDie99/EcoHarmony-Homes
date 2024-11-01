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
        $email = \Config\Services::email();

        // Set up email
        $email->setFrom('your_email@example.com', 'EcoHarmony Homes');
        $email->setTo('admin@example.com'); // Admin email address
        $email->setSubject('Contact Form Submission');

        // Compose the message
        $email->setMessage("Name: " . $this->request->getPost('name') . "\n" .
                           "Email: " . $this->request->getPost('email') . "\n\n" .
                           "Message:\n" . $this->request->getPost('message'));

        // Send email and check if it was successful
        if ($email->send()) {
            return redirect()->to('contact')->with('success', 'Your message has been sent successfully!');
        } else {
            return redirect()->to('contact')->with('error', 'Failed to send your message. Please try again later.');
        }
    }
}
