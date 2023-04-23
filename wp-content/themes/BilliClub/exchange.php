<?php 

/* Template Name: exchange-page */

if (is_user_logged_in()) {
   
    $user_data = get_user();
    
    $first_name = $user_data[1]['first_name'][0];
    $last_name  = $user_data[1]['last_name'][0];
    $user_name  = $user_data[1]['user_name'][0];
    $phone  = $user_data[1]['phone'][0];
    $city  = $user_data[1]['city'][0];
    $about_me  = $user_data[1]['about_me'][0];
    $image  = $user_data[1]['image'][0];
    $login_user_id = get_current_user_id();

    $user_certificates = get_user_certificates();



    if (isset($user_data[0]->user_email)) {
    
            $user_email = $user_data[0]->user_email;
            
    }

    if (isset($user_data[1]['user_balance'][0])) {
    
        $user_balance = $user_data[1]['user_balance'][0];
            
    }else{
        
        $user_balance = '0.00';

    }

   if (!isset($user_data[0]->confirm_mail) || $user_data[0]->confirm_mail == 'not_confirm') {
    
      // header("Location:/sign-up-page");
      // exit();         
   }
  
}else{

    // header("Location:/sign-in-page");
    // exit();

}    


 get_header();

 $all_exchanger_certificates = get_all_exchanger_certificates();
 $all_market_certificates = get_all_market_certificates();

