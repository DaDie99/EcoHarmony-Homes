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
        $data = [
            'companyName' => $this->request->getPost('companyName'),
            'contactNumber' => $this->request->getPost('contactNumber'),
        ];

        if ($model->update($userId, $data)) {
            return redirect()->to('/home/dashboard')->with('message', 'Account details updated successfully.');
        } else {
            return redirect()->back()->with('errors', 'Failed to update account details.');
        }
    }
}
