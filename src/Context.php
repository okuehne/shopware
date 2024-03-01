<?php

namespace Okuehne\Shopware;

class Context
{
    private StoreInterface $store;

    public function __construct(
    )
    {
    }

    public function setStore(StoreInterface $store): void
    {
        $this->store = $store;
    }
}