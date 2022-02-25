<?php
global $fauzanredux;
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="./assets//font-awesome/all.min.css">
    <marquee>ALAMAT TOKO : TAMAN BUKIT CIBOGO, CIMAHI</marquee>
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="<?php echo $fauzanredux['favicon']; ?>">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
<header>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div>
                <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo $fauzanredux['logo']['url']; ?>" width="72" height="72"></a>
                <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo $fauzanredux['header-logo']['url']; ?>" width="400" height="72"></a>
                <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo $fauzanredux['iklan-logo']['url']; ?>" width="850" height="72"></a>
                <div class="clear"><?php get_search_form(); ?></div>
                <br>
                <br>
            </div>
        </div>
    </div>
		<nav>
		<?php
			$args = array ('theme_location' => 'main_menu');
			wp_nav_menu($args);
		?>

<!--            <ul class="navbar-nav ms-auto">-->
<!--                <li class="nav-item">-->
<!--                   BUAT BIKIN MENU LOGIN-->
<!--                </li>-->
<!--            </ul>-->
		</nav>
</header>

</body>
</html>