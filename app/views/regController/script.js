$(document).ready(function () {

    $(".main__choice").on("click", ".tab", function () {
        $(".main__choice .tab").removeClass('tab_active');
        $(".main__choice .feed-form").removeClass('feed-form_active');
        $(this).addClass('tab_active');
        $(".feed-form").eq($(this).index()).addClass("feed-form_active");
    });
});
function login(){
    $('#login_form').submit(function (event) {
        event.preventDefault();
        let form = $(event.target);
        let form_data = form.serializeArray();
    
        $.ajax({
            url: "/pahotina/mvc/reg/login/",
            type: "POST",
            data: form_data,
            dataType: "json",
            beforeSend: function () { //отпраление запроса
                form.find('input').each(function (i, e) {
                $(e).attr('disabled', 'disabled'); //доюавляем к инпутам атрибут дизаблед со значением дизаблед , чтобы был не кликабельн
                });
                form.find('.alert-danger').addClass('d-none');
                form.find('button[type="submit"]').disabled = true;
                form.find('.loader-container ').removeClass("d-none");
                form.find('.button-title').addClass("d-none");
        
            },
            success: function (json) {

                if (json.error != '') {
                //   form.find('.alert-danger').removeClass('d-none').html(json.error);
                //   form.find('input').each(function (i, e) {
                //     $(e).removeAttr('disabled');
                //   });
        
                //   form.find('button[type="submit"]').show();
                //   form.find('.loader11').addClass("d-none");
           
                } else {
                    location.href = "/pahotina/diploma/proj/";
                }
            
        
            }
        });

    });
}
function globalLogin(event) {
    
}
$(document).ready(function (event) {

    $('#reg_form').submit(function (event) {
        event.preventDefault();
        let form = $(event.target);

        let form_data = form.serializeArray();

        let data = [];

        for (let item in form_data) {
            data[form_data[item]['name']] = form_data[item]['value'];
        }

        if (data['password'] != data["password_confirm"]) {
            $(".pass_erorr").removeClass("d-none");
            setTimeout(function () {
                $(".pass_erorr").addClass("d-none");
            }, 3500);
            return false;
        }
        let obj = {};

        Object.assign(obj, data);

        $.ajax({
            url: "/pahotina/diploma/reg/registration",
            type: "POST",
            data: obj,
            dataType: "json",
            success: function (json) {
                if (json.error.length > 0) {
                    $(".server_error").text(json.event).removeClass("d-none");
                } else {
                    // let modal = `
                    //     <div class="modal" id="success_reg" tabindex="-1">
                    //         <div class="modal-dialog">
                    //             <div class="modal-content">
                    //             <div class="modal-header">
                    //                 <h5 class="modal-title">Добро пожаловать, ${obj.name} </h5>
                    //                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    //             </div>
                    //             <div class="modal-body">
                    //                 <p>Регистрация прошла успешно</p>
                    //             </div>
                    //             <div class="modal-footer">
                    //                 <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                    //             </div>
                    //             </div>
                    //         </div>
                    //     </div>
                    // `;
                    // $('body').append(modal);
                    // let modalObj = new bootstrap.Modal(document.getElementById('success_reg'));
                    location.href = '/pahotina/diploma/proj/';

                    // $('#success_reg').on( function (event) {
                        
                    // });
                    // modalObj.show();
                    // location.reload();
                }
            }
        });
    });
});