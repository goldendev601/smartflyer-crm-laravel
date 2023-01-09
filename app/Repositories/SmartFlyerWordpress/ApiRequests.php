<?php

namespace App\Repositories\SmartFlyerWordpress;

use App\Exceptions\APIInvocationException;
use App\Repositories\ApiInvoker;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Str;

class ApiRequests extends ApiInvoker
{
    /**
     * @inheritDoc
     */
    protected function toUrl(string $link): string
    {
        return Str::of( env( "SMARTFLYER_WORDPRESS_API_ENDPOINT" )  )->rtrim('/')
            . Str::of( $link )->start("/" );
    }


    /**
     * Returns the list of agents
     *
     * @param int $maxLength
     * @return $this
     * @throws APIInvocationException
     * @throws GuzzleException
     */
    public function getAgentList( int $maxLength = 500 ): ApiRequests
    {
        if (!$this->queryStringRequest('', [
            "smtAPI" => "getAgentList",
            'per_page' => $maxLength,
            'page' => 1,
        ])) $this->throwException();

        // return the model here
        return $this;
    }
}
