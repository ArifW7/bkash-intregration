# bKash Integration for Laravel

A simple Laravel-based integration for the bKash payment gateway, enabling smooth tokenized checkout.

## Features
- Tokenized checkout flow: grant token → create payment → execute payment
- Works with both **sandbox** and **live** environments
- Laravel-compatible
- Easy configuration via `.env`

## Requirements
- PHP >= 7.4
- Laravel >= 8
- Composer
- bKash Merchant Account (sandbox or live)

## Installation
```bash
git clone https://github.com/ArifW7/bkash-intregration.git
cd bkash-intregration
composer install
cp .env.example .env
php artisan key:generate


# Bkash Payment Gateway Configuration
BKASH_BASE_URL = 'https://tokenized.sandbox.bka.sh/v1.2.0-beta'
SANDBOX = true
BKASH_USERNAME = '01770618567'
BKASH_PASSWORD = 'D7DaC<*E*eG'
BKASH_APP_KEY = '0vWQuCRGiUX7EPVjQDr0EUAYtc'
BKASH_APP_SECRET ='jcUNPBgbcqEDedNKdvE4G1cAK7D3hCjmJccNPZZBq96QIxxwAMEx'

Project Run command:
-------------------
php artisan migrate
php artisan serve

Sendbox Check:
sendbox number: 01770618575
Verification Code: 123456
pin: 12121
