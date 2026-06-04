@extends('layout')

@section('pageTitle')
    Contact
@endsection

@section('pageContent')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <form>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" name="subject" class="form-control" id="subject">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" name="message" id="message" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
                <div class="d-flex justify-content-center mt-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d38108.38469859964!2d20.41677687675514!3d44.80239622280412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a700ca7258e8f%3A0xbe11391a6fc0344c!2sChurch%20of%20Saint%20Sava!5e1!3m2!1sen!2sba!4v1780589513530!5m2!1sen!2sba" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
