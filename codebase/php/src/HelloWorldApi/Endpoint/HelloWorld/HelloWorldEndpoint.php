<?php

namespace HelloWorldApi\Endpoint\HelloWorld;

use EndpointerFramework\Endpoint\BasicEndpoint;

class HelloWorldEndpoint extends BasicEndpoint
{
    public function run()
    {

        $t      = $this;

        $t

            ->getResponse()
            ->setBody(

                ['message' => 'Hello World!']

            );
    }
}

(new HelloWorldEndpoint())->processRequest();

//  curl http://local-helloworld.endpointer.com/helloworld | jq