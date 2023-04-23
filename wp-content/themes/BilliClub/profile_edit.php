<?php
/* Template Name: profile-page */

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

    if (isset($user_data[0]->user_email)) {
    
        $user_email = $user_data[0]->user_email;
            
    }

    if (isset($user_data[1]['user_bonus'][0])) {
    
        $user_bonus = $user_data[1]['user_bonus'][0];
            
    }
  
}else{

    header("Location:/sign-in-page");
    exit();

}

get_header();

?>
 <!-- loader Start -->
  <div id="loading">
     
  </div>
  <!-- loader END -->
  <!-- Wrapper Start -->
  <div class="wrapper">
    
    <?php require_once(WP_CONTENT_DIR. '/themes/BilliClub/Modals/header_menu.php'); ?>
      
     <!-- Page Content  -->
     <div id="content-page" class="content-page">
        <div class="container-fluid">
           <div class="row">
              <div class="col-sm-12">
                 <div class="iq-card">
                    <div class="iq-card-body profile-page p-0">
                       <div class="profile-header">
                          <div class="cover-container">
                             <img src="<?php bloginfo('template_url'); ?>/images/page-img/profile-bg.jpg" alt="profile-bg" class="rounded img-fluid"> 
                             <ul class="header-nav d-flex flex-wrap justify-end p-0 m-0">
                                <li><a href="javascript:void();"><i class="ri-pencil-line"></i></a></li>
                                <li><a href="javascript:void();"><i class="ri-settings-4-line"></i></a></li>
                             </ul>
                          </div>
                          <div class="profile-info p-4">
                             <div class="row">
                                <div class="col-sm-12 col-md-6">
                                   <div class="user-detail pl-5">
                                      <div class="d-flex flex-wrap align-items-center">
                                         <div class="profile-img pr-4">
                                            
                                            <?php if(isset($image) && !empty($image)): ?>

                                                     <img class="avatar-130 img-fluid" src="<?php echo content_url(). '/uploads/' .$image; ?>" alt="profile-img">

                                            <?php else: ?>
                                                    
                                                    <img src="<?php bloginfo('template_url'); ?>/images/user/11.png" alt="profile-img" class="avatar-130 img-fluid" />

                                            <?php endif; ?> 

                                         </div>
                                         <div class="profile-detail d-flex align-items-center">
                                            <h3><?php if(!empty($first_name)): echo $first_name; else: echo 'Пользователь '; endif; ?> <?php if(!empty($last_name)): echo $last_name; endif; ?></h3>
                                            <p class="m-0 pl-3"> - Инвестор</p>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                   <ul class="nav nav-pills d-flex align-items-end float-right profile-feed-items p-0 m-0">
                                      <li>
                                         <a class="nav-link active" data-toggle="pill" href="#profile-feed">Новости</a>
                                      </li>
                                      <li>
                                         <a class="nav-link" data-toggle="pill" href="#profile-activity">Баланс</a>
                                      </li>
                                      <li>
                                         <a class="nav-link" data-toggle="pill" href="#profile-friends">Друзья</a>
                                      </li>
                                      <li>
                                         <a class="nav-link" data-toggle="pill" href="#profile-profile">Профиль</a>
                                      </li>
                                   </ul>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-sm-12">
                 <div class="row">
                    <div class="col-lg-6 profile-center">
                       <div class="tab-content">
                          <div class="tab-pane fade active show" id="profile-feed" role="tabpanel">
                             <div class="iq-card">
                                <div class="iq-card-body p-0">
                                   <div class="user-post-data p-3">
                                      <div class="d-flex flex-wrap">
                                         <div class="media-support-user-img mr-3">
                                            <img class="rounded-circle img-fluid" src="<?php bloginfo('template_url'); ?>/images/user/01.jpg" alt="">
                                         </div>
                                         <div class="media-support-info mt-2">
                                            <h5 class="mb-0"><a href="#" class="">Новость номер 1</a></h5>
                                            <p class="mb-0 text-primary">Имя Фамилия</p>
                                         </div>
                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                            <div class="dropdown">
                                               <span class="dropdown-toggle text-primary" id="dropdownMenuButton40" data-toggle="dropdown">
                                                  <a href="#" class="text-secondary">29 мин <i class="ri-more-2-line ml-3"></i></a>
                                               </span>
                                               <div class="dropdown-menu dropdown-menu-right p-0">
                                                  <a class="dropdown-item" href="#">
                                                     <i class="ri-user-unfollow-line mr-2"></i>Отписка
                                                  </a>
                                                  <a class="dropdown-item" href="#">
                                                     <i class="ri-share-forward-line mr-2"></i>Поделится
                                                  </a>
                                                  <a class="dropdown-item" href="#">
                                                     <i class="ri-file-copy-line mr-2"></i>Скопировать ссылку
                                                  </a>
                                               </div>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                   <div class="user-post">
                                      <a href="javascript:void();"><img src="<?php bloginfo('template_url'); ?>/images/page-img/p1.jpg" alt="post-image" class="img-fluid" /></a>
                                   </div>
                                   <div class="comment-area p-3">
                                      <div class="d-flex justify-content-between align-items-center">
                                         <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center feather-icon mr-3">
                                               <a href="javascript:void();"><i class="ri-heart-line"></i></a>
                                               <span class="ml-1">140</span>
                                            </div>
                                            <div class="d-flex align-items-center message-icon">
                                               <a href="javascript:void();"><i class="ri-chat-4-line"></i></a>
                                               <span class="ml-1">140</span>
                                            </div>
                                         </div>
                                         <div class="d-flex align-items-center">
                                            <div class="iq-media-group">
                                               <a href="#" class="iq-media">
                                               <img class="img-fluid avatar-40 rounded-circle" src="<?php bloginfo('template_url'); ?>/images/user/05.jpg" alt="">
                                               </a>
                                               <a href="#" class="iq-media">
                                               <img class="img-fluid avatar-40 rounded-circle" src="<?php bloginfo('template_url'); ?>/images/user/06.jpg" alt="">
                                               </a>
                                               <a href="#" class="iq-media">
                                               <img class="img-fluid avatar-40 rounded-circle" src="<?php bloginfo('template_url'); ?>/images/user/07.jpg" alt="">
                                               </a>
                                               <a href="#" class="iq-media">
                                               <img class="img-fluid avatar-40 rounded-circle" src="<?php bloginfo('template_url'); ?>/images/user/08.jpg" alt="">
                                               </a>
                                               <a href="#" class="iq-media">
                                               <img class="img-fluid avatar-40 rounded-circle" src="<?php bloginfo('template_url'); ?>/images/user/09.jpg" alt="">
                                               </a>
                                            </div>
                                            <span class="ml-2">+140 просмотров</span>
                                         </div>
                                      </div>
                                      <hr>
                                      <p>Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так.Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так.  </p>
                                      <hr>
                                      <ul class="post-comments p-0 m-0">
                                         <li class="mb-2">
                                            <div class="d-flex flex-wrap">
                                               <div class="user-img">
                                                  <img src="<?php bloginfo('template_url'); ?>/images/user/02.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                                               </div>
                                               <div class="comment-data-block ml-3">
                                                  <h6>Имя Фамилия</h6>
                                                  <p class="mb-0">Многие думают, что Lorem Ipsum... </p>
                                                  <div class="d-flex flex-wrap align-items-center comment-activity">
                                                     <a href="javascript:void();">Лайк</a>
                                                     <a href="javascript:void();">Поделится</a>
                                                     <a href="javascript:void();">Перевод</a>
                                                     <span> 5 minit </span>
                                                  </div>
                                               </div>
                                            </div>
                                         </li>
                                         <li>
                                            <div class="d-flex flex-wrap">
                                               <div class="user-img">
                                                  <img src="<?php bloginfo('template_url'); ?>/images/user/03.jpg" alt="userimg" class="avatar-35 rounded-circle img-fluid">
                                               </div>
                                               <div class="comment-data-block ml-3">
                                                  <h6>Имя Фамилия</h6>
                                                  <p class="mb-0">Многие думают, что Lorem Ipsum...</p>
                                                  <div class="d-flex flex-wrap align-items-center comment-activity">
                                                     <a href="javascript:void();">Лайк</a>
                                                     <a href="javascript:void();">Поделится</a>
                                                     <a href="javascript:void();">Перевод</a>
                                                     <span> 5 minit </span>
                                                  </div>
                                               </div>
                                            </div>
                                         </li>
                                      </ul>
                                      <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                                         <input type="text" class="form-control rounded" placeholder="Ваш комментарий!">
                                         <div class="comment-attagement d-flex">
                                             <a href="javascript:void();"><i class="ri-user-smile-line mr-2"></i></a>
                                             <a href="javascript:void();"><i class="ri-camera-line mr-2"></i></a>
                                         </div>
                                      </form>
                                   </div>                              
                                </div>
                             </div>
                             <div class="iq-card">
                                <div class="iq-card-body p-0">
                                   <div class="user-post-data p-3">
                                      <div class="d-flex flex-wrap">
                                         <div class="media-support-user-img mr-3">
                                            <img class="rounded-circle img-fluid" src="<?php bloginfo('template_url'); ?>/images/user/02.jpg" alt="">
                                         </div>
                                         <div class="media-support-info mt-2">
                                            <h5 class="mb-0"><a href="#" class="">Новость номер 2</a></h5>
                                            <p class="mb-0 text-primary">Менеджер</p>
                                         </div>
                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                            <div class="dropdown">
                                               <span class="dropdown-toggle text-primary" id="dropdownMenuButton-40" data-toggle="dropdown">
                                                  <a href="#" class="text-secondary">1 час <i class="ri-more-2-line ml-3"></i></a>
                                               </span>
                                               <div class="dropdown-menu dropdown-menu-right p-0">
                                                  <a class="dropdown-item" href="#">
                                                     <i class="ri-user-unfollow-line mr-2"></i>Отписка
                                                  </a>
                                                  <a class="dropdown-item" href="#">
                                                     <i class="ri-share-forward-line mr-2"></i>Поделится
                                                  </a>
                                                  <a class="dropdown-item" href="#">
                                                     <i class="ri-file-copy-line mr-2"></i>Скопировать ссылку
                                                  </a>
                                               </div>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                    <hr class="mt-0">
                                      <p class="p-3 mb-0">Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад.</p>
                                      
                                   <div class="comment-area p-3"><hr class="mt-0">
                                      <div class="d-flex justify-content-between align-items-center">
                                         <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center feather-icon mr-3">
                                               <a id="clickme" href="javascript:void();"><i class="ri-heart-line"></i></a>
                                               <span class="ml-1">140</span>
                                            </div>
                                            <div class="d-flex align-items-center message-icon">
                                               <a href="javascript:void();"><i class="ri-chat-4-line"></i></a>
                                               <span class="ml-1">140</span>
                                            </div>
                                         </div>
                                         <div class="d-flex align-items-center">
                                            <div class="iq-media-group">
                                               <a href="#" class="iq-media">
                                               <img class="img-fluid avatar-40 rounded-circle" src="<?php bloginfo('template_url'); ?>/images/user/05.jpg" alt="">
                                               </a>
                                               <a href="#" class="iq-media">
                                               <img class="img-fluid avatar-40 rounded-circle" src="<?php bloginfo('template_url'); ?>/images/user/06.jpg" alt="">
                                               </a>
                                               <a href="#" class="iq-media">
                                               <img class="img-fluid avatar-40 rounded-circle" src="<?php bloginfo('template_url'); ?>/images/user/07.jpg" alt="">
                                               </a>
                                               <a href="#" class="iq-media">
                                               <img class="img-fluid avatar-40 rounded-circle" src="<?php bloginfo('template_url'); ?>/images/user/08.jpg" alt="">
                                               </a>
                                               <a href="#" class="iq-media">
                                               <img class="img-fluid avatar-40 rounded-circle" src="<?php bloginfo('template_url'); ?>/images/user/09.jpg" alt="">
                                               </a>
                                            </div>
                                            <span class="ml-2">+140 просмотров</span>
                                         </div>
                                      </div>
                                      <form class="comment-text d-flex align-items-center mt-3" action="javascript:void(0);">
                                         <input type="text" class="form-control rounded" placeholder="Ваш комментарий!">
                                         <div class="comment-attagement d-flex">
                                             <a href="javascript:void();"><i class="ri-user-smile-line mr-2"></i></a>
                                             <a href="javascript:void();"><i class="ri-camera-line mr-2"></i></a>
                                         </div>
                                      </form>
                                   </div>                              
                                </div>
                             </div>
                          </div>
                          <div class="tab-pane fade" id="profile-activity" role="tabpanel">
                             <div class="iq-card-body bg-info rounded mb-4">
                                <div class="d-flex align-items-center">
                                   <div class="col-md-8">
                                      <p class="text-white">Ваш баланс</p>
                                      <h2 class="text-white"> $5450 </h2> 
                                      <div class="text-white">Последнее пополнение 22.09.2021 </div>
                                   </div> 
                                   <div class="col-md-4 chart-icon text-center">
                                      <i class="ri-bar-chart-grouped-line font-size-40 text-white"></i>
                                   </div>
                                </div>
                             </div>
                             <div>
                                <button type="button" class="btn btn-primary btn-block mb-3 py-3">Пополнить баланс</button>
                             </div>
                             <div class="iq-card-body">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div class="revenue-desc">
                                      <h6>Пополнение баланса</h6> 
                                      <p class="font-weight-light mb-0"> На прошлой неделе </p>
                                    </div> 
                                    <div class="revenue-amount">
                                      <p class="text-primary mb-0"> +1200 </p>
                                   </div>
                                </div>
                                <hr>
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div class="revenue-desc">
                                      <h6>Пополнение баланса</h6> 
                                      <p class="font-weight-light mb-0"> 07 Августа 2021 </p>
                                    </div> 
                                    <div class="revenue-amount">
                                      <p class="text-primary mb-0"> +1600 </p>
                                   </div>
                                </div>
                              </div>
                          </div>
                          <div class="tab-pane fade" id="profile-friends" role="tabpanel">
                             <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                   <div class="iq-header-title">
                                      <h4 class="card-title">Друзья</h4>
                                   </div>
                                </div>
                                <div class="iq-card-body">
                                   <ul class="suggestions-lists m-0 p-0">
                                      <li class="d-flex mb-4 align-items-center">
                                         <div class="user-img img-fluid"><img src="<?php bloginfo('template_url'); ?>/images/user/01.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                         <div class="media-support-info ml-3">
                                            <h6>Имя Фамилия</h6>
                                            <p class="mb-0">Инвестор</p>
                                         </div>
                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                            <div class="dropdown">
                                               <span class="dropdown-toggle text-primary" id="dropdownMenuButton-50" data-toggle="dropdown">
                                                  <i class="ri-more-2-line"></i>
                                               </span>
                                               <div class="dropdown-menu dropdown-menu-right p-0">
                                                  <a class="dropdown-item" href="#"><i class="ri-user-unfollow-line mr-2"></i>Отписатся</a>
                                                  <a class="dropdown-item" href="#"><i class="ri-close-circle-line mr-2"></i>Удалить из друзей</a>
                                                  <a class="dropdown-item" href="#"><i class="ri-lock-line mr-2"></i>Блокировать</a>
                                               </div>
                                            </div>
                                         </div>
                                      </li>
                                      <li class="d-flex mb-4 align-items-center">
                                         <div class="user-img img-fluid"><img src="<?php bloginfo('template_url'); ?>/images/user/01.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                         <div class="media-support-info ml-3">
                                            <h6>Имя Фамилия</h6>
                                            <p class="mb-0">Новичок</p>
                                         </div>
                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                            <div class="dropdown">
                                               <span class="dropdown-toggle text-primary" id="dropdownMenuButton41" data-toggle="dropdown">
                                               <i class="ri-more-2-line"></i>
                                               </span>
                                               <div class="dropdown-menu dropdown-menu-right p-0">
                                                  <a class="dropdown-item" href="#"><i class="ri-user-unfollow-line mr-2"></i>Отписатся</a>
                                                  <a class="dropdown-item" href="#"><i class="ri-close-circle-line mr-2"></i>Удалить из друзей</a>
                                                  <a class="dropdown-item" href="#"><i class="ri-lock-line mr-2"></i>Блокировать</a>
                                               </div>
                                            </div>
                                         </div>
                                      </li>
                                      <li class="d-flex mb-4 align-items-center">
                                         <div class="user-img img-fluid"><img src="<?php bloginfo('template_url'); ?>/images/user/01.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                         <div class="media-support-info ml-3">
                                            <h6>Имя Фамилия</h6>
                                            <p class="mb-0">Инвестор</p>
                                         </div>
                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                            <div class="dropdown">
                                               <span class="dropdown-toggle text-primary" id="dropdownMenuButton-50" data-toggle="dropdown">
                                                  <i class="ri-more-2-line"></i>
                                               </span>
                                               <div class="dropdown-menu dropdown-menu-right p-0">
                                                  <a class="dropdown-item" href="#"><i class="ri-user-unfollow-line mr-2"></i>Отписатся</a>
                                                  <a class="dropdown-item" href="#"><i class="ri-close-circle-line mr-2"></i>Удалить из друзей</a>
                                                  <a class="dropdown-item" href="#"><i class="ri-lock-line mr-2"></i>Блокировать</a>
                                               </div>
                                            </div>
                                         </div>
                                      </li>
                                      <li class="d-flex mb-4 align-items-center">
                                         <div class="user-img img-fluid"><img src="<?php bloginfo('template_url'); ?>/images/user/01.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                         <div class="media-support-info ml-3">
                                            <h6>Имя Фамилия</h6>
                                            <p class="mb-0">Новичок</p>
                                         </div>
                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                            <div class="dropdown">
                                               <span class="dropdown-toggle text-primary" id="dropdownMenuButton41" data-toggle="dropdown">
                                               <i class="ri-more-2-line"></i>
                                               </span>
                                               <div class="dropdown-menu dropdown-menu-right p-0">
                                                  <a class="dropdown-item" href="#"><i class="ri-user-unfollow-line mr-2"></i>Отписатся</a>
                                                  <a class="dropdown-item" href="#"><i class="ri-close-circle-line mr-2"></i>Удалить из друзей</a>
                                                  <a class="dropdown-item" href="#"><i class="ri-lock-line mr-2"></i>Блокировать</a>
                                               </div>
                                            </div>
                                         </div>
                                      </li>
                                      <li class="d-flex mb-4 align-items-center">
                                         <div class="user-img img-fluid"><img src="<?php bloginfo('template_url'); ?>/images/user/01.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                         <div class="media-support-info ml-3">
                                            <h6>Имя Фамилия</h6>
                                            <p class="mb-0">Инвестор</p>
                                         </div>
                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                            <div class="dropdown">
                                               <span class="dropdown-toggle text-primary" id="dropdownMenuButton-50" data-toggle="dropdown">
                                                  <i class="ri-more-2-line"></i>
                                               </span>
                                               <div class="dropdown-menu dropdown-menu-right p-0">
                                                  <a class="dropdown-item" href="#"><i class="ri-user-unfollow-line mr-2"></i>Отписатся</a>
                                                  <a class="dropdown-item" href="#"><i class="ri-close-circle-line mr-2"></i>Удалить из друзей</a>
                                                  <a class="dropdown-item" href="#"><i class="ri-lock-line mr-2"></i>Блокировать</a>
                                               </div>
                                            </div>
                                         </div>
                                      </li>
                                      <li class="d-flex mb-4 align-items-center">
                                         <div class="user-img img-fluid"><img src="<?php bloginfo('template_url'); ?>/images/user/01.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                         <div class="media-support-info ml-3">
                                            <h6>Имя Фамилия</h6>
                                            <p class="mb-0">Новичок</p>
                                         </div>
                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                            <div class="dropdown">
                                               <span class="dropdown-toggle text-primary" id="dropdownMenuButton41" data-toggle="dropdown">
                                               <i class="ri-more-2-line"></i>
                                               </span>
                                               <div class="dropdown-menu dropdown-menu-right p-0">
                                                  <a class="dropdown-item" href="#"><i class="ri-user-unfollow-line mr-2"></i>Отписатся</a>
                                                  <a class="dropdown-item" href="#"><i class="ri-close-circle-line mr-2"></i>Удалить из друзей</a>
                                                  <a class="dropdown-item" href="#"><i class="ri-lock-line mr-2"></i>Блокировать</a>
                                               </div>
                                            </div>
                                         </div>
                                      </li>
                                      <li class="d-flex mb-4 align-items-center">
                                         <div class="user-img img-fluid"><img src="<?php bloginfo('template_url'); ?>/images/user/01.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                         <div class="media-support-info ml-3">
                                            <h6>Имя Фамилия</h6>
                                            <p class="mb-0">Инвестор</p>
                                         </div>
                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                            <div class="dropdown">
                                               <span class="dropdown-toggle text-primary" id="dropdownMenuButton-50" data-toggle="dropdown">
                                                  <i class="ri-more-2-line"></i>
                                               </span>
                                               <div class="dropdown-menu dropdown-menu-right p-0">
                                                  <a class="dropdown-item" href="#"><i class="ri-user-unfollow-line mr-2"></i>Отписатся</a>
                                                  <a class="dropdown-item" href="#"><i class="ri-close-circle-line mr-2"></i>Удалить из друзей</a>
                                                  <a class="dropdown-item" href="#"><i class="ri-lock-line mr-2"></i>Блокировать</a>
                                               </div>
                                            </div>
                                         </div>
                                      </li>
                                      <li class="d-flex mb-4 align-items-center">
                                         <div class="user-img img-fluid"><img src="<?php bloginfo('template_url'); ?>/images/user/01.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                         <div class="media-support-info ml-3">
                                            <h6>Имя Фамилия</h6>
                                            <p class="mb-0">Новичок</p>
                                         </div>
                                         <div class="iq-card-header-toolbar d-flex align-items-center">
                                            <div class="dropdown">
                                               <span class="dropdown-toggle text-primary" id="dropdownMenuButton41" data-toggle="dropdown">
                                               <i class="ri-more-2-line"></i>
                                               </span>
                                               <div class="dropdown-menu dropdown-menu-right p-0">
                                                  <a class="dropdown-item" href="#"><i class="ri-user-unfollow-line mr-2"></i>Отписатся</a>
                                                  <a class="dropdown-item" href="#"><i class="ri-close-circle-line mr-2"></i>Удалить из друзей</a>
                                                  <a class="dropdown-item" href="#"><i class="ri-lock-line mr-2"></i>Блокировать</a>
                                               </div>
                                            </div>
                                         </div>
                                      </li>
                                   </ul>
                                   <a href="javascript:void();" class="btn btn-primary d-block"><i class="ri-add-line"></i> Покащать больше</a>
                                </div>
                             </div>
                          </div>
                          <div class="tab-pane fade" id="profile-profile" role="tabpanel">
                             <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                   <div class="iq-header-title">
                                      <h4 class="card-title">Профиль</h4>
                                   </div>
                                </div>
                                <div class="iq-card-body">
                                   <div class="user-detail text-center">
                                      <div class="user-profile">
                                         <img src="<?php bloginfo('template_url'); ?>/images/user/11.png" alt="profile-img" class="avatar-130 img-fluid">
                                      </div>
                                      <div class="profile-detail mt-3">
                                         <h3 class="d-inline-block">Имя Фамилия</h3>
                                         <p class="d-inline-block pl-3"> - Инвестор</p>
                                         <p class="mb-0">Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. </p>
                                      </div>
                                   </div>
                                </div>
                             </div>
                             <div class="iq-card">
                                <div class="iq-card-header d-flex justify-content-between">
                                   <div class="iq-header-title">
                                      <h4 class="card-title">Личная информация</h4>
                                   </div>
                                </div>
                                <div class="iq-card-body">
                                  <div class="user-bio">
                                      <p>Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. </p>
                                  </div>
                                  <div class="mt-2">
                                   <h6>Присоединился:</h6>
                                   <p>Август 15, 2021</p>
                                  </div>
                                  <div class="mt-2">
                                   <h6>Адрес:</h6>
                                   <p>Россия, Севастополь</p>
                                  </div>
                                  <div class="mt-2">
                                   <h6>Почта:</h6>
                                   <p><a href="mailto:nikjone@gmail.com"> admin@gmail.com</a></p>
                                  </div>
                                  <div class="mt-2">
                                   <h6>Ссылка:</h6>
                                   <p><a href="#" target="_blank"> vk.com</a></p>
                                  </div>
                                  <div class="mt-2">
                                   <h6>Телефон:</h6>
                                   <p><a href="tel:0014544565456">(001) 937 999 9992</a></p>
                                  </div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="col-lg-6 profile-right">
                       <div class="iq-card">
                          <div class="iq-card-header d-flex justify-content-between">
                             <div class="iq-header-title">
                                <h4 class="card-title">Обо мне</h4>
                             </div>
                          </div>
                          <div class="iq-card-body">
                             <div class="about-info m-0 p-0">
                                <div class="row">
                                   <div class="col-12"><p>Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад..</p></div>
                                   <div class="col-3">Почта:</div>
                                   <div class="col-9"><a href="mailto:admin@demoo.com"> admin@gmail.com </a></div>
                                   <div class="col-3">Телефон:</div>
                                   <div class="col-9"><a href="tel:001235125612">001 2345 256 12</a></div>
                                   <div class="col-3">Страна:</div>
                                   <div class="col-9">Россия</div>
                                </div>
                             </div>
                          </div>
                       </div>
                       <div class="iq-card">
                          <div class="iq-card-header d-flex justify-content-between">
                             <div class="iq-header-title">
                                <h4 class="card-title">Instagram</h4>
                             </div>
                          </div>
                          <div class="iq-card-body">
                             <div class="twit-feed">
                                <div class="media-support-header mb-2">
                                   <div class="media-support-user-img mr-3">
                                      <img class="rounded-circle img-fluid" src="<?php bloginfo('template_url'); ?>/images/user/01.jpg" alt="">
                                   </div>
                                   <div class="media-support-info">
                                      <h6 class="mb-0"><a href="#" class="">Имя Фамилия</a></h6>
                                      <p>@admin <span><i class="ri-check-fill"></i> </span></p>
                                   </div>
                                </div>
                                <div class="media-support-body">
                                   <p class="mb-0">Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад.</p>
                                   <div class="d-flex flex-wrap">
                                      <a href="#" class="twit-meta-tag pr-2">#Инвестиции</a>
                                      <a href="#" class="twit-meta-tag pr-2">#Доход</a>
                                      <a href="#" class="twit-meta-tag pr-2">#Проекты</a>
                                      <a href="#" class="twit-meta-tag pr-2">#Прибыль</a>
                                   </div>
                                   <div class="twit-date"><a href="#"> 27 Авг 2021 </a></div>
                                </div>
                             </div>
                             <hr class="mt-4 mb-4">
                             <div class="twit-feed">
                                <div class="media-support-header mb-2">
                                   <div class="media-support-user-img mr-3">
                                      <img class="rounded-circle img-fluid" src="<?php bloginfo('template_url'); ?>/images/user/02.jpg" alt="">
                                   </div>
                                   <div class="media-support-info">
                                      <h6 class="mb-0"><a href="#" class="">
                                         Имя Фамилия</a></h6>
                                      <p>@admin <span><i class="ri-check-fill"></i> </span></p>
                                   </div>
                                </div>
                                <div class="media-support-body">
                                   <p class="mb-0">Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад.</p>
                                   <div class="d-flex flex-wrap">
                                      <a href="#" class="twit-meta-tag pr-2">#Инвестиции</a>
                                      <a href="#" class="twit-meta-tag pr-2">#Доход</a>
                                      <a href="#" class="twit-meta-tag pr-2">#Проекты</a>
                                      <a href="#" class="twit-meta-tag pr-2">#Прибыль</a>
                                   </div>
                                   <div class="twit-date"><a href="#"> 07 Авг 2021 </a></div>
                                </div>
                             </div>
                             <hr class="mt-4 mb-4">
                             <div class="twit-feed">
                                <div class="media-support-header">
                                   <div class="media-support-user-img mr-3">
                                      <img class="rounded-circle img-fluid" src="<?php bloginfo('template_url'); ?>/images/user/03.jpg" alt="">
                                   </div>
                                   <div class="media-support-info mt-2">
                                      <h5 class="mb-0"><a href="#" class="">
                                         Имя Фамилия</a></h5>
                                      <p>@admin <span><i class="ri-check-fill"></i> </span></p>
                                   </div>
                                </div>
                                <div class="media-support-body">
                                   <p class="mb-0">Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад.</p>
                                   <div class="d-flex flex-wrap">
                                      <a href="#" class="twit-meta-tag pr-2">#Инвестиции</a>
                                      <a href="#" class="twit-meta-tag pr-2">#Доход</a>
                                      <a href="#" class="twit-meta-tag pr-2">#Проекты</a>
                                      <a href="#" class="twit-meta-tag pr-2">#Прибыль</a>
                                   </div>
                                   <div class="twit-date"><a href="#"> 17 Авг 2021 </a></div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </div>
  
  <?php require_once(WP_CONTENT_DIR. '/themes/BilliClub/Modals/footer_menu.php'); ?>
   
<?php 

get_footer(); 

?>