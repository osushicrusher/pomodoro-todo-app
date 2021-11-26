<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoldersController extends Controller
{
  public function checkExist(Request $request)
  {
      $theFolder = Folder::where('id', $request->folder_id)
                          ->where('body', $request->folder_body)
                          ->get()
                          ->sortByDesc('created_at');
      return $theFolder;
  }
}
