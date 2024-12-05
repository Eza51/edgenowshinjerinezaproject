<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (session('admin_logged_in')) {
            return $next($request);
        }
        return redirect()->route('admin.login.form');
    }
}
