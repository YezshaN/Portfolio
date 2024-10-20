@extends('Components.layout')

@section('title', 'My Works')

@section('content')
<div class="works-container">
    <h1 class="works-title">Middleware</h1>

    <div class="work-preview">
        <div class="work-photo">
            <img src="{{ asset('images/project4.png') }}" alt="Work Preview 1">
        </div>
        <div class="work-text">
            <h2>Middleware Implementation</h2>
            <p>In this another group project, we focused on implementing middleware in our Laravel application, where we created two components: 
                CheckAge, which checks if a user's age is greater than or equal to 18 and redirects to an “Access Denied” page if the condition 
                is not met, and LogRequests, designed to log all HTTP request details—such as the URL, method, and timestamp—into a file named 
                log.txt. We initially faced several errors during the development process and encountered challenges when pushing our changes 
                to the repository, which required effective communication and collaboration among team members. After successfully registering 
                these middleware components in the app/Http/Kernel.php file for both global and route-specific usage, we created a route group 
                to apply the CheckAge middleware to essential routes, including a welcome page and a dashboard page. Testing the middleware 
                involved simulating different age values to ensure the access control worked correctly in various scenarios. Additionally, 
                we modified the CheckAge middleware to accept a parameter for different minimum age requirements, such as enforcing a restriction 
                for users aged 21 and older. This project significantly deepened our understanding of Laravel's middleware system while enhancing 
                our teamwork skills as we navigated the complexities of collaborative development</p>
            <a class="link-button" href="{{ url('https://github.com/Tel23/GroupProject/blob/master/DOCS%20Middleware/Narvaez_Middleware.pdf') }}">Check Project</a>
        </div>
    </div>
</div>
@endsection

