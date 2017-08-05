<?php
/**
 * @author    Alexander Vyzhanov <lembdev@gmail.com>
 * @copyright 2017 Astwellsoft <astwellsoft.com>
 */

namespace lembdev\Stripe;

class Gateway extends \Omnipay\Stripe\Gateway
{
    /**
     * Create Account.
     *
     * @param array $parameters
     *
     * @return Message\CreateAccountRequest
     */
    public function createAccount(array $parameters = [])
    {
        return $this->createRequest(Message\CreateAccountRequest::class, $parameters);
    }

    /**
     * Fetch Account.
     *
     * @param array $parameters
     *
     * @return Message\CreateAccountRequest
     */
    public function fetchAccount(array $parameters = [])
    {
        return $this->createRequest(Message\FetchAccountRequest::class, $parameters);
    }

    /**
     * Update Account.
     *
     * @param array $parameters
     *
     * @return Message\CreateAccountRequest
     */
    public function updateAccount(array $parameters = [])
    {
        return $this->createRequest(Message\UpdateAccountRequest::class, $parameters);
    }

    /**
     * Delete a Account.
     *
     * @param array $parameters
     *
     * @return Message\DeleteAccountRequest
     */
    public function deleteAccount(array $parameters = [])
    {
        return $this->createRequest(Message\DeleteAccountRequest::class, $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return Message\RefundRequest
     */
    public function refund(array $parameters = [])
    {
        return $this->createRequest(Message\RefundRequest::class, $parameters);
    }
}
