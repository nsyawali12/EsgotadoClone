<!DOCTYPE html>
<html lang="en">

<head>

  <link href="css/bootstrap.min.css" rel="stylesheet">
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <div class="top-bar"style ="border-bottom: none">
      <div class="top-bar-left"></div>
    </div>
</head>

  <!-- Panggil Navbar -->
  <?php $this->load->view("navbar")?>

  <section class>
    <div class="contac-map-container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9539753843874!2d107.62681331443495!3d-6.896108669400487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7ae228a1bbf%3A0x622a323abdd31bc9!2sEsgotado!5e0!3m2!1sen!2sid!4v1519616886704" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen=""></iframe>
    </div>
    <!--Start Page Content-->
    <hr class="vertical-space">
    <div class="col-md-2"></div>
  </section>
  <div class="col-md-12">
    <h4>Contact Us - How may we assist you?</h4><span class="line margin-bottom-25"></span><div class="clearfix"></div>
  </div>
  <form id="smart-form" name="contactform" action="https://esgotado.com/contact/add" method="post" enctype="multipart/form-data">

                    <input type="hidden" name="_token" value="tlyb0imn8ixgrHxq4L14jDyj3Toix4p1b7ZwL5rc">

                    <div class="form-body theme-black">
                        <div class="col-md-6">
                            <div class="form-row">
                                <div class="section colm colm12">
                                    <label for="name" class="field prepend-icon">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                                        <label for="website" class="field-icon"><i class="fa fa-user"></i></label>
                                    </label>
                                </div><!-- end section -->
                            </div>

                            <div class="frm-row">
                                <div class="section colm colm12">
                                    <label for="email" class="field prepend-icon">
                                        <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                                        <label for="website" class="field-icon"><i class="fa fa-envelope"></i></label>
                                    </label>
                                </div><!-- end section -->
                            </div>
                            <div class="frm-row">
                                <div class="section colm colm12">
                                    <label class="field select">
                                        <select name="contact_id" id="contact_id">
                                            <option value="">Select division...</option>
                                            {
                                                <option value="1">Marketing Business Partnership</option>
                                                <option value="2">Customer Service</option>
                                                <option value="3">Reseller Program</option>
                                                                                                                                    </select>
                                        <i class="form-control"></i>
                                    </label>
                                </div><!-- end section -->
                            </div>
                            <div class="form-row" id="note_division" style="display: none;">
                                <div class="section colm colm12" style="background: #DFF0D8;padding: 10px;margin-left: 10px;color: #5A955A">

                                </div><!-- end section -->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-row">
                                <div class="section colm colm12">
                                    <label for="name" class="field prepend-icon">
                                        <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject">
                                        <label for="website" class="field-icon"><i class="fa fa-user"></i></label>
                                    </label>
                                </div><!-- end section -->
                            </div>
                            <div class="form-row">
                                <div class="section colm colm12">
                                    <label for="message" class="field prepend-icon">
                                        <textarea class="gui-textarea" id="" name="message" placeholder="Message"></textarea>
                                        <label for="message" class="field-icon"><i class="fa fa-comments"></i></label>
                                    </label>
                                </div><!-- end section -->
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="section">
                                <button type="submit" class="button btn-dark" value="Send Message"> Send Message </button>
                            </div><!-- end .form-footer section -->
                        </div>

                    </div><!-- end .form-body section -->
                </form>

</body>

</html>
