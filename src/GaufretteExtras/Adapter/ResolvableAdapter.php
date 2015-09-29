<?php

namespace GaufretteExtras\Adapter;

use Gaufrette\Adapter as AdapterInterface;
use GaufretteExtras\ResolverInterface;


class ResolvableAdapter implements AdapterInterface, ResolverInterface
{
    protected $adapter;
    protected $resolver;

    public function __construct(AdapterInterface $adapter, ResolverInterface $resolver)
    {
        $this->adapter = $adapter;
        $this->resolver = $resolver;
    }

    public function resolve($key)
    {
        return $this->resolver->resolve($key);
    }

    public function read($key)
    {
        return $this->adapter->read($key);
    }

    public function write($key, $content)
    {
        return $this->adapter->write($key, $content);
    }

    public function exists($key)
    {
        return $this->adapter->exists($key);
    }

    public function keys()
    {
        return $this->adapter->keys();
    }

    public function mtime($key)
    {
        return $this->adapter->mtime($key);
    }

    public function delete($key)
    {
        return $this->adapter->delete($key);
    }

    public function rename($sourceKey, $targetKey)
    {
        return $this->adapter->rename($sourceKey, $targetKey);
    }

    public function isDirectory($key)
    {
        return $this->adapter->isDirectory($key);
    }

    public function getOriginalAdapter()
    {
        return $this->adapter;
    }
}
