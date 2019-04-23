<?php

namespace Tests\Feature;

use Tests\TestCase;

class FormRequestTest extends TestCase
{
    public function testIfRouteExists()
    {
        $response = $this->post('/api/form/submit');

        $response->assertStatus(302);
    }

    public function testIfRouteReturnErrorOnGetRequest()
    {
        $response = $this->get('/api/form/submit');

        $response->assertStatus(405);
    }
}
