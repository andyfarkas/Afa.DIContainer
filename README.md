Afa.DIContainer
===============

Simple dependency injection container supporting autowiring. Using the container is super simple. To resolve a type just
ask for it:

``` php
class A {}

class B
{
    public function __construct(A $a) {}
}

class C
{
    public function __construct(B $b) {}
}

$container = new \Afa\DIContainer\Container();
$c = $container->resolve('C');
```

If you want to work with interfaces or abstract classes you need to bind them to concrete implementation.

``` php
interface I{}

class A implements I {}

class B
{
    public function __construct(I $i) {}
}

$container = new \Afa\DIContainer\Container();
$container->bindTypeTo('I', 'A');
$b = $container->resolve('B');
```
