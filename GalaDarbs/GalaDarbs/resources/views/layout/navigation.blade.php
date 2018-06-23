<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 <a class="navbar-brand" href="GalaDarbsWEB.html"><img src="http://www.bambistro.ca/wp-content/uploads/bam-logo-750x517-no-blue.png" id="logo" width=100px></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse text-light" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

<?php
$navigation=[
        'welcome'=> route('home'), 
        'login'=> route('auth.login'),
        'logout'=> route('auth.logout'),
        'register'=>route('auth.register'),
        // 'sudoku'=> route('layout.sudoku'), 
        'meme'=> route('home'). "#jumpReadMore" 
    ];
?>
       @foreach($navigation as $name => $url)


          
          @if( 
              ($name != 'logout' && $name != 'login' ) 
            || 
              ( Auth::user() && $name=='logout' ) 
            || 
              ( !Auth::user() && $name=="login")  
            )
        
            <li class="nav-item">
                <a 
                    class="nav-link {{ (url()->current() == $url) ? 'active'  : '' }}" 
                    href="{{$url }}">
                    {{$name}}
                </a>
            </li>

          @endif

        @endforeach


    
    </ul>
  </div>
</nav>