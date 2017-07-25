<?php
/**
 * @author    Alexander Vyzhanov <lembdev@gmail.com>
 * @copyright 2017 Astwellsoft <astwellsoft.com>
 */

namespace lembdev\Stripe\Message;

class CreateAccountRequest extends AbstractRequest
{
    /**
     * Get the account's email address.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->getParameter('email');
    }

    /**
     * Sets the account's email address.
     *
     * @param string $value
     *
     * @return CreateAccountRequest provides a fluent interface.
     */
    public function setEmail($value)
    {
        return $this->setParameter('email', $value);
    }

    /**
     * Get the account's type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->getParameter('type') ?: 'custom';
    }

    /**
     * Sets the account's type.
     *
     * @param string $value
     *
     * @return CreateAccountRequest provides a fluent interface.
     */
    public function setType($value)
    {
        return $this->setParameter('type', $value);
    }

    /**
     * Get the account's country.
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->getParameter('country');
    }

    /**
     * Sets the account's country.
     *
     * @param string $value
     *
     * @return CreateAccountRequest provides a fluent interface.
     */
    public function setCountry($value)
    {
        return $this->setParameter('country', $value);
    }

    /**
     * @inheritdoc
     */
    public function getData()
    {
        $data = [];

        $data['type'] = $this->getType();

        if ($this->getEmail()) {
            $data['email'] = $this->getEmail();
        }

        if ($this->getMetadata()) {
            $data['metadata'] = $this->getMetadata();
        }

        return $data;
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return $this->endpoint . '/accounts';
    }
}
