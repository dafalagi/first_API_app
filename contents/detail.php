<?php
    $compress = $res["image"]; 
    $fix = $apiObj->compressImg($compress);
    $img = $fix["dest"];
    $title = $res["fullTitle"];
    $year = $res["year"];
    $date = $res["releaseDate"];
    $runtime = $res["runtimeStr"];
    $directors = $res["directors"];
    $writers = $res["writers"];
    $stars = $res["stars"];
    $genres = $res["genres"];
    $countries = $res["countries"];
    $languages = $res["languages"];
    $contentrating = $res["contentRating"];
    $rating = $res["imDbRating"];
    $plot = $res["plot"];
    $similars = $res["similars"];
?>

<!--Jumbotron-->
<div class="container-fluid padding">
    <div class="row jumbotron" style="background-image: url(<?php echo $img ?>);">
    </div>
</div>

<!--Infographic-->
<div class="container-fluid padding">
    <div class="row">
        <div class="col-lg-2">
            <img src="<?php echo $img ?>" alt="movie-poster" class="img-thumbnail">
        </div>
        <div class="col-lg-5">
            <h5>Title :</h5>
            <p><?php echo $title ?></p>
            <h5>Year :</h5>
            <p><?php echo $year ?></p>
            <h5>Release Date :</h5>
            <p><?php echo $date ?></p>
            <h5>Runtime :</h5>
            <p><?php echo $runtime ?></p>
            <h5>Directors :</h5>
            <p><?php echo $directors ?></p>
            <h5>Writers :</h5>
            <p><?php echo $writers ?></p>
            <h5>Stars :</h5>
            <p><?php echo $stars ?></p>
            <h5>Genres :</h5>
            <p><?php echo $genres ?></p>
            <h5>Countries :</h5>
            <p><?php echo $countries ?></p>
            <h5>Languages :</h5>
            <p><?php echo $languages ?></p>
            <h5>Content Rating :</h5>
            <p><?php echo $contentrating ?></p>
            <h5>IMDb Rating :</h5>
            <p><?php echo $rating ?></p>
        </div>
        <div class="col-lg-5">
            <h5>Plot :</h5>
            <p><?php echo $plot ?></p>
        </div>
    </div>
    <hr class="my-4" />
</div>

<!--Videos-->
<div class="container-fluid padding">
    <div class="row related">
        <div class="col-12">
            <h3>Related Videos</h3>
        </div>
    </div>
    <div class="row videos">
        <?php
            for ($i = 0; $i < 3; $i++) {
                $videoid = $video[$i]["id"]["videoId"];
        ?>
        <div class="col-lg-4">
            <iframe src="https://www.youtube.com/embed/<?php echo $videoid ?>"
                    data-autoplay-src="https://www.youtube.com/embed/<?php echo $videoid ?>?autoplay=1">
            </iframe>
        </div>
        <?php } ?>
    </div>
    <hr class="my-4" />
</div>

<!--Similar-->
<div class="container-fluid padding">
    <div class="row similar">
        <div class="col-12">
            <h3>Similar Movies</h3>
        </div>
    </div>
    <div class="row padding">
        <?php
            for ($i = 0; $i < 3; $i++) {
                $compress = $similars[$i]["image"];
                $res = $apiObj->compressImg($compress);
                $img = $res["dest"];
        ?>
		<div class="col-md-4">
			<div class="card">
				<img src="<?php echo $img ?>" alt="" class="card-img-top">
			</div>
		</div>
        <?php } ?>
	</div>
    <hr class="my-4" />
</div>