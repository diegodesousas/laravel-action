<?php

namespace Test;

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
            'hello' => 'World',
            'dex' => 'dex'
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
}