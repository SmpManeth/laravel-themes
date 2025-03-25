<?php

// app/Http/Middleware/SetTheme.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SetTheme
{
    public function handle(Request $request, Closure $next): mixed
    {
        $theme = session('theme', 'default');
        Log::info("Active theme from middleware: $theme");
        view()->share('activeTheme', $theme);
        return $next($request);
    }
}


