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
            'logo' => [
                'color' => asset('img/logo-blauw-800x.png'),
                'white' => asset('img/logo-wit.png'),
            ],
            'menus' => [
                'main' => nova_get_menu_by_slug('main', $locale = null),
                'footer_main' => nova_get_menu_by_slug('footer_main', $locale = null),
                'footer_clients' => nova_get_menu_by_slug('footer_clients', $locale = null),
            ],
        ]);
    }
}
