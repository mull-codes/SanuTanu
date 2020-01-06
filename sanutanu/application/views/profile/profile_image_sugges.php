
<!-- Strat Container -->
<div class="container" style="width:50%;margin-top:10%;margin-left:25%; background-color: rgb(231, 180, 231);" >
	
	<div class="row">
	    <div class="col-sm-10"><h3>Upload a Photo of Yourself</h3></div><div class="col-sm-2"><a href="<?php echo base_url("index.php/home/login") ?>" style="text-decoration: none;color:#bf4ef3"><h3>Skip</h3></a></div>
	</div>
	  <div style="justify-content: flex-end;padding: .75rem;border-top: 1px solid #bf4ef3;"></div>
	  <div class="panel-body" >
	  	<div class="row">
	  		<div class="col-md-4 text-center">
				<div id="upload-demo" style="width:350px"></div>
	  		</div>
	  		</div>
			  <div style="justify-content: flex-end;padding: .75rem;border-top: 1px solid #bf4ef3;"></div>
			  <div class="row" style="display:flex; justify-content: flex-end;">
			  <div class="upload-btn-wrapper">
				<button class="btn">Upload Image</button>
				<input type="file" id="upload" class="btn" value="Next" style="background-color: #bf4ef3;">
			</div>
			  <button class="btn  upload-result" style="margin-left: 5px;">Done</button>
		</div>
			  
	  	</div>
      
	  </div>
	
</div>
<!-- End Container -->
    <!-- Scripts
    ================================================= -->
    <script src="<?=base_url()?>assets/js/jquery-3.1.1.min.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.appear.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.incremental-counter.js"></script>
    <script src="<?=base_url()?>assets/js/script.js"></script>
    <!-- Start Profile Image Sugges -->
    <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
    <script src="http://demo.itsolutionstuff.com/plugin/croppie.js"></script>
    <!-- End Profie Image Sugges -->
    <!-- Custome Fiels  -->
    <script src="<?=base_url()?>assets/resources/custom.js"></script>
    <script src="<?=base_url()?>assets/resources/js/node_modules/jquery-validation/dist/jquery.validate.min.js"></script>
    <!-- Strat Container Script -->
<script type="text/javascript">
    $uploadCrop = $('#upload-demo').croppie({
    enableExif: true,
    viewport: {
        width: 200,
        height: 200,
        type: 'circle'
    },
    boundary: {
        width: 300,
        height: 300,
    }
    });   
    $('#upload').on('change', function () { 
        var reader = new FileReader();
        reader.onload = function (e) {
            $uploadCrop.croppie('bind', {
                url: e.target.result
            }).then(function(){
                console.log('jQuery bind complete');
            });
                
        }
        reader.readAsDataURL(this.files[0]);
    });   
    $('.upload-result').on('click', function (ev) {
        $uploadCrop.croppie('result', {
            type: 'canvas',
            size: 'viewport'
        }).then(function (resp) {
        
            $.ajax({
                url: "profile_image_sugges",
                type: "POST",
                data: {"image":resp},
                success: function (data) {
                    html = '<img src="' + resp + '" />';
                    $("#upload-demo").html(html);
                }
            });
        });
    });   
</script>  
<!-- End Container Script -->
  </body>
</html>
<style>
    .upload-btn-wrapper {
        position: relative;
        overflow: hidden;
        display: inline-block;
    }

        .btn {
        border: 2px solid #bf4ef3;
        color: #bf4ef3;
        background-color: white;
        padding: 8px 20px;
        border-radius: 8px;
        font-size: 20px;
        font-weight: bold;
    }

        .upload-btn-wrapper input[type=file] {
        font-size: 100px;
        position: absolute;
        left: 0;
        top: 0;
        opacity: 0;
    }
        .cr-boundary{
        background-color: #f1dd80;
    }
</style>