<?php

namespace Test;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use Orchestra\Testbench\TestCase;

class BaseActionTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        Route::post('/test', [
            'as' => 'test',
            'uses' => 'Test\Demo\Http\Controller\AcmeController@list'
        ]);
    }

    public function testSuccess()
    {
        $data = [
            'body' => [
                'hello' => 'World',
                'dex' => 'dex'
            ],
            'result' => true,
        ];

        $uri = route('test', [], false);

        $response = $this->post($uri, $data);

        $response
            ->assertOk()
            ->assertJson([
                'body' => [
                    'hello' => 'World',
                    'dex' => 'dex'
                ],
                'result' => true,
            ]);
    }

    public function testFails()
    {
        $data = [];

        $uri = route('test', [], false);

        $response = $this->post($uri, $data);

        $response
            ->assertStatus(Response::HTTP_UNPROCESSABLE_ENTITY)
            ->assertExactJson([
                'body.hello' => [
                    'The body.hello field is required.'
                ],
                'body.dex' => [
                    'The body.dex field is required.'
                ],
                'result' => [
                    'The result field is required.'
                ]
            ]);
    }
}