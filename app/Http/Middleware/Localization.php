<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

final class Localization
{
    public function handle(Request $request, Closure $next): Response
    {
        $locale = config('app.locale');
        if ($request->session()->has('locale')) {
            $locale = $request->session()->get('locale');
        }

        app()->setLocale($locale);

        return $next($request);
    }
}
