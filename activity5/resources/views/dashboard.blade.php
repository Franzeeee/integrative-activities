<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{asset('css/nav.css')}}">
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
</head>
<body>
    @include('templates/nav')   <!-- Include the navigation bar template -->
<section class="container">
    <h1>Dashboard</h1>
</section>
      <!--Dark Mode Switch-->
      <div class="themeSwitch" id="themeSwitch"></div>
      <script src="{{asset('js/darkTheme.js')}}"></script>
</body>

</html>