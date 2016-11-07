$(document).ready(function () {
    $('.delete-number').click(function (e) {
        e.preventDefault();
        if(confirm('Delete Number ?')){
            $.ajax({
                url: "http://my-phone-book.esy.es/delete/"+$(this).attr('data-id'),
                method: "GET",
                success: function () {
                    location.reload();
                    alert('Deleted');
                }
            })
        }

    });
    $(".number_form").validate({

        rules:{

            form_number:{
                required: true,
                maxlength: 12,
                digits:true
            },

            form_name:{
                required: true,
                maxlength: 50
            },
            form_description:{
                maxlength: 255
            },
        },

        messages:{

            form_number:{
                required: "Это поле обязательно для заполнения",
                maxlength: "Максимальная длинна номера - 12",
                digits: "Допустимы только цифры"
            },

            form_name:{
                required: "Это поле обязательно для заполнения",
                maxlength: "Имя должно быть не больше 50 символов"
            },

            form_description:{
                maxlength: "Описание должно быть больше 255 символов"
            },

        }

    });

});


