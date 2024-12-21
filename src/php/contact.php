<!DOCTYPE html>
<html lang="ja-JP" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  
    Document Title
    =============================================
    -->
    <title>Contact</title>
    
    <?
      include("import.html");
    ?>
    
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
    <?
      include("header.php");
    ?>

        <section class="module bg-dark-60 pricing-page-header mb-80" data-background="assets/images/top.png">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-m-plus-1">お問い合わせ</h2>
                <div class="module-subtitle font-m-plus-1">株式会社エーワールドへの問い合わせは電話または、フォームからご連絡ください。</div>
              </div>
            </div>
          </div>
        </section>
        <section class="module" id="contact">
          <div class="mb-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5455.189060941111!2d140.12033503072365!3d35.61108705875848!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x602284ca48cd0d7b%3A0xe578173e2bce849c!2zMS1jaMWNbWUtNy0xMCBDaMWrxY0sIENodW8gV2FyZCwgQ2hpYmEsIDI2MC0wMDEz!5e0!3m2!1sko!2sjp!4v1730719757830!5m2!1sko!2sjp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div><!-- End Google Maps -->
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-m-plus-1">Contact us</h2>
                <div class="module-subtitle font-m-plus-1"></div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-8">
                <form id="contactForm" role="form" method="post" action="php/contact.php">
                  <div class="form-group">
                    <label class="sr-only" for="name">Name</label>
                    <input class="form-control" type="text" id="name" name="name" placeholder="Your Name*" required="required" data-validation-required-message="Please enter your name."/>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="email">Email</label>
                    <input class="form-control" type="email" id="email" name="email" placeholder="Your Email*" required="required" data-validation-required-message="Please enter your email address."/>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" rows="7" id="message" name="message" placeholder="Your Message*" required data-validation-required-message="Please enter your message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="text-center">
                    <button class="btn btn-block btn-round btn-d" id="cfsubmit" type="submit">Submit</button>
                  </div>
                </form>
                <div class="ajax-response font-m-plus-1" id="contactFormResponse"></div>
              </div>
              <div class="col-sm-4">
                <div class="alt-features-item mt-0">
                  <div class="alt-features-icon"><span class="icon-map"></span></div>
                  <h3 class="alt-features-title font-m-plus-1">Address</h3>A-world<br/>1-chōme-7-10 Chūō, Chuo Ward<br/>Chiba, 260-0013
                </div>
                <div class="alt-features-item mt-xs-60">
                  <div class="alt-features-icon"><span class="icon-phone"></span></div>
                  <h3 class="alt-features-title font-m-plus-1">Call us</h3>Email: a-world@mirror.ocn.ne.jp<br/>Phone: 043-304-5592<br/>Fax: 043-304-5584
                </div>
              </div>
            </div>
          </div>
        </section>    
        
        <?
          include("footer.php");
        ?>
        
    </main>
  </body>
</html>