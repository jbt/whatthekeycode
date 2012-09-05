<!DOCTYPE html>
<html>
<head>
  <title>What The Key Code?</title>
  <meta name="description" content="JavaScript keyCode finder" />
  <meta name="keywords" content="JavaScript,keyCode,key,code" />

  <style type="text/css">
    body {
      font-weight: 100;
      font-family: "DINPro", "Museo Sans", "Droid Sans", "Helvetica Neue", sans-serif;
      background: #f7f5ef
    }
    #kc, #m {
      position: fixed;
      font-size: 200px;
      text-align: center;
      width: 100%;
      left: 0;
      height: 200px;
      line-height: 200px;
      top: 50%;
      margin-top: -100px;
      color: #a89c8d;
    }
    #m { font-size: 80px; }
    a {
      position: fixed;
      left: 50%;
      margin-left: -64px;
      bottom: 50px;
    }
  </style>
</head>
<body>
  <a href="//www.gosquared.com" title="Made in 5 minutes by GoSquared"><img src="gs.png" /></a>
  <div id="m">Press a key, any key.</div>
  <div id="kc"></div>
  <script>
    document.onkeydown = document.body.onkeydown = function(e){
      e = e || window.event;
      document.getElementById('m').innerHTML = '';
      document.getElementById('kc').innerHTML = e.keyCode || e.which;
      return false;
    };
    GoSquared = {acct: "GSN-550314-B"};
  </script>
  <script src="//d1l6p2sc9645hc.cloudfront.net/tracker.js" async></script>
</body>
</html>