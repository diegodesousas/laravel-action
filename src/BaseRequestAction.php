<?php

namespace Action;

use Illuminate\Http\Request;

abstract class BaseRequestAction extends BaseAction
{
    /**
     * BaseRequestAction constructor.
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->bindAll($request);
    }

    /**
     * @param Request $request
     */
    protected function bindAll(Request $request): void
    {
        $this->setData($request->all());
    }

    /**
     * @param Request $request
     */
    protected function bindJson(Request $request): void
    {
        $this->setData($request->json()->all());
    }
}