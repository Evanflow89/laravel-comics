<header>
    <div class="container">
      <div class="imgLogo">
        <img src="{{asset('img/dc-logo.png')}}" alt="dc Logo" />
      </div>
      <nav class="mainNav">
        <ul>
            @foreach ($linkhead as $link)
            <li>{{$link['text']}}</li>
            @endforeach
         
          
        </ul>
      </nav>
    </div>
  </header>