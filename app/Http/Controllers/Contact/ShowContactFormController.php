<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Inertia\Inertia;

class ShowContactFormController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('Contact');
    }
}