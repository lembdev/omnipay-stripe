# Omnipay: Extended Stripe

[![Build Status](https://travis-ci.org/thephpleague/omnipay-stripe.png?branch=master)](https://travis-ci.org/lembdev/omnipay-stripe)
[![Latest Stable Version](https://poser.pugx.org/lembdev/omnipay-stripe/v/stable)](https://packagist.org/packages/lembdev/omnipay-stripe)
[![Total Downloads](https://poser.pugx.org/lembdev/omnipay-stripe/downloads)](https://packagist.org/packages/lembdev/omnipay-stripe)

[Omnipay](https://github.com/thephpleague/omnipay) is a framework agnostic, multi-gateway payment
processing library for PHP 5.3+. This package implements WorldPay support for Omnipay.

## Installation

Omnipay is installed via [Composer](http://getcomposer.org/). To install, simply add it
to your `composer.json` file:

```json
{
    "require": {
        "lembdev/omnipay-stripe": "~1.1"
    }
}
```

And run composer to update your dependencies:

    $ curl -s http://getcomposer.org/installer | php
    $ php composer.phar update