<?php

namespace Action;

use Illuminate\Support\Facades\Validator;

trait ManagerAction
{
    /**
     * @param BaseAction $action
     * @return ResultAction
     */
    public function handle(BaseAction $action): ResultAction
    {
        $validator = Validator::make($action->data(), $action->rules(), $action->messages());

        if ($validator->fails()) {
            return new ResultAction([], $validator->errors()->messages());
        }

        return $action->run();
    }
}
