<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    private static $tasks = [
        [
            'id' => 1,
            'name' => 'Tugas 3 Statistik',
            'description' => 'Menghitung Probabilitas pada data yang diberikan',
            'deadline' => '2023-07-29',
            'status' => 'Selesai'
        ],

        [
            'id' => 2,
            'name' => 'Tugas 4 Statistik',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'deadline' => '2023-07-29',
            'status' => 'Selesai'
        ],

        [
            'id' => 3,
            'name' => 'Tugas 5 Statistik',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'deadline' => '2023-07-29',
            'status' => 'Belum Selesai'
        ]

    ];

    public static function getAll()
    {
        return self::$tasks;
    }

    public static function getById($id)
    {
        foreach (self::$tasks as $task) {
            if ($task['id'] == $id) {
                return $task;
            }
        }

        return null;
    }
}
