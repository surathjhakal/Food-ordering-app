<div class="dim"></div>
<div class="footer" style="position: absolute;width: 100%;bottom: 0;">
        <p style="margin-bottom:0">All rights reserved. Designed By <a href="#" style="text-decoration:none">Surath Jhakal </a></p>
      </div>
    </div>
  </body>
</html>

<script type="text/javascript"> 
  let data = document.getElementsByClassName("page")[0];
  let dim = document.getElementsByClassName("dim")[0];
  let navbar_profile = document.getElementsByClassName("navbar_other_options")[0];
  let show = false;

  function showProfile() {
      if (show === true) {
          data.style.display = "none";
          dim.style.display = "none";
          show = false;
      } else {
          dim.style.display = "flex";
          data.style.display = "flex";
          show = true;
      }
  }

  navbar_profile.addEventListener("click", showProfile);
</script>
