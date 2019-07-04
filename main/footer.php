    <footer>
      <div class="container d-none d-sm-none d-md-block">
          <div class="row footer-body">
            <div class="col-md-4 col-lg-4">
                <div class="footer-logo"><img src="../images/germanguide.png" alt="GermanGuideNYC" class="img-responsive" style="width:15%;"></div>
                <div class="footer-list-item mt-2"><i class="fas fa-phone" style="transform: rotate(90deg);"></i> <span class="pl-3">+1 917-960-6987</span></div>
                <div class="footer-list-item mt-2"><i class="fas fa-envelope"></i><span class="pl-3">germanguidenyc@gmail.com</span></div>
                <div class="footer-social-link-list mt-3">
                    <a href="https://www.facebook.com/DJFitschi/" target="blank" class="text-dark"><i class="fab fa-facebook-f social-icon"></i></a>
                    <a href="https://twitter.com/DJFitschi" target="blank" class="text-dark"><i class="fab fa-twitter ml-2 social-icon"></i></a>
                    <a href="https://www.linkedin.com/in/christianmneumeier" target="blank" class="text-dark"><i class="fab fa-linkedin-in ml-2 social-icon"></i></a>
                    <a href="https://www.instagram.com/germanguidenyc/" target="blank" class="text-dark"><i class="fab fa-instagram ml-2 social-icon"></i></a>
                    <a href="https://soundcloud.com/dj-fitschi" target="blank" class="text-dark"><i class="fab fa-soundcloud"></i></a>
                    <a href="https://christianspaeth.myportfolio.com/projects" target="blank" class="text-dark"><i class="fas fa-portrait"></i></a>
                </div>
            </div>
            <div class="col-md-8 col-lg-8">
                <div class="row">
                    <div class="col">
                        <h6 class="footer-header text-left">GermanGuideNYC</h6>
                        <div><a class="footer-link" href="index.php#p1">ABOUT</a></div>
                        <div><a class="footer-link" href="signup.php#sign1">SIGN UP</a></div>
                        <?php if(isset($_SESSION['u_id'])){echo '<div><a class="footer-link" href="service.php#s1">SERVICE</a></div>';} else {}?> 
                    </div>
                    <div class="col">
                        <h6 class="footer-header text-left">Cities</h6>
                        <div><a class="footer-link" href="index.php#h1">New York</a></div>
                    </div>
                    <div class="col">
                        <h6 class="footer-header text-left">Explore</h6>
                        <div><a class="footer-link" href="index.php#p1">Pricing</a></div>
                        <div><a class="footer-link" href="review.php#r1">Reviews</a></div>
                        <div><a class="footer-link" href="booking.php#b1">Booking</a></div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="semi-border-xs mt-2 mb-1">
        <div class="row footer-end py-2">
            <div class="col pl-0 text-left footer-link">  © GermanGuideNYC 2019, All Rights Reserved.</div>
            <div class="col pr-0 text-right">
                <a class="footer-link" href="legal.php#l1">Privacy Policy </a> |
                <a class="footer-link" href="legal.php#l1">Terms &amp; Conditions</a> |
                <button type="button" class="button" data-toggle="modal" data-target="#exampleBTC"><i class="fab fa-btc"></i></button>
                <div class="modal fade" id="exampleBTC" tabindex="-1" role="dialog" aria-labelledby="exampleBTCLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleBTCLabel">GermanGuideNYC BTC Donation</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      </div>
                      <div class="modal-body"><img  width="400" height="400" src="../images/footer/btcadress.png" alt="BTC-Adress"></div>
                    </div>
                  </div>
                </div> |
                <button type="button" class="button" data-toggle="modal" data-target="#exampleETH"><i class="fab fa-ethereum"></i></button> 
                <div class="modal fade" id="exampleETH" tabindex="-1" role="dialog" aria-labelledby="exampleETHLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleETHLabel">GermanGuideNYC ETH Donation</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      </div>
                      <div class="modal-body"><img  width="400" height="400" src="../images/footer/ethadress.png" alt="ETH-Adress"></div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid footer-xs-width d-sm-block d-md-none">
        <div class="row bgf7f7f7 py-3 mb-xs-solid">
          <div class="col-xs-12 col-md-12 mb-3"><h5 class="mobile-heading text-center">Have questions?</h5></div>
          <div class="col-xs-12 col-md-12">
            <div class="row footer-xs-link mb-2">
              <div class="col text-center">
                <i class="fas fa-phone" style="transform: rotate(90deg);"></i>
                <span class="pl-1">+1 917-960-6987</span>
              </div>
              <div class="col text-center">
                <i class="fas fa-envelope"></i>
                <span class="pl-1">germanguidenyc@gmail.com</span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="footer-xs-logo mt-2">
              <img src="../images/germanguide.png" alt="GermanGuideNYC" class="img-responsive" style="width:7%;">
            </div>
          </div>
          <div class="col">
            <div class="footer-social-link-list text-right ">
              <a href="https://www.facebook.com/DJFitschi/" target="blank" class="text-dark"><i class="fab fa-facebook-f social-icon"></i></a>
              <a href="https://twitter.com/DJFitschi" target="blank" class="text-dark"><i class="fab fa-twitter ml-1 social-icon"></i></a>
              <a href="https://www.linkedin.com/in/christianmneumeier" target="blank" class="text-dark"><i class="fab fa-linkedin-in ml-1 social-icon"></i></a>
              <a href="https://www.instagram.com/germanguidenyc/" target="blank" class="text-dark"><i class="fab fa-instagram ml-1 social-icon"></i></a>
              <a href="https://soundcloud.com/dj-fitschi" target="blank" class="text-dark"><i class="fab fa-soundcloud"></i></a>
              <a href="https://christianspaeth.myportfolio.com/projects" target="blank" class="text-dark"><i class="fas fa-portrait"></i></a>
            </div>
          </div>
        </div>
        <hr class="semi-border-xs mt-2 mb-1">
        <div class="row footer-end py-2">
          <div class="col pl-0 footer-link" style="margin-left:8%">  © GermanGuideNYC 2019.</div>
          <div class="col pr-0 text-right" style="margin-right:8%">
            <a class="footer-link" href="legal.php#l1">Privacy </a> |
            <a class="footer-link" href="legal.php#l1">Terms</a> |
            <button type="button" class="button" data-toggle="modal" data-target="#exampleBTC"><i class="fab fa-btc"></i></button>
            <div class="modal fade" id="exampleBTC" tabindex="-1" role="dialog" aria-labelledby="exampleBTCLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleBTCLabel">GermanGuideNYC BTC Donation Adress</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  </div>
                  <div class="modal-body"><img  width="450" height="450" src="../images/footer/btcadress.png" alt="BTC-Adress"></div>
                </div>
              </div>
            </div> |
            <button type="button" class="button" data-toggle="modal" data-target="#exampleETH"><i class="fab fa-ethereum"></i></button> 
            <div class="modal fade" id="exampleETH" tabindex="-1" role="dialog" aria-labelledby="exampleETHLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleETHLabel">GermanGuideNYC ETH Donation Adress</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  </div>
                  <div class="modal-body"><img  width="450" height="450" src="../images/footer/ethadress.png" alt="ETH-Adress"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </footer>
  </body>
</html>
