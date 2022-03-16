  <!--NAVBAR/HEADER-->
  <div class="header sticky-top">
    <nav class="navbar navbar-expand-md ">
      <a class="navbar-brand" href="index.php"><img src="img/logo.png" class="img1" alt="">
      </a>

      <div class="navbar-collapse justify-content-end" >
        <ul class="navbar-nav">

          <?php
                //Check if user is loging or not
                if (!isset($_SESSION["username"])) {
                ?>
          <li class="nav-item p-2">
            <button type="button" class="navbtn btn btn-secondary">About Us</button>
            
          </li>
          
          <li class="nav-item p-2">
              <button type="button" class="navbtn btn btn-secondary">Contact Us</button>
          </li>
                <?php
                } else {
                ?>
                              <li class="nav-item p-2">
            <button type="button" class="navbtn btn btn-secondary">About Us</button>
            
          </li>
          
          <li class="nav-item p-2">
              <button type="button" class="navbtn btn btn-secondary">Contact Us</button>
          </li>
                    <div class="nav-vl"></div>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">
                            <i class="fas fa-sign-out-alt"></i>Logout
                        </a>
                    </li>
                <?php
                }
                ?>
      </ul>
      </div>
    </nav>
  </div>