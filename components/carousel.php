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