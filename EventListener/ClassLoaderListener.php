<?php

namespace Overblog\GraphQLBundle\EventListener;

use Overblog\GraphQLBundle\Generator\TypeGenerator;

final class ClassLoaderListener
{
    private $typeGenerator;

    public function __construct(TypeGenerator $typeGenerator)
    {
        $this->typeGenerator = $typeGenerator;
    }

    public function load()
    {
        $this->typeGenerator->loadClasses();
    }
}
