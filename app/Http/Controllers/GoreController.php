<?php

namespace App\Http\Controllers;
use App\Models\User;

class GoreController extends Controller
{

    public function getGore()
    {
        $user = User::first();

        return $user->email;
    }

    public function save(Request $request)
    {
      $data = $request->user();
      $user = User::update($data);
      return $user;
    }
}
