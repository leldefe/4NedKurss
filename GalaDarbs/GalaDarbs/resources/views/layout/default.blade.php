<!DOCTYPE html>
<html>
<head>
    <title>Welcome!</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
   <link rel="stylesheet" href="<?php echo asset('css/StyleSheet.css')?>" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <header class="bg-dark text-light">
  @include('layout.navigation')
</header>

<main class="container mb-5 pb-5">
    <?php if(Auth::user()){
        // echo("Sveiki, ". Auth::user()->name);
    }   ?>
    <br>
    @if(Auth::user())
        <!-- Sveiki, {{ Auth::user()->name }} -->
    @endif

    <!-- @yield('content') -->

    @section('content')
        <h1>Lapa izstrādes stadijā</h1>
    @show

</main>

<footer class="container-fluid bg-dark text-light text-center fixed-bottom" id="footer1">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <!-- <div class="row"> -->

                <div class="col-4 text-light text-left">
                    <div id="year">Riga Coding School</div>
                </div>
                <div class="col-4 text-light text-center">

                    By Lelde Feldmane

                </div>
                <div class="col-4 text-light text-right">
                    <p>2018</p>
                </div>
            </div>
        </nav> 
    </footer>







    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script type="text/javascript">

</body>

</html>