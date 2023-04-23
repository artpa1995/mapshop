$(document).on("click", ".main-map-content", function(){
     
     $(".sidebar").addClass('sidebar-mini');

});    

$(document).on("click", ".use_certificate_btn", function(){
     
    $(this).parent().find('.used_certificate_btn').addClass('account_certificate_used');
    $(this).addClass('used_certificate_btn');
});

$(document).on("click", ".use_disposable_certificate_btn", function(){
     
    $(this).parent().find('.used_disposable_certificate_btn').addClass('account_certificate_used');
    $(this).addClass('used_disposable_certificate_btn');
});

$(document).on("click", ".cancel_product_data", function(){
     
    $(".exampleModalFullscreen").css({"display":"none","opacity":"0"});

});

$(document).on("click", ".certificate_modal_cancel", function(){
     
    $(".use_certificate_code_wrapper").css({"display":"none"});
    $(".use_certificate_btn").removeClass('used_certificate_btn');

});

$(document).on("click", ".disposable_certificate_modal_cancel", function(){
     
    $(".use_disposable_certificate_code_wrapper").css({"display":"none"});
    $(".use_disposable_certificate_btn").removeClass('used_disposable_certificate_btn');

});

$(document).on("click", ".auth_menu_btn", function(){
     
    $("#sidebar-auth").toggleClass('show');
    $(this).toggleClass('collapsed');
});

$(document).on("click", ".confirm_mail_modal_cancel", function(){
     
    $(".confirm_mail_modal_wrapper").css({"display":"none"});
    
});

$(document).on("click", ".password_icon", function () {

      if ($("#exampleInputPassword1").attr("type") === "password") {
          $("#exampleInputPassword1").attr("type", "text");
          $(".password_show_icon").addClass("open");
          $(".password_hide_icon").removeClass("open");
      } else {
          $("#exampleInputPassword1").attr("type", "password");
          $(".password_show_icon").removeClass("open");
          $(".password_hide_icon").addClass("open");
      }

})

$(document).on("click", ".admin_recive_messages_wrapper", function(){
     
    var reciver_id = $(this).data('reciver_id');
    $("#reciver_id").val(reciver_id);

});

$(document).on("click", ".admin_recive_messages_wrapper", function(){
     
    var data_id = $(this).data('id');
    var scrollEvent = $(this).hasClass('active');
   
    if (scrollEvent) {
        var scroll_div = $("#chatbox" + data_id).find('.account_chat_content_wrapper');
        scroll_div.scrollTop(scroll_div[0].scrollHeight);
    }

});

$(document).on("click", ".menuToptowar", function(){
     
     $(".add_certificate_modal").css("display","block");

});

$(document).on("click", ".cancel_add_certificate_btn", function(){
     
     $(".add_certificate_modal").css("display","none");

});

$(document).on("click", ".exchanger_li_btn", function(){
     
     $(".menuToptowar").css("display","none");

});

$(document).on("click", ".market_li_btn", function(){
     
     $(".menuToptowar").css("display","block");

});

// Registration Function //

