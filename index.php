<!doctype html>
<html lang="ja">
<head>
    <title>Startline</title>
    <meta charset="utf-8">
    <meta name="robots" content="nofollow">
    <link rel="stylesheet" href="./lib/colorbox.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <script src="./js/index.js"></script>
    <script src="./js/clock.js"></script>
    <script src="./config.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.js"></script>
    <script src="./lib/jquery.colorbox-min.js"></script>
    <script>
    $(function() {
        $(".youtube").colorbox({iframe:true, width:"80%", height:"80%"});
    });
</script>
</head>
<body>
<h1>
<!-- <a class='youtube' href="https://www.youtube.com/embed/RKNwzeUwRv8?controls=0&amp;autoplay=1&amp;loop=1&amp;rel=0&amp;modestbranding=1&amp;showinfo=0"> 

 </a> -->
 <img id="logo" src="./img/logo.png" alt="logo">
</h1>
<nav>
    <a href="https://mail.google.com">Gmail</a>
    <a href="https://google.com">Google</a>
    <a href="https://www.google.com/imghp">画像検索</a>
    <a rel="me" href="https://imastodon.net/">imastodon</a>
</nav>

<!--<main>
<div id="services">
<div class="category">
<h2>Social</h2>
<a class="service" href="https://imastodon.net"><i class="fas fa-at"></i>im@stodon</a>
<a class="service" href="https://twista.283.cloud"><i class="fas fa-comment"></i>twista</a>
<a class="service" href="https://twitter.com"><i class="fab fa-twitter"></i>Twitter</a>
</div>
</div>
</main>-->

<div id="more">
    <span id="date"></span>
    <span id="clock"></span>

</div>
<div class="ticker-wrap">
<div id="mqleft">美咲のつぶやき</div>
<div class="ticker">
<div class="ticker__item">なんとぉー！ロゴの下にあるスイッチをONにするとBGMが流れちゃいますよぉ〜♪ えへへぇ♪  </div>

<div class="ticker__item">イベントを開催中です♪明日もログインすると、きっといいことがあると思いますよぉ～。えへへぇ♪  </div>
</div>
</div>

<style>
 button {
    background-color: transparent;
    border: none;
    cursor: pointer;
    outline: none;
    padding: 0;
    appearance: none;
}
 
#Audio-Control {
    overflow: hidden;
    margin-left:20px;
    
}
 
#Audio-Control button {
    border: 1px solid #ccc;
    width: 100px;
    float: left;
    padding: 5px 0;
    -webkit-transition: all 0.6s ease;
    -moz-transition: all 0.6s ease;
    -o-transition: all 0.6s ease;
    transition: all 0.6s ease;
    background: rgba(204, 204, 204, 0.3);
}
 
#Audio-Control button.on {
    border-left: none;
}
 
#Audio-Control button.off {
    border-right: none;
}
 
#Audio-Control button.active {
    background: #ccc;
}
 
#Audio-Control button:not(.active):hover {
    background: rgba(204, 204, 204, 0.3);
}
</style>
<div id="Audio-Control">
    <audio id="bgm" preload autoplay loop muted>
        <source src="//million.765pro-theater.com/bgm/bgm.mp3" type="audio/mpeg">
    </audio>
    <button onclick="enableMute()" class="off active" type="button">BGM OFF</button>
    <button onclick="disableMute()" class="on " type="button">BGM ON</button>
</div>
<script>
    var el = document.getElementById("bgm");
 
 function enableMute() {
     el.muted = true;
 }
  
 function disableMute() {
     el.muted = false;
 }
  
 $(function(){
     $('#Audio-Control button').click(function(){
         $('#Audio-Control button').toggleClass('active');
     });
 });
 </script>
</body>
</html>
