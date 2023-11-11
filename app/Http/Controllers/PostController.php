<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function hello(){
        return "Привет , лучшая группа";

    }
    public function hello2($name){
        return "Привет, $name";
    }
    public function hello3($id){
        $hi = [
          1=> "Добрый день",
          2=> "Добрый вечер",
          3=> "Доброй ночи",
            4=> "Доброе утро"
        ];
    }
    public function hello5($name)
    {
        $users = [
            'Дмитрий' => "Томск",
            'Алексей' => "Москва",
            'Лиза' => "Питер",
        ];
        if (isset($users[$name])) {
            return $users[$name];
        } else {
            return "Такого пользователя нет!";
        }
    }
        public function hello6(){
            return view('post.hello');
        }
        public function hello7($name){
        return view('hello7', ['name'=>$name, 'title' => 'Заголовок']);
        }
   }
