<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    protected $table = 'news';

    public function getAllNews(): array
    {
        return DB::select("SELECT id, title, (SELECT name FROM users WHERE id = news.author) as author, created_at FROM news");
    }

    public function getOneNews($id)
    {
        return DB::selectOne("SELECT id, title, body, (SELECT name FROM users WHERE id = news.author) as author, created_at FROM news WHERE id = :id", ['id' => $id]);
    }
}
