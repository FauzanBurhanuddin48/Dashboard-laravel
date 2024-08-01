@extends('layouts.navbar')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Beranda</title>
  <link rel="icon" href="/images/op.png" type="image/png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Helvetica, sans-serif;
      background-color: #f5f5f5;
    }

    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      min-height: 60vh;
      padding: 20px;
    }

    .container-1 {
      background-color: #124574;
      color: white;
      
    }

    .container-2 {
      background-color: yellow;
      color: black;
    }

    .container-3 {
      background-color: white;
      color: black;
    }

    .title {
      color: inherit; /* Inherit color from container */
      font-size: 45px;
      text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
      opacity: 0;
      animation: fadeInUp 1s ease-in-out forwards;
    }

    .subtitle {
      color: inherit; /* Inherit color from container */
      margin-top: 10px;
      font-size: 35px;
      text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
      opacity: 0;
      animation: fadeInUp 1s ease-in-out 0.5s forwards;
    }

    .text-content {
      margin: 20px 0;
      font-size: 18px;
      line-height: 1.5;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>
<body>
  <!-- Container 1 -->
  <div class="container container-1">
    <h1 class="title animate">WELCOME TO</h1>
    <h2 class="subtitle animate">Fauzan Page</h2>
  </div>

  <!-- Container 2 -->
  <div class="container container-2">
    <div class="text-content">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel sagittis nulla, at tempus metus. Fusce et tincidunt felis, vitae vehicula magna. Cras condimentum quam at nisi bibendum, vel accumsan justo vehicula. In hac habitasse platea dictumst. Vivamus ac ex id ante feugiat sollicitudin nec nec sapien.
    </div>
  </div>

  <!-- Container 3 -->
  <div class="container container-3">
    <div class="text-content">
      Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
    </div>
  </div>
</body>
</html>
@extends('layouts.footer')
