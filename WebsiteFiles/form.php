<!-- Contact Form --> <span id="contactTag"></span>
  <div class="contactForm">
    <div class="row">
      <div class="col-xs-8 col-xs-offset-2">
        <!-- CONTENT -->
          
        <form class="form" method="post" action="send_form_email.php">
          <div class="form-group">
            <label class="control-label col-sm-2 textColor" for="name">Name:</label>
            <div class="col-sm-10 input-group">
              
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-2 textColor" for="email">Email:</label>
            <div class="col-sm-10 input-group">
              
              <input type="email" class="form-control" id="email"  name="email" placeholder="Enter Email" required>
            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
            </div>
          </div>
          
          <div class="form-group">
            <label class="control-label col-sm-2 textColor" for="tel">Phone Number:</label>
            <div class="col-sm-10 input-group">
              
              <input type="tel" class="form-control" id="tel" name="tel" placeholder="Enter Phone Number">
              <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
            </div>
          </div>
          
          <div class="form-group">
            <label class="control-label col-sm-2 textColor" for="name">Event Date:</label>
            <div class="col-sm-10 input-group">
              
              <input type="date" class="form-control ios" id="date" name="date">
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            </div>
          </div>
          
          <div class="form-group">
            <label class="control-label col-sm-2 textColor" for="message">Message:</label>
            <div class="col-sm-10 input-group">
              
              <textarea class="form-control" id="message" name="message" rows="5" placeholder="Type message here..."></textarea>
            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
            </div>
          </div>
          
          <div class="form-group">
            <div class="col-xs-4 col-sm-push-2">
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
            <div class="col-xs-4">
              <button type="reset" class="btn btn-primary">Reset</button>
            </div>
            <div class="col-xs-12 col-sm-4">
                <a href="/privacy.php" target="_blank">
                    <p id="privacy_policy">Privacy Policy</p>
                </a>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>
  <!-- Contact Form -->