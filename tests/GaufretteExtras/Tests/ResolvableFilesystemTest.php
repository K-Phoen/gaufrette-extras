<?php

namespace GaufretteExtras\Tests;

use GaufretteExtras\ResolvableFilesystem;


/**
 * @author Kévin Gomez <contact@kevingomez.fr>
 */
class ResolvableFilesystemTest extends \PHPUnit_Framework_TestCase
{
    public function testIsValidFilesystem()
    {
        $adapter = $this->getMock('\Gaufrette\Adapter');
        $fs = new ResolvableFilesystem($adapter);

        $this->assertInstanceof('\Gaufrette\Filesystem', $fs);
    }

    /**
     * @expectedException LogicException
     */
    public function testResolveFailsWithNoValidAdapter()
    {
        $adapter = $this->getMock('\Gaufrette\Adapter');
        $fs = new ResolvableFilesystem($adapter);

        $fs->resolve('foo');
    }

    public function testResolve()
    {
        $adapter = $this->getMockBuilder('\GaufretteExtras\Adapter\ResolvableAdapter')
                        ->disableOriginalConstructor()
                        ->getMock();
        $fs = new ResolvableFilesystem($adapter);

        $adapter->expects($this->once())
            ->method('resolve')
            ->with($this->equalTo('foo'))
            ->will($this->returnValue('resolved'));

        $this->assertSame('resolved', $fs->resolve('foo'));
    }
}
