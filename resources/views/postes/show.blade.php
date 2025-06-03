
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('Hello bro')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  </head>
  <body>
    <h1>Facebook Postes</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
 
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('postes.index')}}">Home</a>
       <a class="navbar-brand" href="#">Contact Us</a>


    
    </div>
  </div>
</nav> <br><br><br>
<div class="card">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 >Title:{{$postDB->title}}</h5>
    <p class="card-text">Descriotion of the item is :{{$postDB->description}}</p>
    <p class="card-text">This Post was created by  :{{$postDB->created_By}}</p>

  </div>
</div>




 </body>
</html>

