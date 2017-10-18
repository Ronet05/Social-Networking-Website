<?php

session_start();

mysql_connect("localhost", "root", "")or die("cannot connect");
mysql_select_db("users")or die("connection lost..!!!");

$first=$_POST['t1'];
$last=$_POST['t2'];
$email=$_POST['t3'];
$remail=$_POST['t4'];
$password=$_POST['t5'];
$sex=$_POST['t6'];
$month=$_POST['t7'];
$day=$_POST['t8'];
$year=$_POST['t9'];
$city="";
$folder="./images/";

if($sex=="Male")
{
$image="male.jpg";

}
else
{
$image="female.jpg";
}

$philosophy="";
$home="";
$currentcity="";
$school="";
$college="";
$song="";
$book="";
$movie="";
$sports="";
$tv="";
$about="";
$relationship="";
$interested="";
$phone="";
$website="";
$company="";
$online="";


if(empty($first))
          {
              $error="You forgot to enter first name";
              $_SESSION['$error0']=$error;
?>
<script language="javascript">
window.location.replace('signup.php');
</script>

<?php


          } 
else

         {
              if(empty($last))
                 {
                         $error="You forgot to enter last name";
                          $_SESSION['$error0']=$error;

?>
<script language="javascript">
window.location.replace('signup.php');
</script>

<?php



                  }
             
             else
               {
                       if(empty($email))
                              {
                                      $error="You forgot to enter email";
                                      $_SESSION['$error0']=$error;

?>
<script language="javascript">
window.location.replace('signup.php');
</script>

<?php




                              }
                        else
                            {
                                    if (empty($remail))

                                         {
                                               $error="Please confirm your email";
                                               $_SESSION['$error0']=$error;

?>
<script language="javascript">
window.location.replace('signup.php');
</script>

<?php





                                         }
                                    else
                                        {
                                              if(empty($password))
                                                     {
                                                                $error="You forgot to enter password";
                                                                $_SESSION['$error0']=$error;


?>
<script language="javascript">
window.location.replace('signup.php');
</script>

<?php





                                                      }
                                               else

                                                     {
                                                                 if($month=="-1")
                                                                          {
                                                                                        $error="Please select month";
                                                                                        $_SESSION['$error0']=$error;

?>
<script language="javascript">
window.location.replace('signup.php');
</script>

<?php




                                                                          }
                                                                 else
                                                                          {
                                                                                        if($day=="-1")
                                                                                                 {

                                                                                                               $error="Please select a day";
                                                                                                               $_SESSION['$error0']=$error;
?>
<script language="javascript">
window.location.replace('signup.php');
</script>

<?php



                                                                                                 }
                                                                                          else
                                                                                                 {
                                                                                                                if($year=="-1")
                                                                                                                        {
                                                                                                                                 $error="Please select your birth year";
                                                                                                                                 $_SESSION['$error0']=$error;

?>
<script language="javascript">
window.location.replace('signup.php');
</script>

<?php



                                                                                                                        }
                                                                                                               else{ 

                                                                                                                                $sql="SELECT * FROM members WHERE email='$email' ";
                                                                                                                                  $result=mysql_query($sql);
                                                                                                                                  $count=mysql_num_rows($result);


                                                                                                                                    if($count>0)

                                                                                                                                    {

                                                                                                                                                      $error="Sorry this email already have account";
                                                                                                                                                      $_SESSION['$error0']=$error;
?>
<script language="javascript">
window.location.replace('signup.php');
</script>

<?php


                                                                                                                                       }  else
                                                                                                                                         {
                                                                                                                                                          $sql1="INSERT INTO members VALUES('','$first','$password','$last','$email','$image','$city','$sex','$month','$day','$year','$folder')";
$result1=mysql_query($sql1);
                                                                                                                                         if($result1)

                                                                                                                                                {
                                                   				            $sql="INSERT INTO profile VALUES('','$philosophy','$home','$currentcity','$school','$college','$song','$book','$movie','$sports','$tv','$about','$relationship','$interested','$phone','$website','$company','$online')";
$res=mysql_query($sql);

						if($res){
						
                                                         					?>
                                                                                                                                                                       <script language="javascript">window.location.replace('thnks.php');</script>
                                                                                                                                                                      <?php
                                                                                                                                                                                                        

                                                                                                                                                                     }

                                                                                                                                                               





                                                                                                                                                  }                                                                                                                                        



                                                                                                                                     }
                                                                                                                            
                                                                                                                         }








                                                                                                 }

                                                                           }
 
                                                      }

                                         }
                                      
                           }    

               }
         }





















