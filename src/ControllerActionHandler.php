<?php

namespace Action;

use Illuminate\Http\JsonResponse;

trait ControllerActionHandler
{
    use ManagerAction;

    /**
     * @param BaseAction $action
     * @return JsonResponse
     */
    public function response(BaseAction $action): JsonResponse
    {
        $result = $this->handle($action);

        if ($result->isOk()) {
            return new JsonResponse($result->data());
        }

        return new JsonResponse($result->errors(), $result->errorCode());
    }
}