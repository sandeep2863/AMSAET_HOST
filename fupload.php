<?php
//session_start();
require("master.php");
//if(verifyFormToken('form3'))
//{
if(isset($_POST['upload']))
{
  include("connection.php");
  $name=stripcleantohtml($_POST['name']);
  $title=stripcleantohtml($_POST['title']);
  $id=stripcleantohtml($_POST['id']);
  $u_id=md5($_POST['id']);
  $cat=stripcleantohtml($_POST['category']);
  $flag=0;
  $query="SELECT * FROM participantsconfer WHERE uid='".$u_id."' and name='".$name."'";
  $data=mysqli_query($con,$query);
  if(mysqli_num_rows($data)==1)
  {
    if(isset($_FILES['fileup']))
    {
      //$file_size =$_FILES['fileup']['size'];
      $file_tmp =$_FILES['fileup']['tmp_name'];
      $file_type=$_FILES['fileup']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['fileup']['name'])));
      $extns=array("pdf");
      if(in_array($file_ext,$extns)=== false)
      {
        $msg="14ef47244c20dbcb27f7a37a39028108";
        mysqli_close($con);
        session_destroy();
        header("location:symposium.php?m=".$msg."#paper");
        exit();
      }
      /*if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }*/
      $row=mysqli_fetch_assoc($data);
      if($cat=="Abstract")
      {
        if($row['Abstract']==1)
        {
          $msg="ebd3cbf4055007009db2623efb0c5c25";
          mysqli_close($con);
          session_destroy();
          header("location:symposium.php?m=".$msg."#paper");
          exit();
        }
        $filename="Abstract".$u_id.".pdf";
        $flag=1;
        $q="UPDATE participantsconfer SET Abstract='".$flag."' WHERE uid='".$u_id."'";
      }
      elseif ($cat=="Full Paper")
      {
        if($row['Full_Paper']==1)
        {
          $msg="344ecc9ad624a5e812ee6afc48ca9560";
          mysqli_close($con);
          session_destroy();
          header("location:symposium.php?m=".$msg."#paper");
          exit();
        }
        $filename="Full_Paper".$u_id.".pdf";
        $flag=1;
        $q="UPDATE participantsconfer SET Full_Paper='".$flag."' WHERE uid='".$u_id."'";
      }
      else {
        echo "Oops! Something wrong happened.";
        writelog('Paper Category');
        session_destroy();
        mysqli_close($con);

        exit();
      }
      mysqli_query($con,$q);
      $target_path="paperul/";
      if(move_uploaded_file($file_tmp,$target_path.$filename))
      {
        $up="UPDATE participantsconfer SET dir_path='".$target_path.$filename."' where uid='".$u_id."'";
        mysqli_query($con,$up);
        $msg="e20934c24618af89a9578e32cd8b954e";
      }
      else
      {
        $msg="f734d593669a6da3708e14337f5936b8";
      }
      mysqli_close($con);
      session_destroy();
      header("location:symposium.php?m=".$msg."#paper");
    }
  }
  else
  {
    $m="70703fae805edfe569c298192a53e961";
    mysqli_close($con);
    session_destroy();
    header("location:symposium.php?m=".$m."#paper");
  }
}
//}
?>
