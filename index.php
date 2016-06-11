<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<link href="css/jquery.bxslider.css" rel="stylesheet" />
<link rel="stylesheet" href="jquery.peekABar-1.0.1/dist/css/jquery.peekabar.min.css">
<script src="jquery.peekABar-1.0.1/dist/js/jquery.peekabar.min.js"></script>
<script type="text/javascript">
        $(document).ready(function(){
            $('.bxslider').bxSlider({
                auto: true,
            });
            $('#prof').fadeIn(1500);
        var bar = new $.peekABar();
        bar.show('thank you');
        // bar.hide();
        });

</script>
    <title>DAIKON</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bk">
<div class="div1">
<div class="center"><img class="logo2" src="img/logo2.png"></div>
  <div class="center"><img class="logo" src="img/logo.png"></div>

    <div class="center">
    <ul class="menu">
     <li class="nav"><a href="#prof">PROFILE</a></li>
     <li class="nav"><a href="#work">WORKS</a></li>
     <li class="nav"><a href="#contact">CONTACT</a></li>
    </ul>
  </div>
</div>

<div class="div2" id="prof" style="display:none">
  <div class="center"><img src="img/face.png" class="face"></div>
  <h1><a class="name"><div class="center>">KONNO DAICHI</div></a></h1>
  <div class="center"><a class="subtitle">GRAPHIC DESIGNER</a></div>
    <div class="hello"><a class="hello">Hi my name is Daichi.<br>
        I was born and raised in Japan.</a></div>
</div>

<div class="center">
<div class="bxslider" id="work">
  <li><img src="img/laCatrina.png" /></li>
  <li><img src="img/laCatrinaPc.png" /></li>
  <li><img src="img/laCarrinaSc.png" /></li>
</div>
</div>

<div class="div4" id="contact">

<form action="coment.php" method="post">
    <dt class="table" >Your name</dt>
    <dd><input class="input1" type="text" name="name"></input></dd>
    <dt class="table">Your e-mail</dt>
    <dd><input class="input2" type="text" name="email"></input></dd>
    <dt class="table">Your message</dt>
    <dd><textarea class="input3" type="text" name="coments"></textarea></dd>
    <dd><input type="submit" value="send"></dd>
</form>
</div>

</div>


<script src="js/script.js"></script>
</body>
</html>