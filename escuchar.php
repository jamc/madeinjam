<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Made In JAM</title>
    <link rel="stylesheet" href="css/app.css" />
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <meta property="fb:app_id" content="500570766632503"/>
    <meta property="fb:admins" content="717240601"/>
    <script src="bower_components/modernizr/modernizr.js"></script>
  </head>
  <body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=500570766632503";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <div class="row">
      <div class="large-12 columns" style="text-align: center;">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Made In JAM Header -->
        <ins class="adsbygoogle"
             style="display:inline-block;width:728px;height:90px"
             data-ad-client="ca-pub-3930112284662720"
             data-ad-slot="5573385155"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
      </div>
    </div>

    <div class="row">
      <div class="large-8 columns">
        <div class="row">
          <div class="large-12 columns">
            <h1>Made In JAM</h1>
          </div>
        </div>

        <div class="row">
          <div class="large-12 columns">
            <h2>Audios de Salvador Valadez</h2>
          </div>
        </div>
      </div>
      <div class="large-4 columns">
        <div style="margin-top: 33px;" class="fb-like-box" data-href="https://www.facebook.com/madeinjamoficial" data-width="200" data-height="60" data-colorscheme="light" data-show-faces="false" data-stream="false" data-show-border="true"></div>
      </div>
    </div>

    <div class="row">
      <div class="large-12 columns">
        <ul class="breadcrumbs">
          <li><a href="index.html">Inicio</a></li>
          <li class="current"><a href="#"><?php echo $_GET['titulo']; ?></a></li>
        </ul>
      </div>
    </div>

    <div class="row">
      <div class="large-12 columns">
        <h3><?php echo $_GET['titulo']; ?></h3>
      </div>
    </div>

    <div class="row">
      <div class="large-12 columns">
        <a href="http://yourlisten.com/jacjam/<?php echo $_GET['link']; ?>" id="yl<?php echo $_GET['audio']; ?>">
          <?php echo $_GET['titulo']; ?>
        </a>
        <script src="http://yourlisten.com/embed.js?<?php echo $_GET['audio']; ?>" type="text/javascript" async autoplay></script>
      </div>
    </div>

    <div class="row">
      <div class="large-12 columns">
        <div class="fb-comments" data-href="http://www.madeinjam.com/escuchar.php?audio=<?php echo $_GET['audio']; ?>&titulo=<?php echo $_GET['titulo']; ?>&link=<?php echo $_GET['link']; ?>" data-numposts="15" data-colorscheme="light" data-width="970"></div>
      </div>
    </div>

    <div class="row">
      <div class="large-12 columns">
        <a style="text-align: center; display: block; margin: auto; font-size: 14px; margin-bottom: 50px;" href="mailto:jam@madeinjam.com">Cont&aacute;ctame</a>
      </div>
    </div>

    <div class="row">
      <div class="large-12 columns" style="text-align: center;">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Made In JAM Footer -->
        <ins class="adsbygoogle"
             style="display:inline-block;width:728px;height:90px"
             data-ad-client="ca-pub-3930112284662720"
             data-ad-slot="3957051157"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
      </div>
    </div>

    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/foundation/js/foundation.min.js"></script>
    <script src="js/app.js"></script>

    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-29871605-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>

  </body>
</html>

