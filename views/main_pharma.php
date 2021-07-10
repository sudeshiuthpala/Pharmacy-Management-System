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
                <h2  class="mbr-fonts-style mbr-bold mbr-section-title3 display-5"><button type="submit" name="insert_med" formaction="<?php echo base_url();?>index.php/Medicine/insert" class="btn btn-link button">Insert New Medicine</button></h2>
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
                <button type="submit" name="retrieve_med" formaction="<?php echo base_url();?>index.php/Medicine/retrieve" class="btn btn-link button">Available Medicine</button>
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
                          <button type="submit" name="delete_med" formaction="<?php echo base_url();?>index.php/Medicine/delete" class="btn btn-link button">Delete Medicine</button>
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
                            <button type="submit" name="update_med" formaction="<?php echo base_url();?>index.php/Medicine/update" class="btn btn-link button">Update Medicine</button>
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
                  <h2  class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">
                    <button type="submit" name="insert_cust" formaction="<?php echo base_url();?>index.php/Customer/insert" class="btn btn-link  button">Insert Loyalty Customer</button>
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
                    <button type="submit" name="retrieve_cust" formaction="<?php echo base_url();?>index.php/Customer/retrieve" class="btn btn-link  button">Display Loyalty Customer</button>
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
                    <button type="submit" name="update_cust" formaction="<?php echo base_url();?>index.php/Customer/update" class="btn btn-link  button">Update Loyalty Customer</button>
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
