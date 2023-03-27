<?php include 'header.php'; ?>
<style type="text/css">
	html {
  height: 100%;
}

body {
  margin: 0px;
  height: 100%;
  display: flex;
  align-items: center;
  align-content: space-around;
}

body,
.example h1,
.example p,
.example .button {
  transition: all .2s ease-in-out;
}

body.light-theme {
  background-color: #151515;
}

body.light-theme .example h1 {
  color: #FFFFFF;
}

body.light-theme .example p {
  color: #FFFFFF;
}

body.light-theme .buttons .button {
  color: #FFFFFF;
  border-color: #FFFFFF;
}

body.light-theme .buttons .button:hover {
  color: #151515;
  background-color: #FFFFFF;
}

.example {
  font-family: 'Roboto', sans-serif;
  width: 550px;
  height: 378px;
  margin: auto;
  padding: 20px;
  box-sizing: border-box;
}

.example .flipdown {
  margin: auto;
}

.example h1 {
  text-align: center;
  font-weight: 100;
  font-size: 3em;
  margin-top: 0;
  margin-bottom: 10px;
}

.example p {
  text-align: center;
  font-weight: 100;
  margin-top: 0;
  margin-bottom: 35px;
}

.example .buttons {
  width: 100%;
  height: 50px;
  margin: 50px auto 0px auto;
  display: flex;
  align-items: center;
  justify-content: space-around;
}

.example .buttons p {
  height: 50px;
  line-height: 50px;
  font-weight: 400;
  padding: 0px 25px 0px 0px;
  color: #333;
  margin: 0px;
}

.example .button {
  display: inline-block;
  height: 50px;
  box-sizing: border-box;
  line-height: 46px;
  text-decoration: none;
  color: #333;
  padding: 0px 20px;
  border: solid 2px #333;
  border-radius: 4px;
  text-transform: uppercase;
  font-weight: 700;
  transition: all .2s ease-in-out;
}

.example .button:hover {
  background-color: #333;
  color: #FFF;
}

.example .button i {
  margin-right: 5px;
}

@media(max-width: 550px) {
  .example {
    width: 100%;
    height: 362px;
  }

  .example h1 {
    font-size: 2.5em;
  }

  .example p {
    margin-bottom: 25px;
  }

  .example .buttons {
    width: 100%;
    margin-top: 25px;
    text-align: center;
    display: block;
  }

  .example .buttons p,
  .example .buttons a {
    float: none;
    margin: 0 auto;
  }

  .example .buttons p {
    padding-right: 0px;
  }

  .example .buttons a {
    display: inline-block;
  }
}

</style>
<title>Event</title>
<div class="main-content">
  <div class="row">
	<div class="example">
  <h1>FlipDown.js</h1>
  <p>⏰ A lightweight and performant flip styled countdown clock</p>
  <div id="flipdown" class="flipdown"></div>
  <div class="buttons">
    <p>Version: <span id="ver"></span> (&lt;11KB minified)</p>
    <a href="https://github.com/PButcher/flipdown#flipdown" class="button"><i class="fab fa-github"></i> <span>Get started</span></a>
  </div>
</div>
</div>

<?php include 'footer.php'; ?>
<script type="text/javascript">
	document.addEventListener('DOMContentLoaded', () => {

  // Unix timestamp (in seconds) to count down to
  var twoDaysFromNow = (new Date().getTime() / 1000) + (86400 * 2) + 1;

  // Set up FlipDown
  var flipdown = new FlipDown(twoDaysFromNow)

    // Start the countdown
    .start()

    // Do something when the countdown ends
    .ifEnded(() => {
      console.log('The countdown has ended!');
    });

  // Toggle theme
  var interval = setInterval(() => {
    let body = document.body;
    body.classList.toggle('light-theme');
    body.querySelector('#flipdown').classList.toggle('flipdown__theme-dark');
    body.querySelector('#flipdown').classList.toggle('flipdown__theme-light');
  }, 5000);
  
  var ver = document.getElementById('ver');
  ver.innerHTML = flipdown.version;
});

</script>