<?php
/**
 * @author    Alexander Vyzhanov <lembdev@gmail.com>
 * @copyright 2017 Astwellsoft <astwellsoft.com>
 */

namespace lembdev\Stripe\Message;


abstract class AbstractRequest extends \Omnipay\Stripe\Message\AbstractRequest
{
    /**
     * {@inheritdoc}
     */
    public function sendData($data)
    {
        $headers = array_merge($this->getHeaders(), [
            'Authorization' => 'Basic ' . base64_encode($this->getApiKey() . ':')
        ]);

        $httpRequest = $this->createClientRequest($data, $headers);
        $httpResponse = $httpRequest->send();

        $this->response = new Response($this, $httpResponse->json());

        if ($httpResponse->hasHeader('Request-Id')) {
            $this->response->setRequestId((string)$httpResponse->getHeader('Request-Id'));
        }

        return $this->response;
    }
}
