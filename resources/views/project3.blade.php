@extends('Components.layout')

@section('title', 'My Works')

@section('content')
<div class="works-container">
    <h1 class="works-title">Layout</h1>

    <div class="work-preview">
        <div class="work-photo">
            <img src="{{ asset('images/project3.png') }}" alt="Work Preview 1">
        </div>
        <div class="work-text">
            <h2>View Structuring</h2>
            <p> In this second project, we collaborated as a group to design the layout of our Laravel application. 
                This phase was marked by both excitement and challenges, as we encountered various errors related to routing and view rendering. 
                We began by defining basic routes to establish a seamless user experience; for instance, we created a route for the homepage 
                that displayed a welcoming message, as well as routes for the "About Us" page and a "Contact Us" form. As we progressed, 
                we incorporated route parameters to enhance functionality, allowing users to receive personalized messages based on input. 
                The requirement to implement optional parameters and enforce regular expression constraints for usernames added complexity, 
                but it ultimately refined our routing logic. Throughout this project, we learned the importance of collaboration and
                 problem-solving in real-time. By pooling our knowledge and skills, we were able to address errors collectively and enhance 
                 the overall layout of our application, ensuring it was user-friendly and functional. as a group to design the layout of our 
                 Laravel application. This phase was marked by both excitement and challenges, as we encountered various errors related to routing 
                 and view rendering. We began by defining basic routes to establish a seamless user experience; for instance, we created a route 
                 for the homepage that displayed a welcoming message, as well as routes for the "About Us" page and a "Contact Us" form. 
                 As we progressed, we incorporated route parameters to enhance functionality, allowing users to receive personalized messages 
                 based on input. The requirement to implement optional parameters and enforce regular expression constraints for usernames 
                 added complexity, but it ultimately refined our routing logic. Throughout this project, we learned the importance of 
                 collaboration and problem-solving in real-time. By pooling our knowledge and skills, we were able to address errors 
                 collectively and enhance the overall layout of our application, ensuring it was user-friendly and functional.</p>
            <a class="link-button" href="{{ url('https://github.com/Tel23/GroupProject/blob/master/DOCS%20Layout/NARVAEZ_YEZSHA_LAYOUT.pdf') }}">Check Project</a>
        </div>
    </div>
</div>
@endsection

