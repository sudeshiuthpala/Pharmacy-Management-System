<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Medicine Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/bootstrap/css/reg_css.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/bootstrap/css/bootstrap.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>bootstap/js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  </head>
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
                  <form class=""  method="post" name="med_input">
                    <div class="form-group">
                      <input type="text" name="med_id" class="form-control" placeholder="Medicine ID">
                    </div>
                    <div class="form-group">
                      <input type="text" name="med_name" class="form-control" placeholder="Medicine Name">
                    </div>
                    <div class="form-group">
                      <input type="text" name="med_des" class="form-control" placeholder="Medicine Description">
                    </div>
                    <div class="form-group">
                      <input type="text" name="unit_price" class="form-control" placeholder="Unit Price">
                    </div>
                    <div class="form-group">
                      <input type="text" name="quantity"class="form-control" placeholder="Quentity" >
                    </div>
                    <div class="form-group">
                      <p>Purchased Date</p>
                      <input type="date" name="purchased_date" class="form-control" placeholder="Purchased Date">
                    </div>
                    <div class="form-group">
                      <p>Expired Date</p>
                      <input type="date" name="exp_date" class="form-control" placeholder="Expired Date">
                    </div>
                    <div class="form-group">
                      <input type="text" name="emp_id" class="form-control" placeholder="Pharmacist ID">
                    </div>
                    <div class="form-group">
                      <p>Medicine Image :</p>
                      <?php echo @$error; ?>
                      <?php echo form_open_multipart('Imageupload/upload'); ?>
                      <?php echo "<input type='file' name='medicine_pic' size='20' class='form-control' placeholder='Medicine Image'/>" ?><br><br>
                      <?php echo "<input type='submit' name='submit' value='Register'/>" ?>
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
