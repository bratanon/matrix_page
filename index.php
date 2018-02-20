<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>SERVER</title>
  <link rel="stylesheet" href="style.css" media="all" />
  <script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>$(document).ready(function(){var e=$(window).width();var t=$(window).height();$foo=$("#foo");$foo.attr({width:e,height:t}).css({width:e});$(window).resize(function(){e=$(window).width();t=$(window).height();$foo.attr({width:e,height:t}).css({width:e})});var n=Array(300).join(0).split("");var r=foo.getContext("2d");var i=function(){r.fillStyle="rgba(0, 0, 0, .05)";r.fillRect(0,0,e,t);r.fillStyle="#0F0";r.font="10px Georgia";n.map(function(e,t){text=String.fromCharCode(100+Math.random()*1e3);x=t*10+10;foo.getContext("2d").fillText(text,x,e);if(e>100+Math.random()*1e4){n[t]=0}else{n[t]=e+10}})};setInterval(i,33)})</script>
</head>
<body>
  <canvas id="foo"></canvas>
  <section id="conent">
    <h1>SERVER</h1>
    <p>I SMICK THE SMACK IN POMMAC</p>
  </section>
</body>
</html>
