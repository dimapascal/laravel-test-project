    <div class="formError">
        @if($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
    </div>

    <div class="formSuccess">
        @if(session('success'))
            <p>
                {{session('success')}}
            </p>
        @endif
    </div>