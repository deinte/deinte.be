<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectListResource;
use App\Models\Project;
use Inertia\Inertia;

class ShowProjectsController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('Projects', [
            'projects' => ProjectListResource::collection(Project::active()->get())->all(),
        ]);
    }
}