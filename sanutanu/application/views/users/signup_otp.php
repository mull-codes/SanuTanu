    <!-- Container Start -->
    <div class="container" style="width:50%;margin-top:10%;margin-left:25%; background-color: rgb(231, 180, 231);">
        <!-- Start Form -->
        <form method="POST" name="otp_form"  class="from-group" style="padding: 20px; "  id="otp_form">
            <h3>Enter the Code from the SMS Message</h3>
            <div style="justify-content: flex-end;padding: .75rem;border-top: 1px solid #dee2e6;" >
            </div>
            <div >
                <h6>Let us know if this  mobile number belongs to you.Enetr the code in the SMS sent to </h6><span></span>
            </div>
            <div class="form-group row"style="margin-left:0px;">
                <label for="again_send" class="col-form-label">ST-</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="otpnumber" id="otpnumber" placeholder="OTP"/>
                    <div id="msg"></div>
                </div>
            </div>
            <div>
                <a href="#"name="again_send" id="again_send" style="color: #bf4ef3; text-decoration: none;">Send SMS Again</a>
            </div>
            <div class="modal-footer" style="padding: 3px;">
                <input type="button" name="submit_otp" id="submit_otp" class="btn" value="Continue" onclick="OtpValidation()" style="background-color:#bf4ef3; color: white;"/>
              </div>
        </form>
        <!-- End Form  -->
    </div>
    <!-- End Container -->
    <!-- ================================================================ -->
    <!-- Start Modal  -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" style="">Account Confirmed</h4>
          </div>
          <div class="modal-body" id="m_body" style="padding: 25px;">
          </div>
          <div class="modal-footer" style="padding: 3px; background-color: #dee2e6;">
            <button type="button" class="btn" data-dismiss="modal" style="background-color:#bf4ef3; color: white;" id="btn_modal">OK</button>
          </div>
        </div>
        
      </div>
    </div>
    <!-- End Modal -->
   <script src="<?=base_url()?>assets/js/jquery-3.1.1.min.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.appear.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.incremental-counter.js"></script>
    <script src="<?=base_url()?>assets/js/script.js"></script>

    <!-- Custome Fiels  -->
    <script src="<?=base_url()?>assets/resources/custom.js"></script>
    <script src="<?=base_url()?>assets/resources/js/node_modules/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="<?=base_url()?>assets/resources/node_modules/sweetalert2/dist/sweetalert2.min.js"></script>
    <!-- =================================================================================== -->
    
  </body >
</html>