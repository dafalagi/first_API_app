<?php
    $img = $res["backdrop_path"];
    $compress = $apiObj->getImg($img);
    $fix = $apiObj->compressImg($compress);
    $backdrop = $fix["dest"];
    $img = $res["poster_path"];
    $compress = $apiObj->getImg($img);
    $fix = $apiObj->compressImg($compress);
    $poster = $fix["dest"];
    $title = $res["original_title"];
    $date = $res["release_date"];
    $runtime = $res["runtime"];
    $companies = $res["production_companies"];
    $genres = $res["genres"];
    $countries = $res["production_countries"];
    $languages = $res["spoken_languages"];
    $averagevote = $res["vote_average"];
    $votecount = $res["vote_count"];
    $status = $res["status"];
    $plot = $res["overview"];
    $similardata = $apiObj->getSimilar($id);
    $similars = $similardata["results"];
?>

<!--Jumbotron-->
<div class="container-fluid padding">
    <div class="row jumbotron" style="background-image: url(<?php echo $backdrop ?>);">
    </div>
</div>

<!--Infographic-->
<div class="container-fluid padding">
    <div class="row">
        <div class="col-lg-2">
            <img src="<?php echo $poster ?>" alt="movie-poster" class="img-thumbnail">
        </div>
        <div class="col-lg-5">
            <h5>Title :</h5>
            <p><?php echo $title ?></p>
            <h5>Release Date :</h5>
            <p><?php echo $date ?></p>
            <h5>Runtime :</h5>
            <p><?php echo $runtime ?> mins</p>
            <h5>Genres :</h5>
            <p><?php
                $max = count($genres);
                for ($i = 0; $i < $max; $i++) {
                    if ($i == $max-1) {
                        echo $genres[$i]["name"];
                    }else {
                        echo $genres[$i]["name"].", ";
                    }
                }
            ?></p>
            <h5>Production Companies :</h5>
            <p><?php
                $max = count($companies);
                for ($i = 0; $i < $max; $i++) {
                    if ($i == $max-1) {
                        echo $companies[$i]["name"];
                    }else {
                        echo $companies[$i]["name"].", ";
                    }
                }
            ?></p>
            <h5>Countries :</h5>
            <p><?php echo $countries[0]["name"] ?></p>
            <h5>Languages :</h5>
            <p><?php
                $max = count($languages);
                for ($i = 0; $i < $max; $i++) {
                    if ($i == $max-1) {
                        echo $languages[$i]["english_name"];
                    }else {
                        echo $languages[$i]["english_name"].", ";
                    }
                }
            ?></p>
            <h5>Status :</h5>
            <p><?php echo $status ?></p>
            <h5>Average Vote :</h5>
            <p><?php echo $averagevote ?></p>
            <h5>Vote Count :</h5>
            <p><?php echo $votecount ?></p>
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
                $img = $similars[$i]["poster_path"]; 
                $compress = $apiObj->getImg($img);
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
    <div class="row padding">
        <?php
            for ($i = 3; $i < 6; $i++) {
                $img = $similars[$i]["poster_path"]; 
                $compress = $apiObj->getImg($img);
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