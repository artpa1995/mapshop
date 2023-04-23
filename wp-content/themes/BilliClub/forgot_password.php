<?php

/* Template Name: forgot-page */

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
                        <h1 class="mb-0">ЗАБЫЛИ ПАРОЛЬ?</h1>
                        <p>На ваш E-mail будет отправлен код подтверждения, используйте его чтобы установить новый пароль.</p>
                        <form class="mt-4 forgot-password-form">
                            
                            <div class="form-group data_inputs_wrapper">
                                <label for="exampleInputEmail1">Адрес электронной почты</label>
                                <input type="email" name="email" class="form-control mb-0" id="exampleInputEmail1" placeholder="Адрес электронной почты">
                                <span class="error_text error_email"></span>
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