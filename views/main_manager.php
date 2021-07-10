<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head></head>
    <meta charset="utf-8">
    <title>pharmacist Interface</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/bootstrap/css/main2.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>bootstap/js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <section>
      <div class="container">
        <div class="row mbr-justify-content-center">
          <form class="" method="post">
          <div class="col-lg-6 mbr-col-md-10">
            <div class="wrap">
              <div class="ico-wrap">
                <span class="mbr-iconfont " ></span>
              </div>

              <div class="text-wrap vcenter">
                <h2  class="mbr-fonts-style mbr-bold mbr-section-title3 display-5"><button type="submit" name="insert_pharma" formaction="<?php echo base_url();?>index.php/Pharmacist/insert" class="btn btn-link button"><span>Insert New Pharmacist</span></button></h2>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mbr-col-md-10">
            <div class="wrap">
              <div class="ico-wrap">
                <span class="mbr-iconfont "></span>
              </div>
              <div class="text-wrap vcenter">
                <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">
                  <button type="submit" name="retrieve_pharma" formaction="<?php echo base_url();?>index.php/Pharmacist/retrieve" class="btn btn-link button"><span>Available Pharmacist</span></button>
                </h2>
              </div>
            </div>
          </div>

            <div class="col-lg-6 mbr-col-md-10">
                <div class="wrap">
                    <div class="ico-wrap">
                        <span class="mbr-iconfont "></span>
                    </div>
                    <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">
                          <button type="submit" name="delete_pharma" formaction="<?php echo base_url();?>index.php/Pharmacist/delete" class="btn btn-link button"></span>Delete Pharmacist<span></button>
                        </h2>
                      </div>
                </div>
            </div>
            <div class="col-lg-6 mbr-col-md-10">
                <div class="wrap">
                    <div class="ico-wrap">
                        <span class="mbr-iconfont "></span>
                    </div>
                    <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">
                          <button type="submit" name="delete_cust" formaction="<?php echo base_url();?>index.php/Customer/delete" class="btn btn-link button"><span>Delete Loyalty Customer</span></button>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mbr-col-md-10">
              <div class="wrap">
                <div class="ico-wrap">
                  <span class="mbr-iconfont " ></span>
                </div>
                <div class="text-wrap vcenter">
                  <h2  class="mbr-fonts-style mbr-bold mbr-section-title3 display-5"><button type="submit" name="update_pharma" formaction="<?php echo base_url();?>index.php/Pharmacists/update" class="btn btn-link button"><span>Update Pharmacist</span></button></h2>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mbr-col-md-10">
              <div class="wrap">
                <div class="ico-wrap">
                  <span class="mbr-iconfont "></span>
                </div>
                <div class="text-wrap vcenter">
                  <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">
                    <button type="submit" name="update_pharma" formaction="<?php echo base_url();?>index.php/Product/generate_pdf" class="btn btn-link button"><span>Download Medicine Detail In PDF</span></button>
                  </h2>
                </div>
              </div>
            </div>

          </form>
        </div>

      </div>
    </section>

  </body>
</html>
