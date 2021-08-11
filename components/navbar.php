<!--Navbar-->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top" id="topSection">
      <div class="container-fluid">
        <a class="navbar-brand">
          <img src="https://img.icons8.com/cute-clipart/36/000000/search.png"/>
          FilmLookUp
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <?php
              if (isset($judul)) {
            ?>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">LookUp!</a>
            </li>
            <!--
            <li class="nav-item">
              <a class="nav-link" href="https://tugas2.dafarizky113.my.id">College Stuff</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="misc.html">Misc</a>
            </li>
            -->
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Soon!</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <?php }else { ?>
            <li class="nav-item">
              <a class="nav-link active" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">LookUp!</a>
            </li>
            <!--
            <li class="nav-item">
              <a class="nav-link" href="https://tugas2.dafarizky113.my.id">College Stuff</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="misc.html">Misc</a>
            </li>
            -->
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Soon!</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </nav>