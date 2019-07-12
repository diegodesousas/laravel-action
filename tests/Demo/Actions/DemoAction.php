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
        $data = [
            'body' => [
                'hello' => 'World',
                'dex' => 'dex'
            ],
            'result' => true,
        ];

        return new ResultAction($data);
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

    /**
     * @return array
     */
    public function messages(): array
    {
        return [];
    }
}
