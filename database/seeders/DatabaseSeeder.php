<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        //User::factory(5)->create();//
    Student::factory()->create([
        'name' => 'Wednesday',
        'surname' => 'Addams',
        'email' => 'wednesdayaddams@nevermoreacademy.com',
        'password' => 'd9Jq!pDK', // password
        'currentTerm' => '2022-2023',
        'img' => 'img/outcast01.png',
        'isTeacher' => '0',
        ]);

    Student::factory()->create([
        'name' => 'Enid',
        'surname' => 'Sinclair',
        'email' => 'enidsinclair@nevermoreacademy.com',
        'password' => 'y!d3Yb5E', // password
        'currentTerm' => '2022-2023',
        'img' => 'img/outcast07.PNG',
        'isTeacher' => '0',
        ]);    

    Student::factory()->create([
        'name' => 'Xavier',
        'surname' => 'Thorpe',
        'email' => 'xavierthorpe@nevermoreacademy.com',
        'password' => 'Ao63Q^T&', // password
        'currentTerm' => '2022-2023',
        'img' => 'img/outcast03.PNG',
        'isTeacher' => '0',
        ]);   

    Student::factory()->create([
        'name' => 'Bianca',
        'surname' => 'Barclay',
        'email' => 'biancabarclay@nevermoreacademy.com',
        'password' => '4o5C&z$2', // password
        'currentTerm' => '2022-2023',
        'img' => 'img/outcast02.PNG',
        'isTeacher' => '0',
        ]);        

    Student::factory()->create([
        'name' => 'Eugene',
        'surname' => 'Otinger',
        'email' => 'eugeneotinger@nevermoreacademy.com',
        'password' => '^qw%Q8YX', // password
        'currentTerm' => '2022-2023',
        'img' => 'img/outcast04.PNG',
        'isTeacher' => '0',
        ]);  

    Student::factory()->create([
        'name' => 'Ajax',
        'surname' => 'Petropolus',
        'email' => 'ajaxpetropolus@nevermoreacademy.com',
        'password' => 'PwksC#B3', // password
        'currentTerm' => '2022-2023',
        'img' => 'img/outcast05.PNG',
        'isTeacher' => '0',
        ]); 

    Student::factory()->create([
        'name' => 'Yoko',
        'surname' => 'Tanaka',
        'email' => 'yokotanaka@nevermoreacademy.com',
        'password' => 'ZY5Hz^Ea', // password
        'currentTerm' => '2022-2023',
        'img' => 'img/outcast06.PNG',
        'isTeacher' => '0',
        ]); 

    Student::factory()->create([
        'name' => 'Ignatius',
        'surname' => 'Itt',
        'email' => 'ignatiusitt@nevermoreacademy.com',
        'password' => '29tQR#%5', // password
        'currentTerm' => '2022-2023',
        'img' => 'img/outcast08.PNG',
        'isTeacher' => '0',
        ]);        
    
 /*    Student::factory()->create([
        'name' => 'Marilyn',
        'surname' => 'Thornhill',
        'email' => 'marilynthornhill@nevermoreacademy.com',
        'password' => '7H%drfYJ', // password
        'currentTerm' => '2022-2023',
        'img' => 'img/nevermoreTeacher.PNG',
        'isTeacher' => '1',
        ]); */
    }
}
