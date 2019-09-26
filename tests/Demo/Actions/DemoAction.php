<?php

namespace Test\Demo\Actions;

use Action\BaseRequestAction;
use Action\ResultAction;

class DemoAction extends BaseRequestAction
{
    /**
     * @return mixed
     */
    public function run(): ResultAction
    {
        return new ResultAction($this->data());
    }

    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            'body.hello' => [
                'required'
            ],
            'body.dex' => [
                'required'
            ],
            'result' => [
                'required',
                'boolean'
            ]
        ];
    }
}
