<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="{{ asset('site/style.css') }}">
   <title>Sign in</title>
</head>

<body>

   <header>
      <h1 class="text-center mt-5  mb-5">Flashcards App</h1>
   </header>

   <main class="d-flex justify-content-center align-items-center mt-5 pt-5">

      <form class="w-25">
         <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" />
         </div>
         <div class=" form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" />
         </div>

         <button type="submit" class="btn btn-primary w-100 mt-3">Sign in</button>
      </form>

   </main>

   <script src="{{ asset('site/jquery.js') }}"></script>
   <script src="{{ asset('site/bootstrap.js') }}"></script>

</body>

</html>