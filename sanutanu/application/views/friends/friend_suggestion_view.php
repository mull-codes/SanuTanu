<!-- Page Body -->
<div id="lp-register">
  <div class="container wrapper">
    <!-- for next button header div -->
    <div class="row" id="frinds_suggestion_row_head">
      <div class="col-sm-11"></div>
      <div class="col-sm-1">
        <a href="<?php echo base_url("profile/profiles/profile_image_sugges"); ?>" id="btn_next" class="btn">Next</a>
      </div>
    </div>
    <!-- end header div -->
    <!-- start body div -->
    <div class="row" id="frinds_suggestion_row_body">
      <div class="col-sm-12">
        <!-- start heading-->
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">Add Friends</h2>
          </div>
        </div>
        <div class="row" id="heading_bottom">
          <div class="col-sm-12">
            <h3 class="text-center">Select Your Friends the List Below</h3>
          </div>
        </div>
        <!-- end heading-->
        <!-- Start friends list working -->
        <div id="friend_scrol">
          <?php $friends_list = friend_suggestion(); 
            foreach ($friends_list as $friends) { ?>
              <div class="row" id="friends_row">
                <div class="col-sm-2">
                  <img src="<?php echo base_url('assets/images/background_image.png'); ?>" height="70" width="60">
                </div>
                <div class="col-sm-6">
                  <p><?php echo $friends['user_first_name']." ".$friends['user_last_name']; ?></p>
                </div>
                <div class="col-sm-2">
                  <button class="btn btn-success">Add Friend</button>
                </div>
                <div class="col-sm-2">
                  <button class="btn btn-default">Remove</button>
                </div>
              </div>
              
          <?php } ?>
        </div>
        <!-- end friends list working -->
      </div>
    </div>
    <!-- end body div -->
  </div>
</div>
    <!-- Scripts
    ================================================= -->
    <script src="<?=base_url()?>assets/js/jquery-3.1.1.min.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.appear.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.incremental-counter.js"></script>
    <script src="<?=base_url()?>assets/js/script.js"></script>

    <!-- Custome Fiels  -->
    <script src="<?=base_url()?>assets/resources/custom.js"></script>
    <script src="<?=base_url()?>assets/resources/js/node_modules/jquery-validation/dist/jquery.validate.min.js"></script>
  </body>
</html>
styl