<?php

use Upscale\HttpServerSkeleton\Controller;

return [
    ['GET', '/', Controller\InfoAction::class],
    ['GET', '/echo/{message}', Controller\EchoAction::class],
];
