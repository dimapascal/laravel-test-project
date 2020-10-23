@extends('layouts.app')

@section('title')Contact @endsection

@section('content')
    <div class="contactForm">
        <div class="formError">
        @if($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
</div>
    <form action="{{route('contact-form')}}" method="post">
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
                <label for="subject">Enter title</label>
                <input type="text" name="subject" placeholder="Title" id="subject"/>
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea type="text" name="message" placeholder="Message" id="message"></textarea>
            </div>
            <button type="submit">Submit</button>
         </form>
    </div>
@endsection

