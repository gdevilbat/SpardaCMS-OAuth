<?php

namespace Gdevilbat\SpardaCMS\Modules\Oauth\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Gdevilbat\SpardaCMS\Modules\Core\Http\Controllers\CoreController;

class OauthController extends CoreController
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function client()
    {
        return view('oauth::index');
    }
}
