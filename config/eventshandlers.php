<?php

use App\Events as E;
use App\Events\Handlers as H;

return [
    E\BuildRoutesCacheFileEvent::class => [
        H\BuildRoutesCacheFileHandler::class,
    ],
    E\LogRequestEvent::class => [
        H\LogRequestHandler::class,
    ],
];
