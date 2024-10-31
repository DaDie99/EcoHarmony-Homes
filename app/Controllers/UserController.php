<?php
namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class UserController extends Controller
{
    public function update()
    {
        $model = new UserModel();
        $userId = session()->get('user_id');

        if (!$userId) {
            return redirect()->to('/login')->with('error', 'Please log in to update your account.');
        }

        // Validation rules
        $validation = \Config\Services::validation();
        $validation->setRules([
            'companyName' => 'required|string|max_length[255]',
            'contactNumber' => 'required|numeric|min_length[8]|max_length[15]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Data for update
        $data = [
            'companyName' => $this->request->getPost('companyName'),
            'contactNumber' => $this->request->getPost('contactNumber'),
        ];

        // Update user details and refresh session data
        if ($model->update($userId, $data)) {
            // Fetch updated user information
            $updatedUser = $model->find($userId);
            session()->set('user_data', $updatedUser);

            return redirect()->to('/home/dashboard')->with('message', 'Account details updated successfully.');
        } else {
            return redirect()->back()->with('errors', 'Failed to update account details.');
        }
    }
}

