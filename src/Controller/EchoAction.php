<?php
namespace Upscale\HttpServerSkeleton\Controller;

use Psr\Http\Message\ResponseInterface;
use Upscale\HttpServerEngine\HandlerInterface;

class EchoAction implements HandlerInterface
{
    /**
     * @var string
     */
    protected $message;

    /**
     * Inject dependencies
     *
     * @param string $message
     */
    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * {@inheritdoc}
     */
    public function execute(ResponseInterface $response)
    {
        $response->getBody()->write($this->message);
        return $response->withHeader('Content-Type', 'text/plain');
    }
}
