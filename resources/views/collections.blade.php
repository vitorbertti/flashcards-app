<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="{{ asset('site/style.css') }}">
   <title>My collections</title>
</head>

<body>
   <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <a class="navbar-brand" href="#">Flashcards app</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
               <a class="nav-item nav-link " href="/">Home </a>
               <a class="nav-item nav-link active" href="/my-collections">My collections<span class="sr-only">(current)</span></a>
               <a class="nav-item nav-link" href="#">Sign out</a>
            </div>
         </div>
      </nav>

   </header>

   <h1 class="text-center mt-2">My Collections</h1>



   <script src="{{ asset('site/jquery.js') }}"></script>
   <script src="{{ asset('site/bootstrap.js') }}"></script>
</body>

</html>