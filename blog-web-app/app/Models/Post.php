<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; // Лучше добавить, если вы используете Laravel 8+

class Post extends Model
{
    // Используйте HasFactory, если хотите использовать фабрики
    // use HasFactory;

    /**
     * Атрибуты, которые могут быть массово присвоены.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'content',
    ];

    // Если вы предпочитаете использовать $guarded,
    // чтобы разрешить массовое присвоение ВСЕХ полей, кроме 'id',
    // вы можете использовать следующий код вместо $fillable:
    // protected $guarded = ['id'];
}