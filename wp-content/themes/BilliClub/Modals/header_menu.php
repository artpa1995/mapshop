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

                        <a class="nav-link active" aria-current="page" href="/">

                            <i class="icon">

                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">

                                    <path opacity="0.4" d="M16.0756 2H19.4616C20.8639 2 22.0001 3.14585 22.0001 4.55996V7.97452C22.0001 9.38864 20.8639 10.5345 19.4616 10.5345H16.0756C14.6734 10.5345 13.5371 9.38864 13.5371 7.97452V4.55996C13.5371 3.14585 14.6734 2 16.0756 2Z" fill="currentColor"></path>

                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z" fill="currentColor"></path>

                                </svg>

                            </i>

                            <span class="item-name" style="color: #004aa8 !important;">Главная</span>

                        </a>

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

        
        <!-- <p><img src="<?php bloginfo('template_url'); ?>/assets/images/text.jpg" alt=""></p> -->
          <p><span class="e;notranslate"e; translate="no"> THE WORLD IS YOURS...</span></p>

        </div>

        <div class="sidebar-footer"></div>

      </aside> 

        <!--Кнопка МЕНЮ-->

    <div class="sidebar-toggle menuTopSvertnut " data-toggle="sidebar" data-active="true" style="top:1%">

      <i class="icon">

        <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                <path opacity="0.4" d="M16.0756 2H19.4616C20.8639 2 22.0001 3.14585 22.0001 4.55996V7.97452C22.0001 9.38864 20.8639 10.5345 19.4616 10.5345H16.0756C14.6734 10.5345 13.5371 9.38864 13.5371 7.97452V4.55996C13.5371 3.14585 14.6734 2 16.0756 2Z" fill="#0b77ff"></path>                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z" fill="#0b77ff"></path>                                </svg>                            

      </i>

    </div>
   <!-- TOP Nav Bar -->
      <div class="iq-top-navbar iq-top-navbar-profile">
         <div class="iq-navbar-custom">
            <div class="iq-sidebar-logo">
               <div class="top-logo">
                  <a href="index.html" class="logo">
                  <span>Billionaire Club</span>
                  </a>
               </div>
            </div>
             <nav class="navbar navbar-expand-lg navbar-light p-0" id="profile-page-header-wrapper">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
                  </button>
                  <div class="iq-menu-bt align-self-center iq-menu-bt-profile">
                     <div class="wrapper-menu">
                        <div class="line-menu half start"></div>
                        <div class="line-menu"></div>
                        <div class="line-menu half end"></div>
                     </div>
                  </div>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav ml-auto navbar-list">
                        <!-- <li class="nav-item">
                           <a class="search-toggle iq-waves-effect" href="#"><i class="ri-search-line"></i></a>
                           <form action="#" class="search-box">
                              <input type="text" class="text search-input" placeholder="Поиск..." />
                           </form>
                        </li> -->
                       <!--  <li class="nav-item dropdown">
                           <a href="#" class="search-toggle iq-waves-effect">
                              <i class="ri-mail-line"></i>
                              <span class="badge badge-pill badge-dark badge-up count-mail">5</span>
                           </a>
                           <div class="iq-sub-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white">Все сообщения<small class="badge  badge-light float-right pt-1">5</small></h5>
                                    </div>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="<?php bloginfo('template_url'); ?>/images/user/01.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Логин юзера</h6>
                                             <small class="float-start font-size-12">14 Авг</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="<?php bloginfo('template_url'); ?>/images/user/02.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Логин юзера</h6>
                                             <small class="float-start font-size-12">14 Авг</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="<?php bloginfo('template_url'); ?>/images/user/03.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Логин юзера</h6>
                                             <small class="float-start font-size-12">14 Авг</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="<?php bloginfo('template_url'); ?>/images/user/04.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Логин юзера</h6>
                                             <small class="float-start font-size-12">14 Авг</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="<?php bloginfo('template_url'); ?>/images/user/05.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Логин юзера</h6>
                                             <small class="float-start font-size-12">14 Авг</small>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </li> -->
                        <!-- <li class="nav-item">
                           <a href="#" class="iq-waves-effect"><i class="ri-shopping-cart-2-line"></i></a>
                        </li>
                        <li class="nav-item">
                           <a href="#" class="search-toggle iq-waves-effect">
                              <i class="ri-notification-2-line"></i>
                              <span class="bg-danger dots"></span>
                           </a>
                           <div class="iq-sub-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-danger p-3">
                                       <h5 class="mb-0 text-white">Все уведомления<small class="badge  badge-light float-right pt-1">4</small></h5>
                                    </div>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Проект автомойка</h6>
                                             <small class="float-right font-size-12">23 часа назад</small>
                                             <p class="mb-0">Новости</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="<?php bloginfo('template_url'); ?>/images/user/01.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Имя Фамилия</h6>
                                             <small class="float-right font-size-12">Только что</small>
                                             <p class="mb-0">Сообщение</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="<?php bloginfo('template_url'); ?>/images/user/02.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Имя Фамилия</h6>
                                             <small class="float-right font-size-12">7 мин</small>
                                             <p class="mb-0">Сообщение</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40" src="<?php bloginfo('template_url'); ?>/images/user/04.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Имя Фамилия</h6>
                                             <small class="float-right font-size-12">15 мин</small>
                                             <p class="mb-0">Сообщение</p>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </li> -->
                        <li class="nav-item iq-full-screen"><a href="#" class="iq-waves-effect" id="btnFullscreen"><i class="ri-fullscreen-line"></i></a></li>
                     </ul>
                  </div>
                  <ul class="navbar-list">
                     <li>
                        <a href="#" class="search-toggle iq-waves-effect bg-info text-white">
                                <?php if(isset($image) && !empty($image)): ?>

                                        <img class="img-fluid rounded" src="<?php echo content_url(). '/uploads/' .$image; ?>" alt="user">

                                <?php else: ?>
                                                    
                                        <img src="<?php bloginfo('template_url'); ?>/images/user/11.png" alt="user" class="img-fluid rounded" />

                                <?php endif; ?> 

                        </a>
                        <div class="iq-sub-dropdown iq-user-dropdown">
                           <div class="iq-card shadow-none m-0">
                              <div class="iq-card-body p-0 ">
                                 <div class="bg-info p-3">
                                    <h5 class="mb-0 text-white line-height">Привет <?php if(!empty($first_name)): echo $first_name; else: echo 'Пользователь '; endif; ?> <?php if(!empty($last_name)): echo $last_name; endif; ?></h5>
                                    <span class="text-white font-size-12">Онлайн</span>
                                 </div>
                                 <a href="/profile-page" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-file-user-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Мой профиль</h6>
                                          <p class="mb-0 font-size-12">Открыть свой профиль.</p>
                                       </div>
                                    </div>
                                 </a>
                                <!--  <a href="/profile-edit-page" class="iq-sub-card iq-bg-primary-success-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-success">
                                          <i class="ri-profile-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Изменить профиль</h6>
                                          <p class="mb-0 font-size-12">Настройка вашего профиля.</p>
                                       </div>
                                    </div>
                                 </a> -->
                                 <a href="privacy-setting.html" class="iq-sub-card iq-bg-primary-secondary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-secondary">
                                          <i class="ri-lock-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Конфиденциальность</h6>
                                          <p class="mb-0 font-size-12">Настройки конфиденциальности.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="d-inline-block w-100 text-center p-3">
                                    <a class="iq-bg-info iq-sign-btn" href="<?php echo wp_logout_url('/');?>" role="button">Выйти<i class="ri-login-box-line ml-2"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </nav>
         </div>
      </div>
      <!-- TOP Nav Bar END --> 