$(document).on("submit", ".sign-up-from-wrapper", function(event){

        event.preventDefault();
      

        var email = $("input[name=email]", this);
        var firstname = $("input[name=first_name]", this);
        var password = $("input[name=password]", this);
        var agree_terms = $("input[name=agree_terms]", this);
   
        var email_val = email.val();
        var firstname_val = firstname.val();
        var password_val  = password.val();

        var valid = true; 

        if (email_val.length < 1) {

                valid = false;
                email.addClass("active");
                $('.error_email').css("display", "block");
                $('.error_email').html("Email  обязательное поле");

        } else {
                
                var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
                if (!testEmail.test(email_val)) {

                    valid = false;
                    email.addClass("active");
                    $('.error_email').css("display", "block");
                    $('.error_email').html("Введите действительный email");
                }

    }
    
    if (firstname_val.length < 1) {

        valid = false;
        firstname.addClass("active");
        $('.error_first_name').css("display", "block");
        $('.error_first_name').html("Имя обязательное поле");
    }

    if (password_val.length < 6) {

        valid = false;
        password.addClass("active");
        $('.error_password').css("display", "block");
        $('.error_password').html("Пароль должен содержать минимум 6 символов");

    }
    
    if(agree_terms.is(":checked")){

       var agree_terms_val = '1';

    }else{
      
      valid = false;
      var agree_terms_val = '0';
      agree_terms.parent().addClass("active");
           
    }

    if (!valid) {
        return false;
    }

    $.ajax({
        url: ajaxUrl,
        type: 'POST',
        data: {action: 'signup_action' , email: email_val, first_name: firstname_val , password: password_val,agree_terms:agree_terms_val},
        success: function (response) {
            
    
            if (response.hasOwnProperty("create_success")) {
                
                $('.confirm_mail_modal_wrapper').css("display", "block");

            }else if(response.hasOwnProperty("email_exists")){
                email.addClass("active");
                $('.error_email').css("display", "block");
                $('.error_email').html("Данный E-mail уже зарегистрирована "); 

            }else if(response.hasOwnProperty("fields_empty_error")){
                password.addClass("active");
                $('.error_password').css("display", "block");
                $('.error_password').html("Нужно заполнить все поля"); 

            }else if(response.hasOwnProperty("agree_terms_empty_error")){
                
                agree_terms.parent().addClass("active");

            }

        }
    });
   
})


// Login Function //

// Login function //

$(document).on("submit", ".sign-in-from-wrapper", function(event){

        event.preventDefault();
   
        var email = $("input[name=email]", this);
        var password = $("input[name=password]", this);

        var email_val = email.val();
        var password_val =  password.val();
        
        var valid = true;

        if ($("#rememberMe").prop("checked")){

          var remember_me = $("#rememberMe").data('type');

        }else{

              var remember_me = $("#rememberMe").val();

        } 
         
        if (email_val.length < 1) {

                valid = false;
                email.addClass("active");
                $(this).find('.error_email').css("display", "block");
                $('.error_email').html("Email  обязательное поле");

        } else {
                
                var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
                if (!testEmail.test(email_val)) {

                    valid = false;
                    email.addClass("active");
                    $(this).find('.error_email').css("display", "block");
                    $('.error_email').html("Введите действительный email");
                }

        }
    
   
        if (password_val.length < 6) {

            valid = false;
            password.addClass("active");
            $('.error_password').css("display", "block");
            $('.error_password').html("Пароль должен содержать минимум 6 символов");

        }


    if (!valid) {
        return false;
    }

    $.ajax({
        url: ajaxUrl,
        type: 'POST',
        data: {action: 'login_action' ,remember_me:remember_me, email: email_val,password: password_val},
        success: function (response) {
            
            if (response.hasOwnProperty("login_success")) {
               
                window.location = '/profile-page';

            }else if(response.hasOwnProperty("login_error")){
                 
                    password.addClass("active");
                    $('.error_password').css("display", "block");
                    $('.error_password').html("Не верная почта или пароль");

            }else if(response.hasOwnProperty("fields_empty_error")){

                    password.addClass("active");
                    $('.error_password').css("display", "block");
                    $('.error_password').html("Нужно заполнить все поля");

            }

        }
    });
   
})

//Forgot Password Function // 

$(document).on("submit",".forgot-password-form" ,function (event) {
    
    event.preventDefault();

    var thisis = $(this);
    var email = $("input[name=email]", this);

    var email_val = $("input[name=email]", this).val();
    
    var valid = true;
    
    if (email_val.length < 1) {

        valid = false;
        email.addClass("active");
        $('.error_email').css("display", "block");
        $('.error_email').html("Email  обязательное поле");

    } else {
                
        var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
        if (!testEmail.test(email_val)) {

            valid = false;
            email.addClass("active");
            $('.error_email').css("display", "block");
            $('.error_email').html("Введите действительный email");
        }

    }

    if (!valid) {
        return false;
    }
    
    $.ajax({
        url: ajaxUrl,
        type: 'POST',
        data: {action: 'forgot_user_password' , email:email_val},
        success: function (response) {
            
            if (response.hasOwnProperty("exist_email_error")) {

                email.addClass("active");
                $('.error_email').css("display", "block");
                $('.error_email').html("Данный E-mail не  зарегистрирована"); 

            }else if(response.hasOwnProperty("send_code_success")){
                
                    window.location = '/forgot-code-page';

            }else if(response.hasOwnProperty("no_send_email_error")){
                
                   email.addClass("active");
                   $('.error_email').css("display", "block");
                   $('.error_email').html("E-mail не отправлено попробуйте еще раз ");

            }else if(response.hasOwnProperty("empty_email_error")){
                
                    email.addClass("active");
                    $('.error_email').css("display", "block");
                    $('.error_email').html("Email  обязательное поле");
            }

        }
    });


})


