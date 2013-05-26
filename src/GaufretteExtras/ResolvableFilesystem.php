<?php

namespace GaufretteExtras;

use \Gaufrette\Filesystem;


class ResolvableFilesystem extends Filesystem
{
    /**
     * Gets the URL of the given key.
     *
     * @param string $key
     *
     * @return string The URL.
     * @author Kévin Gomez <contact@kevingomez.fr>
     */
    public function resolve($key)
    {
        if (!($this->getAdapter() instanceof ResolverInterface)) {
            throw new \LogicException('This adapter can not resolve keys');
        }

        return $this->getAdapter()->resolve($key);
    }
}
