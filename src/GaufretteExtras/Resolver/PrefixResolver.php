<?php

namespace GaufretteExtras\Resolver;

use GaufretteExtras\ResolverInterface;


class PrefixResolver implements ResolverInterface
{
    protected $prefix;

    public function __construct($prefix)
    {
        $this->prefix = $prefix;
    }

    public function resolve($key)
    {
        return sprintf('%s/%s', $this->prefix, $key);
    }
}
