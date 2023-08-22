<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <title>Sign Up</title>
</head>
<body>
<div class="formbold-main-wrapper">
  <div class="formbold-form-wrapper">
    <form action="/register" method="POST">
        @csrf
        <div class="formbold-input-flex">
          <div>
              <input
              type="text"
              name="name"
              id="name"
              placeholder="jhon"
              class="formbold-form-input"
              />
              <label for="name" class="formbold-form-label"> Name </label>
          </div>
          <div>
              <input
              type="password"
              name="password"
              id="password"
              placeholder="Your Password"
              class="formbold-form-input"
              />
              <label for="lastname" class="formbold-form-label"> Password </label>
          </div>
        </div>

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
              type="text"
              name="phone"
              id="phone"
              placeholder="(319) 555-0115"
              class="formbold-form-input"
              />
              <label for="phone" class="formbold-form-label"> Phone </label>
          </div>
        </div>
        <button class="formbold-btn">
            Create
        </button>
    </form>
  </div>
</div
</body>
</html>
