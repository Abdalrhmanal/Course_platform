<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        $locale = $request->segment(1);

        // التحقق من أن القيمة ليست فارغة وأنها موجودة في المصفوفة
        if (!empty($locale) && is_array(config('app.locales')) && in_array($locale, config('app.locales'))) {
            App::setLocale($locale);
        }

        return $next($request);
    }
}
