<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    protected $rootView = 'layouts.app';

    public function share(Request $request): array
    {
        return array_merge(parent::share($request), [
            'logo' => asset('img/logo-blauw-800x.png'),
            'menus' => [
                'main' => nova_get_menu_by_slug('main', $locale = null),
            ],
        ]);
    }
}
