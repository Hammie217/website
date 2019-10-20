<!DOCTYPE html>

<html>
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=UA-135924924-1"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'UA-135924924-1');
    </script>

    <meta
      name="description"
      content="Software Engineer, CS & Maths graduate, event organiser & speaker"
    />
    <meta name="author" content="Katie Walker" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <title>
      Katie Walker - Software Engineer
    </title>
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap"
      rel="stylesheet"
    />
    <link
      rel="shortcut icon"
      href="http://www.iconj.com/gif_icon.php?pid=ix9ic309lp"
      type="image/gif"
    />

    <link href="public/stylesheets/bootstrap.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="public/stylesheets/style.css" />
    <link
      rel="stylesheet"
      href="public/stylesheets/mobile.css"
      media="screen and (max-width: 770px)"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/gh/tonsky/FiraCode@1.206/distr/fira_code.css"
    />

  </head>

  <body onload="showLoading()">
    <script
      defer
      src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"
    ></script>

    <div id="page">
      <div class="intro text-center" autofocus>
        <div id="title-container" class="title containerfluild row">
          <div class="col-md-2"></div>
          <div class="logos col-md-1 left">
            <a style="cursor: pointer" id="contactBtn" target="_top">
              <i class="fas fa-envelope"></i>
            </a>
          </div>
          <div class="logos col-md-1 right">
            <a href="https://www.twitter.com/kat_codes">
              <i class="fab fa-twitter"></i>
            </a>
          </div>
          <div class="col-md-4"><h1>Katie Walker</h1></div>
          <div class="logos col-md-1 left">
            <a href="https://www.linkedin.com/in/katiew812/">
              <i class="fab fa-linkedin"></i>
            </a>
          </div>
          <div class="logos col-md-1 right">
            <a href="https://www.github.com/katiew812">
              <i class="fab fa-github"></i>
            </a>
          </div>
          <div class="col-md-2"></div>

          <div class="col-sm-12">
            <div class="scrolling-text">
              <p class="item1">Software Engineer</p>
              <p class="item2">
                Event organiser & speaker
                <span
                  class="iconify"
                  data-icon="fxemoji:microphone"
                  data-inline="false"
                ></span>
              </p>
              <p class="item3">CS & Maths graduate</p>
            </div>
          </div>
        </div>
        <div class="shortcuts">
          <a class="btn draw-border" id="scroll">Welcome!</a>
        </div>
      </div>

      <div class="contact" id="contact">
        <div class="innerContainer">
          <h2>Contact</h2>
          <div data-aos-once="true" data-aos-delay="100">
            <form action="https://formcarry.com/s/rylrprtMX" method="POST">
              <div class="form-item">
                <input
                  type="email"
                  name="email"
                  placeholder="Email"
                  id="email"
                />
              </div>

              <div class="form-item">
                <textarea
                  rows="5"
                  type="message"
                  name="message"
                  placeholder="Message"
                  id="message"
                ></textarea>
              </div>

              <div class="form-submit">
                <input type="submit" value="Submit" />
              </div>
            </form>
          </div>
        </div>
      </div>
    
      <footer>
        <i style="color: #df4e7f" class="fas fa-code"></i> with
        <i style="color: red;" class="fas fa-heart"></i> by
        <a href="https://www.linkedin.com/in/katiew812/">Katie</a>
      </footer>
    </div>
    <div id="loader">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </div>

    <script src="public/scripts/jquery.js"></script>
    <script src="public/scripts/bootstrap.js"></script>
    <script src="public/scripts/aos.js"></script>

    <script src="public/scripts/loading.js"></script>
    <script src="public/scripts/modal-popup.js"></script>
    <script src="public/scripts/scroll.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
