<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <title>Log In</title>
</head>
<body>
<div class="formbold-main-wrapper">
  <div class="formbold-form-wrapper">
    <form action="/login" method="POST">
        @csrf
        <div class="formbold-input-flex">
          <div>
              <input
              type="email"
              name="email"
              id="email"
              placeholder="jhon@mail.com"
              class="formbold-form-input"
              />
              <label for="email" class="formbold-form-label"> Email </label>
          </div>
          <div>
              <input
              type="password"
              name="password"
              id="password"
              placeholder="Your Password"
              class="formbold-form-input"
              />
              <label for="password" class="formbold-form-label"> Password </label>
          </div>
        </div>
        <button type="submit" class="formbold-btn">
            Log In
        </button>
    </form>
  </div>
</div
</body>
</html>
