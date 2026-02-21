<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ClickModel;

class Projekt extends BaseController {

    public function index()
{
 if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        $clickModel = new ClickModel();

        $user_id = session()->get('user_id');

        $click = $clickModel
            ->where('user_id', $user_id)
            ->first();

        $data['count'] = $click['count'] ?? 0;
        $data['username'] = session()->get('username');

        return view('projekt_view', $data);
}

    public function click()
 {
  if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        $clickModel = new ClickModel();
        $user_id = session()->get('user_id');

        $click = $clickModel
            ->where('user_id', $user_id)
            ->first();

        if ($click) {
            $clickModel->update(
                $click['id'],
                ['count' => $click['count'] + 1]
            );
        } else {
            $clickModel->insert([
                'user_id' => $user_id,
                'count' => 1
            ]);
        }

        return redirect()->to('/');
 }
 public function login()
 {
  return view('login_view');
 }
 public function loginProcess()
 {
  $userModel = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $userModel
            ->where('username', $username)
            ->first();

        if ($user && $password === $user['password']) {

            session()->set([
                'user_id' => $user['id'],
                'username' => $user['username'],
                'logged_in' => true
            ]);

            return redirect()->to('/');
        }

        return redirect()->to('/login')
            ->with('error', 'Wrong login');
 }
 public function logout()
 {
  session()->destroy();

        return redirect()->to('/login');
 }
}
