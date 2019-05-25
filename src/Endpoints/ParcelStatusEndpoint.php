<?php

namespace Imbue\SendCloud\Endpoints;

use Imbue\SendCloud\Exceptions\ApiException;
use Imbue\SendCloud\Resources\Collections\AbstractCollection;
use Imbue\SendCloud\Resources\ParcelStatus;

class ParcelStatusEndpoint extends AbstractEndpoint
{
    /** @var string */
    protected $resourcePath = 'parcels/statuses';

    /**
     * @return ParcelStatus
     */
    protected function getResourceObject(): ParcelStatus
    {
        return new ParcelStatus($this->client);
    }

    /**
     * @return array|AbstractCollection
     * @throws ApiException
     */
    public function list()
    {
        return $this->restList([]);
    }
}
