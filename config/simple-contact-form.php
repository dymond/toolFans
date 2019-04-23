<?php

return [
    'to_address'      => env('SIMPLE_CONTACT_FORM_TO_ADDRESS'),
    'from_address'    => env('SIMPLE_CONTACT_FORM_FROM_ADDRESS'),
    'subject'         => env('SIMPLE_CONTACT_FORM_SUBJECT', 'Contact Form Request'),
    'success_message' => env('SIMPLE_CONTACT_SUCCESS_MESSAGE', 'Thanks for contacting us!'),

    // Store the Request info in Database
    'store_request'   => true,

    // Send Email
    'send_email'      => true,
];
