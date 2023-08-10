<?php
 include('server.php');

 $stmt1="";
 if($_GET['tt_id'] != '0' ){

    $stmt1 = $conn->prepare('SELECT * FROM templates WHERE t_type= '.$_GET['tt_id']); 
 }else {
    $stmt1 = $conn->prepare('SELECT * FROM templates'); 
 }

 $stmt1->execute();
 $result1 = $stmt1->get_result(); 
 
 if (  mysqli_num_rows ($result1) == 0)  {
    echo "<h5 style='text-align: center;
    font-size: 25px;'>لا توجد قوالب </h5>";

}
else{
 while ($row1 = $result1->fetch_assoc()) {
 
 
     echo '
 
     <div class="col col-12 col-sm-12  col-md-6 col-lg-6 align-self-center" > 
  
     <div class="card shadow TcardsTw  align-items-center d-flex justify-content-center" style="border-color: darkgray;margin-bottom: 40px; border-radius:3%; padding: 0px!important;" >
     
     <div id="carousel'.$row1['t_id'].'" class="carousel carousel-dark slide" data-bs-ride="carousel'.$row1['t_id'].'"  data-interval="false" >
       <div class="carousel-indicators"  data-interval="false">
         <button type="button" data-bs-target="#carousel'.$row1['t_id'].'" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
         <button type="button" data-bs-target="#carousel'.$row1['t_id'].'" data-bs-slide-to="1" aria-label="Slide 2"></button>
         <button type="button" data-bs-target="#carousel'.$row1['t_id'].'" data-bs-slide-to="2" aria-label="Slide 3"></button>
         <button type="button" data-bs-target="#carousel'.$row1['t_id'].'" data-bs-slide-to="3" aria-label="Slide 4"></button>
         <button type="button" data-bs-target="#carousel'.$row1['t_id'].'" data-bs-slide-to="4" aria-label="Slide 5"></button>
         <button type="button" data-bs-target="#carousel'.$row1['t_id'].'" data-bs-slide-to="5" aria-label="Slide 6"></button>
      
      
       </div>
 
       
 
   <div class="carousel-inner"  style="border-radius:3%;">
   <div class="carousel-item active"  >
     <img src="data:image/jpg;base64,'.base64_encode( $row1['t_img1'] ).'" class="d-block w-100" alt="..." style="border-radius:3%;">
     
   </div>
   <div class="carousel-item"  >
     <img src="data:image/jpg;base64,'.base64_encode( $row1['t_img2'] ).'" class="d-block w-100" alt="..." style="border-radius:3%;">
    
   </div>
   <div class="carousel-item">
     <img src="data:image/jpg;base64,'.base64_encode( $row1['t_img3'] ).'" class="d-block w-100" alt="..." style="border-radius:3%;">
    
   </div>
   <div class="carousel-item"  >
     <img src="data:image/jpg;base64,'.base64_encode( $row1['t_img4'] ).'" class="d-block w-100" alt="..." style="border-radius:3%;">
    
   </div>
   <div class="carousel-item"  >
     <img src="data:image/jpg;base64,'.base64_encode( $row1['t_img5'] ).'" class="d-block w-100" alt="..." style="border-radius:3%;">
    
   </div>
   <div class="carousel-item"  >
     <img src="data:image/jpg;base64,'.base64_encode( $row1['t_img6'] ).'" class="d-block w-100" alt="..." style="border-radius:3%;">
    
   </div>
 </div>
 <button class="carousel-control-prev cbtnp" type="button" data-bs-target="#carousel'.$row1['t_id'].'" data-bs-slide="prev">
   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
   <span class="visually-hidden">Previous</span>
 </button>
 <button class="carousel-control-next cbtnn" type="button" data-bs-target="#carousel'.$row1['t_id'].'" data-bs-slide="next">
   <span class="carousel-control-next-icon" aria-hidden="true"></span>
   <span class="visually-hidden">Next</span>
 </button>
 </div>
 
 
 <div class="row justify-content-center" style="    width: 100%;
  
   align-items: center;padding-top: 20px;">
 
 <div class="col col-12 col-sm-12 col-md-12 col-lg-12 align-self-center" > 
 
 <h5 class="h5sma"  style="font-size:20px;text-align: center!important;
   margin: 0px!important;margin-bottom: 15px!important;">'.$row1['t_name'] .'</h5>
 </div>
 
 
 </div>
 <div class="row justify-content-center" style="    width: 100%;
  
   align-items: center;padding-top: 20px;">
 
 
 <div class="col col-3 col-sm-6 col-md-6 col-lg-3 align-self-left colsma" > 
 
 <h5  class="h5sma h5Price">  '.$row1['t_price'] .' دل</h5>
 
 
   
 </div>
 
 
 
 <div class="col col-4 col-sm-6 col-md-6 col-lg-4 align-self-right colsma" > 
 
 <h5 class="h5sma h5Order">اطلب الآن</h5>
 
 
   
 </div>
 
 
 
 </div>
 
 
 </div>
 
 </div>
 
       ';
          
     } 
    }
 
       ?>