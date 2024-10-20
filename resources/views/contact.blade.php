@extends('Components.layout')

@section('title', 'Contact')

@section('content')
<div class="contact-container">
    <div class="contact-info">
        <h2>I'd like to hear from you</h2>
        <p>Yezsha T. Narvaez</p>
        <p>Email: ytn2022-9703-63780@bicol-u.edu.ph</p>
        <p>Phone: 09178912276</p>
    </div>
    <form id="contact-form" class="contact-form">
        <div class="form-group">
            <div class="form-row">
                <div class="form-column">
                    <label for="first-name">First Name *</label>
                    <input type="text" id="first-name" name="first-name" placeholder="Your First Name" required>
                </div>
                <div class="form-column">
                    <label for="last-name">Last Name *</label>
                    <input type="text" id="last-name" name="last-name" placeholder="Your Last Name" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="form-row">
                <div class="form-column">
                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" placeholder="Your Email" required>
                </div>
                <div class="form-column">
                    <label for="phone">Phone</label>
                    <input type="text" id="phone" name="phone" placeholder="Your Phone Number">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="message">Leave a message...</label>
            <textarea id="message" name="message" rows="5" placeholder="Your Message" required></textarea>
        </div>
        <div class="form-group">
            <button type="submit">Submit</button>
        </div>
        <div id="alert" class="alert" style="display: none;">
            Please fill out all required fields.
        </div>
    </form>
</div>
@endsection

@section('script')
<script>
document.getElementById('contact-form').addEventListener('submit', function(event) {
    let requiredFields = document.querySelectorAll('#contact-form [required]');
    let allFilled = true;

    requiredFields.forEach(function(field) {
        if (!field.value) {
            allFilled = false;
        }
    });

    if (!allFilled) {
        event.preventDefault(); 
        document.getElementById('alert').style.display = 'block';
    }
});
</script>
@endsection