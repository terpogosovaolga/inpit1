<?php $page = 'index'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include_once 'components/head.php';
    include_once 'components/header.php';
   ?>
  <body>


    <div class="banner-beauty">
      <div class="bg-red fortext">

      </div>

      <div class="abs">
        <div class="container">
          <div class="d-flex flex-column justify-content-center align-items-center">
            <span class="edu text-white">ВЫСШЕЕ ОБРАЗОВАНИЕ</span>
            <span class="itcar text-white">ДЛЯ IT-КАРЬЕРЫ</span>
          </div>
        </div>
      </div>
    </div>

    <?php include_once 'components/nav.php'; ?>

    <main class="bg-lighter">
      <div class="container">
        <!-- БАКАЛАВР/МАГИСТРАТУРА -->
        <div class="d-flex flex-row justify-content-between align-items-center">
          <div class="bacmag bg-white text-red-hover">
            <div class="d-flex flex-row justify-content-center align-items-center" style="height: 100%">
              <img src="imgs/bac.svg" alt="">
              <div class="txt d-flex flex-column align-items-start justify-content-center">
                <span class="prog">Программы</span>
                <span class="bacmag">Бакалавриата</span>
              </div>
            </div>
          </div>
          <div class="bacmag bg-white text-red-hover">
            <div class="d-flex flex-row justify-content-center align-items-center" style="height: 100%">
              <img src="imgs/mag.svg" alt="">
              <div class="txt d-flex flex-column align-items-start justify-content-center">
                <span class="prog">Программы</span>
                <span class="bacmag">Магистратуры</span>
              </div>
            </div>
          </div>
        </div>

        <!-- НОВОСТИ -->
        <div class="sec news">
          <h2>Новости</h2>

          <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
            <div class="news bg-white big">
              <div class="pic">

              </div>
              <div class="text">
                <h4>Технический университет приглашает на общеуниверситетский день открытых дверей</h4>
                <div class="d-flex justify-content-center align-items-center">
                  <p class="text-grey">
                    6 апреля 2021 года в Саратовском государственном техническом университете имени Гагарина Ю. А., пройдет общеуниверситетский день открытых дверей в очном формате.
                    <br><br>
                    Мероприятие состоится в 201 аудитории первого корпуса СГТУ имени Гагарина Ю. А., начало в 15:00.
                  </p>
                </div>
                <div class="bottom d-flex flex-row justify-content-between align-items-center">
                    <a class="text-red">Подробнее</a>
                    <span class="date">15.06.2021</span>
                </div>
              </div>
            </div>

            <div class="big d-flex flex-column justify-content-between align-items-center">
              <div class="news bg-white small">
                <div class="text">
                  <h4>Технический университет приглашает на общеуниверситетский день открытых дверей</h4>
                  <div class="d-flex justify-content-center align-items-center">
                    <p class="text-grey">
                      6 апреля 2021 года в Саратовском государственном техническом университете имени Гагарина Ю. А., пройдет общеуниверситетский день открытых дверей в очном формате.
                      <br><br>
                      Мероприятие состоится в 201 аудитории первого корпуса СГТУ имени Гагарина Ю. А., начало в 15:00.
                    </p>
                  </div>
                  <div class="bottom d-flex flex-row justify-content-between align-items-center">
                      <a class="text-red">Подробнее</a>
                      <span class="date">15.06.2021</span>
                  </div>
                </div>
              </div>
              <div class="news bg-white small">
                <div class="text">
                    <h4>Технический университет приглашает на общеуниверситетский день открытых дверей</h4>
                    <div class="d-flex justify-content-center align-items-center">
                      <p class="text-grey">
                        6 апреля 2021 года в Саратовском государственном техническом университете имени Гагарина Ю. А., пройдет общеуниверситетский день открытых дверей в очном формате.
                        <br><br>
                        Мероприятие состоится в 201 аудитории первого корпуса СГТУ имени Гагарина Ю. А., начало в 15:00.
                      </p>
                  </div>
                  <div class="bottom d-flex flex-row justify-content-between align-items-center">
                      <a class="text-red">Подробнее</a>
                      <span class="date">15.06.2021</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="text-right" style="margin-top: 15px; font-size: 13px">
            <a class="text-red" href="news.html">все новости</a>
          </div>
        </div>

        <!-- ССЫЛКИ И ПРОЕКТЫ -->
        <div class="sec">
          <div class="row">
            <div class="col-12 col-lg-4 lp" style="padding-right: 15px">
              <h2>Полезные ссылки</h2>

              <div class="d-flex flex-column justify-content-between align-items-center  lp">
                <div class="link bg-white text-red-hover">
                  <img src="imgs/ios.svg" alt="">
                  <span>ИОС</span>
                </div>

                <div class="link bg-white text-red-hover">
                  <img src="imgs/portal.svg" alt="">
                  <span>Образовательный портал</span>
                </div>

                <div class="link bg-white text-red-hover">
                  <img src="imgs/shedule.svg" alt="">
                  <span>Расписание</span>
                </div>
              </div>
            </div>

            <div class="col-12 col-lg-8 prs" style="padding-left: 15px">
              <h2>Проекты</h2>

              <div class="d-flex flex-row justify-content-between align-items-center lp">
                <div class="project bg-white lp">
                  <div class="d-flex flex-column justify-content-center align-items-center" style="width: 100%; height: 100%">
                    <span class="txt">Мобильное приложение по учету зеленых насаждений</span>
                    <div class="bottom">
                      <a class="text-red">Подробнее</a>
                    </div>
                  </div>
                </div>

                <div class="project bg-white lp">
                  <div class="d-flex flex-column justify-content-center align-items-center" style="width: 100%; height: 100%">
                    <span class="txt">Мобильное приложение по учету зеленых насаждений</span>
                    <div class="bottom">
                      <a class="text-red">Подробнее</a>
                    </div>
                  </div>
                </div>
              </div>

            </div>

          </div>
          <div class="text-right text-red" style="margin-top: 15px; font-size: 13px">
            <a class="text-red">все проекты</a>
          </div>
        </div>

        <!-- конференции -->
        <div class="sec">
          <h2>Конкурсы и конференции</h2>
            <div class="row">
              <div class="col-12 col-md-4">
                <div class="conf bg-white">
                  <div class="pic" style="background-image: url(imgs/conf.png)"></div>
                  <div class="text">
                      <h4>Пройдет классная конференция</h4>
                      <div class="d-flex flex-column justify-content-center">
                        <p class="text-grey">
                          Вот по такой теме пройдет супер-классная конференция.
                        </p>
                      </div>
                      <div class="bottom d-flex flex-row justify-content-between align-items-center">
                          <a class="text-red">Подробнее</a>
                          <span class="date">15.06.2021</span>
                      </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4">
                <div class="conf bg-white">
                  <div class="pic" style="background-image: url(imgs/conf.png)"></div>
                  <div class="text">
                      <h4>Пройдет классная конференция</h4>
                      <div class="d-flex flex-column justify-content-center">
                        <p class="text-grey">
                          Вот по такой теме пройдет супер-классная конференция.
                        </p>
                      </div>
                      <div class="bottom d-flex flex-row justify-content-between align-items-center">
                          <a class="text-red">Подробнее</a>
                          <span class="date">15.06.2021</span>
                      </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4">
                <div class="conf bg-white">
                  <div class="pic" style="background-image: url(imgs/conf.png)"></div>
                  <div class="text">
                      <h4>Пройдет классная конференция</h4>
                      <div class="d-flex flex-column justify-content-center">
                        <p class="text-grey">
                          Вот по такой теме пройдет супер-классная конференция.
                        </p>
                      </div>
                      <div class="bottom d-flex flex-row justify-content-between align-items-center">
                          <a class="text-red">Подробнее</a>
                          <span class="date">15.06.2021</span>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-right" style="margin-top: 15px; font-size: 13px">
              <a  class="text-red">все конференции</a>
            </div>
        </div>

        <!-- ПАРТНЕРЫ -->
        <div class="sec">
          <h2>Наши партнёры</h2>

          <div class="d-flex flex-row flex-wrap justify-content-between align-items-center">
            <a  class="text-white"><img src="imgs/sibintek.svg" alt=""></a>
            <a  class="text-white"><img src="imgs/neoflex.svg" alt=""></a>
            <a  class="text-white"><img src="imgs/netcracker.svg" alt=""></a>
            <a  class="text-white"><img src="imgs/grids.svg" alt=""></a>
            <a  class="text-white"><img src="imgs/exactpro.svg" alt=""></a>
            <a  class="text-white"><img src="imgs/epam.svg" alt=""></a>
            <a  class="text-white"><img src="imgs/ssl.svg" alt=""></a>
            <a  class="text-white"><img src="imgs/1b.svg" alt=""></a>
          </div>
        </div>
      </div>
    </main>

    <footer class="bg-red">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-4 qa">
            <h4>Остались вопросы? Напишите нам</h4>
            <form class="" action="index.html" method="post">
              <input type="text" name="" value="" placeholder="Имя*" class="inp">

              <input type="text" name="" value="" placeholder="Телефон" class="inp">

              <input type="email" name="" value="" placeholder="Email*" class="inp">

              <textarea type="number" name="" value="" placeholder="Сообщение*" class="inp" rows="7"></textarea>

              <input type="submit" name="" value="Отправить" class="text-red inp">
            </form>
          </div>

          <div class="col-12 col-md-8">
            <div style="position:relative;overflow:hidden;width:100%;height:100%">
              <a href="https://yandex.ru/maps/org/saratovskiy_gosudarstvenny_tekhnicheskiy_universitet_imeni_gagarina_yu_a_/1556557124/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Саратовский Государственный Технический университет имени Гагарина Ю.А.</a>
              <a href="https://yandex.ru/maps/194/saratov/category/university_college/184106140/?utm_medium=mapframe&utm_source=maps" style="color:#BE2F21;font-size:12px;position:absolute;top:14px;">ВУЗ в Саратове</a>
              <iframe src="https://yandex.ru/map-widget/v1/-/CCUa7-EGgB" width="100%" height="100%" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
          </div>
        </div>

        <?php include_once 'components/footer.php'; ?>
      </div>
    </footer>


    
  </body>
</html>
