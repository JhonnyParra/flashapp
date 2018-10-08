<?php

namespace App\Http\Controllers;

class DashboardController extends Controller {

  public function index() {
    $params = [
      'title' => 'welcome weee',
    ];

    return view('dashboard', $params);
  }

}