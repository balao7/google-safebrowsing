# Google Safebrowsing PHP library, check if link is suspicious

[![Build Status](https://travis-ci.org/limonte/google-safebrowsing.svg?branch=master)](https://travis-ci.org/limonte/google-safebrowsing)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/limonte/google-safebrowsing/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/limonte/google-safebrowsing/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/limonte/google-safebrowsing/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/limonte/google-safebrowsing/?branch=master)

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

## Related libraries:

- Check if link is SPAM: [limonte/spam-link-analyser](https://github.com/limonte/spam-link-analyser)
- McAfee SiteAdvisor PHP library: [limonte/mcafee-siteadvisor](https://github.com/limonte/mcafee-siteadvisor)
- PHP parser for Adblock Plus filters: [limonte/php-adblock-parser](https://github.com/limonte/php-adblock-parser)
