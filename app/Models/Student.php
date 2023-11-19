<?php

namespace App\Models;


class Student {
    public static function all() {
    return [[
        'id' => 1,
        'title' => 'javascript',
        'description' => 'this is javascript',
        'video' => 'https://www.youtube.com/embed/cWQPeFPoyhQ?si=Qq0Dz8QBKRTU8Plp',
        'image' => 'assets/images/tech-stack/css3.png',
    ],
    [
        'id' => 2,
        'title' => 'javascript2',
        'description' => 'this is javascript',
        'video' => 'https://www.youtube.com/embed/cWQPeFPoyhQ?si=Qq0Dz8QBKRTU8Plp',
        'image' => 'assets/images/tech-stack/html.png',
    ],
];

}
    public static function find($id){
        $students = self::all();
        foreach($students as $student) {
            if ($student['id'] == $id) {
               return $student;
            }
        }
    }
}