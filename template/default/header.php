<?php
if($data["page"] == "movie"){
	$movie = $data["movie"];
	$desc = $movie[0]["Plot"];
	$keywords = str_replace(" ", ",", str_replace(",", "", str_replace(".", "", $movie[0]["Plot"])));
} else {
	$desc = description;
	$keywords = keywords;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <meta property="og:site_name" content="<?php echo $data['title'].' | '.site_name; ?>">        
        <meta property="og:title" content="<?php echo $data['title'].' | '.site_name; ?>">
        <?php if($data["page"] == "movie"){ ?>
        <?php if($movie[0]["Poster"] == "N/A"){ ?>
        <meta property="og:image" content="<?php echo site_url.'/'.template; ?>/assets/images/no-image.jpg">								
        <?php } else { ?>
        <meta property="og:image" content="<?php echo $movie[0]["Poster"]; ?>">								
		<?php } ?>        
        <?php } ?>
        <meta property="og:description" content="<?php echo $desc; ?>">
        <meta name="description" content="<?php echo $desc; ?>">        
        <meta name="keywords" content="<?php echo $keywords; ?>">
        <meta name="robots" content="index,follow">
        <link rel="shortcut icon" href="<?php echo site_url.'/'.template; ?>/assets/images/favicon.ico">
        <title><?php echo $data["title"]." | ".site_name; ?></title>
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
        <link href="<?php echo site_url.'/'.template; ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo site_url.'/'.template; ?>/assets/css/font-awesome.min.css" rel="stylesheet" type='text/css'>
        <link href="<?php echo site_url.'/'.template; ?>/assets/css/owl.carousel.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo site_url.'/'.template; ?>/assets/css/style.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo site_url.'/'.template; ?>/assets/css/medile.min.css" rel='stylesheet' type='text/css'>
        <?php if($data["page"] == "movie"){ ?>
        <link href="<?php echo site_url.'/'.template; ?>/assets/css/single.min.css" rel='stylesheet' type='text/css'>
        <?php } ?>
        <link href="<?php echo site_url.'/'.template; ?>/assets/css/custom.css" rel="stylesheet" type="text/css">
        <script>
        var site_url = "<?php echo site_url; ?>";
        var fb_app = "<?php echo fb_app; ?>";
        </script>
        <?php echo head_scripts; ?>
    </head>
    <body>
        <?php if($data["page"] == "movie"){ ?>
        <div id="fb-root"></div>
        <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
        <?php } ?>
        <?php
        require template."/parts/brand.php";
        require template."/parts/nav.php";
        ?>