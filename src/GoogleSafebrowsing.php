<?php
namespace Limonte;

class GoogleSafebrowsing
{
    const OK = 0;
    const SUSPICIOUS = 201;

    const ENDPOINT = "https://www.google.com/safebrowsing/diagnostic?output=jsonp&site=";

    /**
     * @param string $url
     *
     * @return integer
     */
    public function check($url)
    {
        if (filter_var($url, FILTER_VALIDATE_URL) === false) {
            throw new \Exception("Invalid URL");
        }

        $safebrowsing = @file_get_contents(self::ENDPOINT . $url);

        if (strpos($safebrowsing, '"listed"')) {
            return self::SUSPICIOUS;
        }

        return self::OK;
    }
}
