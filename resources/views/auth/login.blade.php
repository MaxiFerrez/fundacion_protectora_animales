<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('app.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <title>Login</title>
</head>
<body>
      
      
   <div class="container">
    <form action="{{ route ('login') }}" method="POST" >
        @csrf
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" name="email" value="{{ old ('email')}}" placeholder="Email...">
        {{-- @error('email')<div>{{message}}</div>  @enderror --}}
        </label>
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Password</label>
        <input type="password" name="password" placeholder="Paswsword...">
         </label>
         </div>
         <div class="mb-3">
         <input type="submit" value="Login">
         </label>
         </div>
    
    </form>
   </div>
</body>
</html>

