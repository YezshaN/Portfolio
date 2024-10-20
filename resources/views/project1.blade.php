@extends('Components.layout')

@section('title', 'My Works')

@section('content')
<div class="works-container">
    <h1 class="works-title">Homework</h1>

    <div class="work-preview">
        <div class="work-photo">
            <img src="{{ asset('images/project1.png') }}" alt="Work Preview 1">
        </div>
        <div class="work-text">
            <h2>Framework Listing</h2>
            <p>For this homework, we are tasked to list down at least 5 examples of websites or apps for each framework architecture.
                I focused on researching various web development frameworks, like Laravel, Django, and Angular, and such to identify at
                least five examples of websites or apps for each. I explored the internet to understand their capabilities and applications, 
                compiling my findings in a structured format. This research allowed me to grasp the strengths and unique features of each 
                framework while enhancing my understanding of their relevance in web development. Overall, this assignment sparked my interest 
                in these tools and motivated me to explore their functionalities further in my future projects</p>
            <a class="link-button" href="{{ url('images/Narvaez_Yezsha_1.pdf') }}">Check Project</a>
        </div>
    </div>
</div>
@endsection

