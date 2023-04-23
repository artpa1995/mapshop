<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.2/css/jquery.dataTables.min.css">
<script src="//cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">


<style type="text/css">
    
    #myTable_filter{
        margin: 10px 140px;
    }
    
    #myTable_filter input{
        padding: 3px;
    }
    
    #myTable_paginate{
        margin: 10px 140px;
    }

    #myTable_length{
        margin: 10px 100px;
    }
    
    #myTable_length select{
        padding: 5px;
        width: 60px;
    } 

    .evidence_btns_wrapper{
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 400px;
        width: 100%;
    }

    .user_block_btn{
        font-size: 16px;
        color: red;
        font-family: Montserrat, sans-serif;
        font-weight: 600;
        font-style: normal;
        border: 1px soid red;
        background: 0 0;
        cursor: pointer;
        border: none;
    }
    
    .decide_user_btn{
        font-size: 16px;
        color: #3eff74;
        font-family: Montserrat, sans-serif;
        font-weight: 600;
        font-style: normal;
        border: none;
        background: 0 0;
        cursor: pointer;
    }

    .decide_loser_btn{
        font-size: 16px;
        color: red;
        font-family: Montserrat, sans-serif;
        font-weight: 600;
        font-style: normal;
        border: 1px soid red;
        background: 0 0;
        cursor: pointer;
        border: none;
    }

    /*#discuss_evidence>td:not(:first-child){
       color: white;
    }*/

    .blocked_account_btn,.unblocked_account_btn{

        cursor: pointer;
        margin-top: 10px;
        font-family: Roboto, sans-serif;
        font-style: normal;
        font-weight: 400;
        font-size: 15px;
        line-height: 19px;
        border: 1px solid black;
        outline: 0;
        border-radius: 5px;

    }

    .block_account_wrapper{

        display: none;
        width: 100%;
        height: 100%;
        background-color: #000;
        background-color: rgba(0, 0, 0, 0.7);
        animation-name: a;
        animation-duration: 0.4s;
        position: fixed;
        z-index: 2;
        left: 0;
        top: 0;
        padding-top: 100px;
        overflow: auto;
        -webkit-animation-name: a;
        -webkit-animation-duration: 0.4s;
        -moz-animation-name: a;
        -o-animation-name: a;
        -moz-animation-duration: 0.4s;
        -o-animation-duration: 0.4s;

    }

    .block_account_content{
        max-width: 608px;
        width: 100%;
        margin: 60px auto;
        background: #a4a4ab;
        border-radius: 20px;
        padding: 28px 90px 31px;
        position: relative;
    }

    .account_edit_data_form{
        display: flex;
        justify-content: space-around;
        align-items: center;
    }
    
    
    #blocked_account_btn{

        font-size: 16px;
        color: #3eff74;
        border: none;
        background: 0 0;
        font-family: Montserrat, sans-serif;
        font-style: normal;
        cursor: pointer;
        font-weight: 600;
        outline: 0;
    }
    .return_rate,.change_decided{
        font-size: 16px;
        color: red;
        font-family: Montserrat, sans-serif;
        font-weight: 600;
        font-style: normal;
        border: 1px soid red;
        background: 0 0;
        cursor: pointer;
        border: none;
        white-space: nowrap;
    }
    
    .user_account_image{
        width: 60px;
        height: 60px;
        object-fit: cover;
        border-radius: 50%;
    } 
    .place_block_input_field {
        background: #22292c!important;
        border-radius: 6px!important;      
        padding: 15px!important;
        max-width: 215px;
        width: 100%;
        cursor: pointer;
        outline: 0;
        color: #e7e7e7!important;
        font-family: Roboto, sans-serif;
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
    }

    .edit_list_data{
        font-size: 16px;
        height: 35px;
        width: 55px;
        text-align: center;
        line-height: 25px;
        margin: 0 5px;
        background: #e3e9ef;
        color: #4F6272;
        display: inline-block;
        border-radius: 5px;
        cursor: pointer;
    }

    .list-user-flex-wrapper{
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .sign_in_modal_input_field{
        display: -ms-flexbox;
        display: flex;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -ms-flex-align: center;
        align-items: center;
        width: 100%;
        margin-bottom: 25px;
    }

    .sign_in_label {
        cursor: pointer;
        width: 33%;
    }

    .sign_in_input, .sign_in_modal_input_title {
        font-style: normal;
        font-size: 16px;
        font-weight: 400;
        font-family: Roboto, sans-serif;
    }
    .sign_in_modal_input_error_text_wrapper {
        display: flex;
        flex-direction: column;
        width: 100%;
    }

    .sign_in_input {
        background: #22292c;
        border-radius: 6px;
        border: none;
        max-width: 300px;
        width: 100%;
        padding: 12px;
        cursor: pointer;
        outline: 0;
        color: #e7e7e7;
        margin-bottom: 8px;
    }

    .error_text {
        font-family: "Roboto", sans-serif;
        font-style: normal;
        font-weight: normal;
        font-size: 12px;
        color: #ff367e;
        display: none;
        margin-top: 5px;
    }

    .edite_image_wrapper{

        display: flex;
        justify-content: center;
        align-items: center;

    }

    .profile-img-edit{
        position: relative;
    }
    
    .profile-pic{
        width: 90px;
        height: 90px;
        border-radius: 50%;
        object-fit: cover;
    }

    .p-image{

        position: absolute;
        top: auto;
        right: -6px;
        bottom: 5px;
        transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
        background: #4F6272;
        color: #fff;
        border-radius: 50%;
        height: 30px;
        width: 30px;
        line-height: 28px;
        text-align: center;
        font-size: 12px;
        cursor: pointer;
    }
    .file-upload {
        display: none;
    }

    .edit_user_btn{

        display: inline-block;
        font-weight: 400;
        line-height: 1.5;
        color: #000000;
        text-align: center;
        vertical-align: middle;
        cursor: pointer;   
        padding: 5px 10px;
        font-size: 1rem;
        border-radius: 0.25rem;
   
    }
    
    .edit_user_btns_wrapper{
        display: flex;
        align-items: center;
        justify-content: space-between;
    } 

</style>

<?php $all_users_list = get_all_users_list(); ?>



<table id="myTable" class="display" cellspacing="0" style="max-width:800px;width: 100%;margin: 30px auto;">
        <thead>
            <tr>
                <th>id</th>
                <th>Фото</th>
                <th>Имя</th>
                <th>Телефон</th> 
                <th>Почта</th> 
                <th>Город</th>             
                <th>баланс</th>             
                <th>Регистрация</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach($all_users_list as $key): ?>

                    <?php $user_data = get_user_meta($key->ID); ?>
 
                    <tr id="" class="evidence_hide_<?php echo $key->ID; ?>">

                        <td> <?php echo $key->ID; ?></td>
                        <?php if (isset($user_data['image'][0]) && !empty($user_data['image'][0])): ?>
                                       
                                <td><img src="<?php echo content_url(). '/uploads/'.$user_data['image'][0]; ?>" class="user_account_image"alt=""></td>

                        <?php else: ?>
                        
                               <td><img src="<?php echo bloginfo('template_url'); ?>/images/user/11.png" class="user_account_image" alt=""></td>

                        <?php endif; ?> 
                        <td> <?php echo $user_data['first_name'][0]; ?></td>
                        <td> <?php echo $user_data['phone'][0]; ?></td>
                        <td> <?php echo $key->user_email; ?></td>
                        <td> <?php echo $user_data['city'][0]; ?></td>
                        <td> <?php echo $user_data['user_balance'][0]; ?></td>      
                        <td> <?php echo $key->user_registered; ?> </td>
                        <td>
                            <div class="list-user-flex-wrapper">
                            
                              <a data-toggle="tooltip" class="edit_list_data" data-user_id="<?php echo $key->ID; ?>" data-placement="top" title="" data-original-title="Изменить"><i class="ri-pencil-line"></i></a>
                             
                            </div> 

                        </td>
                    </tr>

            <?php endforeach; ?>

        </tbody>
</table>

<div class="block_account_wrapper">

        <div class="block_account_content">
            <form class="account_edit_data_form">
                <input type="hidden" id="get-user-id" name="user_id">
                <div class="sign_in_modal_inputs_wrapper">
                    <div class="edite_image_wrapper">
                    <label for="updated_image">
                     <div class="profile-img-edit">
                        <div class="user_account_image_wrapper">                                              
                            <img class="profile-pic" src="http://billiclub.u1246912.cp.regruhosting.ru/wp-content/themes/BilliClub/images/user/11.png" alt="profile-pic">
                        </div>     
                        <div class="p-image">
                          <i class="ri-pencil-line upload-button"></i>
                          <input class="file-upload edit-profile-file-upload" name="image" id="updated_image" type="file" alt="">
                       </div>
                     </div>
                    </label>
                 </div>
                    <div class="sign_in_modal_input_field">
                        <label for="input_first_name" class="sign_in_label">
                            <span class="sign_in_modal_input_title">Имя:</span>
                        </label>
                        <div class="sign_in_modal_input_error_text_wrapper">
                              <input type="text" class="sign_in_input" id="input_first_name" name="first_name">
                          <span class="error_text error_first_name"> </span>
                        </div>
                       
                    </div>
                    <div class="sign_in_modal_input_field">
                        <label for="input_last_name" class="sign_in_label">
                            <span class="sign_in_modal_input_title">Фамилия:</span>
                        </label>
                        <div class="sign_in_modal_input_error_text_wrapper">
                              <input type="text" class="sign_in_input" id="input_last_name" name="last_name">
                          <span class="error_text error_last_name"> </span>
                        </div>
                       
                    </div>
                    <div class="sign_in_modal_input_field">
                        <label for="input_phone" class="sign_in_label">
                            <span class="sign_in_modal_input_title">Телефон:</span>
                        </label>
                        <div class="sign_in_modal_input_error_text_wrapper">
                              <input type="text" class="sign_in_input" id="input_phone" name="phone">
                          <span class="error_text error_phone"> </span>
                        </div>
                       
                    </div>
                    <div class="sign_in_modal_input_field">
                        <label for="input_email" class="sign_in_label">
                            <span class="sign_in_modal_input_title">E-mail:</span>
                        </label>
                        <div class="sign_in_modal_input_error_text_wrapper">
                              <input type="text" class="sign_in_input" id="input_email" name="email">
                          <span class="error_text error_email"> </span>
                        </div>
                       
                    </div>
                    <div class="sign_in_modal_input_field">
                        <label for="input_balance" class="sign_in_label">
                            <span class="sign_in_modal_input_title">Баланс:</span>
                        </label>
                          <div  class="sign_in_modal_input_error_text_wrapper password_input_icons_wrapper">
                              <input type="text" class="sign_in_input" id="input_balance" name="balance">
                              <span class="error_text login-error-balance"> </span>
                          </div>      
                    </div>
                    <div class="edit_user_btns_wrapper">
                        
                        <button type="button" class="edit_user_btn edit_user_cancel_btn">Отменить</button>
                        <button type="submit" class="edit_user_btn">Отправить</button>

                    </div>
                </div>
            </form>
    
       </div>
        
</div>


<script>
    
    var ajaxUrl = "<?php  echo esc_url( admin_url('admin-ajax.php')); ?>"

    $(document).ready( function () {
        $('#myTable').DataTable();
    } );

    
    $(document).on("click",".edit_user_cancel_btn" ,function () {
       
        $(".block_account_wrapper").css("display","none");
 
    }) 

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

   
    $(document).on("click",".edit_list_data" ,function () {
    
        var thisis = $(this);
        var user_id = thisis.data('user_id');
        
        var valid = true;


        if (user_id.length < 1) {

            valid = false;
            thisis.css('border','1px solid red');

        }

        if (!valid) {
            return false;
        }
        
        $.ajax({
            url: ajaxUrl,
            type: 'POST',
            data: {action: 'get_user_account_data' , user_id:user_id},
            success: function (response) {
                console.log(response) 
                if (response.hasOwnProperty("data_content_success")) {
                    
                    $('.block_account_wrapper').css('display','block');
                    $('#input_first_name').val(response.first_name);
                    $('#input_last_name').val(response.last_name);
                    $('#input_phone').val(response.phone);
                    $('#input_email').val(response.email);
                    $('#input_balance').val(response.balance);
                    $('#get-user-id').val(response.user_id);
                    $('.user_account_image_wrapper').html(response.image);
     
                }else if(response.hasOwnProperty("user_id_error")){
                     
                        thisis.css('border','1px solid red');

                }

            }
        });


    })

    $(document).on("submit", ".account_edit_data_form", function(event){

    event.preventDefault();
    
    var image = $("input[name=image]", this);
    var firstname = $("input[name=first_name]", this);
    var lastname = $("input[name=last_name]", this);
    var phone = $("input[name=phone]", this);
    var email = $("input[name=email]", this);
    var balance = $("input[name=balance]", this);
    var user_id = $("input[name=user_id]", this).val();

    var image_val = image.val(); 
    var firstname_val = firstname.val();
    var lastname_val = lastname.val();
    var phone_val = phone.val();
    var email_val = email.val();
    var balance_val = balance.val();
      
    var formdata = new FormData();
    formdata.append( "image", $('#updated_image')[0].files[0]);
    formdata.append( "action", 'admin_edit_user_profile');
    formdata.append( "first_name", firstname_val);
    formdata.append( "last_name", lastname_val);
    formdata.append( "phone", phone_val);
    formdata.append( "email", email_val);
    formdata.append( "balance", balance_val);
    formdata.append( "user_id", user_id);

    $.ajax({
        url: ajaxUrl,
        type: 'POST',
        processData: false,
        contentType: false,
        data: formdata,
        success: function (response) {

            if (response.hasOwnProperty("edit_profile_success")) {
                  
                location.reload();

            }

        }
    });       
   
})

      

</script>