$(document).on("submit",".forgot-code-form" ,function () {
    
    event.preventDefault();

    var code = $("input[name=password_code]", this);
    var password = $("input[name=password]", this);
    var confirm_password = $("input[name=conf_password]", this);
    
    var code_val = code.val();
    var password_val = password.val();
    var confirm_password_val = confirm_password.val();

    var valid = true;
    
    if (code_val.length < 1) {

        valid = false;
        code.addClass("active");
        $('.error_code').css("display", "block");
        $('.error_code').html("Код обязательное поле");

    }

    if (password_val.length < 6) {

        valid = false;
        password.addClass("active");
        $('.error_password').css("display", "block");
        $('.error_password').html("Пароль обязательное поле");

    }


    if (confirm_password_val < 6) {

        valid = false;
        confirm_password.addClass("active");
        $('.conf_password').css("display", "block");
        $('.conf_password').html("Повторите пароль обязательное поле");

    } else {

        if (confirm_password_val != password_val) {
            valid = false;
            confirm_password.addClass("active");
            $('.conf_password').css("display", "block");
            $('.conf_password').html("Пароли не совпадают ");
        }

    }
   

    if (!valid) {
        return false;
    }
    
    $.ajax({
        url: ajaxUrl,
        type: 'POST',
        data: {action: 'code_change_password' , code:code_val,password:password_val,confirm_password:confirm_password_val},
        success: function (response) {
            
            if (response.hasOwnProperty("change_password_success")) {
                   
                window.location = '/sign-in-page';
                     
            }else if(response.hasOwnProperty("not_code_error")){
                
                    code.addClass("active");
                    $('.error_code').css("display", "block");
                    $('.error_codet').html("Код обязательное поле");

            }else if(response.hasOwnProperty("false_code_error")){
                
                    code.addClass("active");
                    $('.error_code').css("display", "block");
                    $('.error_code').html("Неправильный код");
            }

        }

    });


})

// Edit Profile functions //

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('body').find('.profile-img-edit img').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
}

$(".edit-profile-file-upload").on("change", function () {
    readURL(this);
})

