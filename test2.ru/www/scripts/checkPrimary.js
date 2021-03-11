let tel = document.getElementById('tel');
let email = document.getElementById('email');
let social = document.getElementById('social');



    email.blur(function () {

        if ($(this).val() != '') {

            // ���������, ���� ��������� email ������������� ����������� ���������
            if ($(this).val().search(pattern) == 0) {

                // ����� ��� �������� �������� ���� email �� ������, ����� Ajax
                $.ajax({

                    // �������� �����, � ������� ����� ��������� email �� ������������� � ���� ������
                    url: "../php-validate/checkPrimary.php",

                    // ����������� ����� ������� ����� �������� ������
                    type: "POST",

                    // ����������� � ������� JSON ����� ������ ����� ��������
                    data: {
                        email: $(this).val()
                    },

                    // ��� ����������� �������� �� ������� �������� �� �������.
                    dataType: "html",


                    // ������� ������� ����� ���������� ����� ���� ��� ��� ������ ����� ������� ��������.
                    success: function (data) {

                        //���������� ����� �������� ������ ���� span
                        $('#valid_email_message').html(data);
                    }
                });

                //���������� ������ ��������
                $('input[type=submit]').attr('disabled', false);
            } else {
                //������� ��������� �� ������
                $('#valid_email_message').html('<span class="mesage_error">�� ���������� Email</span>');

                // ������������� ������ ��������
                $('input[type=submit]').attr('disabled', true);
            }

        } else {
            $('#valid_email_message').html('<span class="mesage_error">������� ��� email</span>');
        }
    });


