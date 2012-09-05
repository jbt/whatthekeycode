<!DOCTYPE html>
<html>
<head>
  <title>What Key Code?</title>
  <style type="text/css">
    #kc {
      position: fixed;
      font-size: 200px;
      text-align: center;
      width: 100%;
      left: 0;
      height: 200px;
      top: 50%;
      margin-top: -100px;
    }
  </style>
</head>
<body>
  <div id="kc"></div>
  <script>
    document.onkeydown = function(e){
      document.getElementById('kc').innerHTML = e.keyCode || e.which;
    };
  </script>
</body>
</html>