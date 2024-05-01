<?php

namespace Juzaweb\Horizon\Http\Controllers;

use Juzaweb\CMS\Http\Controllers\BackendController;

class HorizonController extends BackendController
{
    public function index()
    {
        //

        return view(
            'horizon::index',
            [
                'title' => 'Title Page',
            ]
        );
    }
}
