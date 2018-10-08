<?php

namespace App\Http\Controllers;

class DashboardController extends Controller {

  public function index() {
    $params = [
      'title' => 'Flashapp | dashboard',
      'login' => FALSE,
    ];

    return view('dashboard', $params);
  }

}