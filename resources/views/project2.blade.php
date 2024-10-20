@extends('Components.layout')

@section('title', 'My Works')

@section('content')
<div class="works-container">
    <h1 class="works-title">Laravel Set up</h1>

    <div class="work-preview">
        <div class="work-photo">
            <img src="{{ asset('images/project2.png') }}" alt="Work Preview 1">
        </div>
        <div class="work-text">
            <h2>Initial Configuration</h2>
            <p>The initial phase of this project involved setting up Laravel for the first time, which proved to be a significant learning 
                curve for me. I started by installing Laravel and its dependencies, which included configuring the necessary environment settings. 
                Despite encountering several errors during the installation process—such as missing PHP extensions and misconfigured database 
                connections—I remained persistent and sought solutions through documentation and online resources. This hands-on experience 
                not only helped me overcome initial challenges but also solidified my understanding of Laravel's structure and functionalities. 
                By the end of this phase, I successfully created a Laravel project and pushed it to a Git repository, ensuring that my work 
                was version-controlled. Additionally, I configured the .env file with the appropriate database connection details, allowing 
                me to create and run routes effectively. This setup phase laid a crucial foundation for my future work with Laravel, as I 
                gained insight into the purpose of key directories and files, enabling me to navigate the framework with greater confidence.</p>
            <a class="link-button" href="{{ url('https://github.com/YezshaN/Laboratory-1/blob/master/DOCS/NARVAEZ_YEZSHA_LAB1.pdf') }}">Check Project</a>
        </div>
    </div>
</div>
@endsection

