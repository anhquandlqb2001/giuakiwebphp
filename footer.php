<footer>

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

  </script>
</body>
</html>