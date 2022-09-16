<?php $options = get_option( '_prefix_my_options' ); ?>
<div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="<?php echo $options['about-image']['url'];?>" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5"><?php echo $options['about-title'];?></h5>
                        <h1 class="display-4"> <?php echo $options['hero-short-des'];?></h1>
                    </div>
                    <p> <?php echo $options['hero-long-des'];?></p>
                    <div class="row g-3 pt-3">
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="<?php echo $options['one-service-icon'];?> text-primary mb-3"></i>
                                <h6 class="mb-0"><?php echo $options['one-service-type'];?><small class="d-block text-primary">
                                    <?php echo $options['one-service-category'];?></small></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="<?php echo $options['two-service-icon'];?> text-primary mb-3"></i>
                                <h6 class="mb-0"><?php echo $options['two-service-type'];?>
                                <small class="d-block text-primary"><?php echo $options['two-service-category'];?></small></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="<?php echo $options['three-service-icon'];?> text-primary mb-3"></i>
                                <h6 class="mb-0"><?php echo $options['three-service-type'];?>
                                <small class="d-block text-primary"><?php echo $options['three-service-category'];?></small></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="<?php echo $options['four-service-icon'];?> text-primary mb-3"></i>
                                <h6 class="mb-0"><?php echo $options['four-service-type'];?>
                                <small class="d-block text-primary"><?php echo $options['four-service-category'];?></small></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>