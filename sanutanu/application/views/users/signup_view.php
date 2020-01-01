
<!-- Landing Page Contents
    ================================================= -->
    <div id="lp-register">
      <div class="container wrapper">
        <div class="row">
          <div class="col-sm-5">
            <div class="intro-texts">
              <h1 class="text-white">Make Cool Friends !!!</h1>
              <p>Friend Finder is a social network template that can be used to connect people. The template offers Landing pages, News Feed, Image/Video Feed, Chat Box, Timeline and lot more. <br /> <br />Why are you waiting for? Buy it now.</p>
              <button class="btn btn-primary">Learn More</button>
            </div>
          </div>
          <div class="col-sm-6 col-sm-offset-1">
            <div class="reg-form-container">
              <!-- Register/Login Tabs-->
              <div class="reg-options">
                <ul class="nav nav-tabs">
                  <li ><a href="#register"  data-toggle="tab" >Register</a></li>
                  <li class="active"><a href="#login" data-toggle="tab">Login</a></li>
                </ul><!--Tabs End-->
              </div>
              <!--Registration Form Contents-->
              <div class="tab-content">
                <div class="tab-pane" id="register">
                  <h3>Register Now !!!</h3>
                  <p class="text-muted">Be cool and join today. Meet millions</p>
                  <!--Register Form-->
                  <form name="registration_form" id='registration_form' method="post" class="form-inline" action="index.php/users/login/save_registration">
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label for="firstname" class="sr-only">First Name</label>
                        <input id="user_first_name" data="popover" oninput="Remove_Validations()" onfocusout="Form_validations(this)" class="form-control input-group-lg " type="text" name="user_first_name"  placeholder="First name"data-container="body" data-toggle="popover" data-placement="left" data-content="invalid name."/>
                      </div>
                      <div class="form-group col-xs-6">
                        <label for="lastname" class="sr-only">Last Name</label>
                       <input id="user_last_name" data="popover" oninput="Remove_Validations()" class="form-control input-group-lg" onfocusout="Form_validations(this)" type="text" data-content="What's your email?" name="user_last_name" placeholder="Last name" data-container="body" data-toggle="popover" data-placement="top" data-content="invalid name."/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="email" class="sr-only">Email</label>
                         <input id="user_email" oninput="Remove_Validations()" class="form-control input-group-lg" onfocusout="Form_validations(this)" type="text" name="user_email" data="popover" data-content="What's your email?" placeholder="Your Email" data-container="body" data-toggle="popover" data-placement="left" data-content="invalid name."/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="password" class="sr-only">Password</label>
                       <input id="user_password" oninput="Remove_Validations()" onfocusout="Form_validations(this)" class="form-control  input-group-lg" type="password" name="user_password"  data-container="body" data-toggle="popover" data-placement="right"  data="popover" data-content="Password at least 8 characters?" placeholder="Password"/>
                      </div>
                    </div>
                    <div class="row">
                      <p class="birth"><strong>Date of Birth</strong></p>
                      <div class="form-group col-sm-3 col-xs-6" >
                        <label for="month" class="sr-only"></label>
                        <select oninput="Remove_Validations()" class="form-control" id="day" name="day" data-placement="left" data="popover" data-content="Select day">
                          <option value="Day" disabled selected>Day</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                          <option>7</option>
                          <option>8</option>
                          <option>9</option>
                          <option>10</option>
                          <option>11</option>
                          <option>12</option>
                          <option>13</option>
                          <option>14</option>
                          <option>15</option>
                          <option>16</option>
                          <option>17</option>
                          <option>18</option>
                          <option>19</option>
                          <option>20</option>
                          <option>21</option>
                          <option>22</option>
                          <option>23</option>
                          <option>24</option>
                          <option>25</option>
                          <option>26</option>
                          <option>27</option>
                          <option>28</option>
                          <option>29</option>
                          <option>30</option>
                          <option>31</option>
                        </select>
                      </div>
                      <div class="form-group col-sm-3 col-xs-6">
                        <label for="month" class="sr-only"></label>
                        <select oninput="Remove_Validations()" class="form-control" id="month" name="month" data="popover" data-content="Select month" data-placement="top">
                          <option value="month" disabled selected>Month</option>
                          <option value="1">Jan</option>
                          <option value="2">Feb</option>
                          <option value="3">Mar</option>
                          <option value="4">Apr</option>
                          <option value="5">May</option>
                          <option value="6">Jun</option>
                          <option value="7">Jul</option>
                          <option value="8">Aug</option>
                          <option value="9">Sep</option>
                          <option value="10">Oct</option>
                          <option value="11">Nov</option>
                          <option value="12">Dec</option>
                        </select>
                      </div>
                      <div class="form-group col-sm-6 col-xs-12">
                        <label for="year" class="sr-only"></label>
                        <select oninput="Remove_Validations()" class="form-control" id="year" name="year"  data="popover" data-content="Select year">
                          <option value="year" disabled selected>Year</option>
                          <option>2000</option>
                          <option>2001</option>
                          <option>2002</option>
                          <option>2004</option>
                          <option>2005</option>
                          <option>2006</option>
                          <option>2007</option>
                          <option>2008</option>
                          <option>2009</option>
                          <option>2010</option>
                          <option>2011</option>
                          <option>2012</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group gender">
                      <label class="radio-inline">
                        <input type="radio"  name="user_gender" onfocusout="Form_validations(this)" value="Male" data-container="body" data-toggle="popover" data-placement="left" data-content="invalid name." checked="checked" />Male
                      </label>
                      <label class="radio-inline">
                        <input type="radio"  name="user_gender" onfocusout="Form_validations(this)" value="Female" data-container="body" data-toggle="popover" data-placement="left" data-content="invalid name."/>Female
                      </label>
                      <label class="radio-inline">
                        <input type="radio"  name="user_gender" onfocusout="Form_validations(this)" value="Other" data-container="body" data-toggle="popover" data-placement="left" data-content="invalid name."/>Other
                      </label>
                    </div>
                  </form><!--Register Now Form Ends-->
                  <p><a href="#">Already have an account?</a></p>
                  <button class="btn btn-primary" id="submit" onclick="registeration_submit('registration_form')">Register Now</button>
                </div><!--Registration Form Contents Ends-->
                <div class="tab-pane active" id="login">
                  <h3>Login</h3>
                  <p class="text-muted">Log into your account</p>
                  <!--Login Form-->
                  <form name="login_form" id='login_form' action="index.php/users/login/user_login" method="post">
                     <div class="row">
                       <div class="form-group col-xs-12">
                        <label for="email" class="sr-only">Email</label>
                         <input id="user_email_Login" class="form-control input-group-lg" onfocusout="Form_validations(this)" oninput="Remove_Validations()" type="text" name="user_email" data="popover" data-content="What's your email?" placeholder="Your Email" data-container="body" data-toggle="popover" data-placement="left" data-content="invalid name."/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-12">
                        <label for="password" class="sr-only">Password</label>
                       <input id="user_password_Log" onfocusout="Form_validations(this)" class="form-control  input-group-lg" oninput="Remove_Validations()" type="password" name="user_password"  data-container="body" data-toggle="popover" data-placement="right"  data="popover" data-content="Password at least 8 characters?" placeholder="Password"/>
                      </div>
                    </div>
                  </form><!--Login Form Ends--> 
                  <p><a href="#">Forgot Password?</a></p>
                  <button class="btn btn-primary" id="btn_login" onclick="login_submit('login_form')">Login Now</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-sm-offset-6">
          
            <!--Social Icons-->
            <ul class="list-inline social-icons">
              <li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
              <li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
              <li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
              <li><a href="#"><i class="icon ion-social-pinterest"></i></a></li>
              <li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>


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
 
    
