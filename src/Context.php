<?php

namespace Okuehne\Shopware;

class Context
{
    public function __construct(
        private readonly StoreInterface $store
    )
    {
    }
}