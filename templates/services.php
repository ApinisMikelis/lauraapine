<section id="services" class="py-5">

    <h2 class="landing-section-header"><?php echo __( "Choose one of our services", "wp-bootstrap-starter" ); ?></h2>

    <div class="container">
        <div class="row">

            <div class="col-lg-4">
            <div class="card mb-5 mb-lg-0">
                <div class="card-body">
                    <h5 class="card-title text-muted text-uppercase text-center">Recording with presentation</h5>
                    <h6 class="card-price text-center">499 €</h6>
                    <hr>
                    <ul class="fa-ul">
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Video recording</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Presentation recording</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Single participant</li>
                        <li>&nbsp;</li>
                    </ul>
                    
                    <a class="btn btn-block btn-primary text-uppercase" data-toggle="modal" data-target="#service-1">
                        Book now
                    </a>
                </div>
            </div>
            </div>

            <div class="col-lg-4">
            <div class="card mb-5 mb-lg-0">
                <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">Recording with presentation and design</h5>
                <h6 class="card-price text-center">999 €</h6>
                <hr>
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Customized design</strong></li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Video recording</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Presentation recording</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Single participant</li>
                </ul>
                
                <a class="btn btn-block btn-primary text-uppercase" data-toggle="modal" data-target="#service-2">
                    Book now
                </a>
                
                </div>
            </div>
            </div>


            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title text-muted text-uppercase text-center">Recording with presentation and animated design</h5>
                    <h6 class="card-price text-center">1499 €</h6>
                    <hr>
                    <ul class="fa-ul">
                        <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Animated design</strong></li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Customized design</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Video recording</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Presentation recording</li>
                    </ul>
                    
                    <a class="btn btn-block btn-primary text-uppercase" data-toggle="modal" data-target="#service-3">
                        Book now
                    </a>
                    
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- RECORDING WITH PRESENTATION -->
<div class="modal fade" id="service-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Book recording with presentation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo do_shortcode('[bookly-form service_id="2"]'); ?>
      </div>

    </div>
  </div>
</div>

<!-- RECORDING WITH PRESENTATION AND DESIGN -->
<div class="modal fade" id="service-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Book recording with presentation and design</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo do_shortcode('[bookly-form service_id="3"]'); ?>
      </div>

    </div>
  </div>
</div>

<!-- RECORDING WITH PRESENTATION AND DESIGN -->
<div class="modal fade" id="service-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Book recording with presentation and animated design</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo do_shortcode('[bookly-form service_id="4"]'); ?>
      </div>

    </div>
  </div>
</div>