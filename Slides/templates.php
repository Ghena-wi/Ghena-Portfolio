<?php
 include('server.php');

  ?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css"> 
    <link rel="stylesheet" href="assets/css/indexstyle.css"> 
    <link rel="stylesheet" href="assets/css/contentFormatStyle.css"> 
    <link rel="stylesheet" href="assets/css/suitableTemplateStyle.css"> 

    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Almarai&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     
    <title>Document</title>

</head>
<body onload="getTemps('0');">
<div style="width: 100%;height:20px;background-color:#ffd336;"></div>
<!-- <div id="covercolor" style="border-bottom-left-radius: 12%;border-bottom-right-radius: 12%;"> -->



<!-- ////////////////////////////////////////////////////NAV//////////////////////////////////////////////////// -->


<nav class="navbar navbar-expand-lg navbar-light bg-light nav-pills" style="direction: rtl;background-color: white!important;   " >
  <div class="container-fluid">
    <div style="justify-content: center!important">
    <a class="navbar-brand" href="#"  style="font-size: 40px;color:black;display:block;" >إسم الموقع</a>
    <h6 style="display: inline;color:black;margin:10px 10px;padding-right:15px; ">إبتكار</h6>
    <h6 style="display: inline;color:black;margin:10px 10px; ">بساطة</h6>
    <h6 style="display: inline;color:black;margin:10px 10px; ">وضوح</h6>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" style=" border-bottom: gray;
    border-width: thin;
    border-bottom-style: dashed;">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="padding: 30px;" id="navul">
        <li class="nav-item">
        <span class="underline">  <a class="nav-link " aria-current="page" href="index.php" id="home">الرئيسية</a>
        </span> </li>
        <li class="nav-item">
        <span class="underline">  <a class="nav-link" href="#WRWDIV"  id="WhoAreWe">من نحن ؟</a>
        </span> </li>
        <li class="nav-item">
        <span class="underline">    <a class="nav-link" href="#HIWDIV" id="HowWeWork">كيف نعمل ؟</a>
        </span> </li>
        <li class="nav-item">
        <span class="underline"> <a class="nav-link" href="#CODIV" id="CusOp"> آراء العملاء</a>
        </span> </li>
        <li class="nav-item">
        <span class="underline"> <a class="nav-link" href="templates.php" id="TempLi">مكتبة القوالب</a>
        </span>
      </li>
        
    
      </ul>
      <div>
      <button class="btn " type="button" style="display: block;    margin: 10px;background-color: #ffd336;width: 130px;">أطلب الآن ! </button>
    <button class="btn " type="button"  style="display: block;  background-color: #73b325;width: 130px; margin: 10px;color:white;"> اشتري الآن !</button>
      </div>
    

    </div>
    <hr>
  </div>
</nav>

<script>
//  $(".nav-item .nav-link").on("click", function(){
//    $(".nav-link").find(".active").removeClass("active");
//    $(this).addClass("active");
// });


// $(document).ready(function() {
 
//   $("a.nav-link").on('click', function(e){
// console.log(e.target, new Date().toString());
// $("a.nav-link.active").removeClass('active');

// $(this).addClass('active');
//   });
// });



$(".nav a").on("click", function(){
    $(".nav-link").find(".active").removeClass("active"); 
     $(this).parent().addClass("active");});

</script>

<!-- ////////////////////////////////////////////////////content format//////////////////////////////////////////////////// -->



<div class="container" id="tempstyps" >
<br><br>

<form method="post">
<div class="row justify-content-center ">
<div class="col  col-sm-12 col-md-4 col-lg-2 align-self-center order-first" > 
<button class="btn tbu " type="button"  style="display: block;  background-color: #ffd54f;width: 130px; color:black;margin:10px;" onclick="getTemps('5');">    للأطفال</button>

</div>

<div class="col  col-sm-12 col-md-4 col-lg-2 align-self-center order-5" > 
<button class="btn tbu " type="button"  style="display: block;  background-color: #ffd54f;width: 130px; color:black;margin:10px;" onclick="getTemps('4');"> ورشات عمل </button>

</div>

<div class="col  col-sm-12 col-md-4 col-lg-2 align-self-center order-4" > 
<button class="btn tbu " type="button"  style="display: block;  background-color: #ffd54f;width: 130px; color:black;margin:10px;" onclick="getTemps('3');">  تسويق</button>

