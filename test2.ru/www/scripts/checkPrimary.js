let tel = document.getElementById('tel');
let email = document.getElementById('email');
let social = document.getElementById('social');



    email.blur(function () {

        if ($(this).val() != '') {

            // Проверяем, если введенный email соответствует регулярному выражению
            if ($(this).val().search(pattern) == 0) {

                // Место для отправки значения поля email на сервер, через Ajax
                $.ajax({

                    // Название файла, в котором будем проверять email на существование в базе данных
                    url: "../php-validate/checkPrimary.php",

                    // Указывываем каким методом будут переданы данные
                    type: "POST",

                    // Указывываем в формате JSON какие данные нужно передать
                    data: {
                        email: $(this).val()
                    },

                    // Тип содержимого которого мы ожидаем получить от сервера.
                    dataType: "html",


                    // Функция которая будет выполнятся после того как все данные будут успешно получены.
                    success: function (data) {

                        //Полученный ответ помещаем внутри тега span
                        $('#valid_email_message').html(data);
                    }
                });

                //Активируем кнопку отправки
                $('input[type=submit]').attr('disabled', false);
            } else {
                //Выводим сообщение об ошибке
                $('#valid_email_message').html('<span class="mesage_error">Не правильный Email</span>');

                // Дезактивируем кнопку отправки
                $('input[type=submit]').attr('disabled', true);
            }

        } else {
            $('#valid_email_message').html('<span class="mesage_error">Введите Ваш email</span>');
        }
    });


