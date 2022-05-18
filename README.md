# Sportmonks Cricket API PHP Client

PHP Library for [Sportmonks](https://sportmonks.com/) Cricket API. Developed by [Jami Arun Chaitanya](mailto:arunchaitanyajami@gmail.com).

## Prerequisites

PHP >= 7.3

## Installation

```
composer require achaitanyajami/icc-sportmonks-cricket
```

## Setup

The API Client relies on [Environment variables](https://www.php.net/manual/en/reserved.variables.environment.php) for 
configuration (setting API token & timezone).

Usage:
```
use Symfony\Component\Dotenv\Dotenv;
$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/.env');
```

An example .env file:

```dotenv
# API TOKEN (Required)
# https://sportmonks.com/settings#/api
SPORTMONKS_API_TOKEN=_YOUR_API_TOKEN_HERE

# TIMEZONE (Optional)
# https://sportmonks.com/docs/football/2.0/getting-started/a/setting-the-timezone/82
SPORTMONKS_TIMEZONE=Europe/London
```

## Usage

```php
use Sportmonks\Cricket\CricketApi;

...

// Basic API call for all Bookmakers
$response = CricketApi::fixtures()->getAll();
```