$(document).on("submit", ".edit-profile-form-wrapper", function(event){

    event.preventDefault();
    
    var image = $("input[name=image]", this);
    var firstname = $("input[name=first_name]", this);
    var lastname = $("input[name=last_name]", this);
    var username = $("input[name=user_name]", this);
    var city = $("input[name=city]", this);
    var phone = $("input[name=phone]", this);
    var unisex = $("input[name=unisex]", this);
    var age = $("select[name=age]", this);
    var about_me = $("textarea[name=about_me]", this);
    
    var image_val = image.val(); 
    var firstname_val = firstname.val();
    var lastname_val = lastname.val();
    var username_val = username.val();
    var city_val = city.val();
    var phone_val = phone.val();
    var unisex_val = unisex.val();
    var age_val = age.val();
    var about_me_val = about_me.val().replace(/ /g,'');
    
  
    // var valid = true; 


    // if (firstname_val.length < 1) {

    //     valid = false;
    //     firstname.addClass("active");
    //     $('.error_first_name').css("display", "block");
    //     $('.error_first_name').html("Имя обязательное поле");
    // }

    // if (lastname_val.length < 1) {

    //     valid = false;
    //     lastname.addClass("active");
    //     $('.error_last_name').css("display", "block");
    //     $('.error_last_name').html("Имя обязательное поле");
    // }

    // if (username_val.length < 1) {

    //     valid = false;
    //     username.addClass("active");
    //     $('.error_user_name').css("display", "block");
    //     $('.error_user_name').html("Никнейм обязательное поле");
    // }

    // if (city_val.length < 1) {

    //     valid = false;
    //     city.addClass("active");
    //     $('.error_city').css("display", "block");
    //     $('.error_city').html("Город обязательное поле");
    // }
    
    // if (phone_val.length < 1) {

    //     valid = false;
    //     phone.addClass("active");
    //     $('.error_phone').css("display", "block");
    //     $('.error_phone').html("Телефон обязательное поле");

    // }else if(!$.isNumeric(phone_val)){
        
    //     valid = false;
    //     phone.addClass("active");
    //     $('.error_phone').css("display", "block");
    //     $('.error_phone').html("Введите действительный Телефон ");
    // }

    // if (unisex_val.length < 1) {

    //     valid = false;
    //     unisex.parent().parent().addClass("active");
    // }
   
    // if (age_val.length < 1) {

    //     valid = false;
    //     age.addClass("active");

    // }

    // if (about_me_val.trim().length < 1) {

    //     valid = false;
    //     about_me.addClass("active");
    //     $('.error_about_me').css("display", "block");
    //     $('.error_about_me').html("О себе обязательное поле");
    // }

    

    // if (!valid) {
    //     return false;
    // }
    
    var formdata = new FormData();
    formdata.append( "image", $('#updated_image')[0].files[0]);
    formdata.append( "action", 'user_edit_profile');
    formdata.append( "first_name", firstname_val);
    formdata.append( "last_name", lastname_val);
    formdata.append( "user_name", username_val);
    formdata.append( "city", city_val);
    formdata.append( "phone", phone_val);
    formdata.append( "unisex", unisex_val);
    formdata.append( "age", age_val);
    formdata.append( "about_me", about_me_val);

    $.ajax({
        url: ajaxUrl,
        type: 'POST',
        processData: false,
        contentType: false,
        data: formdata,
        success: function (response) {

            if (response.hasOwnProperty("edit_profile_success")) {
                  
                window.location = '/profile-page';

            }
            // else if (response.hasOwnProperty("fields_empty_error")){
           
            //         $(".card-title").css("color","red");
            //         $(".card-title").html("Нужно заполнить все поля");

            // }

        }
    });       
   
})

$(document).on("submit", ".change_password_form", function(event){

        event.preventDefault();

        var new_password     = $("input[name=new_password]", this);
        var confirm_password = $("input[name=confirm_password]", this);
   
        var new_password_val     =  new_password.val();
        var confirm_password_val = confirm_password.val();

        var change_password = $(".change_password_wrapper");
        var code_add_form = $(".password_code_to_email_wrapper");

        var valid = true; 

        if (new_password_val.length < 6) {

            valid = false;
            new_password.addClass("active");
            $('.error_new_password').css("display", "block");
            $('.error_new_password').html("Новый пароль обязательное поле");

        }


        if (confirm_password_val < 6) {

            valid = false;
            confirm_password.addClass("active");
            $('.error_confirm_password').css("display", "block");
            $('.error_confirm_password').html("Повторите пароль обязательное поле");

        } else {

            if (confirm_password_val != new_password_val) {
                valid = false;
                confirm_password.addClass("active");
                $('.error_confirm_password').css("display", "block");
                $('.error_confirm_password').html("Пароли не совпадают ");
            }

        }

        if (!valid) {
            return false;
        }

        $.ajax({
            url: ajaxUrl,
            type: 'POST',
            data: {action: 'change_account_password' ,new_password: new_password_val, confirm_password: confirm_password_val},
            success: function (response) {
                
        
                if (response.hasOwnProperty("send_code_success")) {
                    
                    change_password.css("display","none"); 
                    code_add_form.css("display","block");

                }else if(response.hasOwnProperty("new_password_error")){
                         new_password.addClass("active");
                         $('.error_new_password').css("display", "block");
                         $('.error_new_password').html("Новый пароль обязательное поле");

                }else if(response.hasOwnProperty("password_error")){
                        confirm_password.addClass("active");
                        $('.error_confirm_password').css("display", "block");
                        $('.error_confirm_password').html("Неправильный пароль ");

                }else if(response.hasOwnProperty("no_send_email_error")){
                        confirm_password.addClass("active");
                        $('.error_confirm_password').css("display", "block");
                        $('.error_confirm_password').html("Повторите позже");
                }


            }
        });
   
})

