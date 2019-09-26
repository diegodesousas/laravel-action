<?php

namespace Test\Demo\Http\Controller;

use Action\BaseRequestAction;
use Action\ControllerActionHandler;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Test\Demo\Actions\DemoAction;

class AcmeController extends Controller
{
    use ControllerActionHandler;

    /**
     * @param DemoAction $action
     * @return JsonResponse
     */
    public function list(DemoAction $action): JsonResponse
    {
        return $this->handle($action);
    }
}
