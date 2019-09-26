<?php

namespace Action;

abstract class BaseAction
{
    protected $data;

    /**
     * @return array
     */
    public function data(): array
    {
        return $this->data;
    }

    /**
     * @param array $data
     * @return BaseAction
     */
    public function setData(array $data): self
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @return array
     */
    public function messages(): array
    {
        return [];
    }

    /**
     * @return mixed
     */
    abstract public function run(): ResultAction;

    /**
     * @return array
     */
    abstract public function rules(): array;
}
