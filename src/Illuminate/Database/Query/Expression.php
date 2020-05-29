<?php

namespace Illuminate\Database\Query;

class Expression
{
    /**
     * The value of the expression.
     *
     * @var mixed
     */
    protected $value;

    /**
     * The bindings for this expression
     *
     * @var array
     */
    protected $bindings;

    /**
     * Create a new raw query expression.
     *
     * @param mixed $value
     * @param array $bindings
     */
    public function __construct($value, ...$bindings)
    {
        $this->value = $value;
        $this->bindings = $bindings;
    }

    /**
     * Get the value of the expression.
     *
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return array
     */
    public function getBindings()
    {
        return $this->bindings;
    }

    /**
     * Get the value of the expression.
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->getValue();
    }
}
