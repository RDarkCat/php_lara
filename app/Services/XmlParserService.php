<?php

namespace App\Services;

use Orchestra\Parser\Xml\Facade as XmlParser;

class XmlParserService
{

    public function parse($link): array
    {
        $xml = XmlParser::load($link);
        $parse = $xml->parse([
            'news' => [
                'uses' => 'channel.item[title,link,description,pubDate]'
            ]
        ]);
        return $parse;
    }
}
