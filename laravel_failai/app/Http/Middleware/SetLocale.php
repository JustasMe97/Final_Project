<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(Request): (Response|RedirectResponse) $next
     * @return Response|RedirectResponse
     */
    public function handle(Request $request, Closure $next): Response|RedirectResponse
    {
        // Nustatoma fallback lokalė
        app()->setFallbackLocale('lt');

        //Paimama sesijos lokalė, o jei jos nėra, paimama iš config/app.php
        $locale = $request->session()->get('lang', config('app.locale'));

        // Jei yra lang parametras, tai pakeičiama lokalė
        if ($request->has('lang')) {
            $locale = $request->get('lang');
            $request->session()->put('lang', $locale);
        }

        // Nustatoma lokalė
        app()->setLocale($locale);

        return $next($request);
    }
}

