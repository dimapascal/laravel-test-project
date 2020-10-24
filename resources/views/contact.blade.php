@extends('layouts.app')

@section('title')Contact @endsection

@section('content')


    <div class="contactForm">
        <form action="{{route('contact-form')}}" method="post">
            <div class="mt-2">
                @include('includes.message')
            </div>

            @csrf
            
            <div class="form-group">
                <label for="name">Enter the name</label>
                <input type="text" name="name" placeholder="Your name" id="name"/>
            </div>
            <div class="form-group">
                <label for="email">Enter the emal</label>
                <input type="email" name="email" placeholder="Your email" id="email"/>
            </div>
            <div class="form-group">
                <label for="subject">Enter subject</label>
                <input type="text" name="subject" placeholder="Subject" id="subject"/>
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea type="text" name="message" placeholder="Message" id="message"></textarea>
            </div>
            <button type="submit">Submit</button>
         </form>
    </div>
@endsection

