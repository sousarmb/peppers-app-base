<?php

namespace App\Controllers\Peppers;

use Peppers\Contracts\DefaultMethod;
use Peppers\Helpers\ViewDataStore;
use Peppers\Renderer\HtmlView;
use Peppers\Response;

class DefaultController implements DefaultMethod {

    /**
     * 
     * @return mixed
     */
    public function default(): Response {
        /* it's not mandatory to return HTML, do your own logic and decide 
         * what's best. For demonstration sake 404 with HTML response is 
         * returned */
        $viewData = new ViewDataStore([
            'title' => 'Peppers Default Controller',
            'use' => 'This is the default controller, use when a route does not exist.',
            'description' => 'It\'s enabled in the configuration by default, if disabled client\'s user agent get a "404 Not Found".'
        ]);
        // once dispatched ViewDataStore is immutable
        $view = new HtmlView(
                'Peppers.DefaultController.defaultSection',
                $viewData
        );
        return (new Response())->html($view)->setStatusCode(404);
    }

}
