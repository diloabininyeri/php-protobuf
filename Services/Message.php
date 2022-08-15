<?php

namespace Services;


use Grpc\MethodDescriptor;
use Grpc\ServerContext;
use Grpc\Status;
use Hello\App\Request;
use Hello\App\Response;

/**
 *
 */
class Message
{


    /**
     * @param Request $request
     * @param ServerContext $context
     * @return Response|null
     */
    public function say(Request $request, ServerContext $context): ?Response
    {
        $response = new Response();
        $response->setOutput(sprintf('%s from server',$request->getQuery()));
        $context->setStatus(Status::ok());
        return $response;
    }


    /**
     * Get the method descriptors of the service for server registration
     *
     * @return array of \Grpc\MethodDescriptor for the service methods
     */
    final public function getMethodDescriptors(): array
    {
        return [
            '/hello.app.Hello/say' => new MethodDescriptor(
                $this,
                'say',
                Request::class,
                MethodDescriptor::UNARY_CALL
            ),
        ];
    }


}