<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{asset('css/nav.css')}}">
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
</head>
<body>
   
    @include('templates/nav')   <!-- Include the navigation bar template -->
    <div class="container">
        <div class="form-container">
            <h3>Register Here</h3>
            <form method="GET" action="{{route('dashboard.index')}}">
                <div class="form-group">
                  <label for="exampleInputEmail1">Complete Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" autocomplete="off" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Phone number</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" autocomplete="off" aria-describedby="emailHelp">
                  </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" autocomplete="off" aria-describedby="emailHelp">
                  </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="text" class="form-control" autocomplete="off" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
              </form>
        </div>
    </div>
    

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#0099ff" fill-opacity="1" d="M0,96L34.3,133.3C68.6,171,137,245,206,256C274.3,267,343,213,411,192C480,171,549,181,617,202.7C685.7,224,754,256,823,272C891.4,288,960,288,1029,277.3C1097.1,267,1166,245,1234,224C1302.9,203,1371,181,1406,170.7L1440,160L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
      </svg>


      <!--Dark Mode Switch-->
      <div class="themeSwitch" id="themeSwitch"></div>
      <script src="{{asset('js/darkTheme.js')}}"></script>
</body>
</html>