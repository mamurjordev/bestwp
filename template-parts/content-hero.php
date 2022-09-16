
<?php $options = get_option( '_prefix_my_options' ); ?>
<div class="container-fluid bg-primary py-5 mb-5" style="background: url('<?php echo $options['hero-image']['url'];?>') top right no-repeat;
    background-size: cover;">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5" style="border-color: rgba(256, 256, 256, .3) !important;"> <?php echo $options['hero-title']; ?></h5>
                    <h1 class="display-1 text-white mb-md-4"><?php  echo $options['hero-slogan']; ?></h1>
                    <div class="pt-2">
                        <a href="<?php  echo $options['button-one-link']; ?>" class="btn btn-light rounded-pill py-md-3 px-md-5 mx-2"><?php  echo $options['button-one-text']; ?></a>
                        <a href="<?php  echo $options['button-two-link']; ?>" class="btn btn-outline-light rounded-pill py-md-3 px-md-5 mx-2"><?php  echo $options['button-two-text']; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>