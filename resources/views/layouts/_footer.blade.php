<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

  <div class="footer-newsletter">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12 text-center">
          <h4>Our Daily Deals List</h4>
          <p>Join today to get access to our daily offers <b>FREE</b> of charge!</p>
        </div>
        <div class="col-lg-6">
          <form action="/newsletter/create" method="post">
            <input type="email" name="email"><input type="submit" value="Subscribe">
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-top">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center my-0">
            <img src="{{asset('assets/images/logo.png')}}" alt="" class="logo-img">
            <span>QuickCharge</span>
          </a> <br>
          <b>Stay Connected. Anytime, Anywhere!</b>
        </div>

        <div class="col-lg-3 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            {{-- @foreach ($categories as $category)
            <li><i class="bi bi-chevron-right"></i> <a href="/categories/{{ $category->id }}">
                {{ $category.name }}
              </a></li>
            @endforeach --}}
          </ul>
        </div>

        <div class="col-lg-4 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            <strong>Phone:</strong> <a
              href="https://api.whatsapp.com/send/?phone=96179308778&text=Hello%20I%20would%20like%20to%20ask%20for%20some%20details"
              target="_blank">+961 79 308 778</a><br>
            <strong>Email:</strong> <a href="mailto:quickchargetelecom@gmail.com"
              target="_blank">quickchargetelecom@gmail.com</a>
          </p>

        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong><span>QuickCharge</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="https://yellowtech.onrender.com" class="text-warning">yellow.tech</a>
    </div>
  </div>
</footer><!-- End Footer -->