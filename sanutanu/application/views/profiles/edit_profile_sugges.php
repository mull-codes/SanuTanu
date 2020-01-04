<!-- Page Body -->
<div id="lp-register">
  <div class="container wrapper">
    <div class="panel-heading"><h3>Upload a Photo of Yourself</h3> </div>
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
    <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
  <script src="http://demo.itsolutionstuff.com/plugin/croppie.js"></script>

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
        height: 300
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
      url: "my-form-upload",
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
  </body>
</html>