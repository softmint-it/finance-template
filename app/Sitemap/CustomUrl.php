<?php

namespace App\Sitemap;

use Spatie\Sitemap\Tags\Url as BaseUrl;

class CustomUrl extends BaseUrl
{
    public function toXml(): string
    {
        $xml = parent::toXml();

        // Add priority if it is set
        if ($this->priority) {
            $xml = str_replace('</url>', "<priority>{$this->priority}</priority></url>", $xml);
        }

        return $xml;
    }
}
