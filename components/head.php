<head>
  <meta charset="utf-8">
  <title>ИнПИТ СГТУ - Главная</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/dcc2a17f51.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/main.css">
  <?php $page = getNameOfPage();
    if ($page == "index") {?>
      <link rel="stylesheet" href="css/index.css">
    <?php } if ($page == "news" || $page == "news1" || $page == "index") {?>
      <link rel="stylesheet" href="css/news.css">
  <?php } else if ($page == "about") { ?>
      <link rel="stylesheet" href="css/about.css">
    <?php }?>

</head>

<?php function getNameOfPage() {
  $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  $urls = explode("/", $url);
  if (empty($url[count($url)])) {
    return "index";
  } else if (stripos($url, "news.php") !== false) {
    return "news";
  } else if (stripos($url, "news1.php") !== false) {
    return "news1";
  } else if (stripos($url, "about.php") !== false) {
    return "about";
  } else {
    return "index";
  }
}?>
