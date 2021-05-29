<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PagesController extends Controller
{
  public function __construct()
  {
    Inertia::setRootView('layouts.default');
  }

  public function home()
  {
    return Inertia::render('pages.home', [
      'id' => 1,
      'headline' => 'Hello'
    ]);
  }
}
