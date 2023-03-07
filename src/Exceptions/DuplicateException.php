<?php

namespace Bpuig\Subby\Exceptions;

class DuplicateException extends LaravelSubbyException
{
    protected $message;

    public function __construct($class, $relation)
    {
        $this->message = $this->getName($class) . ' is already exists in the relation ' . lcfirst($this->getName($relation));
    }

    public function getName($class)
    {
        $path = explode('\\', get_class($class));

        return array_pop($path);
    }
}
