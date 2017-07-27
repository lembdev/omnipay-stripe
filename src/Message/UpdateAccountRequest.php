<?php
/**
 * @author    Alexander Vyzhanov <lembdev@gmail.com>
 * @copyright 2017 Astwellsoft <astwellsoft.com>
 */

namespace lembdev\Stripe\Message;

class UpdateAccountRequest extends AbstractRequest
{
    /**
     * @inheritdoc
     */
    public function getData()
    {
        $this->validate('accountReference');

        return $this->parameters->all();
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return $this->endpoint . '/accounts/' . $this->getAccountReference();
    }
}
