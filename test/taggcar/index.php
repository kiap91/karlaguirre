    <!DOCTYPE html>
    <html>
    <head>
        <?php include_once("php/metas.php") ?>
        <title>taggcar</title>
        <?php include_once("php/links.php") ?>
        <?php include_once("php/header.php") ?>
    </head>
    <body>
        <section id="home">
            <div class="height150"></div>
            <div class="container">
                <div class="row">
                    <div class="title">
                        <h1>Carpooling simplified</h1>
                        <h3>Share the journey, save the planet!</h3>
                    </div>
                    <div class="carbase">
                        <div id="bm" class="rotating"></div>
                    </div>
                    <div class="sliderWrap">
                        <div class="middleText">
                            <!-- <h3>Bring</h3>
                            <h2>taggcar</h2>
                            <h3>to your campus</h3>
                            <form id="sendmail" action="mail.php" method="post">                        
                                <div class="formWrap">
                                    <input class="email" type="email" name="email" placeholder="example@school.edu">
                                    <input class="join" type="submit" value="Join">
                                </div>
                            </form> -->
                            <h3>Join our community on</h3>
                        	<h2>TikTok</h2>
                            <a class="topicon" target="_blank" href="https://www.tiktok.com/@taggcar">

                            <svg height="512pt" viewBox="-32 0 512 512" width="512pt" xmlns="http://www.w3.org/2000/svg"><path d="m432.734375 112.464844c-53.742187 0-97.464844-43.722656-97.464844-97.464844 0-8.285156-6.714843-15-15-15h-80.335937c-8.28125 0-15 6.714844-15 15v329.367188c0 31.59375-25.707032 57.296874-57.300782 57.296874s-57.296874-25.703124-57.296874-57.296874c0-31.597657 25.703124-57.300782 57.296874-57.300782 8.285157 0 15-6.714844 15-15v-80.335937c0-8.28125-6.714843-15-15-15-92.433593 0-167.632812 75.203125-167.632812 167.636719 0 92.433593 75.199219 167.632812 167.632812 167.632812 92.433594 0 167.636719-75.199219 167.636719-167.632812v-145.792969c29.851563 15.917969 63.074219 24.226562 97.464844 24.226562 8.285156 0 15-6.714843 15-15v-80.335937c0-8.28125-6.714844-15-15-15zm0 0"/></svg>

                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="wireframe1"></div>

        </section>

        <section id="about" class="textureBgSection" style="background-image: url('assets/img/bg2.jpg');">
            <div class="container">
                <section class="step_to_step container" id="step">
            <div class="text">
                <h2>Our Mission</h2>
              <p><b>Our mission is to create a sustainable way for people to travel together.</b></p>
              <p>At <b>taggcar</b>, we're imagining a more open world of travel. A world where people can connect to discover the places they love in a single, affordable, and sustainable way.</p>
              <p><b>Comming soon to a campus near you</b></p>
            </div>
            <div class="col-md-12 download">
                <!-- <a href="#" class="downloadButton"><span class="dlwhite"><i class="fa fa-apple"></i> App Store</span><span class="dlcol">Download from the</span></a>
                <a href="#" class="downloadButton"><span class="dlwhite"><i class="fa fa-android"></i> Google Play</span><span class="dlcol">GET IT ON</span></a> -->
                <a target="_blank" href="https://apps.apple.com/us/app/taggcar-carpool-for-students/id1490649661"><img src="assets/img/download-appstore.png"></a>
                <a target="_blank" href="#"><img src="assets/img/download-google.png"></a>
            </div>
          </section>
            </div>
        </section>
        <!-- Modal -->
            <div class="modal fade" id="resultModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modaltitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body" id="modalbody">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
        <?php include_once("php/footer.php") ?>
    </body>
    <?php include_once("php/scripts.php") ?>
    </html>
