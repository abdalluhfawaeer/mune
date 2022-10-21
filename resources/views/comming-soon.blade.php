<!DOCTYPE html>
<html>
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bgimg {
  background-image: url({{ asset('soon.jpg') }});
  height: 100%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: white;
  font-family: "Courier New", Courier, monospace;
  font-size: 25px;
}

.topleft {
  position: absolute;
  top: 0;
  left: 16px;
}

.bottomleft {
  position: absolute;
  bottom: 0;
  left: 16px;
  color: black
}

.middle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  color: black
}

hr {
  margin: auto;
  width: 40%;
}
img {
    width: 100px;
}
</style>
<body>

<div class="bgimg">
  <div class="topleft">
    <p><img src="{{ asset('mf_logo.png') }}" alt=""></p>
  </div>
  <div class="middle">
    <h1>COMING SOON</h1>
    <hr>
  </div>
  <div class="bottomleft">
    <p>menuface.com</p>
  </div>
</div>

</body>
</html>
