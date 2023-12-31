

    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Menu—</h6>
                        <h2>Our selection of menu items with quality taste</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">



                  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                  <form action="<?php echo e(url('/addcart',$data->id)); ?>" method="post">

                    <?php echo csrf_field(); ?>

                    <div class="item">

<div style="background-image: url('/foodimage/<?php echo e($data->image); ?>');" class='card'>


                    <div class="price"><h6>₹ <?php echo e($data->price); ?></h6></div>
                            <div class='info'>
                              <h1 class='title'><?php echo e($data->title); ?></h1>
                              <p class='description'><?php echo e($data->description); ?></p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                                 </div>

                                </div>
                            </div>

                            <br>
                        <input type="number" name="quantity" min="1" value="1" style="width: 80px;"> &nbsp;
                        <input type="submit" value="add to cart" style="padding: 8px; background-color:#C4AE78; color:white;" >


                    </div>

                    </form>


                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>





                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->
<?php /**PATH /Users/harsh/Downloads/laravel_proj-master/resources/views/food.blade.php ENDPATH**/ ?>