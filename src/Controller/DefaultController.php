<?php

namespace App\Controller;

use App\Model\Bar;
use App\Model\Foo;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class DefaultController
{
    /**
     * @Route("/", name="default")
     *
     * @param SerializerInterface $serializer
     *
     * @return Response
     */
    public function index(SerializerInterface $serializer): Response
    {
        $foo = new Foo('foo name');

        $foo->bars[] = new Bar('bar 1');
        $foo->bars[] = new Bar('bar 2');

        return new Response($serializer->serialize($foo, 'xml'));
    }
}
