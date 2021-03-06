<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php
    $title = $page->title();
    $isHome = $title == "Home";
  ?>

  <?php if ($isHome): ?>
    <title><?= $site->title() ?></title>
    <meta property="og:title" content="<?= $site->title() ?>">
    <meta name="description" content="<?= $site->meta_description()->excerpt(200); ?>">
    <meta property="og:description" content="<?= $site->meta_description()->excerpt(200); ?>">
  <?php else: ?>
    <title><?= $title; ?> | <?= $site->title(); ?></title>
    <meta property="og:title" content="<?= $title; ?> | <?= $site->title(); ?>">
    <meta name="description" content="<?= $page->main_content()->excerpt(200); ?>">
    <meta property="og:description" content="<?= $page->main_content()->excerpt(200); ?>">
  <?php endif; ?>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css"/>
  <?= css(['assets/css/main.css', '@auto']);?>

  <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
  <?= js(['assets/js/main.js', '@auto']); ?>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', '<?= $site->ga(); ?>', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>
