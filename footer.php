<footer>

  <div class="line-footer"></div>

  <div class="top d-flex justify-content-center">
        <ul class="social-list d-flex p-0 my-0 mt-3 list-unstyled">
          <a href="" class="social-item-link">
            <li class="d-flex mx-3">
              <i class="fab fa-facebook-square social-icon"></i>
              <p class="social-text">Facebook</p>
            </li>
          </a>
          <a href="" class="social-item-link">
            <li class="d-flex mx-3">
              <i class="fab fa-twitter-square social-icon"></i>
              <p class="social-text">Twitter</p>
            </li>
          </a>
          <a href="" class="social-item-link">
            <li class="d-flex mx-3">
              <i class="fab fa-instagram-square social-icon"></i>
              <p class="social-text">Instagram</p>
            </li>
          </a>
        </ul>
      </div>

</footer>

 <script>
    function loginForm() {
      document.getElementById("clicked").classList.add("showLogin");
      document.getElementById("clicked").classList.remove("showSignup");
    }

    function outForm() {
      document.getElementById("clicked").classList.remove("showLogin");
      document.getElementById("clicked").classList.remove("showSignup");
    }

    function openSignupForm() {
      document.getElementById("clicked").classList.remove("showLogin");
      document.getElementById("clicked").classList.add("showSignup");
    }

    function logout() {
      
      if (!document.getElementById("form-logout").classList.contains("show")) {
        document.getElementById("form-logout").classList.add("show");
      } else {
        document.getElementById("form-logout").classList.remove("show");
      }
      
    }

  </script>
  <script src="js/jquery-3.5.1.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
  <script src="js/swiper.min.js"></script>
  <script src="js/customjs.js"></script>
</body>
</html>