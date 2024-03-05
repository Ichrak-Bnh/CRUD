<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/storage/logo.png')}}">
    <title>admin</title>



    <style>
body{
  background-image: url("{{asset('/back.jpg')}}");
  background-size: cover;
   background-position: center;
   background-attachment: fixed;
   background-repeat: no-repeat;
}
.wrapper{
    width: 250px;
    height: 250px;
    background-color: rgba(0,0,0,0.9);
    box-shadow: 0 0 50px #0ef;
    top: 250px;
    left: 600px;
    position: absolute;
    border-radius: 20px;
    padding: 30px 40px;
}
.wrapper h2{
  font-size: 30px;
  text-align: center;
  color: aliceblue;
}
.button a{
  align-items: center;
  background-image: linear-gradient(144deg,#AF40FF, #5B42F3 50%,#00DDEB);
  border: 0;
  border-radius: 8px;
  box-shadow: rgba(151, 65, 252, 0.2) 0 15px 30px -5px;
  box-sizing: border-box;
  color: #FFFFFF;
  display: flex;
  font-family: Phantomsans, sans-serif;
  font-size: 20px;
  justify-content: center;
  line-height: 1em;
  max-width: 100%;
  min-width: 140px;
  padding: 19px 20px;
  text-decoration: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  white-space: nowrap;
  cursor: pointer;
  margin-top: 10px;
  
}


    </style>

      <!--<link href="/css/app.css" rel="stylesheet">-->
</head>
<body>
    
    <main >
        @yield('content')
    </main>
      
  </body>
</html>