<?php

namespace App\Models;

use App\Enums\TaskStatusEnum;
use App\Models\Tests\Factories\TaskFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id Идентификатор модели // при работе с моделью IDE будет подсвечивать доступные свойства
 * @property string $title Заголовок
 * @property string $description Описание
 * @property int $status Статус задачи
 */
class Task extends Model
{
    protected $table = 'tasks';

    use HasFactory;

    protected $casts = [
        'status' => TaskStatusEnum::class,  //преобразователь свойств - читай мутаторы
    ];

    protected $fillable = ['title', 'description', 'status'];

    public static function factory(): TaskFactory
    {
        return TaskFactory::new();
    }
}
