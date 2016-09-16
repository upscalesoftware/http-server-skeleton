<?php
namespace Upscale\HttpServerSkeleton\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Upscale\HttpServerEngine\ActionInterface;
use Zend\Diactoros\ServerRequestFactory;

class InfoAction implements ActionInterface
{
    /**
     * @var ServerRequestInterface
     */
    protected $request;

    /**
     * Inject dependencies
     *
     * @param ServerRequestInterface $request
     */
    public function __construct(ServerRequestInterface $request)
    {
        $this->request = $request;
    }

    /**
     * {@inheritdoc}
     */
    public function execute(ResponseInterface $response)
    {
        $software = ServerRequestFactory::get('SERVER_SOFTWARE', $this->request->getServerParams(), 'PHP');
        $response->getBody()->write("Server powered by $software is running!");
        return $response;
    }
}
