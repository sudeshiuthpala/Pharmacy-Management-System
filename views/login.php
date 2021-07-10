<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head></head>
    <meta charset="utf-8">
    <title>log_in</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/bootstrap/css/loginform.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>bootstap/js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  </head>
  <body bgcolor="white">
    <div class="container login-container">
      <div class="row">
        <div class="col-md-6 login-form-1">
          <h2>Pharmacist</h2>
          <h3>Login Form</h3>
          <form class="" action="<?php echo base_url();?>index.php/UserLogin/verify?>" method="post">
            <div class="form-group">
              <input type="text" name="username" class="form-control" placeholder="User Name" value="<?php echo set_value('username'); ?>">
                <?php
                  if(form_error('username')){
                    echo form_error('username');
                  }
                ?>
            </div>
            <div class="form-group">
              <input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo set_value('password'); ?>">
              <?php
                if(form_error('password')){
                  echo form_error('password');
                }
              ?>
            </div>
            <div class="form-group">
              <input type="submit" name="insert" class="btnSubmit" value="SIGN IN">
            </div>
            <div class="error">
              <font color="White"><?php echo $this->session->flashdata("error"); ?></font>
            </div>
          </form>
        </div>
        <div class="col-md-6 login-form-2">
          <h2>Manager</h2>
          <h3>Login Form </h3>
            <form class="" action="<?php echo base_url() ?>index.php/UserLogin/manageverify" method="post">
              <div class="form-group">
              <input type="text" name="managerusername" class="form-control" placeholder="User Name" value="<?php echo set_value('managerusername'); ?>">
                  <?php
                    if(form_error('managerusername')){
                      echo form_error('managerusername');
                    }
                  ?>
              </div>
              <div class="form-group">
                <input type="password" name="mngpassword" class="form-control" placeholder="Password" value="<?php echo set_value('mngpassword'); ?>">
                  <?php
                    if(form_error('mngpassword')){
                      echo form_error('mngpassword');
                    }
                  ?>
              </div>
              <div class="form-group">
                    <input type="submit" name="mnginsert" class="btnSubmit" value="SIGN IN">
              </div>
              <div class="">
                <font color="White"><?php echo $this->session->flashdata("error"); ?></font>
              </div>
            </form>
        </div>
      </div>
    </div>
  </body>
</html>
