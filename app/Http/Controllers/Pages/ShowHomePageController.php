<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class ShowHomePageController extends Controller
{
    public function __invoke(Request $request): Response
    {
        return Inertia::render('Home');
    }
}
