<?php

/* Template Name: registration-page */

if (is_user_logged_in()) {
    
    $user_data = get_user();

    if (!isset($user_data[0]->confirm_mail) || $user_data[0]->confirm_mail != 'not_confirm') {
        header("Location:/profile-page");
        exit();
    }
  
} 

get_header();

$params_google = params_for_google();

?>

<style>
    .iq-top-navbar-profile{
        display: none;
    }
</style>
 
 <!-- loader Start -->
      <div id="loading">
         
      </div>
      <!-- loader END -->
        <!-- Sign in Start -->
        <div class="wrapper bg_content">
            <?php require_once(WP_CONTENT_DIR. '/themes/BilliClub/Modals/header_menu.php'); ?>
            <div class="container p-0">
                <div class="row no-gutters">
                    <div class="col-sm-12 align-self-center ">
                        <div class="sign-in-from bg-white">
                            <h1 class="mb-0">Регистрация</h1>
                            <p>
                                Введите свой адрес электронной почты и пароль для доступа к личному кабинету.</p>
                            <form class="mt-4 sign-up-from-wrapper">
                                <div class="form-group data_inputs_wrapper">
                                    <label for="exampleInputEmail1">Ваше полное имя</label>
                                    <input type="text" name="first_name" class="form-control mb-0 " id="exampleInputEmail1" placeholder="Ваше полное имя">
                                    <span class="error_text error_first_name"></span>
                                </div>
                                <div class="form-group data_inputs_wrapper">
                                    <label for="exampleInputEmail2">Адрес электронной почты</label>
                                    <input type="email" name="email" class="form-control mb-0 " id="exampleInputEmail2" placeholder="Почта">
                                    <span class="error_text error_email"></span>
                                </div>
                                <div class="form-group data_inputs_wrapper password_input_icons_wrapper">
                                    <label for="exampleInputPassword1">Пароль</label>
                                    <input type="password" name="password" class="form-control mb-0 " id="exampleInputPassword1" placeholder="Пароль">
                                    <div class="password_show_icon password_icon">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 9.5C12.7956 9.5 13.5587 9.81607 14.1213 10.3787C14.6839 10.9413 15 11.7044 15 12.5C15 13.2956 14.6839 14.0587 14.1213 14.6213C13.5587 15.1839 12.7956 15.5 12 15.5C11.2044 15.5 10.4413 15.1839 9.87868 14.6213C9.31607 14.0587 9 13.2956 9 12.5C9 11.7044 9.31607 10.9413 9.87868 10.3787C10.4413 9.81607 11.2044 9.5 12 9.5ZM12 5C17 5 21.27 8.11 23 12.5C21.27 16.89 17 20 12 20C7 20 2.73 16.89 1 12.5C2.73 8.11 7 5 12 5ZM3.18 12.5C4.83 15.86 8.24 18 12 18C15.76 18 19.17 15.86 20.82 12.5C19.17 9.14 15.76 7 12 7C8.24 7 4.83 9.14 3.18 12.5Z" fill="#969696"/>
                                            </svg>                                      
                                  </div>
                                  <div class="password_hide_icon open password_icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 4.27L3.28 3L20 19.72L18.73 21L15.65 17.92C14.5 18.3 13.28 18.5 12 18.5C7 18.5 2.73 15.39 1 11C1.69 9.24 2.79 7.69 4.19 6.46L2 4.27ZM12 8C12.7956 8 13.5587 8.31607 14.1213 8.87868C14.6839 9.44129 15 10.2044 15 11C15 11.35 14.94 11.69 14.83 12L11 8.17C11.31 8.06 11.65 8 12 8ZM12 3.5C17 3.5 21.27 6.61 23 11C22.18 13.08 20.79 14.88 19 16.19L17.58 14.76C18.94 13.82 20.06 12.54 20.82 11C19.17 7.64 15.76 5.5 12 5.5C10.91 5.5 9.84 5.68 8.84 6L7.3 4.47C8.74 3.85 10.33 3.5 12 3.5ZM3.18 11C4.83 14.36 8.24 16.5 12 16.5C12.69 16.5 13.37 16.43 14 16.29L11.72 14C10.29 13.85 9.15 12.71 9 11.28L5.6 7.87C4.61 8.72 3.78 9.78 3.18 11Z" fill="#969696"/>
                                    </svg>
                                        
                                  </div>
                                    <span class="error_text error_password"></span>
                                </div>
                                <div class="d-inline-block w-100 data_inputs_wrapper">
                                    <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                        <input type="checkbox" name="agree_terms" class="custom-control-input " id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Я принимаю Условия</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary float-right">Зарегистрироваться</button>
                                </div>
                                <div class="sign-info">
                                    <span class="dark-color d-inline-block line-height-2">Уже есть аккаунт? <a href="/sign-in-page">Войти</a></span>
                                    <ul class="iq-social-media">
                                        <li><a href="https://accounts.google.com/o/oauth2/auth?<?php echo urldecode(http_build_query($params_google)) ?>">
                                           
                                           <svg width="20" height="20" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7.5 16.0002C7.5 14.4148 7.93681 12.9296 8.69569 11.6579V6.26367H3.30144C1.1605 9.04417 0 12.4329 0 16.0002C0 19.5676 1.1605 22.9563 3.30144 25.7368H8.69569V20.3425C7.93681 19.0709 7.5 17.5857 7.5 16.0002Z" fill="#FBBD00"/>
                                                <path d="M16 24.5L12.25 28.25L16 32C19.5674 32 22.9561 30.8395 25.7366 28.6986V23.3101H20.3481C19.0652 24.0717 17.5738 24.5 16 24.5Z" fill="#0F9D58"/>
                                                <path d="M8.69569 20.3423L3.30144 25.7365C3.72531 26.287 4.18687 26.8142 4.68631 27.3137C7.70831 30.3357 11.7262 32 16 32V24.5C12.8985 24.5 10.1802 22.83 8.69569 20.3423Z" fill="#31AA52"/>
                                                <path d="M32 16.0003C32 15.0268 31.9119 14.0516 31.738 13.1017L31.5973 12.333H16V19.833H23.5907C22.8536 21.2993 21.7202 22.4956 20.348 23.3104L25.7365 28.6989C26.287 28.275 26.8142 27.8134 27.3137 27.314C30.3357 24.2919 32 20.274 32 16.0003Z" fill="#3C79E6"/>
                                                <path d="M22.0104 9.98956L22.6733 10.6524L27.9766 5.34919L27.3137 4.68631C24.2917 1.66431 20.2738 0 16 0L12.25 3.75L16 7.5C18.2704 7.5 20.4049 8.38412 22.0104 9.98956Z" fill="#CF2D48"/>
                                                <path d="M16 7.5V0C11.7262 0 7.7083 1.66431 4.68624 4.68625C4.1868 5.18569 3.72524 5.71287 3.30136 6.26344L8.69561 11.6577C10.1802 9.17 12.8985 7.5 16 7.5Z" fill="#EB4132"/>
                                            </svg>

                                        </a></li>
                                        <!-- <li><a href="#"><i class="ri-facebook-box-line"></i></a></li>
                                        <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                                        <li><a href="#"><i class="ri-instagram-line"></i></a></li> -->
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	    <div class="confirm_mail_modal_wrapper">
            <div class="confirm_mail_modal_content">
                <div class="confirm_mail_modal_cancel">
                   <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14 1.41L12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41Z" fill="#969696"></path>
                   </svg>
                </div>
                <p class="mb-4">Для подтверждения адреса электронной почты перейдите по ссылке в письме.</p>  
            </div>
        </div> 

<?php 

get_footer(); 

?>