<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ __("Laravel") }}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  {{-- <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          container:{
            "xl": "1170px"
          },
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
  </script> --}}
</head>
<body>
  {{-- <section id="navbar">
    <div class="container">
      <!-- Logo box -->
      <div class="logo">
        <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect width="60" height="60" rx="30" fill="white" />
          <path
            d="M21.7432 41V22.7422H22.04L26.9756 30.6836V41H21.7432ZM21.7432 18.4375V15.0234H26.0107L38.2568 34.7656V41H35.7705L21.7432 18.4375ZM33.0244 22.5195V15.0234H38.2568V30.4609H37.96L33.0244 22.5195Z"
            fill="#293241" />
        </svg>
        <h1>Nftx</h1>
      </div>
      <ul>
        <li><a class="{{ request()->is("/") ? "active" : '' }}">Home</a></li>
        <li><a class="{{ request()->is("feature") ? "active" : '' }}" href="{{ route("feature") }}">Feature</a></li>
        <li><a class="{{ request()->is("work") ? "active" : '' }}" href="{{ route("work") }}">Who to work</a></li>
        <li><a class="{{ request()->is("pricing") ? "active" : '' }}" href="{{ route("pricing") }}">Pricing</a></li>
        <li><a class="{{ request()->is("reviews") ? "active" : '' }}" href="{{ route("reviews") }}">Reviews</a></li>
      </ul>
      <div class="button">
        <a href="">Start free 14 trial
          <img src="img/icon/right-arrow.svg" alt="">
        </a>
      </div>
    </div>
  </section> --}}
    {{ $content }}
  {{-- <section id="footer">
    <div class="container">
      <div class="item-1">
        <div class="logo">
          <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="60" height="60" rx="30" fill="#293241" />
            <path
              d="M21.7432 41V22.7422H22.04L26.9756 30.6836V41H21.7432ZM21.7432 18.4375V15.0234H26.0107L38.2568 34.7656V41H35.7705L21.7432 18.4375ZM33.0244 22.5195V15.0234H38.2568V30.4609H37.96L33.0244 22.5195Z"
              fill="white" />
          </svg>
          <h1>Nftx</h1>
        </div>
        <h3 class="first">Nulla facilisi. Vestibulum non est nisl. Donec eget sodales nisl. Donec ut velit erat. </h3>
        <h3 class="last">© 2022 All rights reserved.</h3>
      </div>
      <ul>
        <li>Explore</li>
        <li>Feature</li>
        <li>Who to work</li>
        <li>Pricing</li>
        <li>Reviews</li>
      </ul>
      <ul>
        <li>Privacy policy</li>
        <li>Legal</li>
        <li>Terms of service</li>
        <li>Help center</li>
      </ul>
      <div class="item-2">
        <h1>Social Media</h1>
        <div class="content">
          <div class="box">
            <img src="img/icon/facebook.svg" alt="">
          </div>
          <div class="box">
            <img src="img/icon/facebook.svg" alt="">
          </div>
          <div class="box">
            <img src="img/icon/facebook.svg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section> --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>