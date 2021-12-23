<?php
    include 'header.php'
  
?>

 <div class="container-fluid" style=" width:100%; margin:0px; padding:0px;">
    
    <img src="../images/b.jpg" class="img-header" style="height: 500px; width:100% ;object-fit:cover;"alt="">
    
</div>
<div class="container" >
        <div class="row pb-3">
                
            <div class="col-md-8 pt-4">
                
                <div class="jumbotron">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item ">
                                <a href="index.php">
                                    <span class="text-dark fw-bold">TRANG CHỦ</span>
                                </a></li>
                            <li class="breadcrumb-item active ">
                                <a href="room.php">
                                    <span class="text-dark">DỊCH VỤ</span>
                                </a></li>
                        </ol>
                    </nav>
                    
                </div>
            </div>
      
            
	    </div>
        <?php
            include '../config.php';
            $sql = "SELECT * FROM tb_services";
            $result = mysqli_query($conn,$sql);

            // Phân tích và xử lí kết quả
            if(mysqli_num_rows($result) > 0){
                echo'<div class="row row-cols-1 row-cols-md-3 g-5 px-4 pb-5">';
                while($row = mysqli_fetch_assoc($result)){
                    echo '<style type="text/css" scoped>';
                        echo'.inner{
                            overflow: hidden;
                        }';
                        echo'.inner img{
                            transition: all 1s ease;
                        }';
                        echo'.inner:hover img{
                            transform: scale(1.1);
                            
                        }';
                        echo'.card-img{
                            object-fit:cover;
                        }
                            .btn:hover{
                                background-color: #765b378a;}';
                    echo'</style>';
                    echo '<div class="col d-flex">';
                        echo'<div class="card flex-fill">';
                       echo'<div class="inner">';
                       echo'   <img src="../images/'.$row['ser_image'].'" class="card-img-top" style = "height: 200px ;width 100%; object-fit: cover;" alt="...">';
                      
                       echo'</div>';
                        echo'<div class="card-body">';
                        echo'   <h5 class="card-title">'.$row['ser_name'].'</h5>';
                        echo'   <p class="card-title px-2 fs-6">Số người: '.$row['ser_room_size'].'</p>';
                        echo'   <p class="card-text text-muted px-2">'.$row['ser_description'].'</p>';
                        echo'  <a href="show-order-service.php?id='.$row['ser_ID'].'" class="btn btn-outline-dark align-bottom">Đặt dịch vụ...</a>';
                        echo'</div>';
                        echo'</div>';
                    echo'</div>';
               
                }
                echo'</div>';
            }

        ?> 
    
    
</div> 
    

<?php
    include 'footer.php'
?>