$(document).on("submit",".password_code_to_email_form" ,function () {
    
    event.preventDefault();
 
    var code = $("input[name=password_code]", this);    
    var code_val = code.val();
 
    var valid = true;
    
    if (code_val.length < 1) {

        valid = false;
        code.addClass("active");
        $('.error_code_pswd').css("display", "block");
        $('.error_code_pswd').html("Код обязательное поле");

    }

    if (!valid) {
        return false;
    }
    
    $.ajax({
        url: ajaxUrl,
        type: 'POST',
        data: {action: 'code_change_user_password' , code:code_val },
        success: function (response) {
            
            if (response.hasOwnProperty("change_password_success")) {
                   
                location.reload();
                     
            }else if(response.hasOwnProperty("not_code_error")){
                
                    code.addClass("active");
                    $('.error_code_pswd').css("display", "block");
                    $('.error_code_pswd').html("Код обязательное поле");

            }else if(response.hasOwnProperty("false_code_error")){
                
                    code.addClass("active");
                    $('.error_code_pswd').css("display", "block");
                    $('.error_code_pswd').html("Неправильный код");

            }else if(response.hasOwnProperty("change_password_error")){
                
                    code.addClass("active");
                    $('.error_code_pswd').css("display", "block");
                    $('.error_code_pswd').html("Отправьте снова");
            }

        }

    });


})

$(document).on("click", ".get_product_btn",function(){
          
        var thisis = $(this);
        var product_id = thisis.data('product_id');
   
        $.ajax({
        url: ajaxUrl,
        type: 'POST',
        data: {action: 'get_product_description' , product_id:product_id},
        success: function (response) {
           
             
            if (response.hasOwnProperty("pruduct_data_success")) {
               
               $(".exampleModalFullscreen").css({"display":"block","opacity":"1"});     
               $(".exampleModalFullscreen").html(response.pruduct_data_success);
                     
            }           

        }
    });

}) 

