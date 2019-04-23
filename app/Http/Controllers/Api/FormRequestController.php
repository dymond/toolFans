<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use TJMPromos\FormRequestHandler\Models\FormRequest;

class FormRequestController extends Controller
{
    public function __construct(Request $request)
    {
        if ($request->get('recaptcha')) {
            $request->merge(['g-recaptcha-response' => $request->get('recaptcha')]);
        }
    }

    /**
     * Store Form Requests.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'                 => 'required',
            'email'                => 'required|email',
            'phone'                => 'required|phone:AUTO,US,BM,CA,VI,PR,GU,DO,BM',
            'g-recaptcha-response' => 'required|recaptcha',
        ]);
        /*COLLECT META DATA ON REQUEST USER*/
        $metaData = collect();
        $metaData->put('ip_address', $request->ip());
        $test = new FormRequest();
        $test->data = collect($request->all());
        $test->data->forget(['recaptcha', 'g-recaptcha-response', '_token']);
        $test->data->put('metadata', $metaData);
        $test->save();

        return response()->json([
            'success' => true,
            'message' => __('forms.quote_request.success'),
        ]);
    }
}
