<?php
/**
 * @author    Alexander Vyzhanov <lembdev@gmail.com>
 * @copyright 2017 Astwellsoft <astwellsoft.com>
 */

namespace lembdev\Stripe\Message;


class Response extends \Omnipay\Stripe\Message\Response
{
    /**
     * Get a account reference, for createAccount requests.
     *
     * @return string|null
     */
    public function getAccountReference()
    {
        if (isset($this->data['object']) && 'account' === $this->data['object']) {
            return $this->data['id'];
        }

        return null;
    }
}
