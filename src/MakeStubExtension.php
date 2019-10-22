<?php

declare(strict_types=1);

namespace Cdn77\TestUtils\PHPStan;

use PhpParser\Node\Expr\ClassConstFetch;
use PhpParser\Node\Expr\MethodCall;
use PhpParser\Node\Name\FullyQualified;
use PHPStan\Analyser\Scope;
use PHPStan\Reflection\MethodReflection;
use PHPStan\Type\DynamicMethodReturnTypeExtension;
use PHPStan\Type\ObjectType;
use PHPStan\Type\Type;
use PHPUnit\Framework\TestCase;
use function assert;

final class MakeStubExtension implements DynamicMethodReturnTypeExtension
{
    public function getClass() : string
    {
        return TestCase::class;
    }

    public function isMethodSupported(MethodReflection $methodReflection) : bool
    {
        return $methodReflection->getName() === 'makeStub';
    }

    public function getTypeFromMethodCall(
        MethodReflection $methodReflection,
        MethodCall $methodCall,
        Scope $scope
    ) : Type {
        $classConstFetch = $methodCall->args[0]->value;
        if (! $classConstFetch instanceof ClassConstFetch) {
            return new ObjectType('object');
        }

        $fullyQualified = $classConstFetch->class;
        assert($fullyQualified instanceof FullyQualified);

        return new ObjectType($fullyQualified->toCodeString());
    }
}
