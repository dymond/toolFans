<?php

namespace App\Http\Controllers;

use Newsletter;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        Newsletter::subscribeOrUpdate($request->input('email'), [], 'subscribers',
            ['interests' => [config('newsletter.lists.subscribers.interest_id') => true]]);

        return back()->with('success', true);
    }
}
