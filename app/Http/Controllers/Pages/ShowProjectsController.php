<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Inertia\Inertia;

class ShowProjectsController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('Projects', [
            'projects' => Project::active()->get()
        ]);
    }
}