</div>

<div class="col  col-sm-12 col-md-4 col-lg-2 align-self-center order-3" > 
<button class="btn tbu " type="button"  style="display: block;  background-color: #ffd54f;width: 130px; color:black;margin:10px;" onclick="getTemps('2');">    طبية</button>

</div>

<div class="col  col-sm-12 col-md-4 col-lg-2 align-self-center order-2" > 
<button class="btn tbu " type="button"  style="display: block;  background-color: #ffd54f;width: 130px; color:black;margin:10px;"  onclick="getTemps('1');">  تعليمية</button>

</div>

<div class="col  col-sm-12 col-md-4 col-lg-2 align-self-center order-last order-sm-first" > 
<button class="btn tbu active " type="button"  style="display: block;  background-color: #ffd54f;width: 130px; color:black;margin:10px;" onclick="getTemps('0');"> الكل  </button>

</div>
</div>
    </form>
<br>
<hr>
<br><br>






<div class="row justify-content-center" id="showData">

</div>




</div>
        
        
    



<script>


     function getTemps(tt_id){
  

      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
           
              document.getElementById("showData").innerHTML = this.responseText;
          }
        
      };
   
      xmlhttp.open("GET", "showData.php?tt_id=" + tt_id , true);
      xmlhttp.send();

 
}



$(".tbu").click(function() {
              
              // Select all list items
              var listItems = $(".tbu");
                
              // Remove 'active' tag for all list items
              for (let i = 0; i < listItems.length; i++) {
                  listItems[i].classList.remove("active");
              }
                
              // Add 'active' tag for currently selected item
              this.classList.add("active");
          });


          function readUrl(input) {
  
  if (input.files && input.files[0]) {
    let reader = new FileReader();
    reader.onload = (e) => {
      let imgData = e.target.result;
      let imgName = input.files[0].name;
      input.setAttribute("data-title", imgName);
      console.log(e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  }

}

</script>


<div class="row m-b-1">
    <div class="col-sm-6 offset-sm-3">
      <button type="button" class="btn btn-primary btn-block" onclick="document.getElementById('inputFile').click()">Add Image</button>
      <div class="form-group inputDnD">
        <label class="sr-only" for="inputFile">File Upload</label>
        <input type="file" class="form-control-file text-primary font-weight-bold" id="inputFile" accept="image/*" onchange="readUrl(this)" data-title="Drag and drop a file">
      </div>
    </div>
  </div>




<!-- ////////////////////////////////////////////////////FOOTER  //////////////////////////////////////////////////// -->








  




<div style="max-width: 100%!important;">

<div  class="container" style="text-align: center;">

<br><br><br>



<div class="row justify-content-center" style="--bs-gutter-x: 3rem!important;">
<div class="col col-12 col-sm-12 col-md-6 col-lg-3 order-2 order-lg-2  " style="direction: rtl;" > 


    <br>
    <h5  class="fH5">    شروط الخدمة </h5>
    <h5  class="fH5">      سياسة الخصوصية </h5>
    <h5  class="fH5">      اتصل بنا </h5>
  <a href="#" class="btn facebookBtn"> <i class="fa fa-facebook-f"></i> &nbsp; تابعنا </a>
    
</div>
<div class="col col-12 col-sm-12 col-md-6 col-lg-3 order-1 order-lg-3" style="direction: rtl;" > 


    <br>
    <h5  class="fH5">    الرئيسية </h5>
    <h5  class="fH5">    من نحن ؟ </h5>
    <h5  class="fH5">    كيف نعمل ؟ </h5>
    <h5  class="fH5">    آراء العملاء </h5>
</div>

<div class="col col-12 col-sm-12 col-md-6 col-lg-3 order-3 order-lg-1" style="direction: rtl;" > 


    <br>
   
    <h5  class="fH52">    جميع الحقوق محفوظة </h5>
    <h5  class="fH52">   2021 مهارات ببساطة </h5>
</div>
</div>
</div>
</div>


<br><br><br>



 
<!-- ////////////////////////////////////////////////////JAVA SCRIPT//////////////////////////////////////////////////// -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>