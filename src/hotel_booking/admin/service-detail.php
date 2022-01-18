<?php
    include ('header.php');
    include ('../config.php');
?>
<div class = "content px-3 ">
        <div clas = "m-3 row">
            <a href="#" onclick="openForm3()" id = "close" class = "close" style = "color: #D98E73; text-decoration: none;float: right;font-size:1.5rem;"><i class="far fa-times-circle"></i></a>
            <?php
            include 'popup-exit-room.php';
            ?>
        </div>
    <?php
            $ser_id = $_GET['id'];
            $sql1 = "SELECT * FROM tb_services WHERE ser_id = '$ser_id';";
            $result1 = mysqli_query($conn,$sql1);

            if($result1 == true){ 
                while($row = mysqli_fetch_assoc($result1)){?>
        
        <div class = "mt-5">
        <h1 class = "text-center">Chi tiết dịch vụ</h1>
        </div>
        <form action="update-service-process.php" method = "post" class ="pb-5 pt-3 mb-3  mx-auto" style="width:70%" enctype="multipart/form-data"> 
            <input type="text" name = "ser-id" value = "<?php echo $row['ser_ID']?>" hidden>          
            <div class = "my-3">
                <div class="row">
               <div class="col-lg-2 pt-2">Tên dịch vụ:</div>
               <div class="col">
                    <input type="text" name = "ser-name" stlye="width:120%" class = "form-control" value = "<?php echo $row['ser_name'];?>">
                </div>   
                </div>
            </div>
            <div class = "my-3">
                <div class="row">
               <div class="col-lg-2 pt-2">Số người:</div>
               <div class="col">
                    <input type="number" name = "ser-room-size" min = "1"  class = "form-control" value = "<?php echo $row['ser_room_size'];?>"> 
                </div>   
                </div>
            </div>
            <div class = "my-3">
                <div class="row">
               <div class="col-lg-2 pt-2">Giá tiền:</div>
               <div class="col">
                   <input type="number"  name = "ser-price"  min = "1" class = "form-control" value = "<?php echo $row['ser_price'];?>">
                   </div>   
                </div>
            </div>
            <div class = "my-3">
                <div class="row">
               <div class="col-lg-2 pt-2 ">Mô tả:</div>
               <div class="col">
            <textarea name ="ser-des"  cols="30" rows="3" class = "form-control" maxlength = "250"><?php echo $row['ser_description'];?></textarea>
            </div>   
                </div>
            </div>
            <div class="row ">
                    <div class="col-7">
                        <div class="row">
                        <div  class = "col-4 text-begin ">Ảnh hiện tại:</div>
                        <div class="col-2 ">   
                            <img src="../images/<?php echo $row['ser_image'];?>" alt="" style = "width: 20rem;height: 20rem;object-fit: contain;">
                        </div>
                        </div>
                    </div>
                    <div class="col-5">
                        <div  class = " text-begin ">Ảnh thay thế: </div> 
                        <input type="file" name="uploadfile" value=""/> 
                    </div>
                </div>
        <div class = "mt-3">
            <!-- <a href="" type="submit" name="upload" style = "background: #D98E73; text-decoration: none; color: white" class = "border-5 p-2">Thêm</a> -->
            <a href="alert-update-service.php">
            <button type="submit" name="upload" style = "background: #D98E73; text-decoration: none; color: white;float: right;margin-bottom: 5rem;" class = "border-0 p-2">
                  Lưu dịch vụ
                </button>
            </a>
        </div>
                     <?php
                         }}else{
                            echo '<script>';
                            echo 'alert ("Có lỗi gì đó xảy ra. Vui lòng thử lại!!!");';
                            echo "location.href = 'index.php';";     
                            echo '</script>';
            }?>

            </form>
</div>
            <?php
    include ('footer.php');
?>