<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <title>{{ auth()->user()->name }} Member Card</title>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap");
    * {
      padding: 0;
      margin: 0;
      color: #0a1931;
      font-family: 'Open Sans', sans-serif;
    }
    body {
      width: 100vw;
      height: 56.25vw;
    }
    img {
      position: absolute;
      z-index: -1;
      width: 700px;
    }
    .content {
      position: absolute;
      z-index: 3;
      top: 150px;
      left: 60px;
      background-color: white;
    }
    p {
      font-weight: bold;
      font-size: 20px;
      margin-top: 2mm;
    }
    @media print {
      @page { 
        margin: 0; 
        size: 160mm 90.5mm;
      }
      img {
        width: 100%;
      }
      .content {
        top: 34.5mm;
        left: 13.5mm;
        width: 110mm;
      }
      p {
        font-size: 13pt;
        font-weight: 600;
      }
    }
  </style>
</head>
<body>
  <img src="/img/member-card.png" alt="">
  <div class="content">
    <p>{{ auth()->user()->name }}</p>
    <p>Email: {{ auth()->user()->email }}</p>
    <p>Major: {{ auth()->user()->profile->major }}</p>
    <p>Member ID: {{ auth()->user()->profile->member_id }}</p>
  </div>
  <script>
    window.print();
  </script>
</body>
</html>