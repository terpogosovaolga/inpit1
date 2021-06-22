<nav class="menu bg-white">
  <div class="container" style="height: 100%">
    <div class="d-flex justify-content-between align-items-center flex-row" style="height: 100%">
      <a class="text-red-hover <?= $page == 'index' ? 'selected' : '' ?>" href="index.php">Главная</a>
      <a class="text-red-hover <?= $page == 'about' ? 'selected' : '' ?>" href="about.php">Об институте</a>
      <a class="text-red-hover">Абитуриенту</a>
      <a class="text-red-hover">Карьера</a>
      <a class="text-red-hover">Ответы на вопросы</a>
      <a class="text-red-hover <?= $page == 'news' || $page == 'news1' ? 'selected' : '' ?>" href="news.php">Новости</a>
      <a class="text-red-hover">Контакты</a>
    </div>
  </div>
</nav>
