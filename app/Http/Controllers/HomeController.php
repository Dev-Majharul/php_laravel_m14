<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $featuredWorks = [
            [
                'image' => asset('assets/images/p1.webp'),
                'title' =>'Update E-commerce Website',
                'short_description' =>'A fully responsive online store with payment integration.'
            ],
            [
                'image' => asset('assets/images/p2.webp'),
                'title' =>'Mobile App Design',
                'short_description' =>'UI/UX design for a fitness tracking application.'
            ],
            [
                'image' =>asset('assets/images/p1.webp'),
                'title' =>'Corporate Website',
                'short_description' =>'A modern website for a financial services company.'
            ],
            [
                'image' =>asset('assets/images/p2.webp'),
                'title' =>'New Corporate Website',
                'short_description' =>'A modern website for a financial services company.'
            ],
        ];

        return view('home', compact('featuredWorks'));
    }
}
