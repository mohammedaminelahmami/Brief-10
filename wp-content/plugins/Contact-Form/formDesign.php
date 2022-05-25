
<?php
function insertcont()
{
    global $wpdb;

    if(isset($_POST['sub'])){

        // die(print_r($_POST['name']));
        // if( !empty($_POST['name']) || !empty($_POST['email']) || !empty($_POST['subject']) || !empty($_POST['message']))
        //     {
                
                // $connection = mysqli_connect('localhost','root','');
                // mysqli_select_db($connection,"brief_9_wordpress_3");

                $name = $_POST['fname'];
                $email = $_POST['lname'];
                $subj = $_POST['subject'];
                $mess = $_POST['msg'];

                // $name = "fjjfj";
                // $email = "jdjddj";
                // $subj ="djdjdj";
                // $mess = "jdjdj";

                $query="INSERT INTO contactBrief10 (name,email,subject,message) VALUES ('$name','$email','$subj','$mess')";
                $wpdb->query($query);
                
            //     mysqli_query($connection,$query);
            // }else{
            //     echo '<h1 style="color:red;"> All fields are required</h1>';
            // }
    }
    
}

// const input1 = document.getElementById('input1');
// const input2 = document.getElementById('input2');
// const input3 = document.getElementById('input3');
// const input4 = document.getElementById('input4');

// const check1 = document.getElementById('check1');
// const check2 = document.getElementById('check2');
// const check3 = document.getElementById('check3');
// const check4 = document.getElementById('check4');

// const submit = document.getElementById('submit');

    
?>
<h2>Contact Us</h2>

<form action="" method="post" enctype="multipart/form-data" onsubmit="<?php insertcont() ?> ">
    <div id="fname" class="form-group">
        <label class="mt-2" for="fname">Full Name:</label><br>
        <input type="text" name="fname" class="w-100"><br>
    </div>

    <div id="lname">
        <label class="mt-2" for="lname">Email:</label><br>
        <input type="email" name="lname" class="w-100"><br>
    </div>

    <div id="subject">
        <label class="mt-2" for="subject">Subject:</label><br>
        <input type="text" name="subject" class="w-100"><br>
    </div>

    <div id="msg">
        <label class="mt-2" for="msg">Message:</label><br>
        <textarea type="text" name="msg" class="w-100"></textarea> <br>
    </div>

    <input type="submit" class="mt-3" value="Send Message" name="sub"> 
</form>

<script>
    var fname = document.getElementById('fname');
    fname.style.display = localStorage.getItem('fname');
    var lname = document.getElementById('lname');
    lname.style.display = localStorage.getItem('lname');
    var subject = document.getElementById('subject');
    subject.style.display = localStorage.getItem('subject');
    var msg = document.getElementById('msg');
    msg.style.display = localStorage.getItem('msg');
</script>