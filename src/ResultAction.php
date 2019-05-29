<?php

namespace Action;

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
     * ResultAction constructor.
     * @param $isOk
     * @param $errors
     */
    public function __construct(bool $isOk, array $errors)
    {
        $this->isOk = $isOk;
        $this->errors = $errors;
    }

    /**
     * @return bool
     */
    public function isOk(): bool
    {
        return $this->isOk;
    }
}
