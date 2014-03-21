<?php

namespace Afa\DIContainer;

interface IProvider
{
    /**
     * @param IContainer $container
     */
    public function register(IContainer $container);
}