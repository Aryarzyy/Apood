<!-- nampilin carousel -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php echo base_url().'public/front/img/bfbrg.jpg';?>" alt="FriesBrgrImg">
            <div class="carousel-caption text-left">
                <h1 class="display-2">Hungry?!</h1>
                <h3>Good, we are here to serve you</h3>
                <a href="<?php echo base_url().'restaurant/index'?>" class="btn btn-primary btn-lg">Lihat Menu</a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid padding">
    <div class="row text-center welcome">
        <div class="col-12">
            <h1 class="display-4">Easy 3 Steps To Follow</h1>
        </div>
        <hr>
        <div class="col-12">
            <p class="lead">The easiest way to your food. Food Ordering System provides fresh delivery
                with in the 30 minutes and provide free food if order is not on time. So don't wait and start ordering right now!</p>
        </div>
    </div>
</div>
<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <i class="fas fa-utensils"></i>
            <h3>Choose A Restaurant</h3>
            <p>First thing you can do is choose from our restautant partners easily!</p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <i class="fas fa-bullseye"></i>
            <h3>Choose A Tasty Dish</h3>
            <p>We've got you covered with menus from over various delivery restaurants online!</p>
        </div>
        <div class="col-sm-12 col-md-4">
        <i class="fas fa-clipboard-check"></i>
            <h3>Pick Up or Delivery</h3>
            <p>After all, the food gets delivered or you can pick it up as per your choices!</p>
        </div>
    </div>
    <hr class="my-4">
</div>
<section id="contact-us" class="container shadow my-4 p-4">
    <!--Section heading-->
    <?php if($this->session->flashdata('msg') != ""):?>
    <div class="alert alert-success">
        <?php echo $this->session->flashdata('msg');?>
    </div>
    <?php endif ?>
    <h2 class="text-center my-2 font-weight-bold">Contact Us</h2>
    <div class="text-center">
        <a class="text-center" href="whatsapp://send?text=Hello&phone=+628********1" >Hubungi Saya</a>
    </div>
   
   
</section>


</script>