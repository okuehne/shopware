<?php

namespace Okuehne\Shopware;

interface StoreInterface
{
    public function getHost(): string;

    public function getClientId(): string;

    public function getClientSecret(): string;
}