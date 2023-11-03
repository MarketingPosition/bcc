<!DOCTYPE html>
<html lang="en-GB">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">

<!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11398725463"></script>
 <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', 
 new Date()); gtag('config', 'AW-11398725463'); </script>

<!-- Google tag (gtag.js) ends here -->

  <title><?php echo $page_name; ?></title>

  <link rel="icon" href="<?php echo $domain; ?>/assets/images/icon-150x150.png" sizes="32x32" />
  <link rel="icon" href="<?php echo $domain; ?>/assets/images/icon.png" sizes="192x192" />
  <link rel="apple-touch-icon-precomposed" href="<?php echo $domain; ?>/assets/images/icon.png" />
  <meta name="msapplication-TileImage" content="<?php echo $domain; ?>/assets/images/icon.png" />
  
  <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@400;700&family=Work+Sans:wght@500;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo $domain; ?>/assets/css/style.css">
  <link rel="stylesheet" href="<?php echo $domain; ?>/assets/css/style-21.css">
  <script src="//widget.manychat.com/2104766309752245.js" defer="defer"></script>
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-N9N73MT');
  </script>
  <!-- End Google Tag Manager -->

  <!-- Bing UET BCC -->
  <script>
    (function(w, d, t, r, u) {
      var f, n, i;
      w[u] = w[u] || [], f = function() {
        var o = {
          ti: "26028617"
        };
        o.q = w[u], w[u] = new UET(o), w[u].push("pageLoad")
      }, n = d.createElement(t), n.src = r, n.async = 1, n.onload = n.onreadystatechange = function() {
        var s = this.readyState;
        s && s !== "loaded" && s !== "complete" || (f(), n.onload = n.onreadystatechange = null)
      }, i = d.getElementsByTagName(t)[0], i.parentNode.insertBefore(n, i)
    })(window, document, "script", "//bat.bing.com/bat.js", "uetq");
  </script>
  <!--  End Bing UET --

<!-- Facebook Pixel Code -->
  <script>
    ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '228106401345618');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=228106401345618&ev=PageView&noscript=1" /></noscript>
  <!-- End Facebook Pixel Code -->

  <!-- Twitter universal website tag code -->
  <script>
    ! function(e, t, n, s, u, a) {
      e.twq || (s = e.twq = function() {
          s.exe ? s.exe.apply(s, arguments) : s.queue.push(arguments);
        }, s.version = '1.1', s.queue = [], u = t.createElement(n), u.async = !0, u.src = '//static.ads-twitter.com/uwt.js',
        a = t.getElementsByTagName(n)[0], a.parentNode.insertBefore(u, a))
    }(window, document, 'script');
    // Insert Twitter Pixel ID and Standard Event data below
    twq('init', 'o6evo');
    twq('track', 'PageView');
  </script>
  <!-- End Twitter universal website tag code -->