// become an investor function //

 $(document).on("click",".add_investor" ,function () {
    
        var thisis = $(this);
        var product_id = thisis.data('product_id');
        
        var valid = true;


        if (product_id.length < 1) {

            valid = false;
            thisis.css('border','1px solid red');

        }

        if (!valid) {
            return false;
        }
        
        $.ajax({
            url: ajaxUrl,
            type: 'POST',
            data: {action: 'account_become_investor' , product_id:product_id},
            success: function (response) {
                
                if (response.hasOwnProperty("success_certificate_save")) {
                    
                    $(".account_real_balance").html(response.new_balance);
                    var success  = $("<h3>", {"class": "mb-4"});
                    success.append("Вы стали инвестором");
                    $(".product_data_wrapper").html(success);
                    setTimeout(function () {

                       $(".exampleModalFullscreen").css({"display":"none","opacity":"0"});
                    
                    }, 3000);
     
                }else if(response.hasOwnProperty("product_exist_error")){
                     
                        thisis.css('border','1px solid red');

                }else if(response.hasOwnProperty("bet_count_error")){
                     
                        thisis.css('border','1px solid red');

                }else if(response.hasOwnProperty("certificate_save_error")){
                     
                        thisis.css('border','1px solid red');

                }

            }
        });


    })


 $(document).on("click",".use_certificate_btn" ,function () {
    
        var thisis = $(this);
        var certificate_id = thisis.data('certificate_id');
        
        var valid = true;


        if (certificate_id.length < 1) {

            valid = false;
            thisis.css('border','1px solid red');

        }

        if (!valid) {
            return false;
        }
        
        $.ajax({
            url: ajaxUrl,
            type: 'POST',
            data: {action: 'account_use_certificate' , certificate_id:certificate_id},
            success: function (response) {
                
                if (response.hasOwnProperty("send_code_success")) {

                    $(".use_certificate_code_wrapper").css('display','block');
                    $(".certificate_id_data").val(response.certificate_id);

                }else if(response.hasOwnProperty("use_certificate_error")){
                     
                        thisis.css('border','1px solid red');

                }else if(response.hasOwnProperty("no_send_email_error")){
                     
                        thisis.css('border','1px solid red');

                }

            }
        });

    })


 $(document).on("submit",".use_certificate_content_form" ,function () {
    
    event.preventDefault();
 
    var code = $("input[name=certificate_code]", this);
    var certificate_id = $("input[name=certificate_id]", this).val();  
    var code_val = code.val();
 
    var valid = true;
    
    if (code_val.length < 1) {

        valid = false;
        code.css("border","1px solid red");
        $('.error_code').css("display", "block");
        $('.error_code').html("Код обязательное поле");

    }

    if (!valid) {
        return false;
    }
    
    $.ajax({
        url: ajaxUrl,
        type: 'POST',
        data: {action: 'send_certificate_code' , code:code_val,certificate_id:certificate_id },
        success: function (response) {
            
            if (response.hasOwnProperty("used_certificate_success")) {
                
                $(".use_certificate_code_wrapper").css('display','none');
                $('.account_certificate_used').removeClass('used_certificate_btn');   
                $('.account_certificate_used').css('display','block !important');
                     
            }else if(response.hasOwnProperty("not_code_error")){
                
                    code.css("border","1px solid red");
                    $('.error_code').css("display", "block");
                    $('.error_code').html("Код обязательное поле");

            }else if(response.hasOwnProperty("false_code_error")){
                
                    code.css("border","1px solid red");
                    $('.error_code').css("display", "block");
                    $('.error_code').html("Неправильный код");

            }else if(response.hasOwnProperty("used_certificate_error")){
                
                    code.css("border","1px solid red");
                    $('.error_code').css("display", "block");
                    $('.error_code').html("Отправьте снова");
            }

        }

    });


})

 $(document).on("click",".use_disposable_certificate_btn" ,function () {
    
        var thisis = $(this);
        var certificate_id = thisis.data('certificate_id');
        
        var valid = true;


        if (certificate_id.length < 1) {

            valid = false;
            thisis.css('border','1px solid red');

        }

        if (!valid) {
            return false;
        }
        
        $.ajax({
            url: ajaxUrl,
            type: 'POST',
            data: {action: 'account_use_disposable_certificate' , certificate_id:certificate_id},
            success: function (response) {
                
                if (response.hasOwnProperty("send_code_success")) {

                    $(".use_disposable_certificate_code_wrapper").css('display','block');
                    $(".certificate_id_data").val(response.certificate_id);

                }else if(response.hasOwnProperty("use_certificate_error")){
                     
                        thisis.css('border','1px solid red');

                }else if(response.hasOwnProperty("no_send_email_error")){
                     
                        thisis.css('border','1px solid red');

                }

            }
        });

    }) 

 $(document).on("submit",".use_disposable_certificate_content_form" ,function () {
    
    event.preventDefault();
 
    var code = $("input[name=certificate_code]", this);
    var certificate_id = $("input[name=certificate_id]", this).val();  
    var code_val = code.val();
 
    var valid = true;
    
    if (code_val.length < 1) {

        valid = false;
        code.css("border","1px solid red");
        $('.error_code').css("display", "block");
        $('.error_code').html("Код обязательное поле");

    }

    if (!valid) {
        return false;
    }
    
    $.ajax({
        url: ajaxUrl,
        type: 'POST',
        data: {action: 'send_disposable_certificate_code' , code:code_val,certificate_id:certificate_id },
        success: function (response) {
            
            if (response.hasOwnProperty("used_certificate_success")) {
                
                $(".use_disposable_certificate_code_wrapper").css('display','none');
                $('.account_certificate_used').removeClass('used_disposable_certificate_btn');   
                $('.account_certificate_used').css('display','block !important');
                     
            }else if(response.hasOwnProperty("not_code_error")){
                
                    code.css("border","1px solid red");
                    $('.error_code').css("display", "block");
                    $('.error_code').html("Код обязательное поле");

            }else if(response.hasOwnProperty("false_code_error")){
                
                    code.css("border","1px solid red");
                    $('.error_code').css("display", "block");
                    $('.error_code').html("Неправильный код");

            }else if(response.hasOwnProperty("used_certificate_error")){
                
                    code.css("border","1px solid red");
                    $('.error_code').css("display", "block");
                    $('.error_code').html("Отправьте снова");
            }

        }

    });


})

 //  Disposable ertificate market // 

