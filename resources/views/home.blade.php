@extends('Components.layout')

@section('title', 'My Portfolio')

@section('content')
<div class="container"> 
    <div class="photo-card">
        <img src="{{ asset('images/pic1.jpg') }}" alt="Your Photo"> 
    </div>
    <div class="text-content">
        <h1>Welcome to My Portfolio</h1>
        <p>Hello! <strong>I am Yezsha T. Narvaez.</strong> Here, you can explore my works and get to know me better. As a web development student, I have focused this semester on building websites using Laravel. My projects showcase the practical skills I’ve gained and my approach to creating functional and user-friendly applications.</p> <p>In this portfolio, you’ll find a showcase of my recent activities and the lessons I’ve learned along the way. I believe that every project is an opportunity for growth, and I am excited to share my journey with you. Thank you for visiting, and I hope you enjoy exploring my work!</p>
    </div>
    <div class="shapes">
        <div class="line"></div>
        <div class="circle"></div>
        <div class="rectangle"></div>
    </div>
</div>
@endsection
