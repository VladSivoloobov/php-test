<?php

namespace App\Controllers;

use App\Models\CommentModel;

class Comments extends BaseController
{
  public function index()
  {
    $model = new CommentModel();
    $data["comments"] = $model->findAll();
  }
}
