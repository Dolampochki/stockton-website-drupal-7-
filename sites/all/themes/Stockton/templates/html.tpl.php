<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>
<head>
<?php print $head; ?>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title><?php print $head_title; ?></title>
<?php print $styles; ?>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,700,600' rel='stylesheet' type='text/css'>
<?php print $scripts; ?>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script type="text/javascript">
/* Dynamic top menu positioning
 *
 */

var num = 50; //number of pixels before modifying styles

$(window).bind('scroll', function () {
    if ($(window).scrollTop() > num) {
        $('.header-container-wide').addClass('fixed');
    } else {
        $('.header-container-wide').removeClass('fixed');
    }
});

//USE SCROLL WHEEL FOR THIS FIDDLE DEMO
</script>
<!--[if lt IE 9]><script src="<?php print base_path() . drupal_get_path('theme', 'best_responsive') . '/js/html5.js'; ?>"></script><![endif]-->
</head>
<body class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>