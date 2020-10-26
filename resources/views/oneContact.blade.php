@extends('layouts.app')

@section('title')Contacts list @endsection

@section('content')
<div class="contactList">
        <div class="contact">
            <p class="contact__subject">
                {{ $data->subject }}
                </p>
            <p class="contact__email">
                {{ $data->email }}
                </p>
            <p class="contact__time">
                {{ $data->created_at }}
            </p>
            <p class="contact__text">
                {{ $data->message }}
            </p>
        </div>
</div>

@endsection

