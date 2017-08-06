<?php
/**
 * @author    Alexander Vyzhanov <lembdev@gmail.com>
 * @copyright 2017 Astwellsoft <astwellsoft.com>
 */

namespace lembdev\Stripe\Message;

use Omnipay\Common\Exception\InvalidRequestException;

class RefundRequest extends \Omnipay\Stripe\Message\RefundRequest
{
    /**
     * @inheritdoc
     */
    public function setAmount($value)
    {
        $value = (string)$value;

        if (strpos($value, '.') === false) {
            $value .= '.00';
        }

        return parent::setAmount($value);
    }

    /**
     * String indicating the reason for the refund.
     * If set, possible values are duplicate, fraudulent, and requested_by_customer.
     * Specifying fraudulent as the reason when you believe the charge
     * to be fraudulent will help us improve our fraud detection algorithms.
     *
     * @param string $value
     *
     * @return AbstractRequest Provides a fluent interface
     */
    public function setReason($value)
    {
        return $this->setParameter('reason', $value);
    }

    /**
     * Validates and returns the reason.
     *
     * @throws InvalidRequestException on any validation failure.
     * @return string|null
     */
    public function getReason()
    {
        $reason = $this->getParameter('reason');

        if ($reason === null) {
            return null;
        }

        $possibleReasons = [
            'duplicate',
            'fraudulent',
            'requested_by_customer',
        ];

        if (!in_array($reason, $possibleReasons)) {
            throw new InvalidRequestException("Incorrect reason: {$reason}");
        }

        return $reason;
    }

    /**
     * @inheritdoc
     */
    public function getData()
    {
        $this->validate('transactionReference');

        $data = [
            'charge' => $this->getTransactionReference(),
        ];

        if ($this->getAmount()) {
            $data['amount'] = $this->getAmountInteger();
        }

        if ($this->getMetadata()) {
            $data['metadata'] = $this->getMetadata();
        }

        if ($this->getReason()) {
            $data['reason'] = $this->getReason();
        }

        if ($this->getReverseTransfer()) {
            $data['reverse_transfer'] = 'true';
        }

        if ($this->getRefundApplicationFee()) {
            $data['refund_application_fee'] = 'true';
        }

        return $data;
    }

    /**
     * @inheritdoc
     */
    public function getEndpoint()
    {
        return $this->endpoint . '/refunds';
    }
}