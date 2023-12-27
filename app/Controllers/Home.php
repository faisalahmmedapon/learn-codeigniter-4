<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }
    public function about(): string
    {
        return view('about');
    }
    public function contact(): string
    {
        return view('contact');
    }
    public function service(): string
    {
        return view('service');
    }
    public function schedule(): string
    {
        return view('schedule');
    }
    public function login(): string
    {
        return view('login');
    }
    public function register(): string
    {
        return view('register');
    }
}