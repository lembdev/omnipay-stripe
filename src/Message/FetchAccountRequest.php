<?php
/**
 * @author    Alexander Vyzhanov <lembdev@gmail.com>
 * @copyright 2017 Astwellsoft <astwellsoft.com>
 */

namespace lembdev\Stripe\Message;

class FetchAccountRequest extends AbstractRequest
{
    /**
     * @inheritdoc
     */
    public function getData()
    {
        $this->validate('accountReference');

        return;
    }

    /**
     * @inheritdoc
     */
    public function getHttpMethod()
    {
        return 'GET';
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return $this->endpoint . '/accounts/' . $this->getAccountReference();
    }
}
