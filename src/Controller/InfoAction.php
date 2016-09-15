<?php
namespace Upscale\HttpServerSkeleton\Controller;

use Psr\Http\Message\ResponseInterface;
use Upscale\HttpServerEngine\ActionInterface;

class InfoAction implements ActionInterface
{
    /**
     * {@inheritdoc}
     */
    public function execute(ResponseInterface $response)
    {
        $response->getBody()->write('Server is running!');
        return $response;
    }
}
