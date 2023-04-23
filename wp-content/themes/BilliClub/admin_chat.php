<?php

/* Template Name: admin-chat-page */

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

    $all_messages  = user_all_messages();
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
         <div id="loading-center">
         </div>
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
                      <div class="iq-card-body chat-page p-0">
                        <div class="chat-data-block">
                        <div class="row chat-data-block-content-wrapper">
                           <div class="col-lg-9 chat-data p-0 chat-data-right">
                              <div class="tab-content">
                                 <div class="tab-pane fade active show" id="chatbox1" role="tabpanel">
                                    <div class="chat-head">
                                       <header class="d-flex justify-content-between align-items-center bg-white pt-3 pr-3 pb-3">
                                         <div class="d-flex align-items-center">
                                          <div id="sidebar-toggle" class="sidebar-toggle">
                                           <i class="ri-menu-3-line">
                                                                        
                                           </i>
                                          </div>
                                           <h5 class="mb-0">Support Billiclub</h5>
                                         </div>
                                       </header>
                                     </div>
                                    <div class="chat-content scroller account_chat_content_wrapper">
                                       <div class="account_chat_content_scroll">
                                          <?php foreach($all_messages as $key): 
                                                 
                                                $user_chat_data = get_user_meta($key->sender_id);
                                                $created_at = $key->created_at;                                        
                                                $message_create_time = substr($created_at, 0, -3);

                                          ?>

                                              <?php if($key->sender_id == $login_user_id): ?>
              
                                                <div class="chat">
                                                   <div class="chat-user">
                                                     <a class="avatar m-0">

                                                       <?php if(isset($user_chat_data['image'][0]) && !empty($user_chat_data['image'][0])): ?>
                                                             
                                                            <img src="<?php echo content_url(). '/uploads/' .$user_chat_data['image'][0]; ?>" alt="avatar" class="avatar-35 ">

                                                       <?php else: ?>

                                                            <img src="<?php bloginfo('template_url'); ?>/images/user/1.jpg" alt="avatar" class="avatar-35 ">

                                                       <?php endif; ?>
                                                     </a>
                                                       <span class="chat-time mt-1"><?php echo $message_create_time; ?></span>
                                                   </div>
                                                   <div class="chat-detail">
                                                     <div class="chat-message">
                                                       <p><?php echo $key->messages; ?></p>
                                                     </div>
                                                   </div>
                                                </div>

                                              <?php else: ?>
                                                 <div class="chat chat-left">
                                                   <div class="chat-user">
                                                     <a class="avatar m-0">
                                                        <?php if(isset($user_chat_data['image'][0]) && !empty($user_chat_data['image'][0])): ?>
                                                             
                                                            <img src="<?php echo content_url(). '/uploads/' .$user_chat_data['image'][0]; ?>" alt="avatar" class="avatar-35 ">

                                                        <?php else: ?>

                                                            <img src="<?php bloginfo('template_url'); ?>/images/user/1.jpg" alt="avatar" class="avatar-35 ">

                                                        <?php endif; ?>
                                                     </a>
                                                       <span class="chat-time mt-1"><?php echo $message_create_time; ?></span>
                                                   </div>
                                                   <div class="chat-detail">
                                                     <div class="chat-message">
                                                       <p><?php echo $key->messages; ?></p>
                                                     </div>
                                                   </div>
                                                 </div>
                                              <?php endif; ?>
                                          <?php endforeach; ?>
                                            <input type="hidden" class="live_chat_hidden_data" value="<?php echo $key->id; ?>"> 
                                       </div>
                                    </div>
                                    <div class="chat-footer p-3 bg-white">
                                       <form class="d-flex align-items-center admin_and_users_chat_form" >
                                        <input type="hidden" name="reciver_id" value="1">
                                        <!-- <label for="chat_file">
                                            <div class="chat-attagement d-flex">
                                               <a><i class="fa fa-paperclip pr-3" aria-hidden="true"></i></a>
                                            </div>
                                        </label>
                                        <input type="file" id="chat_file" name="message_file" style="display:none;"> -->
                                        <input type="text" class="form-control mr-3 chat-message-input" name="message" placeholder="Ваше сообщение">
                                        <button type="submit" class="btn btn-primary d-flex align-items-center p-2 chat_message_btn"><i class="fa fa-paper-plane-o" aria-hidden="true"></i><span class="d-none d-lg-block ml-1">Отправить</span></button>
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
            </div>
         </div>
      </div>
      <?php require_once(WP_CONTENT_DIR. '/themes/BilliClub/Modals/footer_menu.php'); ?>
      <script>
           setInterval(function(){
                update_chat_data();
            }, 3000);
      </script>

<?php 

get_footer(); 

?>