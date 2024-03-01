<?php

namespace Okuehne\Shopware;

interface StoreInterface
{
    public function getClientHost(): string;

    public function getClientId(): string;

    public function getClientSecret(): string;
}