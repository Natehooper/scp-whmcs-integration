<?php

namespace Scp\Client;

use Scp\Api\ApiRepository;

class ClientRepository extends ApiRepository
{
    /**
     * @var string
     */
    protected $class = Client::class;

    public function findByBillingId($billingId)
    {
        $result = $this->api->get($this->path(), [
            'billing_id' => $billingId,
        ]);
        print_r($result);
    }
}
