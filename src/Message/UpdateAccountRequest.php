<?php
/**
 * @author    Alexander Vyzhanov <lembdev@gmail.com>
 * @copyright 2017 Astwellsoft <astwellsoft.com>
 */

namespace lembdev\Stripe\Message;

class UpdateAccountRequest extends AbstractRequest
{
    /**
     * Get the account's type.     *
     * @return string
     */
    public function getType()
    {
        return $this->getParameter('type');
    }

    /**
     * Sets the account's type.     *
     * @param string $value     *
     * @return UpdateAccountRequest provides a fluent interface.
     */
    public function setType($value)
    {
        return $this->setParameter('type', $value);
    }

    /**
     * Get the account's email.     *
     * @return string
     */
    public function getEmail()
    {
        return $this->getParameter('email');
    }

    /**
     * Sets the account's email.     *
     * @param string $value     *
     * @return UpdateAccountRequest provides a fluent interface.
     */
    public function setEmail($value)
    {
        return $this->setParameter('email', $value);
    }

    /**
     * Get the account's metadata.     *
     * @return string
     */
    public function getMetadata()
    {
        return $this->getParameter('metadata');
    }

    /**
     * Sets the account's metadata.     *
     * @param string $value     *
     * @return UpdateAccountRequest provides a fluent interface.
     */
    public function setMetadata($value)
    {
        return $this->setParameter('metadata', $value);
    }

    /**
     * Get the account's legal_entity.     *
     * @return string
     */
    public function getLegalEntity()
    {
        return $this->getParameter('legal_entity');
    }

    /**
     * Sets the account's legal_entity.     *
     * @param string $value     *
     * @return UpdateAccountRequest provides a fluent interface.
     */
    public function setLegalEntity($value)
    {
        return $this->setParameter('legal_entity', $value);
    }

    /**
     * Get the account's business_name.     *
     * @return string
     */
    public function getBusinessName()
    {
        return $this->getParameter('business_name');
    }

    /**
     * Sets the account's business_name.     *
     * @param string $value     *
     * @return UpdateAccountRequest provides a fluent interface.
     */
    public function setBusinessName($value)
    {
        return $this->setParameter('business_name', $value);
    }

    /**
     * Get the account's business_url.     *
     * @return string
     */
    public function getBusinessUrl()
    {
        return $this->getParameter('business_url');
    }

    /**
     * Sets the account's business_url.     *
     * @param string $value     *
     * @return UpdateAccountRequest provides a fluent interface.
     */
    public function setBusinessUrl($value)
    {
        return $this->setParameter('business_url', $value);
    }

    /**
     * Get the account's external_account.     *
     * @return string
     */
    public function getExternalAccount()
    {
        return $this->getParameter('external_account');
    }

    /**
     * Sets the account's external_account.     *
     * @param string $value     *
     * @return UpdateAccountRequest provides a fluent interface.
     */
    public function setExternalAccount($value)
    {
        return $this->setParameter('external_account', $value);
    }

    /**
     * Get the account's payout_schedule.     *
     * @return string
     */
    public function getPayoutSchedule()
    {
        return $this->getParameter('payout_schedule');
    }

    /**
     * Sets the account's payout_schedule.     *
     * @param string $value     *
     * @return UpdateAccountRequest provides a fluent interface.
     */
    public function setPayoutSchedule($value)
    {
        return $this->setParameter('payout_schedule', $value);
    }

    /**
     * Get the account's tos_acceptance.     *
     * @return string
     */
    public function getTosAcceptance()
    {
        return $this->getParameter('tos_acceptance');
    }

    /**
     * Sets the account's tos_acceptance.     *
     * @param string $value     *
     * @return UpdateAccountRequest provides a fluent interface.
     */
    public function setTosAcceptance($value)
    {
        return $this->setParameter('tos_acceptance', $value);
    }

    /**
     * @inheritdoc
     */
    public function getData()
    {
        $this->validate('accountReference');

        $data = [];

        //$data['type'] = $this->getType();
        $data['email'] = $this->getEmail();
        $data['metadata'] = $this->getMetadata();
        $data['legal_entity'] = $this->getLegalEntity();
        $data['business_name'] = $this->getBusinessName();
        $data['business_url'] = $this->getBusinessUrl();
        $data['external_account'] = $this->getExternalAccount();
        $data['payout_schedule'] = $this->getPayoutSchedule();
        $data['tos_acceptance'] = $this->getTosAcceptance();

        return $data;
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return $this->endpoint . '/accounts/' . $this->getAccountReference();
    }
}
