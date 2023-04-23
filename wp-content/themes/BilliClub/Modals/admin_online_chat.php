<?php

 get_header();

 $login_user_id = get_current_user_id();

 $recive_messages = get_admin_first_messages();


?>

<div class="wrapper">
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card">
                      <div class="iq-card-body chat-page p-0">
                        <div class="chat-data-block">
                           <div class="row">
                              <div class="col-lg-3 chat-data-left scroller">
                                 <div class="chat-sidebar-channel scroller mt-4 pl-3">
                                    <h5 class="">Пабличные каналы</h5>
                                    <ul class="iq-chat-ui nav flex-column nav-pills" style="border-radius: 1px !important;">
                                       <li>
                                       <?php foreach($recive_messages as $key):
                                             
                                             $user_chat_data = get_user_meta($key[0]->sender_id);                               
                                             $created_at = $key[0]->created_at;                                        
                                             $message_create_time = substr($created_at, 0, -3);
                                             $message_time = substr($message_create_time, 10);
                                       ?>
   
                                       <a role="tab" class="admin_recive_messages_wrapper" data-toggle="pill" data-id="<?php echo $key[0]->id; ?>" data-reciver_id="<?php echo $key[0]->sender_id; ?>" href="#chatbox<?php echo $key[0]->id;?>">
                                             <div class="d-flex align-items-center">
                                                <div class="avatar mr-3">
                                                   
                                                   <?php if(isset($user_chat_data['image'][0]) && !empty($user_chat_data['image'][0])): ?>
                                                            
                                                         <img src="<?php echo content_url(). '/uploads/' .$user_chat_data['image'][0]; ?>" alt="chatuserimage" class="avatar-50">

                                                      <?php else: ?>

                                                         <img src="<?php bloginfo('template_url'); ?>/images/user/1.jpg" alt="chatuserimage" class="avatar-50 ">

                                                      <?php endif; ?>

                                                </div>
                                                <div class="chat-sidebar-name">
                                                   <h6 class="mb-0"><?php echo $user_chat_data['first_name'][0] ?></h6>
                                                   <span> <?php echo $key[0]->messages;?></span>
                                                </div>
                                                <div class="chat-meta float-right text-center mt-2">
                                                   <span class="text-nowrap"><?php echo $message_time; ?></span>
                                                </div>
                                             </div>
                                          </a>

                                       <?php endforeach; ?> 
                                       </li> 
                                    </ul>
                                    <!-- </ul> -->
                                 </div>
                              </div>                 
                              <div class="col-lg-9 chat-data p-0 chat-data-right">
                                 <div class="tab-content">
                                    <div class="tab-pane fade active show" id="default-block" role="tabpanel">
                                       <div class="chat-start">
                                          <span class="iq-start-icon text-primary"><i class="ri-message-3-line"></i></span>
                                          <button id="chat-start" class="btn bg-white mt-3">Начать
                                          общение!</button>
                                       </div>
                                    </div>

                                    <?php foreach($recive_messages as $key):
                                       
                                             $get_admin_all_messages = get_admin_all_messages($key[0]->sender_id); 
                                             $user_chat_data = get_user_meta($key[0]->sender_id);                               
                                             $created_at = $key[0]->created_at;                                        
                                             $message_create_time = substr($created_at, 0, -3);
                                             $message_time = substr($message_create_time, 10);
                                    ?>

                                       <div class="tab-pane fade" id="chatbox<?php echo $key[0]->id;?>" role="tabpanel">
                                          <div class="chat-head">
                                             <header class="d-flex justify-content-between align-items-center bg-white pt-3 pr-3 pb-3">
                                                <div class="d-flex align-items-center">
                                                <div id="sidebar-toggle" class="sidebar-toggle">
                                                <i class="ri-menu-3-line">
                                                                              
                                                </i>
                                                </div>
                                                <div class="avatar chat-user-profile m-0 mr-3">
                                                   <?php if(isset($user_chat_data['image'][0]) && !empty($user_chat_data['image'][0])): ?>
                                                            
                                                         <img src="<?php echo content_url(). '/uploads/' .$user_chat_data['image'][0]; ?>" alt="chatuserimage" class="avatar-50">

                                                   <?php else: ?>

                                                         <img src="<?php bloginfo('template_url'); ?>/images/user/1.jpg" alt="chatuserimage" class="avatar-50 ">

                                                   <?php endif; ?>
                                                </div>
                                                <h5 class="mb-0 user-message-firstname"><?php echo $user_chat_data['first_name'][0] ?> </h5>
                                                </div>
                                             </header>
                                          </div>
                                          <div class="chat-content scroller account_chat_content_wrapper">
                                             <div class="account_chat_content_scroll">
                                             <?php foreach($get_admin_all_messages  as $key): 
                                                
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
                                             <input type="hidden" class="live_admin_chat_hidden_data" value="<?php echo $key->id; ?>">
                                             </div> 
                                          </div>
                                                            
                                       </div>

                                    <?php endforeach; ?>

                                    <div class="chat-footer p-3 bg-white">
                                          <form class="d-flex align-items-center admin_and_users_chat_form" >

                                          <input type="hidden" name="reciver_id" id="reciver_id" value="">
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
      <script>
           setInterval(function(){
                update_admin_chat_data();
            }, 3000);
      </script>

<?php 

get_footer(); 

?>      