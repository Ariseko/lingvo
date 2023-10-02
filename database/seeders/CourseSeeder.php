<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('сourses')->insert([
            [

                'title' => 'Интенсивный курс английского языка',
                'content' => 'Цель: комплексное развитие и совершенствование таких видов речевой деятельности как говорение и аудирование, развитие языковой и коммуникативной компетенции, преодоление языкового барьера и совершенствование навыков общения на английском языке, в том числе с носителем языка.',
                'category' => 'Английский',
                'places' => '15',
                'date' => '2023-05-31',
                'time' => '18:00:00',
                'image' => 'a2.jpg',
            ],

            [

                'title' => 'Китайский язык для начинающих',
                'content' => 'Цель: формирование произношения, изучение разговорных, обиходных выражений, овладение основными принципами построения различных моделей предложений, знакомство с основами китайской культуры.',
                'category' => 'Китайский',
                'places' => '20',
                'date' => '2023-06-15',
                'time' => '14:00:00',
                'image' => 'a1.jpg',
            ],

            [

                'title' => 'English for Special Purposes',
                'content' => 'Цель: pазвитие всех видов речевой деятельности (чтение, говорение, аудирование, письмо, основы устного и письменного перевода), формирование деловой и коммуникативной компетенции на темах, связанных с современным бизнесом',
                'category' => 'Английский',
                'places' => '30',
                'date' => '2023-07-10',
                'time' => '15:00:00',
                'image' => 'a4.jpg',
            ],

            [

                'title' => 'Основы немецкого языка',
                'content' => 'Цель: знакомство студентов с основными тенденциями развития лексикологии, грамматики и стилистики немецкого языка, с выдающимися учеными-лингвистами, их концепциями и теориями; обучение студентов оперированию понятиями лексикологии, грамматики и стилистики, умению распознавать их в контексте, анализировать, выявлять их взаимосвязь для более точной передачи иноязычного текста при переводе.',
                'category' => 'Немецкий',
                'places' => '10',
                'date' => '2023-08-01',
                'time' => '18:00:00',
                'image' => 'a7.jpg',
            ],
        ]);
    }
}
