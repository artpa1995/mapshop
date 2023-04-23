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

    $user_certificates = get_user_certificates();
    $user_disposable_certificates = get_user_disposable_certificates();


    if (isset($user_data[0]->user_email)) {
    
            $user_email = $user_data[0]->user_email;
            
    }

    if (isset($user_data[1]['user_balance'][0])) {
    
        $user_balance = $user_data[1]['user_balance'][0];
            
    }else{
        
        $user_balance = '0.00';

    }

   if (!isset($user_data[0]->confirm_mail) || $user_data[0]->confirm_mail == 'not_confirm') {
    
      header("Location:/sign-up-page");
      exit();         
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
                  <!-- <div class="col-lg-12">
                     <div class="iq-card">
                        <div class="iq-card-body p-0">
                           <div class="iq-edit-list">
                              <ul class="iq-edit-profile d-flex nav nav-pills">
                                 <li class="col-md-3 p-0">
                                    <a class="nav-link active" data-toggle="pill" href="#personal-information">
                                       Персональные данные
                                    </a>
                                 </li>
                                 <li class="col-md-3 p-0">
                                    <a class="nav-link" data-toggle="pill" href="#chang-pwd">
                                       Изменить пароль
                                    </a>
                                 </li>
                                 <li class="col-md-3 p-0">
                                    <a class="nav-link" data-toggle="pill" href="#emailandsms">
                                       Почта и СМС
                                    </a>
                                 </li>
                                  <li class="col-md-3 p-0">
                                    <a class="nav-link" data-toggle="pill" href="#manage-contact">
                                       Контакты
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div> -->
                  <div class="col-lg-12">
                     <div class="iq-edit-list-data">
                        <div class="tab-content">
                           <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                               <div class="iq-card">
                                 <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                       <h4 class="card-title">Персональные данные</h4>
                                    </div>
                                 </div>
                                 <div class="iq-card-body">
                                    <form class="edit-profile-form-wrapper">
                                       <div class="form-group row align-items-center">
                                          <div class="col-md-12">
                                            <label for="updated_image">
                                             <div class="profile-img-edit">
                                                
                                                <?php if(isset($image) && !empty($image)): ?>

                                                         <img class="profile-pic" src="<?php echo content_url(). '/uploads/' .$image; ?>" alt="profile-pic">

                                                <?php else: ?>
                                                        
                                                        <img class="profile-pic" src="<?php bloginfo('template_url'); ?>/images/user/11.png" alt="profile-pic">

                                                <?php endif; ?>         

                                                <div class="p-image">
                                                  <i class="ri-pencil-line upload-button"></i>
                                                  <input class="file-upload edit-profile-file-upload" name="image" id="updated_image" type="file" alt="" />
                                               </div>
                                             </div>
                                            </label>
                                          </div>
                                       </div>
                                       <div class=" row align-items-center">
                                          <div class="form-group col-sm-6 data_inputs_wrapper">
                                             <label for="fname">Имя:</label>
                                             <input type="text" class="form-control" id="fname" name="first_name" value="<?php if(!empty($first_name)): echo $first_name;  endif; ?>" placeholder="Имя">
                                             <span class="error_text error_first_name"></span>
                                          </div>
                                          <div class="form-group col-sm-6 data_inputs_wrapper">
                                             <label for="lname">Фамилия:</label>
                                             <input type="text" class="form-control" name="last_name" id="lname" value="<?php if(!empty($last_name)): echo $last_name; endif; ?>" placeholder="Фамилия">
                                             <span class="error_text error_last_name"></span>
                                          </div>
                                          <div class="form-group col-sm-6 data_inputs_wrapper">
                                             <label for="uname">Никнейм:</label>
                                             <input type="text" class="form-control" name="user_name" id="uname" value="<?php if(!empty($user_name)): echo $user_name; endif; ?>" placeholder="Никнейм">
                                             <span class="error_text error_user_name"></span>
                                          </div>
                                          <div class="form-group col-sm-6 data_inputs_wrapper">
                                             <label for="cname">Город:</label>
                                             <input type="text" class="form-control" name="city" id="cname" value="<?php if(!empty($city)): echo $city; endif; ?>" placeholder="Город">
                                             <span class="error_text error_city"></span>
                                          </div>
                                          <div class="form-group col-sm-6 data_inputs_wrapper">
                                             <label for="phone">Телефон:</label>
                                             <input type="text" class="form-control" value="<?php if(!empty($phone)): echo $phone; endif; ?>" name="phone" id="phone" placeholder="Телефон">
                                             <span class="error_text error_phone"></span>
                                           </div>
                                          <div class="form-group col-sm-6 data_inputs_wrapper">
                                             <label class="d-block">Пол:</label>
                                             <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadio6" name="unisex" value="male" class="custom-control-input" checked="">
                                                <label class="custom-control-label" for="customRadio6"> Он </label>
                                             </div>
                                             <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadio7" name="unisex" value="female" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio7"> Она </label>
                                             </div>
                                          </div>
                                          <div class="form-group col-sm-6 data_inputs_wrapper">
                                             <label>Возраст:</label>
                                             <select class="form-control" name="age" id="age">
                                                <option selected="">12-18</option>
                                                <option>19-32</option>
                                                <option>33-45</option>
                                                <option>46-62</option>
                                                <option>63 > </option>
                                             </select>
                                          </div>
                                          <div class="form-group col-sm-12 data_inputs_wrapper">
                                             <label>О себе:</label>
                                             <textarea class="form-control" name="about_me" rows="5" style="line-height: 22px;">
                                                <?php if(!empty($about_me)): echo $about_me; endif; ?>
                                             </textarea>
                                            <span class="error_text error_about_me"></span>
                                          </div>
                                       </div>
                                       <button type="submit" class="btn btn-primary mr-2">Отправить</button>
                                      <!--  <button type="reset" class="btn iq-bg-danger">Отменить</button> -->
                                    </form>
                                 </div>
                              </div>
                              <div class="iq-card">
                                 <div class="iq-card-body bg-info rounded mb-4">
                                      <div class="d-flex align-items-center">
                                         <div class="col-md-8">
                                            <p class="text-white">Ваш баланс</p>
                                            <h2 class="text-white">&#8381 <?php echo $user_balance; ?></h2> 
                                            <!-- <div class="text-white">Последнее пополнение 22.09.2021 </div> -->
                                         </div> 
                                         <div class="col-md-4 chart-icon text-center">
                                            <i class="ri-bar-chart-grouped-line font-size-40 text-white"></i>
                                         </div>
                                      </div>
                                </div>
                              </div>
                              <div class="iq-card">
                                 <div class="iq-card-body bg-info rounded mb-4">
                                      <div class="d-flex align-items-center">
                                         <div class="col-md-8">
                                            <h2 class="text-white certificate_title_wrapper">Сертификаты:</h2>
                                            <?php if(isset($user_certificates) && !empty($user_certificates)): ?>

                                                      <?php foreach ($user_certificates as $key ): ?>
                                                           
                                                           <?php $product_data = get_post($key->producte_id); ?>

                                                            <div class="certificate_content_wrapper">
                                                              <p class="text-white"><?php echo $product_data->post_title; ?></p>
                                                              <button class="btn btn-primary use_certificate_btn" data-certificate_id="<?php echo $key->id; ?>">Использовать</button>
                                                              <button class="btn btn-primary used_certificate_btn">Использован</button>
                                                            </div>
                                                      
                                                      <?php endforeach; ?> 

                                             <?php else: ?>
                                                    
                                                   <p class="text-white">У вас пока нет Сертификатов</p>

                                             <?php endif; ?>          
                                         </div> 
                                         
                                      </div>
                                 </div> 
                              </div>
                              <div class="iq-card">
                                 <div class="iq-card-body bg-info rounded mb-4">
                                      <div class="d-flex align-items-center">
                                         <div class="col-md-8">
                                            <h2 class="text-white certificate_title_wrapper">Одноразовые Сертификаты:</h2>
                                            <?php if(isset($user_disposable_certificates) && !empty($user_disposable_certificates)): ?>

                                                      <?php foreach ($user_disposable_certificates as $key): ?>
                                                           
                                                           <?php $certificate_data = get_post($key->certificate_id); ?>

                                                            <div class="certificate_content_wrapper">
                                                              <p class="text-white"><?php echo $key->certificate_name; ?></p>
                                                              <button class="btn btn-primary use_disposable_certificate_btn" data-certificate_id="<?php echo $key->id; ?>">Использовать</button>
                                                              <button class="btn btn-primary used_disposable_certificate_btn">Использован</button>
                                                            </div>
                                                      
                                                      <?php endforeach; ?> 

                                             <?php else: ?>
                                                    
                                                   <p class="text-white">У вас пока нет Сертификатов </p>

                                             <?php endif; ?>          
                                         </div> 
                                         
                                      </div>
                                 </div> 
                              </div>
                              <div class="use_certificate_code_wrapper">

                                 <form class="use_certificate_content_form">
                                    <input type="hidden" class="certificate_id_data" name="certificate_id">
                                    <div class="certificate_modal_inputs_field"> 
                                          <p class="certificate_field_title">Код для использования</p>
                                          <input type="text" name="certificate_code" class="code_for_use_certificate_wrapper" placeholder="Код" autocomplete="off">
                                          <span class="error_text error_code"></span>
                                          
                                    </div>
                                    <div class="add_certificate_modal_btns_wrapper">
                                          <button type="button" class="add_certificate_cancel_btn certificate_modal_cancel" autocomplete="off">ОТМЕНА</button>
                                          <button type="submit" id="send_certificate_code_btn" class="add_certificate_ready_btn" autocomplete="off">ОТПРАВИТЬ</button>

                                    </div>

                                 </form>  

                              </div>
                              <div class="use_disposable_certificate_code_wrapper">
                                 <form class="use_disposable_certificate_content_form">
                                    <input type="hidden" class="certificate_id_data" name="certificate_id">
                                    <div class="certificate_modal_inputs_field"> 
                                          <p class="certificate_field_title">Код для использования</p>
                                          <input type="text" name="certificate_code" class="code_for_use_certificate_wrapper" placeholder="Код" autocomplete="off">
                                          <span class="error_text error_code"></span>
                                          
                                    </div>
                                    <div class="add_certificate_modal_btns_wrapper">
                                          <button type="button" class="add_certificate_cancel_btn disposable_certificate_modal_cancel" autocomplete="off">ОТМЕНА</button>
                                          <button type="submit" id="send_certificate_code_btn" class="add_certificate_ready_btn" autocomplete="off">ОТПРАВИТЬ</button>

                                    </div>

                                 </form>  

                              </div>     
                              <div class="iq-card edit_last_child_wrapper">
                                 <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                       <h4 class="card-title">Изменить пароль</h4>
                                    </div>
                                 </div>
                                 <div class="iq-card-body change_password_wrapper">
                                    <form class="change_password_form">
                                       <div class="form-group">
                                       <div class="form-group data_inputs_wrapper">
                                          <label for="npass">Новый пароль:</label>
                                          <input type="Password" class="form-control" id="npass" name="new_password">
                                          <span class="error_text error_new_password"></span>
                                       </div>
                                       <div class="form-group data_inputs_wrapper">
                                          <label for="vpass">Повторите пароль:</label>
                                             <input type="Password" class="form-control" id="vpass" name="confirm_password">
                                             <span class="error_text error_confirm_password"></span>
                                       </div>
                                       <button type="submit" class="btn btn-primary mr-2">Отправить</button>
                                          <!-- <button type="button" class="btn iq-bg-danger">Отменить</button> -->
                                       </div>
                                    </form>
                                 </div>
                                 <div class="iq-card-body password_code_to_email_wrapper">
                                    <form class="password_code_to_email_form">
                                       <div class="form-group">
                                       <div class="form-group data_inputs_wrapper">
                                          <label for="codepass">Код:</label>
                                          <input type="text" class="form-control" id="codepass" name="password_code">
                                          <span class="error_text error_code_pswd"></span>
                                       </div>
                                       <button type="submit" class="btn btn-primary mr-2">Отправить</button>
                                          <!-- <button type="button" class="btn iq-bg-danger">Отменить</button> -->
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="emailandsms" role="tabpanel">
                               <div class="iq-card">
                                 <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                       <h4 class="card-title">Почта и СМС</h4>
                                    </div>
                                 </div>
                                 <div class="iq-card-body">
                                    <form>
                                       <div class="form-group row align-items-center">
                                          <label class="col-md-3" for="emailnotification">Включить уведомление на почту:</label>
                                          <div class="col-md-9 custom-control custom-switch">
                                             <input type="checkbox" class="custom-control-input" id="emailnotification" checked="">
                                             <label class="custom-control-label" for="emailnotification"></label>
                                          </div>
                                       </div>
                                       <div class="form-group row align-items-center">
                                          <label class="col-md-3" for="smsnotification">Включить уведомление по смс:</label>
                                          <div class="col-md-9 custom-control custom-switch">
                                             <input type="checkbox" class="custom-control-input" id="smsnotification" checked="">
                                             <label class="custom-control-label" for="smsnotification"></label>
                                          </div>
                                       </div>
                                       <div class="form-group row align-items-center">
                                          <label class="col-md-3" for="npass">Когда отправлять на почту</label>
                                          <div class="col-md-9">
                                             <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="email01">
                                                <label class="custom-control-label" for="email01">У вас есть новые уведомления.</label>
                                             </div>
                                             <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="email02">
                                                <label class="custom-control-label" for="email02">Вам отправлено личное сообщение.</label>
                                             </div>
                                             <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="email03" checked="">
                                                <label class="custom-control-label" for="email03">Кто-то добавляет вас в друзья.</label>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-group row align-items-center">
                                          <label class="col-md-3" for="npass">Когда отправлять смс</label>
                                          <div class="col-md-9">
                                             <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="email04">
                                                <label class="custom-control-label" for="email04"> По новому пополнению.</label>
                                             </div>
                                             <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="email05">
                                                <label class="custom-control-label" for="email05"> Подтверждение нового членства.</label>
                                             </div>
                                             <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="email06" checked="">
                                                <label class="custom-control-label" for="email06"> Начисление бонусов</label>
                                             </div>
                                          </div>
                                       </div>
                                       <button type="submit" class="btn btn-primary mr-2">Отправить</button>
                                       <button type="reset" class="btn iq-bg-danger">Отменить</button>
                                    </form>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="manage-contact" role="tabpanel">
                               <div class="iq-card">
                                 <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                       <h4 class="card-title">Менеджер контактов</h4>
                                    </div>
                                 </div>
                                 <div class="iq-card-body">
                                    <form>
                                       <div class="form-group">
                                          <label for="cno">Контактный телефон:</label>
                                          <input type="text" class="form-control" id="cno" value="001 2536 123 458">
                                       </div>
                                       <div class="form-group">
                                          <label for="email">Почта:</label>
                                          <input type="text" class="form-control" id="email" value="nikjone@demo.com">
                                       </div>
                                       <div class="form-group">
                                          <label for="url">Ссылка:</label>
                                          <input type="text" class="form-control" id="url" value="vk.com">
                                       </div>
                                       <button type="submit" class="btn btn-primary mr-2">Отправить</button>
                                       <button type="reset" class="btn iq-bg-danger">Отменить</button>
                                    </form>
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
      <!-- Wrapper END -->
      
      <?php require_once(WP_CONTENT_DIR. '/themes/BilliClub/Modals/footer_menu.php'); ?>

<?php 

get_footer(); 

?>