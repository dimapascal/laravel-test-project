@extends('layouts.app')

@section('title')Contacts list @endsection

@section('content')
<div class="contactList">
    @foreach ($data as $contact)
        <div class="contact">
            <p class="contact__subject">
                {{ $contact->subject }}
                </p>
            <p class="contact__email">
                {{ $contact->email }}
                </p>
            <p class="contact__time">
                {{ $contact->created_at }}
            </p>
        <a href="{{ route('contactById',$contact->id) }}">View</a>
        </div>
    @endforeach
</div>

@endsection

