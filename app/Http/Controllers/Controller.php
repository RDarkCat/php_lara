<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $categories = [
        [
            "id" => 0,
            "name" => "Политика"
        ],
        [
            "id" => 1,
            "name" => "Транспорт"
        ],
        [
            "id" => 2,
            "name" => "Проишествия"
        ],
        [
            "id" => 3,
            "name" => "Строительство"
        ],
        [
            "id" => 4,
            "name" => "Медицина"
        ]
    ];

    protected $news = [
        [
            'id' => 0,
            'author'=> 'admin',
            'posted' => 'January 1, 2019 at 12:00 PM',
            'title' => 'Кот украл сосиску',
            'body' => 'Пушистый рыжий кот сегодня утром украл сосиску у собаки.'
        ],
        [
            'id' => 1,
            'author'=> 'admin',
            'posted' => 'January 1, 2019 at 12:00 PM',
            'title' => 'Кошка родила 9 котят',
            'body' => 'Короткошерстная кошка родила 9 котят. Мать-героиня чувствует себя хорошо.'
        ],
        [
            'id' => 2,
            'author'=> 'admin',
            'posted' => 'January 1, 2019 at 12:00 PM',
            'title' => 'Собака перерыла огород',
            'body' => 'Собака перерыла сесь огород в поисках кости которую закопала две недели назад.'
        ],
        [
            'id' => 3,
            'author'=> 'admin',
            'posted' => 'January 1, 2019 at 12:00 PM',
            'title' => 'Собака спасла енота от падения',
            'body' => 'Собака спасла енота от падения с высоты вытащив за лапу'
        ],
        [
            'id' => 4,
            'author'=> 'admin',
            'posted' => 'January 1, 2019 at 12:00 PM',
            'title' => 'Лиса вытащила бобра',
            'body' => 'Лиса вытащила бобра застрявшего под березой'
        ],
        [
            'id' => 5,
            'author'=> 'admin',
            'posted' => 'January 1, 2019 at 12:00 PM',
            'title' => 'Льва выбрали царем зверей',
            'body' => 'Лев стал победителем на "Выборах Царя Зверей" с больши отрывом обойдя Слона'
        ],
        [
            'id' => 6,
            'author'=> 'admin',
            'posted' => 'January 1, 2019 at 12:00 PM',
            'title' => 'Слон перевозит зверей',
            'body' => 'Слон перевозит зверей по маршруту Лес - Опушка за три подберезовика'
        ],
        [
            'id' => 7,
            'author'=> 'admin',
            'posted' => 'January 1, 2019 at 12:00 PM',
            'title' => 'Команда бобров закончила возведение плотины.',
            'body' => 'Команда бобров закончила плотину. Строительство длилось 2 года.'
        ],
        [
            'id' => 8,
            'author'=> 'admin',
            'posted' => 'January 1, 2019 at 12:00 PM',
            'title' => 'Бобер Боб перевыполнил план по обтачиванию деревьев',
            'body' => 'Бобер Боб перевыполнил план по обтачиванию деревьев. Пять деревьев за 2 дня.'
        ],
        [
            'id' => 9,
            'author'=> 'admin',
            'posted' => 'January 1, 2019 at 12:00 PM',
            'title' => 'Зайчиха на опушке леса нашла золотые серьги',
            'body' => 'Зайчиха на опушке леса нашла золотые серьги и обменяла у сороки на морковь и полкачана капусты.'
        ],
        [
            'id' => 10,
            'author'=> 'admin',
            'posted' => 'January 1, 2019 at 12:00 PM',
            'title' => 'Змеи сбросили старую кожу',
            'body' => 'Начался сезон линьки у змей. Они сбрасывают старую кожу.'
        ],
        [
            'id' => 11,
            'author'=> 'admin',
            'posted' => 'January 1, 2019 at 12:00 PM',
            'title' => 'Бельчонок забыл куда положил орехи',
            'body' => 'Требуется помочь бельчонку, который забыл куда положил орехи на зиму.'
        ],
        [
            'id' => 12,
            'author'=> 'admin',
            'posted' => 'January 1, 2019 at 12:00 PM',
            'title' => 'Проходят выборы на должность лесного почтальона',
            'body' => 'Выборы почтальона пройдут в это воскресенье. Лидер гонки Черепаха.'
        ],
        [
            'id' => 13,
            'author'=> 'admin',
            'posted' => 'January 1, 2019 at 12:00 PM',
            'title' => 'Сова получила ученую степень.',
            'body' => 'Сова получила ученую степень и будет председателем ЛГО (Лесного Географического Общества)'
        ]
    ];

    protected $category_news = [
        [
            "news_id" => 0,
            "category_id" => 2
        ],
        [
            "news_id" => 2,
            "category_id" => 2
        ],
        [
            "news_id" => 1,
            "category_id" => 4
        ],
        [
            "news_id" => 5,
            "category_id" => 0
        ],
        [
            "news_id" => 6,
            "category_id" => 1
        ],
        [
            "news_id" => 7,
            "category_id" => 3
        ],
        [
            "news_id" => 8,
            "category_id" => 3
        ],
        [
            "news_id" => 9,
            "category_id" => 2
        ],
        [
            "news_id" => 10,
            "category_id" => 4
        ],
        [
            "news_id" => 11,
            "category_id" => 2
        ],
        [
            "news_id" => 12,
            "category_id" => 0
        ],
        [
            "news_id" => 13,
            "category_id" => 0
        ]
    ];
}
