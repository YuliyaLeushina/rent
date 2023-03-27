<!-- Footer -->
<footer id="footer" class="bg-dark">
            <div class="footer-content p-t-50">
                <div class="container">
                <div class="row gap-y">
                    <div class="col-md-3 col-xl-3">
                        <p class="mx-auto text-center">
                            <a class="scroll-to " href="index.html"><img src="images/lodo-footer.svg" alt="logo" class="logo-footer"></a>
                        </p>
                    </div>
                    <div class="col-12 col-md-8 col-xl-8 d-flex flex-column justify-content-between">
                        <!-- Footer widget area 1 -->
                        <div class="blockquote blockquote-fancy">
                            <p class="orange">желаем вам удачи и не допустить ошибок в покупке или продаже замли, так как мы понимаем на сколько это ответсвенный шаг. А художник — единственный человек, который никогда не бывает серьезным.</p>
                            <small>© команда INDEX</small>
                        </div>
                        
                        <!-- end: Footer widget area 1 -->
                    </div>
                </div>
                </div>
            </div>
        </footer>
        <!-- end: Footer -->
    </div>
    <!-- end: Page title -->
    <!--Modal -->
    <div class="modal fade" id="modal" tabindex="-1" role="complementary" aria-labelledby="modal-label" aria-hidden="true"
        style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title" id="modal-label">Получить презентацию и цены</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <form id="feedback-form" action="/send.php" method="post" class="form" class="form-validate" action="/roistat.php" method='POST'>
                            <div class="row">
                            <div class="col-sm-12 m-b-20">
                                <input type="text" class="form-control form-control-name" name="name"
                                    placeholder="Введите имя" required>
                            </div>
                            <div class="col-sm-12 m-b-20">
                                <input type="tel" class="form-control form-control-tel" name="telephone" required
                                    placeholder="Введите телефон" id="phone1">
                            </div>
                            <div class="col-sm-12 m-b-5">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck1" checked value="1"
                                        required>
                                    <label class="form-check-label" for="gridCheck1">
                                        <a href=" " target="_blank">Согласен с
                                        политикой конфиденциальности</a>
                                    </label>
                                </div>
                                <button type="submit" class="btn m-t-20 btn-primary" onclick="">Посмотреть цены
                                    участков</button>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end: Modal -->
    <!-- end: Body Inner -->
    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    <!-- end: Scroll top -->
    <!--Template functions-->
    <!--Plugins-->
    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>
    <script src="plugins/morrisjs/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.min.js"></script>
    <script src="js/jquery.maskedinput.min.js"></script>
    <script>
        jQuery(document).ready(function() {
            new Morris.Donut({
                element: "morris_4",
                data: [{
                    label: "Связываемся и уточняем характеристики",
                    value: 14.28,
                    select: 0
                },  {
                    label: "Показы и выходы на сделку",
                    value: 14.28,
                    select: 1
                }, {
                    label: "Отчет о каждом этапе работы",
                    value: 14.28,
                    select: 2
                }, {
                    label: "Работа с действующей базой",
                    value: 14.28,
                    select: 3
                }, {
                    label: "Размещение на 75 досках объявлений",
                    value: 14.28,
                    select: 4
                },  {
                    label: "Предпродажная подготовка",
                    value: 14.28,
                    select: 5
                },{
                    label: "Запрос и проверка документов",
                    value: 14.28,
                    select: 6
                },
            ],
                formatter: function (y, data) { return y + '%' },
                colors: ["#FFCA86", "#FFB841", "#FFB02E", "#F3A505", "#F4A900", "#ED760E", "#FFAE42"]
            });
        });
    </script>
    <script type="text/javascript">
        jQuery(function ($) {
           $('input').on('input invalid', function () {
              this.setCustomValidity('')
              if (this.validity.valueMissing) {
                 this.setCustomValidity("Необходимо принять условия политики конфиденциальности")
              }
           })
           $('.form-control-tel').on('input invalid', function () {
              this.setCustomValidity('')
              if (this.validity.valueMissing) {
                 this.setCustomValidity("Введите телефон")
              }
           })
           $('.form-control-name').on('input invalid', function () {
              this.setCustomValidity('')
              if (this.validity.valueMissing) {
                 this.setCustomValidity("Введите имя")
              }
           })
           $("#phone").click(function () {
              $(this).setCursorPosition(3);
           }).mask("+7(999) 999-9999");
           $("#phone1").click(function () {
              $(this).setCursorPosition(3);
           }).mask("+7(999) 999-9999");
        });
  
  
     </script>
     <script>
        $(document).ready(function () {
           $(".form").submit(function () {
              // Получение ID формы
              var formID = $(this).attr('id');
              // Добавление решётки к имени ID
              var formNm = $('#' + formID);
              $.ajax({
                 type: "POST",
                 url: '/send.php',
                 data: formNm.serialize(),
                 beforeSend: function () {
                    // Вывод текста в процессе отправки
                    $("#message_form").html('<p style="text-align:center">Отправка...</p>');
                 },
                 success: function (data) {
                    // Вывод текста результата отправки
                    $("#message_form").html('<p style="text-align:center">Ваша анкета успешно отправлена!</p>');
                 },
                 error: function (jqXHR, text, error) {
                    // Вывод текста ошибки отправки
                    $("#message_form").html(error);
                 }
              });
              return false;
           });
        });
     </script>
    <!--Template functions-->
    <script src="js/functions.js"></script>
    
</body>

</html>