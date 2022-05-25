<?php
    /**
     * Plugin Name: Contact Form
     */

    // global $wpdb;


    function btp_styles() {
        wp_enqueue_style( 'bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' );
    }
    add_action('wp_enqueue_scripts', 'btp_styles');


    //creation de la table en data base
    function create_table(){

        $connection = mysqli_connect('localhost','root','');
        mysqli_select_db($connection,"wordpressbrief10");

        $query = "CREATE TABLE contactBrief10(id int NOT NULL PRIMARY KEY AUTO_INCREMENT, name varchar(255) NOT NULL, email varchar(55) NOT NULL,subject varchar(55) NOT NULL, message varchar(255) NOT NULL)";
        // $result = $wpdb->query($query);
        $result = mysqli_query($connection, $query);
        return $result;
    }
    register_activation_hook(__FILE__,'create_table');

    //creation de la table en data base
    function drop_table(){

        $connection = mysqli_connect('localhost','root','');
        mysqli_select_db($connection,"wordpressbrief10");

        $query = "DROP TABLE `contactBrief10`";
        // $result = $wpdb->query($query);
        $result = mysqli_query($connection, $query);
        return $result;
    }
    register_uninstall_hook(__FILE__,'drop_table');





     function contact_form()
     {
        include_once('formDesign.php');
     }

     
     add_shortcode('contact','contact_form');



    function admin_dashbord(){
        add_menu_page('forms','Contact','manage_options','contact-dashbord','dashbord_admin_contact','dashicons-email',4);
    }


    add_action('admin_menu','admin_dashbord');
    
    function dashbord_admin_contact(){
        require_once('setting.php');
        // require_once('dash_Plugin.php');
    }





    //  function form_send()
    //  {
    //      if(isset($_POST['send'])){
    //          $name = $_POST['name'];
    //          $email = $_POST['email'];
    //          $subj = $_POST['subject'];
    //          $mess = $_POST['message'];

    //          $to = 'oghazlani0@gmail.com';
    //          $subject = 'test form';
    //          $message = ''.$name. ' - '.$email. ' - '.$subj. ' - '.$mess;

    //          wp_mail($to,$subject,$message);
    //      }
    //  }

    //  add_action('wp_head','form_send');

?>