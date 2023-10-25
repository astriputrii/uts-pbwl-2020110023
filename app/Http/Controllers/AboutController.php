<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $title = 'About Us';
        $description = 'Each email is a customer survey of your target market, testing what options resonate most with them.';
        $button = '<a class="btn btn-lg btn-secondary" href="/">Back to Landing Page</a>';

        $sponsors = [
            [
                "name" => "Google",
                "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/2008px-Google_%22G%22_Logo.svg.png",
                "link" => "https://www.google.com"
            ],
            [
                "name" => "STMIK LIKMI",
                "image" => "https://likmi.ac.id/wp-content/uploads/2018/09/Logo200.png",
                "link" => "https://likmi.ac.id"
            ],
            [
                "name" => "J.CO Indonesia",
                "image" => "https://m.jcodonuts.com/assets/img/logo.png",
                "link" => "https://m.jcodonuts.com/id"
            ],
            [
                "name" => "McD",
                "image" => "https://d2vuyvo9qdtgo9.cloudfront.net/assets/img/brand/logo_mcd.png",
                "link" => "https://www.mcdonalds.co.id/"
            ],
            [
                "name" => "TikTok",
                "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQIpGQVPkP8sMmKieihJFWVnHRM0TIq9UIm76jxJQWs6w&s",
                "link" => "https://www.tiktok.com/"
            ],
            [
                "name" => "Le Minerale",
                "image" => "https://www.leminerale.com/assets/frontend/images/logo.png",
                "link" => "https://www.leminerale.com/"
            ]
        ];
        $faqs = [
            [
                "question" => "What are the benefits of sponsoring a blogging website?",
                "answer" => "When your brand is featured on our popular website, it will be seen by a large audience of potential customers.",
            ],
            [
                "question" => "How much does it cost to sponsor our website?",
                "answer" => "The cost of sponsorship depends on the size of your brand and the length of time you want to sponsor us.",
            ],
            [
                "question" => "How long does it take to sponsor our website?",
                "answer" => "The length of sponsorship depends on the size of your brand and the length of time you want to sponsor us.",
            ],
            [
                "question" => "How do I sponsor your website?",
                "answer" => "Please contact us using the form on this page and we will get back to you with more details.",
            ],
            [
                "question" => "How do I contact you?",
                "answer" => "Please contact us using the form on this page and we will get back to you with more details.",
            ]
        ];

        return view('about', compact('title', 'description', 'button', 'sponsors', 'faqs'));
    }
}
