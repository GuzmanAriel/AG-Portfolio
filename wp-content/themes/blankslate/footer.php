<!-- BEGIN FOOTER-->
<section id="contacts" class="section section-bg-img section-bg-overlay section-top-rise">
  <div class="bg"></div>
  <div class="section-inner">

    <div class="container">

      <header class="heading">
        <h2>Contacts</h2>
        <div class="separator"></div>
      </header>

      <div class="contacts">
        <div class="row">
          <div class="col span_4">
            <div class="contacts-item">
              <div class="icon-b"><i class="fa fa-map-marker"></i></div>
              <address class="adr"><span class="country-name">New York</span>, <span class="locality">New York</span>
                </div>
              </div>
              <div class="col span_4">
                <div class="contacts-item">
                  <div class="icon-b"><i class="fa fa-phone"></i></div><span class="tel">914-473-6224</span>
                </div>
              </div>
              <div class="col span_4">
                <div class="contacts-item">
                  <div class="icon-b"><i class="fa fa-send"></i></div><a href="mailto:mail@yoursite.com" class="email">guzmanariel525@gmail.com</a>
                </div>
              </div>
            </div>
          </div>
          <form method="post" action="send.php" class="contact-form">
            <div class="row">
              <div class="col span_6">
                <div class="input">
                  <label for="name">Your name</label>
                  <div class="input-field">
                    <input type="text" name="name" id="name" class="input-field-item required">
                  </div>
                </div>
              </div>
              <div class="col span_6">
                <div class="input">
                  <label for="email">Your mail</label>
                  <div class="input-field">
                    <input type="text" name="email" id="email" class="input-field-item required">
                  </div>
                </div>
              </div>
            </div>
            <div class="input">
              <label for="message">Drop some words</label>
              <div class="input-field">
                <textarea name="message" id="message" cols="30" rows="5" class="input-field-item required"></textarea>
              </div>
            </div>
            <div class="center">
              <input type="submit" value="Send" class="btn btn-bordered">
            </div>
          </form>

        </div>

      </div>
    </section>
    <!-- END FOOTER-->

    <?php wp_footer(); ?>
