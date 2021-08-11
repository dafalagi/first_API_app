<?php 
    $data = $apiObj->nowShowing();
    $item = $data["items"];
    $max = count($item);
?>

<!--- Image Slider -->
<div id="slides" class="carousel slide" data-ride="carousel">
	<ul class="carousel-indicators">
		<li data-target="#slides" data-slide-to="0" class="active"></li>
        <?php 
            for ($i = 1; $i < $max; $i++) {
        ?>
		<li data-target="#slides" data-slide-to="<?php echo $i ?>"></li>
        <?php } ?>
	</ul>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="<?php 
                $id = $item[0]["id"];
                $img = $apiObj->searchDetail($id);
                echo $img = $img["image"]; 
            ?>" alt="">
			<div class="carousel-caption">
                <h1 class="display-2">Welcome!</h1>
                <h3>This is a Movie Searcher App. Just put the title of a movie in the form below and all set!</h3>
			</div>
		</div>
        <?php 
            for ($i = 1; $i < $max; $i++) {
                $id = $item[$i]["id"];
                $img = $apiObj->searchDetail($id);
                $img = $img["image"];
        ?>
		<div class="carousel-item">
			<img src="<?php echo $img ?>" alt="">
		</div>
        <?php } ?>
	</div>
</div>

<!--- Welcome Section -->
<div class="container-fluid padding">
    <div class="row welcome text-center">
    <div class="col-12">
        <h1 class="display-4">What's this site about?</h1>
    </div>
    <hr />
    <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
        <p class="lead">
        This is my first-ever website using APIs from other apps. I used IMDb's and Youtube's API here so I tried
        to make a simple movie searcher app using those APIs. Hope you like it!
        </p>
    </div>
    </div>
</div>

<!--- Three Column Section -->
<div class="container-fluid padding">
    <div class="row text-center">
        <div class="col-xs-12 col-sm-6 col-md-4" data-aos="zoom-in-up" data-aos-duration="1000">
            <img src="https://img.icons8.com/cute-clipart/70/000000/search.png" class="moviesearcher"/>
            <h3>Movie Searcher</h3>
            <p>
            This website is intended to be used for searching detailed information about movies. You will get detailed information about movies 
            you looked for and also videos related to that movies. Well, this is kinda like IMDbs but less complex and I also combine it with Youtube.
            The main purpose of this website is for my college task but hopefully this will be useful for everyone.
            </p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4" data-aos="zoom-in-up" data-aos-duration="1500">
            <img src="https://img.icons8.com/color/70/000000/youtube-play.png" class="youtube" />
            <h3>Youtube</h3>
            <p>
            YouTube is a video sharing service where users can watch, like, share, comment and upload their own videos. I'm using this app's API
            to get videos related to the movies. I intend to let users have easier access to the videos about movies they looked for. This is also
            to give more visual information about the movies.
            </p>
        </div>
        <div class="col-md-4" data-aos="zoom-in-up" data-aos-duration="2000">
            <img src="https://img.icons8.com/color/70/000000/imdb.png" class="imdb" />
            <h3>IMDb</h3>
            <p>
            IMDb (an acronym for Internet Movie Database) is an online database of information related to films, television programs, 
            home videos, video games, and streaming content online. I'm using this app's API to get detailed information about movies including
            the stars list, ratings, and similar movies.
            </p>
        </div>
    </div>
    <hr class="my-4" />
</div>

<!--Search Form-->
<div class="container-fluid padding" data-aos="fade-up">
    <div class="row">
        <div class="col-lg-6">
            <form method="POST">
                <div class="form-group">
                    <h6>Enter a movie title</h6>
                    <input type="text" class="form-control"
                    name="judul">
                </div>
                <button type="submit" class="btn btn-primary" name="cari">Submit</button>
            </form>
        </div>
        <div class="col-lg-6 popular">
            <h5>10 Most Popular Movies</h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">The Suicide Squad</li>
                <li class="list-group-item">Jungle Cruise</li>
                <li class="list-group-item">The Green Knight</li>
                <li class="list-group-item">House of Gucci</li>
                <li class="list-group-item">F9 : The Fast Saga</li>
                <li class="list-group-item">Old</li>
                <li class="list-group-item">Black Widow</li>
                <li class="list-group-item">Free Guys</li>
                <li class="list-group-item">Venom : Let There Be Carnage</li>
                <li class="list-group-item">Suicide Squad</li>
            </ul>
        </div>
    </div>
    <hr class="my-4" />
</div>

<!--- Welcome Section -->
<div class="container-fluid padding">
    <div class="row showing text-center">
        <div class="col-12">
            <h1 class="display-4">Now Showing</h1>
        </div>
        <hr />
    </div>
</div>

<!--- Cards -->
<div class="container-fluid padding">
	<div class="row padding" data-aos="fade-up">
        <?php 
            for ($i = 0; $i < 3; $i++) {
                $id = $item[$i]["id"];
                $res = $apiObj->searchDetail($id);
                $img = $res["image"];
                $title = $res["fullTitle"];
                $plot = $res["plot"];
        ?>
		<div class="col-md-4">
			<div class="card">
				<img src="<?php echo $img ?>" alt="" class="card-img-top">
				<div class="card-body">
					<h4 class="card-title"><?php echo $title ?></h4>
					<p class="card-text"><?php echo $plot ?></p>
				</div>
			</div>
		</div>
        <?php  } ?>
	</div>
	<div class="row padding" data-aos="fade-up">
        <?php 
            for ($i = 3; $i < 6; $i++) {
                $id = $item[$i]["id"];
                $res = $apiObj->searchDetail($id);
                $img = $res["image"];
                $title = $res["fullTitle"];
                $plot = $res["plot"];
        ?>
		<div class="col-md-4">
			<div class="card">
				<img src="<?php echo $img ?>" alt="" class="card-img-top">
				<div class="card-body">
					<h4 class="card-title"><?php echo $title ?></h4>
					<p class="card-text"><?php echo $plot ?></p>
				</div>
			</div>
		</div>
        <?php  } ?>
	</div>
    <hr class="my-4" />
</div>