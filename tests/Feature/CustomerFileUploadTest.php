<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class CustomerFileUploadTest extends TestCase
{
    /**
     * Test If public Route Exists.
     *
     * @return void
     */
    public function testUploadRouteExists()
    {
        $response = $this->post('/api/file/upload');

        $response->assertStatus(200);
    }

    public function testUploadRouteReturnErrorOnGetRequest()
    {
        $response = $this->get('/api/file/upload');

        $response->assertStatus(405);
    }

    public function testImageUpload()
    {
        Storage::fake('s3');

        $response = $this->json('POST', '/api/file/upload', [
            'file' => UploadedFile::fake()->image('testFile.jpg'),
        ]);

        // get file name from S3 url
        $re = '/[^\/\\\\&\?]+\.\w{3,4}(?=([\?&].*$|$))/m';
        $str = $response->original[0]['url'];
        preg_match_all($re, $str, $matches, PREG_SET_ORDER, 0);

        // Assert the file was stored...
        Storage::disk('s3')->assertExists('uploads/'.$matches[0][0]);

        // Assert a file does not exist...
        Storage::disk('s3')->assertMissing('missing.jpg');
    }
}
