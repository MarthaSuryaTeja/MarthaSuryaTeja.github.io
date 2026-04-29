<form id="contact-form" action="https://formspree.io/f/YOUR_FORM_ID" method="POST">
  <div class="row">
    <div class="col-md-6 form-group">
      <input type="text" name="name" class="form-control" placeholder="Your Name" required>
    </div>
    <div class="col-md-6 form-group mt-3 mt-md-0">
      <input type="email" class="form-control" name="email" placeholder="Your Email" required>
    </div>
  </div>

  <div class="form-group mt-3">
    <input type="text" class="form-control" name="subject" placeholder="Subject" required>
  </div>

  <div class="form-group mt-3">
    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
  </div>

  <!-- Optional: prevent spam -->
  <input type="text" name="_gotcha" style="display:none">

  <div class="text-center mt-3">
    <button type="submit">Send Message</button>
  </div>

  <p id="form-status" style="margin-top:10px;"></p>
</form>