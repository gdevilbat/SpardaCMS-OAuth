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
    	return view('oauth::admin.'.$this->data['theme_cms']->value.'.content.client', $this->data);
    }

    public function authorizedClient()
    {
    	return view('oauth::admin.'.$this->data['theme_cms']->value.'.content.authorized_client', $this->data);
    }

    public function personalAccessToken()
    {
    	return view('oauth::admin.'.$this->data['theme_cms']->value.'.content.personal_access_token', $this->data);
    }
}
