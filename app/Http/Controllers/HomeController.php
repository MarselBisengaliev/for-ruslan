<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getAll()
    {
        $about = [
            [
                "title" => "Делаем",
                "description" => "С 2022 года мы устраиваем множество мероприятий, для того, чтобы каждый был вовлечён в ведение здорового образа жизни и занятием спортом",
                "image" => "https://58.cmab.kz/api/public/images/1.png"
            ],
            [
                "title" => "Молодежь",
                "description" => "Основная аудитория наших мероприятий это молодёжь, которая начинает вовлекаться в спортивные мероприятия и начинает вести здоровый образ жизни",
                "image" => "https://58.cmab.kz/api/public/images/2.jpg"
            ],
            [
                "title" => "Здоровой",
                "description" => "Каждый человек должен быть здоровым, и мы придерживаемся этого мнения",
                "image" => "https://58.cmab.kz/api/public/images/3.png"
            ]
        ];

        $partners = [
            [
                "image" => "https://58.cmab.kz/api/public/uploaded/partners/1.png",
                "link" => "/"
            ],
            [
                "image" => "https://58.cmab.kz/api/public/uploaded/partners/2.png",
                "link" => "/"
            ],
            [
                "image" => "https://58.cmab.kz/api/public/uploaded/partners/3.png",
                "link" => "/"
            ],
            [
                "image" => "https://58.cmab.kz/api/public/uploaded/partners/4.png",
                "link" => "/"
            ],
            [
                "image" => "https://58.cmab.kz/api/public/uploaded/partners/5.png",
                "link" => "/"
            ]
        ];

        $slider = [
            [
                "id" => 1,
                "background" => "https://58.cmab.kz/api/public/images/slider1.jpg",
                "title" => "Summer Runner — 2022",
                "description" => "Команда ChefRun проводит новый летний забег, это не только спортивная активность, это возможность сделать мир чуть лучше.",
                "type" => "event",
                "event" => [
                    "id" => 8,
                    "display_name" => "Summer Runner — 2022",
                    "address" => "г. Нур-Султан, проспект Абылай хана",
                    "starts_at" => "2022-06-03 12:30:00"
                ]
            ],
            [
                "id" => 2,
                "background" => "https://58.cmab.kz/api/public/images/slider2.jpg",
                "title" => "Летняя ярмарка спорта — 2022",
                "description" => "Поучавствуйте в первой нашей ярмарке посвященной спорту. Начиная с 12 июня",
                "type" => "event",
                "event" => [
                    "id" => 9,
                    "display_name" => "Летняя ярмарка спорта — 2022",
                    "address" => "г. Нур-Султан, проспект Тәуелсіздік, 57/1",
                    "starts_at" => "2022-06-12 17:00:00"
                ]
            ]
        ];

        $events = Event::query()->with(['tags'])->get();

        $news = News::all();

        return response()->json([
            'news' => $news,
            'about' => $about,
            'events' => $events,
            'slider' => $slider,
            'partners' => $partners
        ], 200);
    }
}
