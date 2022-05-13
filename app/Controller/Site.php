<?php

namespace Controller;

use Model\Post, Model\User;
use Src\Request;
use Src\View;
use Src\Auth\Auth;

class Site
{
    public function go(Request $request): string
    {

        $posts = Post::where('id', $request->id)->get();
        return (new View())->render('site.post', ['posts' => $posts]);
    }


    public function signup(Request $request): string
    {
        if ($request->method==='POST' && User::create($request->all())){
            app()->route->redirect('/login');
        }
        return new View('site.signup');
    }

    public function login(Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'GET') {
            return new View('site.login');
        }
        //Если удалось аутентифицировать пользователя, то редирект
        if (Auth::attempt($request->all())) {
            app()->route->redirect('/');
        }
        //Если аутентификация не удалась, то сообщение об ошибке
        return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/hello');
    }

    public function find(): string{
        return new View('site.find', ['message' => 'ZZZZZZZZZZZZZZ']);
    }

    public function hello(): string
    {
        return new View('site.hello', ['message' => 'Поможем найти абонента для вызова']);
    }

}