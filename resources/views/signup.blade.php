<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elegant Dashboard | Sign Up</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="./img/svg/logo.svg" type="image/x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href="./css/style.min.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<body>
  <div class="layer"></div>
<main class="page-center">
  <article class="sign-up">
    <h1 class="sign-up__title">Get started</h1>
    <p class="sign-up__subtitle">Start creating the best possible user experience for you customers</p>
    <form class="sign-up-form form" action="{{ route('signup') }}" method="POST">
      @csrf
      @if (session('error'))
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      @endif
      @if (Session::has('success'))
          <div class="alert alert-success">
              {{ Session::get('success') }}
          </div>
      @endif
      @if (Session::has('error'))
          <div class="alert alert-danger">
              {{ Session::get('error') }}
          </div>
      @endif
      <label class="form-label-wrapper">
        <p class="form-label">Name</p>
        <input class="form-input" type="text" placeholder="Enter your name" name="name" required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Email</p>
        <input class="form-input" type="email" placeholder="Enter your email" name="email" required>
      </label>
      <label class="form-label-wrapper">
        <p class="form-label">Password</p>
        <input class="form-input" type="password" placeholder="Enter your password" name="password" required>
      </label>
      <a class="link-info forget-link" href="{{ route('login') }}">SignIn</a>
      <button class="form-btn primary-default-btn transparent-btn" type="submit" name="submit">Sign Up</button>
    </form>
  </article>
</main>
<!-- Chart library -->
<script src="./plugins/chart.min.js"></script>
<!-- Icons library -->
<script src="plugins/feather.min.js"></script>
<!-- Custom scripts -->
<script src="js/script.js"></script>
</body>

</html>