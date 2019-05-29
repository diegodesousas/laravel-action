<?php

namespace Test\Demo\Http\Controller;

use Action\BaseRequestAction;
use Illuminate\Routing\Controller;

class AcmeController extends Controller
{
    /**
     * @param BaseRequestAction $action
     * @return array
     */
    public function list(BaseRequestAction $action)
    {
        $result = $action->run();

        return [
            'body' => $action->data(),
            'result' => $result->isOk()
        ];
    }
}
