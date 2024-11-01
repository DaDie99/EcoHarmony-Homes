<?php
namespace App\Controllers;

use App\Models\CommentModel;

class CommentController extends BaseController
{
    public function index()
    {
        $commentModel = new CommentModel();
        $data['comments'] = $commentModel->getRandomComments();
        
        return view('your_view_file', $data);
    }

    public function addComment()
    {
        $commentModel = new CommentModel();

        $name = $this->request->getPost('name');
        $comment = $this->request->getPost('comment');

        // Save the comment
        $commentModel->save(['name' => $name, 'comment' => $comment]);

        // Redirect back to the same page
        return redirect()->to('/your-page-url');
    }
}
