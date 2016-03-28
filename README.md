[![Build Status](https://scrutinizer-ci.com/g/limonte/google-safebrowsing/badges/build.png?b=master)](https://scrutinizer-ci.com/g/limonte/google-safebrowsing/build-status/master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/limonte/google-safebrowsing/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/limonte/google-safebrowsing/?branch=master)
[![License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat)](LICENSE)

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
