@section('header')

    <header>
        <p class="title">Header</p>
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('contact') }}">Contact</a>
            <a href="{{ route('allContacts') }}">All Contacts</a>
        </nav>
    </header>
