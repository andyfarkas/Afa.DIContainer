Afa.DIContainer
===============
[![Build Status](https://travis-ci.org/andyfarkas/Afa.DIContainer.png?branch=master)](https://travis-ci.org/andyfarkas/Afa.DIContainer) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/andyfarkas/Afa.DIContainer/badges/quality-score.png?s=b007c93f2d94816ddb140d37b1903ee8773f9ce0)](https://scrutinizer-ci.com/g/andyfarkas/Afa.DIContainer/) [![Code Coverage](https://scrutinizer-ci.com/g/andyfarkas/Afa.DIContainer/badges/coverage.png?s=5abfd48ef6d6605cdba39dc45077b3abc000e105)](https://scrutinizer-ci.com/g/andyfarkas/Afa.DIContainer/)


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
