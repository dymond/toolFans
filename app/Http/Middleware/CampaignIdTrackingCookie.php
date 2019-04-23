<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cookie;

class CampaignIdTrackingCookie
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $campaignID = $request->input('cid');
        if ($campaignID) {
            Cookie::queue(
                'campaign_id',
                $campaignID,
                1440,
                null,
                null,
                null,
                false
            );
        }

        return $next($request);
    }
}
