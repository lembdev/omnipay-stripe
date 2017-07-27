<?php
/**
 * @author    Alexander Vyzhanov <lembdev@gmail.com>
 * @copyright 2017 Astwellsoft <astwellsoft.com>
 */


namespace lembdev\Stripe;

use Omnipay\Tests\GatewayTestCase;

/**
 * @property Gateway gateway
 */
class GatewayTest extends GatewayTestCase
{
    public function setUp()
    {
        parent::setUp();
        $this->gateway = new Gateway($this->getHttpClient(), $this->getHttpRequest());
    }

    public function testCreateAccount()
    {
        $request = $this->gateway->createAccount();
        $this->assertInstanceOf(Message\CreateAccountRequest::class, $request);
    }

    public function testFetchAccount()
    {
        $request = $this->gateway->fetchAccount();
        $this->assertInstanceOf(Message\FetchAccountRequest::class, $request);
    }

    public function testUpdateAccount()
    {
        $request = $this->gateway->updateAccount();
        $this->assertInstanceOf(Message\UpdateAccountRequest::class, $request);
    }

    public function testDeleteAccount()
    {
        $request = $this->gateway->deleteAccount();
        $this->assertInstanceOf(Message\DeleteAccountRequest::class, $request);
    }
}