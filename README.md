[![Build Status](https://semaphoreci.com/api/v1/limonte/google-safebrowsing/branches/master/badge.svg)](https://semaphoreci.com/limonte/google-safebrowsing)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/limonte/google-safebrowsing/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/limonte/google-safebrowsing/?branch=master)

# Google Safebrowsing PHP library, check if link is suspicious

## Usage:

```php
use Limonte\GoogleSafebrowsing;

$googleSafebrowsing = new GoogleSafebrowsing;

$status = $googleSafebrowsing->check($url);

if ($status === GoogleSafebrowsing::OK) {
    // link is OK
}

if ($status === GoogleSafebrowsing::SUSPICIOUS) {
    // link is suspicious - malware, spam or dangerous
}
```