?>
    <!-- loader Start -->
    <div id="loading">
      <div class="loader simple-loader">
          <div class="loader-body"></div>
      </div>    
    </div>
    <!-- loader END -->
    
    <aside class="sidebar sidebar-default navs-rounded-all sidebar-color">

        <div class="sidebar-header d-flex align-items-center justify-content-start">

            <a href="/" class="navbar-brand text-white">

                <!--Logo start-->

                Billionaire Club

                <!--logo End-->

            </a>

            <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">

                <i class="icon">

                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">

                        <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>

                        <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>

                    </svg>

                </i>

            </div>

        </div>

        <div class="sidebar-body pt-0 data-scrollbar">

            <div class="collapse navbar-collapse" id="sidebar">

                <!-- Sidebar Menu Start -->

                <ul class="navbar-nav iq-main-menu">   

                    <li class="nav-item mt-5 pt-3">
                    <?php if (is_user_logged_in()) :?>

                        <a class="nav-link active general_link" aria-current="page" href="/profile-page">

                                <i class="icon">

                                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">

                                        <path opacity="0.4" d="M16.0756 2H19.4616C20.8639 2 22.0001 3.14585 22.0001 4.55996V7.97452C22.0001 9.38864 20.8639 10.5345 19.4616 10.5345H16.0756C14.6734 10.5345 13.5371 9.38864 13.5371 7.97452V4.55996C13.5371 3.14585 14.6734 2 16.0756 2Z" fill="currentColor"></path>

                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z" fill="currentColor"></path>

                                    </svg>

                                </i>

                                <span class="item-name" style="color: #004aa8 !important;">Мой профиль</span>

                            </a>
                        <?php else:?>  
                          <a class="nav-link active general_link" aria-current="page" href="/">

                              <i class="icon">

                                  <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">

                                      <path opacity="0.4" d="M16.0756 2H19.4616C20.8639 2 22.0001 3.14585 22.0001 4.55996V7.97452C22.0001 9.38864 20.8639 10.5345 19.4616 10.5345H16.0756C14.6734 10.5345 13.5371 9.38864 13.5371 7.97452V4.55996C13.5371 3.14585 14.6734 2 16.0756 2Z" fill="currentColor"></path>

                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z" fill="currentColor"></path>

                                  </svg>

                              </i>

                              <span class="item-name" style="color: #004aa8 !important;">Главная</span>

                          </a>
                        <?php endif; ?>  


                    </li>

                   

                    <li><hr class="hr-horizontal"></li>

                    <li class="nav-item static-item">

                        <a class="nav-link static-item disabled" href="#" tabindex="-1">

                            <span class="default-icon">Страницы</span>

                            <span class="mini-icon">-</span>

                        </a>

                    </li>

                    <?php if(!is_user_logged_in()): ?>

                            <li class="nav-item">

                                <a class="nav-link auth_menu_btn" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebar-user">

                                    <i class="icon">

                                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">

                                            <path opacity="0.4" d="M12.0865 22C11.9627 22 11.8388 21.9716 11.7271 21.9137L8.12599 20.0496C7.10415 19.5201 6.30481 18.9259 5.68063 18.2336C4.31449 16.7195 3.5544 14.776 3.54232 12.7599L3.50004 6.12426C3.495 5.35842 3.98931 4.67103 4.72826 4.41215L11.3405 2.10679C11.7331 1.96656 12.1711 1.9646 12.5707 2.09992L19.2081 4.32684C19.9511 4.57493 20.4535 5.25742 20.4575 6.02228L20.4998 12.6628C20.5129 14.676 19.779 16.6274 18.434 18.1581C17.8168 18.8602 17.0245 19.4632 16.0128 20.0025L12.4439 21.9088C12.3331 21.9686 12.2103 21.999 12.0865 22Z" fill="currentColor"></path>

                                            <path d="M11.3194 14.3209C11.1261 14.3219 10.9328 14.2523 10.7838 14.1091L8.86695 12.2656C8.57097 11.9793 8.56795 11.5145 8.86091 11.2262C9.15387 10.9369 9.63207 10.934 9.92906 11.2193L11.3083 12.5451L14.6758 9.22479C14.9698 8.93552 15.448 8.93258 15.744 9.21793C16.041 9.50426 16.044 9.97004 15.751 10.2574L11.8519 14.1022C11.7049 14.2474 11.5127 14.3199 11.3194 14.3209Z" fill="currentColor"></path>

                                        </svg>

                                    </i>

                                    <span class="item-name">Авторизация</span>

                                    <i class="right-icon">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">

                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />

                                        </svg>

                                    </i>

                                </a>

                                <ul class="sub-nav collapse" id="sidebar-auth" data-bs-parent="#sidebar">

                                    <li class="nav-item">

                                        <a class="nav-link" href="/sign-in-page">

                                            <i class="icon">

                                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.2124 7.76241C14.2124 10.4062 12.0489 12.5248 9.34933 12.5248C6.6507 12.5248 4.48631 10.4062 4.48631 7.76241C4.48631 5.11865 6.6507 3 9.34933 3C12.0489 3 14.2124 5.11865 14.2124 7.76241ZM2 17.9174C2 15.47 5.38553 14.8577 9.34933 14.8577C13.3347 14.8577 16.6987 15.4911 16.6987 17.9404C16.6987 20.3877 13.3131 21 9.34933 21C5.364 21 2 20.3666 2 17.9174ZM16.1734 7.84875C16.1734 9.19506 15.7605 10.4513 15.0364 11.4948C14.9611 11.6021 15.0276 11.7468 15.1587 11.7698C15.3407 11.7995 15.5276 11.8177 15.7184 11.8216C17.6167 11.8704 19.3202 10.6736 19.7908 8.87118C20.4885 6.19676 18.4415 3.79543 15.8339 3.79543C15.5511 3.79543 15.2801 3.82418 15.0159 3.87688C14.9797 3.88454 14.9405 3.90179 14.921 3.93246C14.8955 3.97174 14.9141 4.02253 14.9396 4.05607C15.7233 5.13216 16.1734 6.44206 16.1734 7.84875ZM19.3173 13.7023C20.5932 13.9466 21.4317 14.444 21.7791 15.1694C22.0736 15.7635 22.0736 16.4534 21.7791 17.0475C21.2478 18.1705 19.5335 18.5318 18.8672 18.6247C18.7292 18.6439 18.6186 18.5289 18.6333 18.3928C18.9738 15.2805 16.2664 13.8048 15.5658 13.4656C15.5364 13.4493 15.5296 13.4263 15.5325 13.411C15.5345 13.4014 15.5472 13.3861 15.5697 13.3832C17.0854 13.3545 18.7155 13.5586 19.3173 13.7023Z" fill="currentColor"></path>                            </svg>                        

                                            </i>

                                            <i class="sidenav-mini-icon"> Л </i>

                                            <span class="item-name">Логин</span>

                                        </a>

                                    </li>

                                    <li class="nav-item">

                                        <a class="nav-link" href="/sign-up-page">

                                            <i class="icon">

                                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.81 2H16.191C19.28 2 21 3.78 21 6.83V17.16C21 20.26 19.28 22 16.191 22H7.81C4.77 22 3 20.26 3 17.16V6.83C3 3.78 4.77 2 7.81 2ZM8.08 6.66V6.65H11.069C11.5 6.65 11.85 7 11.85 7.429C11.85 7.87 11.5 8.22 11.069 8.22H8.08C7.649 8.22 7.3 7.87 7.3 7.44C7.3 7.01 7.649 6.66 8.08 6.66ZM8.08 12.74H15.92C16.35 12.74 16.7 12.39 16.7 11.96C16.7 11.53 16.35 11.179 15.92 11.179H8.08C7.649 11.179 7.3 11.53 7.3 11.96C7.3 12.39 7.649 12.74 8.08 12.74ZM8.08 17.31H15.92C16.319 17.27 16.62 16.929 16.62 16.53C16.62 16.12 16.319 15.78 15.92 15.74H8.08C7.78 15.71 7.49 15.85 7.33 16.11C7.17 16.36 7.17 16.69 7.33 16.95C7.49 17.2 7.78 17.35 8.08 17.31Z" fill="currentColor"></path>                            </svg>                                            

                                            </i>

                                            <i class="sidenav-mini-icon"> Р </i>

                                            <span class="item-name">Регистрация</span>

                                        </a>

                                    </li>

                                    <!-- <li class="nav-item">

                                        <a class="nav-link" href="dashboard/auth/confirm-mail.html">

                                            <i class="icon">

                                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.0105 14.6013C17.4245 14.6013 17.7605 14.2653 17.7605 13.8513V11.9993C17.7605 11.5853 17.4245 11.2493 17.0105 11.2493H11.3185C10.9945 10.1823 10.0125 9.39827 8.84051 9.39827C7.40651 9.39827 6.23951 10.5653 6.23951 11.9993C6.23951 13.4343 7.40651 14.6013 8.84051 14.6013C10.0125 14.6013 10.9945 13.8173 11.3185 12.7493H13.4305V13.8513C13.4305 14.2653 13.7665 14.6013 14.1805 14.6013C14.5945 14.6013 14.9305 14.2653 14.9305 13.8513V12.7493H16.2605V13.8513C16.2605 14.2653 16.5965 14.6013 17.0105 14.6013ZM7.66551 1.99927H16.3345C19.7225 1.99927 21.9995 4.37727 21.9995 7.91627V16.0833C21.9995 19.6223 19.7225 21.9993 16.3335 21.9993H7.66551C4.27651 21.9993 1.99951 19.6223 1.99951 16.0833V7.91627C1.99951 4.37727 4.27651 1.99927 7.66551 1.99927ZM7.73861 12.0002C7.73861 11.3922 8.23361 10.8982 8.84061 10.8982C9.44761 10.8982 9.94261 11.3922 9.94261 12.0002C9.94261 12.6072 9.44761 13.1012 8.84061 13.1012C8.23361 13.1012 7.73861 12.6072 7.73861 12.0002Z" fill="currentColor"></path>                            </svg>                        

                                            </i>

                                            <i class="sidenav-mini-icon"> C </i>

                                            <span class="item-name">Почта</span>

                                        </a>

                                    </li> -->

                                   <!--  <li class="nav-item">

                                        <a class="nav-link" href="dashboard/auth/lock-screen.html">

                                            <i class="icon">

                                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.5227 7.39601V8.92935C19.2451 9.46696 20.5 11.0261 20.5 12.8884V17.8253C20.5 20.1308 18.5886 22 16.2322 22H7.7688C5.41136 22 3.5 20.1308 3.5 17.8253V12.8884C3.5 11.0261 4.75595 9.46696 6.47729 8.92935V7.39601C6.48745 4.41479 8.95667 2 11.9848 2C15.0535 2 17.5227 4.41479 17.5227 7.39601ZM12.0051 3.73904C14.0678 3.73904 15.7445 5.37871 15.7445 7.39601V8.7137H8.25553V7.37613C8.26569 5.36878 9.94232 3.73904 12.0051 3.73904ZM12.8891 16.4549C12.8891 16.9419 12.4928 17.3294 11.9949 17.3294C11.5072 17.3294 11.1109 16.9419 11.1109 16.4549V14.2488C11.1109 13.7718 11.5072 13.3843 11.9949 13.3843C12.4928 13.3843 12.8891 13.7718 12.8891 14.2488V16.4549Z" fill="currentColor"></path>                            </svg>                        

                                            </i>

                                            <i class="sidenav-mini-icon"> М </i>

                                            <span class="item-name">Менеджеру</span>

                                        </a>

                                    </li> -->

                                    <!-- <li class="nav-item">

                                        <a class="nav-link" href="/forgot-password-page">

                                           <i class="icon">

                                            <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.5227 7.39601V8.92935C19.2451 9.46696 20.5 11.0261 20.5 12.8884V17.8253C20.5 20.1308 18.5886 22 16.2322 22H7.7688C5.41136 22 3.5 20.1308 3.5 17.8253V12.8884C3.5 11.0261 4.75595 9.46696 6.47729 8.92935V7.39601C6.48745 4.41479 8.95667 2 11.9848 2C15.0535 2 17.5227 4.41479 17.5227 7.39601ZM12.0051 3.73904C14.0678 3.73904 15.7445 5.37871 15.7445 7.39601V8.7137H8.25553V7.37613C8.26569 5.36878 9.94232 3.73904 12.0051 3.73904ZM12.8891 16.4549C12.8891 16.9419 12.4928 17.3294 11.9949 17.3294C11.5072 17.3294 11.1109 16.9419 11.1109 16.4549V14.2488C11.1109 13.7718 11.5072 13.3843 11.9949 13.3843C12.4928 13.3843 12.8891 13.7718 12.8891 14.2488V16.4549Z" fill="currentColor"></path>                            </svg>                        

                                            </i>

                                            <i class="sidenav-mini-icon"> П </i>

                                            <span class="item-name">Сменить пароль</span>

                                        </a>

                                    </li> -->

                                </ul>
                            </li>

                        <?php endif; ?>
                        <li class="nav-item">

                            <a class="nav-link" href="dashboard/project.html">

                                <i class="icon">

                                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.7044 3.51898C10.034 3.51898 9.46373 3.9848 9.30365 4.61265H14.6863C14.5263 3.9848 13.956 3.51898 13.2856 3.51898H10.7044ZM16.2071 4.61264H18.1881C20.2891 4.61264 22 6.34428 22 8.47085C22 8.47085 21.94 9.3711 21.92 10.6248C21.918 10.724 21.8699 10.8212 21.7909 10.88C21.3097 11.2354 20.8694 11.5291 20.8294 11.5493C19.1686 12.6632 17.2386 13.447 15.1826 13.8369C15.0485 13.8632 14.9165 13.7934 14.8484 13.6739C14.2721 12.6754 13.1956 12.0253 11.995 12.0253C10.8024 12.0253 9.71586 12.6683 9.12256 13.6678C9.05353 13.7853 8.92346 13.8531 8.7904 13.8278C6.75138 13.4369 4.82141 12.6541 3.17059 11.5594L2.21011 10.8911C2.13007 10.8405 2.08004 10.7493 2.08004 10.6481C2.05003 10.1316 2 8.47085 2 8.47085C2 6.34428 3.71086 4.61264 5.81191 4.61264H7.78289C7.97299 3.1443 9.2036 2 10.7044 2H13.2856C14.7864 2 16.017 3.1443 16.2071 4.61264ZM21.6598 12.8152L21.6198 12.8355C19.5988 14.1924 17.1676 15.0937 14.6163 15.4684C14.2561 15.519 13.8959 15.2861 13.7959 14.9216C13.5758 14.0912 12.8654 13.5443 12.015 13.5443H12.005H11.985C11.1346 13.5443 10.4242 14.0912 10.2041 14.9216C10.1041 15.2861 9.74387 15.519 9.38369 15.4684C6.83242 15.0937 4.4012 14.1924 2.38019 12.8355C2.37019 12.8254 2.27014 12.7646 2.1901 12.8152C2.10005 12.8659 2.10005 12.9874 2.10005 12.9874L2.17009 18.1519C2.17009 20.2785 3.87094 22 5.97199 22H18.018C20.1191 22 21.8199 20.2785 21.8199 18.1519L21.9 12.9874C21.9 12.9874 21.9 12.8659 21.8099 12.8152C21.7599 12.7849 21.6999 12.795 21.6598 12.8152ZM12.7454 17.0583C12.7454 17.4836 12.4152 17.8177 11.995 17.8177C11.5848 17.8177 11.2446 17.4836 11.2446 17.0583V15.7519C11.2446 15.3367 11.5848 14.9924 11.995 14.9924C12.4152 14.9924 12.7454 15.3367 12.7454 15.7519V17.0583Z" fill="currentColor"></path>                            </svg>                        

                                 </i>

                                

                                 <span class="item-name">Проекты</span>

                             </a>

                           </li>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link" href="dashboard/auth/contact.html">

                                <i class="icon">

                                  <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                <path d="M12.0122 14.8299C10.4077 14.8299 9.10986 13.5799 9.10986 12.0099C9.10986 10.4399 10.4077 9.17993 12.0122 9.17993C13.6167 9.17993 14.8839 10.4399 14.8839 12.0099C14.8839 13.5799 13.6167 14.8299 12.0122 14.8299Z" fill="currentColor"></path>                                <path opacity="0.4" d="M21.2301 14.37C21.036 14.07 20.76 13.77 20.4023 13.58C20.1162 13.44 19.9322 13.21 19.7687 12.94C19.2475 12.08 19.5541 10.95 20.4228 10.44C21.4447 9.87 21.7718 8.6 21.179 7.61L20.4943 6.43C19.9118 5.44 18.6344 5.09 17.6226 5.67C16.7233 6.15 15.5685 5.83 15.0473 4.98C14.8838 4.7 14.7918 4.4 14.8122 4.1C14.8429 3.71 14.7203 3.34 14.5363 3.04C14.1582 2.42 13.4735 2 12.7172 2H11.2763C10.5302 2.02 9.84553 2.42 9.4674 3.04C9.27323 3.34 9.16081 3.71 9.18125 4.1C9.20169 4.4 9.10972 4.7 8.9462 4.98C8.425 5.83 7.27019 6.15 6.38109 5.67C5.35913 5.09 4.09191 5.44 3.49917 6.43L2.81446 7.61C2.23194 8.6 2.55897 9.87 3.57071 10.44C4.43937 10.95 4.74596 12.08 4.23498 12.94C4.06125 13.21 3.87729 13.44 3.59115 13.58C3.24368 13.77 2.93709 14.07 2.77358 14.37C2.39546 14.99 2.4159 15.77 2.79402 16.42L3.49917 17.62C3.87729 18.26 4.58245 18.66 5.31825 18.66C5.66572 18.66 6.0745 18.56 6.40153 18.36C6.65702 18.19 6.96361 18.13 7.30085 18.13C8.31259 18.13 9.16081 18.96 9.18125 19.95C9.18125 21.1 10.1215 22 11.3069 22H12.6968C13.872 22 14.8122 21.1 14.8122 19.95C14.8429 18.96 15.6911 18.13 16.7029 18.13C17.0299 18.13 17.3365 18.19 17.6022 18.36C17.9292 18.56 18.3278 18.66 18.6855 18.66C19.411 18.66 20.1162 18.26 20.4943 17.62L21.2097 16.42C21.5776 15.75 21.6083 14.99 21.2301 14.37Z" fill="currentColor"></path>                                </svg>                                                  

                                </i>

                               

                                <span class="item-name">Настройки</span>

                            </a>

                        </li>
                        <?php if(is_user_logged_in()): ?>
                                  
                                <li class="nav-item">

                                    <a class="nav-link" href="<?php echo wp_logout_url('/');?>">
                                        <i class="icon">
                                           <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="currentColor" viewBox="0 0 24 24"><path d="M10 9.408l2.963 2.592-2.963 2.592v-1.592h-8v-2h8v-1.592zm-2-4.408v4h-8v6h8v4l8-7-8-7zm6-3c-1.787 0-3.46.474-4.911 1.295l.228.2 1.396 1.221c1.004-.456 2.114-.716 3.287-.716 4.411 0 8 3.589 8 8s-3.589 8-8 8c-1.173 0-2.283-.26-3.288-.715l-1.396 1.221-.228.2c1.452.82 3.125 1.294 4.912 1.294 5.522 0 10-4.477 10-10s-4.478-10-10-10z"/></svg>

                                        </i>

                                        <span class="item-name">Выйти</span>

                                    </a>

                                </li>

                        <?php endif; ?>     

                </ul>

                <!-- Sidebar Menu End -->        

              </div>

        </div>

        <div class="divyheWorldText">

          <p>THE WORLD IS YOURS...</p>

        </div>

        <div class="sidebar-footer"></div>

    </aside> 
    <main class="main-content birga">
      <div class="conatiner-fluid content-inner p-0">
        <div class="map-container" id="map">
          <h2 class="text-center mt-5 pt-5 text-white">Биржа</h2>
          <div class="mt-4">
              <div class="bd-example">
                <div class="buttonsTabs">
                  <ul class="nav nav-pills" data-toggle="slider-tab" id="myTab" role="tablist">
                    <li class="nav-item mr-4 market_li_btn" role="presentation">
                        <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#pills-home1" type="button" role="tab" aria-controls="home" aria-selected="true">Маркет</button>
                    </li>
                    <li class="nav-item exchanger_li_btn" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#pills-profile1" type="button" role="tab" aria-controls="profile" aria-selected="false">Обменник</button>
                    </li>
                 </ul>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active mt-4" id="pills-home1" role="tabpanel"
                        aria-labelledby="pills-home-tab1">
                        <div class="">
                        
                        <?php foreach($all_market_certificates as $post): ?>

                          <div class="row px-5 mb-3 market_certificates_content_wrapper">
                            <div class="col-4">
                              <h5 class="mt-1 pt-1 text-white product_data_title"><?php echo $post->post_title; ?></h5>
                            </div>
                            <div class="col-3">
                              <h5 class="mt-1 pt-1 text-white product_data_price">₽ <?php echo $post->certificate_price; ?></h5>
                            </div>
                            <div class="col-5">
                              <?php
                               

                                $paged = (get_query_var('page')) ? get_query_var('page') : 1;
                                $argscatpord = array(
                                    'post_type'      => 'product',
                                    'posts_per_page' => 6,
                                    'product_cat'    => $slug,
                                    'paged' => $paged,
                                    'orderby'        => 'ASC',
                                    'meta_query' => [],
                                    'tax_query'      => array('relation' => 'AND')
                                );
                                $loop   = new WP_Query( $argscatpord );
                                              

                                                
                                                
                                                if ( $loop->have_posts() ) { 

                                                  echo "<pre>";
                                                  print_r($loop);
                                                }
                              
                              ?>
                              <?php if (is_user_logged_in()) :?>
                                <?php if($post->post_author != $login_user_id): ?>

                                    <button class="btn pay_exchange_btn rounded add_disposable_certificate_btn" data-certificate_id='<?php echo $post->ID; ?>'>Купить</button>

                                <?php endif; ?> 
                                <?php else:?>  
                                  <a href="/sign-up-page/" class="btn pay_exchange_btn rounded add_disposable_certificate_btn">Купить</a> 
                              <?php endif; ?>  
                            </div>
                          </div>
                        
                        <?php endforeach; ?>
                          <div class="paginationBirga">
                            <div class="div">
                                <nav aria-label="Pagination example">
                                  <ul class="pagination pagination-sm">
                                    <?php 
                                     $limit = 4;
                                     $count = count($all_market_certificates);
                                     $all_page = round(intval($count) / intval($limit));
                                     
                                     for ($i=1; $i <= $all_page; $i++):

                                    ?>

                                      <li class="page-item active">
                                        <input type="hidden" class="pagination_last_id" value="<?php echo $post->ID; ?>">
                                        <a class="page-link pagination_btn"><?php echo $i; ?></a>
                                       </li>
                                    
                                    <?php endfor; ?> 
                                  </ul>
                                </nav>
                            </div>
                          </div>

                        </div>
                    </div>
                    <div class="tab-pane fade mt-4" id="pills-profile1" role="tabpanel"
                        aria-labelledby="pills-profile-tab1">
                        <div class="">
                        
                        <?php foreach($all_exchanger_certificates as $post): ?>

                              <div class="row px-5 mb-3">
                                <div class="col-4">
                                  <h5 class="mt-1 pt-1 text-white product_data_title"><?php echo $post->post_title; ?></h5>
                                </div>
                                <div class="col-3">
                                  <h5 class="mt-1 pt-1 text-white product_data_price">₽ <?php echo $post->certificate_price; ?></h5>
                                </div>
                                <div class="col-5">
                                <?php if (is_user_logged_in()) :?>
                                    <button class="btn pay_exchange_btn rounded exchange_certificate_btn" data-certificate_id='<?php echo $post->ID; ?>'>Обмен</button>
                                   <?php else:?>  
                                    <a href="/sign-up-page/" class="btn pay_exchange_btn rounded add_disposable_certificate_btn">Обмен</a> 
                                <?php endif; ?>  
                                </div>
                              </div>
                        
                        <?php endforeach; ?>

                          <div class="paginationBirga">
                            <div class="div"><nav aria-label="Pagination example">
                              <ul class="pagination pagination-sm">
                                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                  <li class="page-item" aria-current="page">
                                      <a class="page-link" href="#">2</a>
                                  </li>
                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                              </ul>
                            </nav></div>
                          </div>
                        </div>
                    </div>
                </div>
              </div>
          </div>
        </div>
      </div>
      </main>
      <div class="add_certificate_modal">
        <div class="add_certificate_content">
            <form class="add_certificate_data_form">
                <div class="add_certificate_modal_inputs_wrapper"> 
                   
                   <?php if(isset($user_certificates) && !empty($user_certificates)): ?>

                            <div class="add_certificate_modal_input_field">
                                <label for="input_first_name" class="sign_in_label">
                                    <span class="add_certificate_modal_input_title">Сертификаты:</span>
                                </label>
                                <div class="add_certificate_modal_input_error_text_wrapper data_inputs_wrapper">                            

                                      <select class="add_certificate_select" id="select_user_certificates" name="user_certificates">
                                            <option selected disabled>Сертификаты </option>
                                            <?php foreach($user_certificates as $key): ?>
                                                  <?php $product_data = get_post($key->producte_id); ?>
                                                  <option value="<?php echo $key->id; ?>"><?php echo $product_data->post_title; ?></option>

                                            <?php endforeach; ?>      

                                      </select>

                                  <span class="error_text error_certificate"> </span>
                                </div>
                               
                            </div>
                            <div class="add_certificate_modal_input_field data_inputs_wrapper">
                                <label for="input_balance" class="sign_in_label">
                                    <span class="add_certificate_modal_input_title">Цена:</span>
                                </label>
                                <div class="add_certificate_modal_input_error_text_wrapper">
                                      <input type="text" class="add_certificate_input" id="price_product" name="price_product">
                                  <span class="error_text error_price"> </span>
                                </div>
                               
                            </div>

                    <?php else: ?>

                        <p class="text-white not_certificate_show">У вас пока нет Сертификатов</p>

                    <?php endif; ?>    

                    <div class="add_certificate_btns_wrapper">
                        
                        <button type="button" class="btn btn-primary rounded cancel_add_certificate_btn">Отменить</button>
                        <?php if(isset($user_certificates) && !empty($user_certificates)): ?>

                                <button type="submit" class="btn pay_exchange_btn rounded">Отправить</button>

                        <?php endif; ?>
                    </div>
                </div>
            </form>   
          </div>       
       </div>
     
      <!-- offcanvas start -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" data-bs-scroll="true" data-bs-backdrop="true" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header">
        <h3 class="offcanvas-title" id="offcanvasExampleLabel">Настройки</h3>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body data-scrollbar">
        <div class="row">
          <div class="col-lg-12">
            <h5 class="mt-4 mb-3">Цвет карты</h5>
            <div class="d-grid gap-x-3 grid-cols-2 mb-4">
              <div class="btn btn-border mb-4 mapColorChange">
                  <i class="text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="currentColor">
                      <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                    </svg>
                  </i>
                <span class="ms-2 "> Синий </span>
              </div>
              <div class="btn btn-border mb-4 mapColorChange2">
                  <i class="text-pink">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="currentColor">
                      <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                    </svg>
                  </i>
                <span class="ms-2 "> Розовый </span>
              </div>
            </div>
            <div class="d-grid gap-x-3 grid-cols-3 mb-4">
              <div class="btn-border" data-setting="color-mode" data-name="color" data-value="auto">
                  <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill="currentColor" d="M7,2V13H10V22L17,10H13L17,2H7Z" />
                  </svg>
                <span class="ms-2 "> Авто </span>
              </div>
               <div class="btn-border" data-setting="color-mode" data-name="color" data-value="dark">
                 <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill="currentColor" d="M9,2C7.95,2 6.95,2.16 6,2.46C10.06,3.73 13,7.5 13,12C13,16.5 10.06,20.27 6,21.54C6.95,21.84 7.95,22 9,22A10,10 0 0,0 19,12A10,10 0 0,0 9,2Z" />
                  </svg>
                <span class="ms-2 "> Тёмная  </span>
              </div>
               <div class="btn-border active" data-setting="color-mode" data-name="color" data-value="light">
                  <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill="currentColor" d="M12,8A4,4 0 0,0 8,12A4,4 0 0,0 12,16A4,4 0 0,0 16,12A4,4 0 0,0 12,8M12,18A6,6 0 0,1 6,12A6,6 0 0,1 12,6A6,6 0 0,1 18,12A6,6 0 0,1 12,18M20,8.69V4H15.31L12,0.69L8.69,4H4V8.69L0.69,12L4,15.31V20H8.69L12,23.31L15.31,20H20V15.31L23.31,12L20,8.69Z" />
                </svg>
                <span class="ms-2 "> Светлая</span>
              </div>
            </div>
            <hr class="hr-horizontal">
            <h5 class="mb-3 mt-4">Расположение меню</h5>
            <div class="d-grid gap-x-3 grid-cols-2 mb-4">
              <div class="text-center">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/settings/dark/01.png" alt="ltr" class="mode dark-img img-fluid btn-border p-0 flex-column active" data-setting="dir-mode" data-name="dir" data-value="ltr">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/settings/light/01.png" alt="ltr" class="mode light-img img-fluid btn-border p-0 flex-column active" data-setting="dir-mode" data-name="dir" data-value="ltr">
                <span class=" mt-2"> Левая сторона </span>
              </div>
               <div class="text-center">
                 <img src="<?php bloginfo('template_url'); ?>/assets/images/settings/dark/02.png" alt="" class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="dir-mode" data-name="dir" data-value="rtl">
                  <img src="<?php bloginfo('template_url'); ?>/assets/images/settings/light/02.png" alt="" class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="dir-mode" data-name="dir" data-value="rtl">
                  <span class="mt-2 "> Правая  </span>
              </div>
            </div>
            <hr class="hr-horizontal">
            <h5 class="mt-4 mb-3">Цвет меню</h5>
            <div class="d-grid gap-x-3 grid-cols-2 mb-4">
              <div class="btn btn-border mb-4" data-setting="sidebar" data-name="sidebar-color" data-value="sidebar-dark">
                  <i class="text-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="currentColor">
                      <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                    </svg>
                  </i>
                <span class="ms-2 "> Ночь </span>
              </div>
              <div class="btn btn-border mb-4" data-setting="sidebar" data-name="sidebar-color" data-value="sidebar-color">
                  <i class="text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="currentColor">
                      <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                    </svg>
                  </i>
                <span class="ms-2 "> Синий </span>
              </div>
              <div class="btn btn-border active" data-setting="sidebar" data-name="sidebar-color" data-value="sidebar-white">
                  <i class="text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="currentColor">
                      <circle cx="12" cy="12" r="8" fill="currentColor" stroke="black" stroke-width="3"></circle>
                    </svg>
                  </i>
                <span class="ms-2 "> День </span>
              </div>
              <div class="btn btn-border " data-setting="sidebar" data-name="sidebar-color" data-value="sidebar-transparent">
                  <i class="text-body">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="currentColor">
                      <circle cx="12" cy="12" r="8" fill="#F5F6FA" stroke="black" stroke-width="3"></circle>
                    </svg>
                  </i>
                <span class="ms-2 "> Прозрачный </span>
              </div>
            </div>
            <hr class="hr-horizontal">
            <h5 class="mt-4 mb-3">Тип меню</h5>
            <div class="d-grid gap-x-3 grid-cols-3 mb-4">
              <div class="text-center">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/settings/dark/03.png" alt="mini" class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="sidebar" data-name="sidebar-type" data-value="sidebar-mini">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/settings/light/03.png" alt="mini" class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="sidebar" data-name="sidebar-type" data-value="sidebar-mini">
                <span class="mt-2">Мини</span>
              </div>
              <div class="text-center">
               <img src="<?php bloginfo('template_url'); ?>/assets/images/settings/dark/04.png" alt="hover" class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="sidebar" data-name="sidebar-type" data-value="sidebar-hover" data-extra-value="sidebar-mini">
               <img src="<?php bloginfo('template_url'); ?>/assets/images/settings/light/04.png" alt="hover" class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="sidebar" data-name="sidebar-type" data-value="sidebar-hover" data-extra-value="sidebar-mini">
                <span class="mt-2">Адаптив</span>
              </div>
              <div class="text-center">
                 <img src="<?php bloginfo('template_url'); ?>/assets/images/settings/dark/05.png" alt="boxed" class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="sidebar" data-name="sidebar-type" data-value="sidebar-boxed">
                 <img src="<?php bloginfo('template_url'); ?>/assets/images/settings/light/05.png" alt="boxed" class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="sidebar" data-name="sidebar-type" data-value="sidebar-boxed">
                <span class="mt-2">Бокс</span>
              </div>
            </div>
            <hr class="hr-horizontal">
            <h5 class="mt-4 mb-3">Стиль активного меню</h5>
            <div class="d-grid gap-x-3 grid-cols-2 mb-4">
              <div class="mb-4 text-center">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/settings/dark/06.png" alt="rounded-one-side" class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="sidebar" data-name="sidebar-item" data-value="navs-rounded">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/settings/light/06.png" alt="rounded-one-side" class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="sidebar" data-name="sidebar-item" data-value="navs-rounded">
                <span class="mt-2">С 1-й стороны</span>
              </div>
              <div class="mb-4 text-center">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/settings/dark/07.png" alt="rounded-all" class="mode dark-img img-fluid btn-border p-0 flex-column active" data-setting="sidebar" data-name="sidebar-item" data-value="navs-rounded-all">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/settings/light/07.png" alt="rounded-all" class="mode light-img img-fluid btn-border p-0 flex-column active" data-setting="sidebar" data-name="sidebar-item" data-value="navs-rounded-all">
                <span class="mt-2">Все стороны</span>
              </div>
              <div class="mb-4 text-center">
                 <img src="<?php bloginfo('template_url'); ?>/assets/images/settings/dark/09.png" alt="pill-one-side" class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="sidebar" data-name="sidebar-item" data-value="navs-pill">
                 <img src="<?php bloginfo('template_url'); ?>/assets/images/settings/light/09.png" alt="pill-one-side" class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="sidebar" data-name="sidebar-item" data-value="navs-pill">
                <span class="mt-2">Круглая сторона</span>
              </div>
              <div class="mb-4 text-center">
                 <img src="<?php bloginfo('template_url'); ?>/assets/images/settings/dark/08.png" alt="pill-all" class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="sidebar" data-name="sidebar-item" data-value="navs-pill-all">
                 <img src="<?php bloginfo('template_url'); ?>/assets/images/settings/light/08.png" alt="pill-all" class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="sidebar" data-name="sidebar-item" data-value="navs-pill-all">
                <span class="mt-2">Все стороны</span>
              </div>
            </div>
            <hr class="hr-horizontal">
             <h5 class="mt-4 mb-3">Стиль топ меню</h5>
            <div class="d-grid gap-x-3 grid-cols-2">
              <div class="mb-4 text-center">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/settings/dark/10.png" alt="image" class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="navbar" data-target=".iq-navbar" data-name="navbar-type" data-value="nav-glass">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/settings/light/10.png" alt="image" class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="navbar" data-target=".iq-navbar" data-name="navbar-type" data-value="nav-glass">
                <span class="mt-2">Стекло</span>
              </div>
              <div class="mb-4 text-center">
                 <img src="<?php bloginfo('template_url'); ?>/assets/images/settings/dark/11.png" alt="color" class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="navbar" data-target=".iq-navbar-header" data-name="navbar-type" data-value="navs-bg-color">
                 <img src="<?php bloginfo('template_url'); ?>/assets/images/settings/light/11.png" alt="color" class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="navbar" data-target=".iq-navbar-header" data-name="navbar-type" data-value="navs-bg-color">
                <span class="mt-2">Синий</span>
              </div>
              <div class="mb-4 text-center">
                 <img src="<?php bloginfo('template_url'); ?>/assets/images/settings/dark/12.png" alt="sticky" class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="navbar" data-target=".iq-navbar" data-name="navbar-type" data-value="navs-sticky">
                 <img src="<?php bloginfo('template_url'); ?>/assets/images/settings/light/12.png" alt="sticky" class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="navbar" data-target=".iq-navbar" data-name="navbar-type" data-value="navs-sticky">
                <span class="mt-2">Закрепить</span>
              </div>
              <div class="mb-4 text-center">
                  <img src="<?php bloginfo('template_url'); ?>/assets/images/settings/dark/12.png" alt="transparent" class="mode dark-img img-fluid btn-border p-0 flex-column" data-setting="navbar" data-target=".iq-navbar" data-name="navbar-type" data-value="navs-transparent">
                  <img src="<?php bloginfo('template_url'); ?>/assets/images/settings/light/12.png" alt="transparent" class="mode light-img img-fluid btn-border p-0 flex-column" data-setting="navbar" data-target=".iq-navbar" data-name="navbar-type" data-value="navs-transparent">
                <span class="mt-2">Прозрачный</span>
              </div>
              <div class="btn btn-border active col-span-full" data-setting="navbar" data-name="navbar-default" data-value="default">
                  <i class="text-body">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="currentColor">
                      <circle cx="12" cy="12" r="8" fill="#F5F6FA" stroke="black" stroke-width="3"></circle>
                    </svg>
                  </i>
                <span class="ms-2 "> По умолчанию </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade exampleModalFullscreen" id="exampleModalFullscreen" aria-hidden="true" aria-labelledby="exampleModalFullscreen" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
              <div class="modal-body text-center"">
                <h3 class="mb-4">Название проекта</h3>
                  <p class="mb-4">
                    Описание проекта
                  </p>
                  <div class="text-center">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Кнопка</button>
                  </div>
              </div>
              
          </div>
      </div>
      </div>
      <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Modal 2</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  Hide this modal and show the first with the button below.
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Back to first</button>
              </div>
          </div>
      </div>
      </div>

    <!--Кнопка МЕНЮ-->
    <div class="sidebar-toggle menuTopSvertnut" data-toggle="sidebar" data-active="true">
      <i class="icon">
        <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                <path opacity="0.4" d="M16.0756 2H19.4616C20.8639 2 22.0001 3.14585 22.0001 4.55996V7.97452C22.0001 9.38864 20.8639 10.5345 19.4616 10.5345H16.0756C14.6734 10.5345 13.5371 9.38864 13.5371 7.97452V4.55996C13.5371 3.14585 14.6734 2 16.0756 2Z" fill="currentColor"></path>                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z" fill="currentColor"></path>                                </svg>                            
      </i>
  </div>
   <!--Кнопка МЕНЮ-->
   <!-- <a href="#" onClick="go_full_screen();" class="fullPage">
     <i class="ri-fullscreen-line"></i>
    </a> -->
   <?php if (is_user_logged_in()) { ?>
   <div class="menuToptowar">
    <svg width="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                <path opacity="0.4" d="M16.6667 2H7.33333C3.92889 2 2 3.92889 2 7.33333V16.6667C2 20.0622 3.92 22 7.33333 22H16.6667C20.0711 22 22 20.0622 22 16.6667V7.33333C22 3.92889 20.0711 2 16.6667 2Z" fill="currentColor"></path>                                <path d="M15.3205 12.7083H12.7495V15.257C12.7495 15.6673 12.4139 16 12 16C11.5861 16 11.2505 15.6673 11.2505 15.257V12.7083H8.67955C8.29342 12.6687 8 12.3461 8 11.9613C8 11.5765 8.29342 11.2539 8.67955 11.2143H11.2424V8.67365C11.2824 8.29088 11.6078 8 11.996 8C12.3842 8 12.7095 8.29088 12.7495 8.67365V11.2143H15.3205C15.7066 11.2539 16 11.5765 16 11.9613C16 12.3461 15.7066 12.6687 15.3205 12.7083Z" fill="currentColor"></path>                                </svg>                            
   </div>
    
   
           <div class="pointuTopMenu">

            <img src="<?php bloginfo('template_url'); ?>/img/moneti.png" alt=""><span class="account_real_balance"><?php echo $user_balance; ?></span>

           </div>

   <?php } ?>
   <div class="bottomMenuKnopki">
     <div>
      <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" data-toggle-fullscreen><path opacity="0.4" fill-rule="evenodd" clip-rule="evenodd" d="M9.18824 3.74722C9.18824 3.33438 8.84724 3 8.42724 3H8.42624L6.79724 3.00098C4.60624 3.00294 2.82324 4.75331 2.82324 6.90279V8.76201C2.82324 9.17386 3.16424 9.50923 3.58424 9.50923C4.00424 9.50923 4.34624 9.17386 4.34624 8.76201V6.90279C4.34624 5.57604 5.44624 4.4964 6.79824 4.49444L8.42724 4.49345C8.84824 4.49345 9.18824 4.15907 9.18824 3.74722ZM17.1931 3.00029H15.6001C15.1801 3.00029 14.8391 3.33468 14.8391 3.74751C14.8391 4.15936 15.1801 4.49277 15.6001 4.49277H17.1931C18.5501 4.49277 19.6541 5.57535 19.6541 6.90603V8.7623C19.6541 9.17415 19.9951 9.50952 20.4151 9.50952C20.8361 9.50952 21.1761 9.17415 21.1761 8.7623V6.90603C21.1761 4.75165 19.3901 3.00029 17.1931 3.00029ZM9.23804 6.74266H14.762C15.367 6.74266 15.948 6.98094 16.371 7.40554C16.797 7.83407 17.033 8.40968 17.032 9.00883V10.2542C17.027 10.4003 16.908 10.5189 16.759 10.5229H7.23904C7.09104 10.518 6.97204 10.3993 6.96904 10.2542V9.00883C6.95804 7.76837 7.97404 6.75541 9.23804 6.74266Z" fill="currentColor"></path><path d="M22.239 12.0413H1.762C1.342 12.0413 1 12.3756 1 12.7885C1 13.2003 1.342 13.5337 1.762 13.5337H2.823V17.0972C2.823 19.2467 4.607 20.9971 6.798 20.999L8.427 21C8.848 21 9.188 20.6656 9.189 20.2528C9.189 19.841 8.848 19.5066 8.428 19.5066L6.8 19.5056C5.447 19.5036 4.346 18.424 4.346 17.0972V13.5337H6.969V14.5251C6.959 15.7656 7.974 16.7795 9.238 16.7913H14.762C16.027 16.7795 17.042 15.7656 17.032 14.5251V13.5337H19.655V17.0933C19.655 18.425 18.551 19.5066 17.194 19.5066H15.601C15.18 19.5066 14.839 19.841 14.839 20.2528C14.839 20.6656 15.18 21 15.601 21H17.194C19.39 21 21.177 19.2487 21.177 17.0933V13.5337H22.239C22.659 13.5337 23 13.2003 23 12.7885C23 12.3756 22.659 12.0413 22.239 12.0413Z" fill="currentColor"></path></svg>                            
     </div>
   </div>

   <!-- Footer -->
    <div class="bottomMenuMain fixed-bottom sidebar-color">

    <div class="row mx-auto">

      <div class="col-3 text-center">

        <a href="/" class="bottomMenuMainP">

          <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                <path d="M9.14373 20.7821V17.7152C9.14372 16.9381 9.77567 16.3067 10.5584 16.3018H13.4326C14.2189 16.3018 14.8563 16.9346 14.8563 17.7152V20.7732C14.8562 21.4473 15.404 21.9951 16.0829 22H18.0438C18.9596 22.0023 19.8388 21.6428 20.4872 21.0007C21.1356 20.3586 21.5 19.4868 21.5 18.5775V9.86585C21.5 9.13139 21.1721 8.43471 20.6046 7.9635L13.943 2.67427C12.7785 1.74912 11.1154 1.77901 9.98539 2.74538L3.46701 7.9635C2.87274 8.42082 2.51755 9.11956 2.5 9.86585V18.5686C2.5 20.4637 4.04738 22 5.95617 22H7.87229C8.19917 22.0023 8.51349 21.8751 8.74547 21.6464C8.97746 21.4178 9.10793 21.1067 9.10792 20.7821H9.14373Z" fill="currentColor"></path>                                </svg>                            <br>

          <p class="">Главная</p>

         </a>

      </div>

      <div class="col-3 text-center">

        <a href="/exchange-page" class="bottomMenuMainP">

          <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                <path opacity="0.4" d="M16.6756 2H7.33333C3.92889 2 2 3.92889 2 7.33333V16.6667C2 20.0711 3.92889 22 7.33333 22H16.6756C20.08 22 22 20.0711 22 16.6667V7.33333C22 3.92889 20.08 2 16.6756 2Z" fill="currentColor"></path>                                <path d="M7.36866 9.3689C6.91533 9.3689 6.54199 9.74223 6.54199 10.2045V17.0756C6.54199 17.5289 6.91533 17.9022 7.36866 17.9022C7.83088 17.9022 8.20421 17.5289 8.20421 17.0756V10.2045C8.20421 9.74223 7.83088 9.3689 7.36866 9.3689Z" fill="currentColor"></path>                                <path d="M12.0352 6.08887C11.5818 6.08887 11.2085 6.4622 11.2085 6.92442V17.0755C11.2085 17.5289 11.5818 17.9022 12.0352 17.9022C12.4974 17.9022 12.8707 17.5289 12.8707 17.0755V6.92442C12.8707 6.4622 12.4974 6.08887 12.0352 6.08887Z" fill="currentColor"></path>                                <path d="M16.6398 12.9956C16.1775 12.9956 15.8042 13.3689 15.8042 13.8312V17.0756C15.8042 17.5289 16.1775 17.9023 16.6309 17.9023C17.0931 17.9023 17.4664 17.5289 17.4664 17.0756V13.8312C17.4664 13.3689 17.0931 12.9956 16.6398 12.9956Z" fill="currentColor"></path>                                </svg><br>

          <p class="mx-0">Биржа</p>

         </a>

      </div>

      <div class="col-3 text-center">

        <a href="game.html" class="bottomMenuMainP">

          <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                <path opacity="0.4" d="M12.9763 3.11361L15.2028 7.58789C15.3668 7.91205 15.6799 8.13717 16.041 8.18719L21.042 8.91556C21.3341 8.95658 21.5992 9.11066 21.7782 9.34578C21.9552 9.5779 22.0312 9.87205 21.9882 10.1612C21.9532 10.4013 21.8402 10.6234 21.6672 10.7935L18.0434 14.3063C17.7783 14.5514 17.6583 14.9146 17.7223 15.2698L18.6145 20.2083C18.7095 20.8046 18.3144 21.3669 17.7223 21.48C17.4783 21.519 17.2282 21.478 17.0082 21.3659L12.5472 19.0417C12.2161 18.8746 11.8251 18.8746 11.494 19.0417L7.03303 21.3659C6.48491 21.657 5.80576 21.4589 5.5007 20.9187C5.38767 20.7036 5.34766 20.4584 5.38467 20.2193L6.27686 15.2798C6.34088 14.9256 6.21985 14.5604 5.95579 14.3153L2.33202 10.8045C1.90092 10.3883 1.88792 9.70296 2.30301 9.27175C2.31201 9.26274 2.32201 9.25274 2.33202 9.24273C2.50405 9.06764 2.7301 8.95658 2.97415 8.92757L7.97523 8.1982C8.33531 8.14717 8.64837 7.92406 8.81341 7.59789L10.9599 3.11361C11.1509 2.72942 11.547 2.4903 11.9771 2.5003H12.1111C12.4842 2.54533 12.8093 2.77644 12.9763 3.11361Z" fill="currentColor"></path>                                <path d="M11.992 18.9171C11.7983 18.9231 11.6096 18.9752 11.4399 19.0682L7.00072 21.3871C6.45756 21.6464 5.80756 21.4452 5.50303 20.9258C5.39021 20.7136 5.34927 20.4704 5.38721 20.2322L6.27384 15.3032C6.33375 14.9449 6.21394 14.5806 5.95334 14.3284L2.32794 10.8185C1.8976 10.3971 1.88961 9.70556 2.31096 9.27421C2.31695 9.26821 2.32195 9.2632 2.32794 9.2582C2.49967 9.08806 2.72133 8.97597 2.95996 8.94094L7.96523 8.20433C8.32767 8.1583 8.64219 7.93211 8.80194 7.60384L10.9776 3.06312C11.1843 2.69682 11.5806 2.47864 12 2.50166C11.992 2.7989 11.992 18.715 11.992 18.9171Z" fill="currentColor"></path>                                </svg><br>

         <p class="">Игры</p>

        </a>

      </div>

      <div class="col-3 text-center">

        <a href="/admin-chat-page" class="bottomMenuMainP">

          <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                <path opacity="0.4" d="M12.02 2C6.21 2 2 6.74 2 12C2 13.68 2.49 15.41 3.35 16.99C3.51 17.25 3.53 17.58 3.42 17.89L2.75 20.13C2.6 20.67 3.06 21.07 3.57 20.91L5.59 20.31C6.14 20.13 6.57 20.36 7.081 20.67C8.541 21.53 10.36 21.97 12 21.97C16.96 21.97 22 18.14 22 11.97C22 6.65 17.7 2 12.02 2Z" fill="currentColor"></path>                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9807 13.2901C11.2707 13.2801 10.7007 12.7101 10.7007 12.0001C10.7007 11.3001 11.2807 10.7201 11.9807 10.7301C12.6907 10.7301 13.2607 11.3001 13.2607 12.0101C13.2607 12.7101 12.6907 13.2901 11.9807 13.2901ZM7.37033 13.2901C6.67033 13.2901 6.09033 12.7101 6.09033 12.0101C6.09033 11.3001 6.66033 10.7301 7.37033 10.7301C8.08033 10.7301 8.65033 11.3001 8.65033 12.0101C8.65033 12.7101 8.08033 13.2801 7.37033 13.2901ZM15.3105 12.0101C15.3105 12.7101 15.8805 13.2901 16.5905 13.2901C17.3005 13.2901 17.8705 12.7101 17.8705 12.0101C17.8705 11.3001 17.3005 10.7301 16.5905 10.7301C15.8805 10.7301 15.3105 11.3001 15.3105 12.0101Z" fill="currentColor"></path></svg><br>

         <p class="">Чат</p>

        </a>

      </div>

    </div>

   </div>
    
<?php 

get_footer(); 

?>