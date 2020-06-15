<?php


namespace EasySwoole\HttpAnnotation\Annotation;


class MethodAnnotation
{
    /** @var string */
    protected $methodName;
    /** @var \ReflectionMethod */
    protected $methodReflection;
    protected $annotation = [];

    function __construct(string $methodName)
    {
        $this->methodName = $methodName;
    }

    public function getMethodName(): string
    {
        return $this->methodName;
    }

    public function getMethodReflection(): \ReflectionMethod
    {
        return $this->methodReflection;
    }

    public function setMethodReflection(\ReflectionMethod $methodReflection): void
    {
        $this->methodReflection = $methodReflection;
    }

    public function getAnnotation(): array
    {
        return $this->annotation;
    }

    public function setAnnotation(array $annotation): void
    {
        $this->annotation = $annotation;
    }
}