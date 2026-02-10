<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request){

         return view('welcome');
    }

    public function About(Request $request){

         return view('about');
    }

    public function Price(Request $request){

         return view('price');
    }

    public function Product(Request $request){

         return view('product');
    }

    public function Blog(Request $request){

         return view('blog');
    }

    public function BlogDetails(Request $request){

         return view('blog_details');
    }

    public function PrivacyPolicy(Request $request){

         return view('privacy_policy');
    }

    public function TermService(Request $request){

         return view('terms');
    }

    public function Contact(Request $request){

         return view('contact');
    }


    public function tenantDashboard(Request $request){

         return "hello worldd";
    }

    
}