$(document).on("submit",".add_certificate_data_form" ,function (event) {
    
    event.preventDefault();

    var thisis = $(this); 

    var certificat_eModal = $(".add_certificate_modal");
    
    var price_product = $("input[name=price_product]", this);
    var certificate_product = $("select[name=user_certificates]", this);
    var price_product_val = price_product.val();
    var certificate_product_val = certificate_product.val();
   
    // var certificat_id = $(".choose_game", this).children("option:selected").data('post_id');
   
    var valid = true;

    if (price_product_val.length < 1) {

        valid = false;
        price_product.addClass("active");
        $('.error_price').css("display", "block");
        $('.error_price').html("Цена  обязательное поле");

    }
    
    if(!$.isNumeric(price_product_val)){
       
        valid = false;
        price_product.addClass("active");
        $('.error_price').css("display", "block");
        $('.error_price').html("Напишите правильное значение"); 

    } 

    if (certificate_product_val < 1) {

        valid = false;
        certificate_product.addClass("active");
        $('.error_certificate').css("display", "block");
        $('.error_certificate').html("Сертификаты обязательное поле");

    }
   
    
    if (!valid) {
        return false;
    }
    
    $.ajax({
        url: ajaxUrl,
        type: 'POST',
        data: {action: 'user_add_market_certificate',price_product:price_product_val,certificate_product:certificate_product_val},
        success: function (response) {
            
            if (response.hasOwnProperty("add_certificate_success")) {
                   
                location.reload();
                     
            }else if(response.hasOwnProperty("not_certificate_error")){
                
                    valid = false;
                    certificate_product.addClass("active");
                    $('.error_certificate').css("display", "block");
                    $('.error_certificate').html("Сертификаты обязательное поле");

            }else if(response.hasOwnProperty("not_price_error")){
                
                    price_product.addClass("active");
                    $('.error_price').css("display", "block");
                    $('.error_price').html("Проверяете ваш баланс");

            }else if(response.hasOwnProperty("add_certificate_error")){
                
                    valid = false;
                    certificate_product.addClass("active");
                    $('.error_certificate').css("display", "block");
                    $('.error_certificate').html("Попробуйте снова");

            }
           
        }

    });


})

$(document).on("click",".add_disposable_certificate_btn" ,function () {
    
    var thisis = $(this);
    var certificate_id = thisis.data('certificate_id');
    
    var valid = true;

    if (certificate_id.length < 1) {

        valid = false;
        thisis.css('border','1px solid red');

    }

    if (!valid) {
        return false;
    }
    
    $.ajax({
        url: ajaxUrl,
        type: 'POST',
        data: {action: 'account_pay_disposable_certificate' , certificate_id:certificate_id},
        success: function (response) {
            
            if (response.hasOwnProperty("success_certificate_save")) {
                
                location.reload();
 
            }else if(response.hasOwnProperty("certificate_exist_error")){
                 
                    thisis.css('border','1px solid red');

            }else if(response.hasOwnProperty("bet_count_error")){
                 
                    thisis.css('border','1px solid red');

            }else if(response.hasOwnProperty("certificate_save_error")){
                 
                    thisis.css('border','1px solid red');

            }

        }
    });


})

$(document).on("click",".exchange_certificate_btn" ,function () {
    
    var thisis = $(this);
    var certificate_id = thisis.data('certificate_id');
    
    var valid = true;

    if (certificate_id.length < 1) {

        valid = false;
        thisis.css('border','1px solid red');

    }

    if (!valid) {
        return false;
    }
    
    $.ajax({
        url: ajaxUrl,
        type: 'POST',
        data: {action: 'account_pay_exchange_certificate' , certificate_id:certificate_id},
        success: function (response) {
            
            if (response.hasOwnProperty("success_certificate_save")) {
                
                location.reload();
 
            }else if(response.hasOwnProperty("certificate_exist_error")){
                 
                    thisis.css('border','1px solid red');

            }else if(response.hasOwnProperty("bet_count_error")){
                 
                    thisis.css('border','1px solid red');

            }else if(response.hasOwnProperty("certificate_save_error")){
                 
                    thisis.css('border','1px solid red');

            }

        }
    });


})



