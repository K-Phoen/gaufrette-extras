<?php

namespace GaufretteExtras\Tests\Resolver;

use GaufretteExtras\Resolver\PrefixResolver;


/**
 * @author Kévin Gomez <contact@kevingomez.fr>
 */
class PrefixResolverTest extends \PHPUnit_Framework_TestCase
{
    public function testResolve()
    {
        $resolver = new PrefixResolver('http://google.fr');
        $this->assertSame('http://google.fr/foo', $resolver->resolve('foo'));
    }
}
