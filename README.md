# PHP Laravel Blockchain API

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mccaulay/laravel-blockchain.svg?style=flat-square)](https://packagist.org/packages/mccaulay/laravel-blockchain)
[![Build Status](https://img.shields.io/travis/mccaulay/laravel-blockchain/master.svg?style=flat-square)](https://travis-ci.org/mccaulay/laravel-blockchain)
[![Quality Score](https://img.shields.io/scrutinizer/g/mccaulay/laravel-blockchain.svg?style=flat-square)](https://scrutinizer-ci.com/g/mccaulay/laravel-blockchain)
[![Total Downloads](https://img.shields.io/packagist/dt/mccaulay/laravel-blockchain.svg?style=flat-square)](https://packagist.org/packages/mccaulay/laravel-blockchain)

## Installation

You can install the package via composer:

```bash
composer require mccaulay/laravel-blockchain
```

## Usage

### Block Explorer
``` php
// Get a block
$block = Blockchain::explorer()->getBlock($hash);

// Get a transaction
$transaction = Blockchain::explorer()->getTransaction($hash);
```

### Create
``` php
// Creating a new wallet
$wallet = Blockchain::create()->create($password, $email, $label);
```

### Rates
``` php
// Get the bitcoin exchange rate amount
$btc = Blockchain::rates()->toBTC(500, 'USD');
```

### Receive
``` php
// Generate a receive request
$v2ApiKey = 'myApiKey';
$xpub = 'xpubYourXPub';
$callbackUrl = 'http://example.com/transaction?secret=mySecret';
$gap_limit = 5 // optional - how many unused addresses are allowed before erroring out

$response = Blockchain::receive()->generate($apiKey, $xpub, $callbackUrl, $gapLimit);

// Show receive address to user:
echo "Send coins to " . $response->getReceiveAddress();
```

## Credits

- [McCaulay Hudson](https://github.com/mccaulay)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
