<?php
$con=mysqli_connect("localhost","root","","industrial_website");
if(!$con){
    echo "error";
}


if(isset($_POST["submit"])){
    $main_head = $main_head1 = $main_head2 = $main_head3 = $main_head4 = "";
    $main_head = mysqli_real_escape_string($con, $_POST['main_head']);
    $main_head1 = mysqli_real_escape_string($con, $_POST['main_head1']);
    $main_head2= mysqli_real_escape_string($con, $_POST['main_head2']);
    $main_head3 = mysqli_real_escape_string($con, $_POST['main_head3']);
    $main_head4 = mysqli_real_escape_string($con, $_POST['main_head4']);
    
    $second_section_head = mysqli_real_escape_string($con, $_POST['s_main_head']);

    $middle_section_lable1 = mysqli_real_escape_string($con, $_POST['md-heading-lable1']);
    $middle_section_lable2 = mysqli_real_escape_string($con, $_POST['md-heading-lable2']);
    $middle_section_lable3 = mysqli_real_escape_string($con, $_POST['md-heading-lable3']);

    $middle_section_dis1 = mysqli_real_escape_string($con, $_POST['md_heading1']);
    $middle_section_dis2 = mysqli_real_escape_string($con, $_POST['md_heading2']);
    $middle_section_dis3 = mysqli_real_escape_string($con, $_POST['md_heading3']);

    $history_year_1 = mysqli_real_escape_string($con, $_POST['history-year_1']);
    $history_year_2 = mysqli_real_escape_string($con, $_POST['history-year_2']);
    $history_year_3 = mysqli_real_escape_string($con, $_POST['history-year_3']);
    $history_year_4 = mysqli_real_escape_string($con, $_POST['history-year_4']);

    $history_discription_1 = mysqli_real_escape_string($con, $_POST['history_discription_1']);
    $history_discription_2 = mysqli_real_escape_string($con, $_POST['history_discription_2']);
    $history_discription_3 = mysqli_real_escape_string($con, $_POST['history_discription_3']);
    $history_discription_4 = mysqli_real_escape_string($con, $_POST['history_discription_4']);
    
    $sql="UPDATE `industry-info` SET `main_heading`='$main_head',
    `heading1`='$main_head1',
    `heading2`='$main_head2',
    `heading3`='$main_head3',
    `heading4`='$main_head4',
    `second-section`='$second_section_head',
    `middle-heading1`='$middle_section_lable1',
    `middle-heading2`='$middle_section_lable2',
    `middle-heading3`='$middle_section_lable3',
    `middle-discription1`='$middle_section_dis1',
    `middle-discription2`='$middle_section_dis2',
    `middle-discription3`='$middle_section_dis3',
    `history-year1`='$history_year_1',
    `history-year2`='$history_year_2',
    `history-year3`='$history_year_3',
    `history-year4`='$history_year_4',
    `history-disc1`='$history_discription_1',
    `history-disc2`='$history_discription_2',
    `history-disc3`='$history_discription_3',
    `history-disc4`='$history_discription_4' WHERE 1;";
   

    $result=mysqli_query($con,$sql);
    
        
    
        
    // $filename = $_FILES["update_md_image_1"]["name"];
    // $filesize = $_FILES["update_md_image_1"]["size"];  
    // $tempname = $_FILES["update_md_image_1"]["tmp_name"];
    // $folder = "upload_img/". $filename;
    
    // if(!empty($filename)){
    //     if($filesize > 2000){
    //         $insert = mysqli_query($con , "UPDATE `industry-info` SET `middle-img1`='$folder' WHERE 1; ") or die ("query failed");
    //         if($insert){
    //             move_uploaded_file($tempname,$folder);
    //             header("location:admin.php");
    //         }
    //     }
    // }
    function writeMsg($key ,$value) {
        $filename = $_FILES["$value"]["name"];
        $filesize = $_FILES["$value"]["size"];  
        $tempname = $_FILES["$value"]["tmp_name"];
        $folder = "upload_img/". $filename;
        
        if(!empty($filename)){
            if($filesize > 200){
                $con=mysqli_connect("localhost","root","","industrial_website");
                if(!$con){
                    echo "error";
                }
                $insert = mysqli_query($con , "UPDATE `industry-info` SET `$key`='$folder' WHERE 1; ") or die ("query failed");
            if($insert){
                move_uploaded_file($tempname,$folder);
                // echo "  $key . ==== . $value <br>";
                // header("location:admin.php");
            }
                
            }
        }

        
    }
    $img = array("middle-img1"=>"update_md_image_1", "middle-img2"=>"update_md_image_2", "middle-img3"=>"update_md_image_3");
    
    foreach($img as $k => $val) {
        
        writeMsg($k, $val);
        header("location:admin.php"); 
    }
    
}




    //   $age = array("update_md_image_1"=>"35", "update_md_image_2"=>"37", "Joe"=>"43");

?>
