<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pharmacist Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/bootstrap/css/reg_css.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>bootstap/js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container register">
      <div class="row">
        <div class="col-md-3 register-left">

          <h1>REGISTRATION</h1>

        </div>
        <div class="col-md-9 register-right">
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <div class="row register-form">
                <div class="col-md-6">
                  <form class="" action="" method="post" name="phar_input">

                    <div class="form-group">
                        <input type="text" name="emp_id"  class="form-control" placeholder="Employee ID">
                    </div>
                    <div class="form-group">
                      <input type="text" name="nic"  class="form-control" placeholder="National Identity Card">
                    </div>
                    <div class="form-group">
                      <input type="text" name="fname"  class="form-control" placeholder="First Name *">
                    </div>
                    <div class="form-group">
                      <input type="text" name="mname"  class="form-control" placeholder="Middle Name *" >
                    </div>
                    <div class="form-group">
                      <input type="text" name="lname"  class="form-control" placeholder="Last Name *">
                    </div>
                    <div class="form-group">
                      <p>gender</p>
                      <div class="max1">
                        <label class="radio inline">
                          <input type="radio" name="gender" value="M">
                          <span>Male</span>
                        </label>
                        <label class="radio inline">
                          <input type="radio" name="gender" value="F">
                          <span>Female</span>
                        </label>
                      </div>
                    </div>
                    <div class="form-group">
                      <p>Date Of Birth</p>
                      <input type="date" name="dob"  class="form-control" placeholder="Date Of Birth">
                    </div>
                    <div class="form-group">
                      <p>Status</p>
                      <div class="max1">
                        <label class="radio inline">
                          <input type="radio" name="status" value="Married">
                          <span>Married</span>
                        </label>
                        <label class="radio inline">
                          <input type="radio" name="gender" value="single">
                          <span>un-Married</span>
                        </label>
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="text" name="con_num"  class="form-control" placeholder="Contact Number">
                    </div>
                    <div class="form-group">
                      <input type="text" name="address" rows="3" cols="20"  class="form-control" placeholder="Address">
                    </div>
                    <div class="form-group">
                      <input type="email" name="email"  class="form-control" placeholder="E mail *">
                    </div>
                    <div class="form-group">
                      <input type="text" name="cid"  class="form-control" placeholder="Certificate ID">
                    </div>
                    <div class="form-group">
                      <input type="text" name="salary"  class="form-control" placeholder="Salary">
                    </div>

                    <div class="form-group">
                      <input type="text" name="username" value="<?php echo set_value('username'); ?>"  class="form-control" placeholder="User Name">
                        <?php
                          if(form_error('username')){
                            echo form_error('username');
                          }
                        ?>
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" value="<?php echo set_value('password'); ?>"  class="form-control" placeholder="Password *">
                      <?php
                        if(form_error('password')){
                          echo form_error('password');
                        }
                      ?>
                    </div>
                    <div class="form-group">
                      <input type="password" name="cPassword" value="<?php echo set_value('cPassword'); ?>"  class="form-control" placeholder="Confirm Password">
                      <?php
                        if(form_error('cPassword')){
                          echo form_error('cPassword');
                        }
                      ?>
                    </div>
                    <div class="form-group">
                      <p>Registered Date</p>
                      <input type="date" name="reg_date"  class="form-control" placeholder="Date Of Birth">
                    </div>


                    <div class="form-group">
                      <input type="text" name="manager_id" class="form-control" placeholder="Manager ID">
                    </div>
                    <div class="form-group">
                      <p>Upload Profile</p>
                      <?php echo @$error; ?>
                      <?php echo form_open_multipart('Imageupload/upload'); ?>
                      <?php echo "<input type='file' name='pharma_pic' size='20'  class='form-control' placeholder='Profile Upload'/>" ?><br><br>
                      <?php echo "<input type='submit' name='submit' value='Register'  class='btnRegister'/>" ?>
                      <?php echo "</form>" ?>
                    </div>



                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
