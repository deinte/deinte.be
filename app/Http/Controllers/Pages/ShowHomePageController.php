<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ShowHomePageController extends Controller
{
    public function __invoke(Request $request): View
    {
        return view('pages.home');
    }
}
