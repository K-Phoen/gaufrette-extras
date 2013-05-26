<?php

namespace GaufretteExtras;


interface ResolverInterface
{
    /**
     * Gets the URL of the given key.
     *
     * @param string $key
     *
     * @return string The URL.
     * @author Kévin Gomez <contact@kevingomez.fr>
     */
    public function resolve($key);
}
