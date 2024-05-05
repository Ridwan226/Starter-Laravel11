<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{


  public function viewDashboardNew()
  {
    if (auth()->user()->hasRole('Developer')) {
      return redirect('administrator/dashboard');
    } else if (auth()->user()->hasRole('Admin')) {
      return redirect('administrator/dashboard');
    } else {
      return redirect('/');
    }
  }

  public function viewDashboard()
  {
    return view('admin.dashboard');
  }
}
