<?php

namespace App\Http\Middleware;

use App\Models\Order;
use Closure;
use Illuminate\Http\Request;

class DeleteTicketNoPay
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        foreach (Order::all() as $key => $value) {
            if (now()->toDateString() >= $value->DateTimeout && $value->status_pay == 1) {
                Order::find($value->id)->delete();
            }
        }
        return $next($request);
    }
}
