<?php

/* Template Name: forgot-code-page */

if (is_user_logged_in()) {
   
    header("Location:/profile-page");
    exit();
  
}   


get_header();

?>
 
    <!-- loader Start -->
    <div id="loading">
     
    </div>
    <!-- loader END -->
    <!-- Sign in Start -->
    <section class="">
        <div class="container p-0">
            <div class="row no-gutters">
                <div class="col-sm-12 align-self-center">
                    <div class="sign-in-from bg-white">
                        <h1 class="mb-0">УСТАНОВКА ПАРОЛЯ</h1>
                        <p>На ваш E-mail был отправлен код подтверждения, введите его и установите новый пароль.</p>
                        <form class="mt-4 forgot-code-form">
                            
                            <div class="form-group data_inputs_wrapper">
                                <label for="exampleInputCode">Код</label>
                                <input type="text" name="password_code" class="form-control mb-0" id="exampleInputCode" placeholder="Код">
                                <span class="error_text error_code"></span>
                            </div>

                            <div class="form-group data_inputs_wrapper">
                                <label for="exampleInputpassword">Новый пароль</label>
                                <input type="password" name="password" class="form-control mb-0" id="exampleInputpassword" placeholder="Новый пароль">
                                <span class="error_text error_password"></span>
                            </div>

                            <div class="form-group data_inputs_wrapper">
                                <label for="exampleInputconfpassword">Повторите пароль</label>
                                <input type="password" name="conf_password" class="form-control mb-0" id="exampleInputconfpassword" placeholder="Повторите пароль">
                                <span class="error_text error_confpassword"></span>
                            </div>
                            
                            <div class="d-inline-block w-100">                           
                                <button type="submit" class="btn btn-primary float-right">ОТПРАВИТЬ</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
	

<?php 

get_footer(); 

?>