<div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Services</h5>
                <h1 class="display-4">Excellent Medical Services</h1>
            </div>
            <div class="row g-5">


                <?php 
                
                $args = array( 'post_type' => 'movies'); 

                // Variable to call WP_Query.
                $the_query = new WP_Query( $args ); 
                
                if ( $the_query->have_posts() ) :
                    // Start the Loop
                    while ( $the_query->have_posts() ) : $the_query->the_post();
                       ?>
              <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon mb-4">
                         <i class="fa fa-2x fa-user-md text-white"></i>
                        </div>
                        <h4 class="mb-3"><?php the_title() ?></h4>
                        <p class="m-0">
                        <?php the_content() ?>
                        </p>
                        <a class="btn btn-lg btn-primary rounded-pill" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                    <?php
                    
                   // the_title();                      
                    // End the Loop
                    endwhile;
                else:
                // If no posts match this query, output this text.
                    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
                endif; 
                
                wp_reset_postdata();

                ?>
              


                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon mb-4">
                            <i class="fa fa-2x fa-microscope text-white"></i>
                        </div>
                        <h4 class="mb-3">Blood Testing</h4>
                        <p class="m-0">Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit</p>
                        <a class="btn btn-lg btn-primary rounded-pill" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>