// Live messages functions // 

$(document).on("submit",".admin_and_users_chat_form" ,function (event) {
    
    event.preventDefault();
  

    var thisis  = $(this);
    var message = $("input[name=message]", this);
    var reciver_id = $("input[name=reciver_id]", this).val();
    var message_val =  message.val();

    var valid = true;
    
    if (message_val.length < 1) {

        valid = false;
        message.css("border","2px solid red")            
        message.attr("placeholder", "написать длинный текст");

    }

    if (!valid) {
        return false;
    }
    
    $.ajax({
        url: ajaxUrl,
        type: 'POST',
        data: {action: 'account_send_message' , message:message_val,reciver_id:reciver_id},
        success: function (response) {
            
            if(response.hasOwnProperty("message_content_error")){
  
                    message.css("border","2px solid red");            
                    message.attr("placeholder", "Невозможно отправить сообщения");
            
            }else if(response.hasOwnProperty("message_content_success")){

                $(".account_chat_content_wrapper").append(response.message_content_success);
                // $('.account_chat_content_wrapper').scrollTop($('.account_chat_content_wrapper')[0].scrollHeight);
                message.val("");
            }    
        }
    });


})

var update_chat = true;

function update_chat_data()
{ 
    
    var message_id  = $(".live_chat_hidden_data").val();

    if (update_chat === true) {

        update_chat = false;
 
        $.ajax({
            url: ajaxUrl,
            type: 'POST',
            data: {action: 'update_user_message',message_id:message_id},
            success: function (response) {

                update_chat = true;
                
                if(response.hasOwnProperty("message_content_success")){

                    $(".account_chat_content_wrapper").append(response.message_content_success);
                    $(".live_chat_hidden_data").val(response.last_id);
                    $('.account_chat_content_wrapper').scrollTop($('.account_chat_content_wrapper')[0].scrollHeight);
                  
                }    
            }
        });
    }

}

var update_admin_chat = true;

function update_admin_chat_data()
{ 
    
    var message_id  = $(".live_admin_chat_hidden_data").val();
    var reciver_id = $("#reciver_id").val();

    if (update_chat === true) {

        update_chat = false;
 
        $.ajax({
            url: ajaxUrl,
            type: 'POST',
            data: {action: 'update_admin_user_message',message_id:message_id,reciver_id:reciver_id},
            success: function (response) {

                update_chat = true;
                
                if(response.hasOwnProperty("message_content_success")){

                    $(".account_chat_content_wrapper").append(response.message_content_success);
                    $(".live_admin_chat_hidden_data").val(response.last_id);
                    // $('.account_chat_content_wrapper').scrollTop($('.account_chat_content_wrapper')[0].scrollHeight);
                  
                }    
            }
        });
    }

}

// Pagination Birja //

$(document).on("click",".pagination_btn" ,function () {
    
    var thisis = $(this);
    var last_post_id = thisis.parent().find('.pagination_last_id').val();
    
    var valid = true;

    if (last_post_id.length < 1) {

        valid = false;
        thisis.parent().css('border','1px solid red');

    }

    if (!valid) {
        return false;
    }
    
    $.ajax({
        url: ajaxUrl,
        type: 'POST',
        data: {action: 'next_page_pagination' , last_post_id:last_post_id},
        success: function (response) {
            
            // if (response.hasOwnProperty("success_certificate_save")) {
                
            //     location.reload();
 
            // }else if(response.hasOwnProperty("certificate_exist_error")){
                 
            //         thisis.css('border','1px solid red');

            // }else if(response.hasOwnProperty("bet_count_error")){
                 
            //         thisis.css('border','1px solid red');

            // }else if(response.hasOwnProperty("certificate_save_error")){
                 
            //         thisis.css('border','1px solid red');

            // }

        }
    });


})
function go_full_screen(){
    var elem = document.documentElement;
    if (elem.requestFullscreen) {
      elem.requestFullscreen();
    } else if (elem.msRequestFullscreen) {
      elem.msRequestFullscreen();
    } else if (elem.mozRequestFullScreen) {
      elem.mozRequestFullScreen();
    } else if (elem.webkitRequestFullscreen) {
      elem.webkitRequestFullscreen();
    }
  }