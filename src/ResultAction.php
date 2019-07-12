<?php

namespace Action;

use Illuminate\Http\Response;

class ResultAction
{
    /**
     * @var bool
     */
    private $isOk;

    /**
     * @var array
     */
    private $errors;

    /**
     * @var array
     */
    private $data;

    /**
     * ResultAction constructor.
     * @param array $data
     * @param array $errors
     */
    public function __construct(array $data, array $errors = [])
    {
        $this->isOk = count($errors) === 0;
        $this->errors = $errors;
        $this->data = $data;
    }

    /**
     * @return bool
     */
    public function isOk(): bool
    {
        return $this->isOk;
    }

    /**
     * @return array
     */
    public function data(): array
    {
        return $this->data;
    }

    /**
     * @return array
     */
    public function errors(): array

    {
        return $this->errors;
    }

    /**
     * @return int
     */
    public function errorCode(): int
    {
        return Response::HTTP_UNPROCESSABLE_ENTITY;
    }
}
