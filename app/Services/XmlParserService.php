<?php

namespace App\Services;

use Orchestra\Parser\Xml\Facade as XmlParser;

class XmlParserService
{

    public function parse(): array
    {
        $xml = XmlParser::load('https://www.cbsnews.com/latest/rss/world');
        $parse = $xml->parse([
            'news' => [
                'uses' => 'channel.item[title,link,description,pubDate]'
            ]
        ]);
        return $parse;
        /*
         *
        return [
'http://news.yandex.ru/index.rss',
'http://news.yandex.ru/politics.rss',
'http://news.yandex.ru/world.rss',
'http://news.yandex.ru/society.rss',
'http://news.yandex.ru/business.rss',
'http://news.yandex.ru/sport.rss',
'http://news.yandex.ru/incident.rss',
'http://news.yandex.ru/culture.rss',
'http://news.yandex.ru/health.rss',
'http://news.yandex.ru/computers.rss',
'http://news.yandex.ru/internet.rss',
'http://news.yandex.ru/auto.rss'
        ];
         */

    }
}
