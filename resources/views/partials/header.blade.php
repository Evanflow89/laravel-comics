<header>
    <div class="container">
      <div class="imgLogo">
        <a href="{{route('home')}}""><img src="{{asset('img/dc-logo.png')}}" alt="dc Logo" /></a>
        
      </div>
      <nav class="mainNav">
        <ul>
            @foreach ($linkhead as $link)
            <li><a href="{{$link['url']}}">{{$link['text']}}</a></li>
            @endforeach
         
          
        </ul>
      </nav>
    </div>
  </header>