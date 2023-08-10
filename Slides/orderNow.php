<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css"> 
    <link rel="stylesheet" href="assets/css/indexstyle.css"> 
    <link rel="stylesheet" href="assets/css/orderNowStyle.css"> 
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Almarai&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     
    <title>Document</title>

</head>
<body>
<div style="width: 100%;height:20px;background-color:#ffd336;"></div>
<!-- <div id="covercolor" style="border-bottom-left-radius: 12%;border-bottom-right-radius: 12%;"> -->


<!-- ////////////////////////////////////////////////////NAV//////////////////////////////////////////////////// -->


<nav class="navbar navbar-expand-lg navbar-light bg-light nav-pills" style="direction: ltr;background-color: white!important;   " >
  <div class="container-fluid" id="navCon">
  <div style="justify-content: center!important">
    <a href="index.php"><img src="assets/img/Slides.png" alt="" style="width: 200px;" ></a>
 
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent" style=" border-bottom: gray;
    border-width: thin;
    border-bottom-style: dashed;">
    
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="padding: 25px; padding-right:0px!important; margin-right:0px!important;">
    
    <li class="nav-item">
        <span class="underline">  <a class="nav-link " aria-current="page" href="index.php" id="home">Home</a>
        </span> </li>
        <li class="nav-item">
        <span class="underline">  <a class="nav-link" href="index.php"  id="WhoAreWe">Who are we</a>
        </span> </li>
        <li class="nav-item">
        <span class="underline">    <a class="nav-link" href="index.php#HIWDIV" id="HowWeWork">What we do</a>
        </span> </li>
      <li class="nav-item">
        
        <span class="underline"> <a class="nav-link" href="index.php" id="TempLi">Templates library</a>
        </span>
      </li>
      <li class="nav-item">
        <span class="underline"> <a class="nav-link" href="index.php#CODIV" id="CusOp">Customers reviews</a>
        </span> </li>
        <li class="nav-item">
        <button class="btn " type="button" style="display: block;    margin: 10px;background-color: #ffd336;width: 130px;"><a href="orderNow.php" style="color:white;text-decoration:none;font-size:14px;">Order now</a></button>
      </li>
   
      </ul>
      <div>
       
     </div>
    

    </div>
    <hr>
   
  </div>
</nav>


<script>


$(".nav a").on("click", function(){ 
   $(".nav-link").find(".active").removeClass("active"); 
    $(this).parent().addClass("active");});



</script>

<!-- ////////////////////////////////////////////////////ORDER NOW//////////////////////////////////////////////////// -->


            <!-- ////////////// -->
<div class="container SBG1" id="TOTDDIV" style="background-color: white;">
<!-- <div class="SBG2">
<h1 class="ST"> اطلب الآن !</h1></div> -->


<div class="row " style="padding-top: 0px;margin-top: 20px;    justify-content: center!important;align-items: center;    padding-bottom: 50px;" > 


<div class="col  col-sm-12 col-md-8 col-lg-4 col-xl-4 shadow order-lg-first order-md-last order-xs-last order-sm-last order-xl-first"  style="margin:20px;padding: 0px;    position: sticky;
    top: 100px;align-self: flex-start;"> 

<div class="accordion-sidebar" >
  <div class="accordion-sidebar__wrap"  >

<div  style=" 
    padding: 15px;text-align: left;direction: ltr;">


<h1 style="font-size: 18px;    text-align: left;
    color: #757575;display: inline;"> 
    
    Field:
 </h1>
 <p style="font-size: 18px;    text-align: left;
    color: #73b325;display: inline;" id="PF"></p> 
</div>

<hr style="  border: 1px solid #ffd336;">
    <div  style=" 
    padding: 15px;direction: ltr;">
<h3 style="font-size:18px;    text-align: left;
    color: #757575;display: inline;">    Purpose :   
 </h3>
 <p style="font-size: 18px;    text-align: left;
    color: #73b325;display: inline;" id="PP"></p> 
</div>


<hr style="  border: 1px solid #ffd336;">

<div  style=" 
    padding: 15px;direction: ltr;">
<h3 style="font-size:18px;    text-align: left;
    color: #757575;display: inline;">    Level :   
 </h3>
 <p style="font-size: 18px;    text-align: left;
    color: #73b325;display: inline;" id="lvl"></p> 
</div>


<hr style="  border: 1px solid #ffd336;">
<div  style=" 
    padding: 15px;direction: ltr;">
<h3 style="font-size:18px;    text-align: left;
    color: #757575;display: inline;">  Number of slides:  </h3>
     <p style="font-size: 18px;    text-align: left;
    color: #73b325;display: inline;" id="nos">- slide </p> 
  
  </div>


<hr style="  border: 1px solid #ffd336;">



<div  style=" 
    padding: 15px;direction: ltr;">
<h3 style="font-size:18px;    text-align: left;
    color: #757575;display: inline;">  Receiving date:   &nbsp
 </h3>
 <p style="font-size: 18px;    text-align: left;
    color: #73b325;display: inline;" id="pdate"> Date - - - - / - - / - -  </p> 
</div>
<hr style="  border: 1px solid #ffd336;">
<div  style=" 
    background-color: #A4FF36;padding: 15px;">
<h3 style="font-size:18px;    text-align: left;
    color: #757575;"> Total cost: $20</h3></div>


<div  style=" 
    padding: 15px;">
<h3 style="font-size:18px;    text-align: left;
    color: #757575;"> By clicking "Submit Order", you agree to our terms of service and privacy policy.
</h3></div>


<div class="container" style="text-align: center;">  
<button disabled class="btn Morebtn" id="sendOrder" style="background-color:#ffd336" onclick="saveInfo();">Submit order</button>
<!-- <a href="#" class="btn Morebtn" style="background-color:#ffd336" > -->
</a>
</div>
  <br>



</div>

</div></div>
<!-- /////////////////////////////////////////// -->

<div class="col col-sm-12 col-md-8 col-lg-6 col-xl-5 shadow  order-lg-last order-first order-md-first order-xs-first order-sm-first order-xl-last" style="background-color:#f5f5f5;margin:20px; direction:ltr; text-align:left;   padding: 0px;" > 



<!-- //////////////////////////////////////////////////////////////////////////////////////////////// -->
<div class="accordion" id="accordionPanelsStayOpenExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne"     style=" height: 80px;
    background-color: #73b325;padding: 30px;font-size:21px;    text-align: left;
    color: white;"> 
          
          Step1: Slideshow field

      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body">
<!-- 

      <h5 class="card-title" style="font-size: 26px;font-weight:normal;">  نوع العرض :  </h5>
   
      <br>
   <br>

   <label class="container">
  <h5 style= "margin-right: 15px;">تصميم نموذج باوربوينت </h5>

<input type="radio" name="ShowT" class="radioIN" checked>
<span class="checkmark"></span>
</label> -->

<script>

// $('#datemax').date({  
//        format: 'dd-mm-yyyy'  
//      });  

     
    $(document).ready(function(){
      $("input[name='subj']").click(function(){
            var radioValue1 = $("input[name='subj']:checked").val();
            if(radioValue1){
              document.getElementById("PF").innerHTML = radioValue1;
                // alert("Your are a - " + radioValue);
            }
          
        });

        $("input[name='porp']").click(function(){
          var radioValue2 = $("input[name='porp']:checked").val();
            if(radioValue2){
              document.getElementById("PP").innerHTML = radioValue2;
                // alert("Your are a - " + radioValue);
            }
          
        });
       
        $("input[name='lvl']").click(function(){
          var radioValue3 = $("input[name='lvl']:checked").val();
            if(radioValue3){
              document.getElementById("lvl").innerHTML = radioValue3;
                // alert("Your are a - " + radioValue);
            }
          
        });

        $("input[name='slidesNum']").change(function(){
          var radioValue4 = $("input[name='slidesNum']").val();
            if(radioValue4){
              document.getElementById("nos").innerHTML = radioValue4 + " Slide ";
                // alert("Your are a - " + radioValue);
            }
          
        });



        $("input[type='date']").change(function(){
          var radioValue5 = $("input[type='date']").val();
            if(radioValue5){
              document.getElementById("pdate").innerHTML =  " Date " + radioValue5 ;
                // alert("Your are a - " + radioValue);
            }
          
        });


     


    });
</script>


<br>
<h5 class="card-title" style="font-size: 18px;font-weight:normal;" > Slideshow field:  </h5>
   
   <br>
  <br>
  <label class="container">
  <h5 style= "margin-right: 15px;font-size: 18px;">Education</h5>

  <input type="radio" checked="checked" name="subj" class="radioIN" value="Education">
  <span class="checkmark"></span>
</label>
<label class="container">
<h5 style= "margin-right: 15px;font-size: 18px;">Medical</h5>

  <input type="radio" name="subj" class="radioIN" value="Medical">
  <span class="checkmark"></span>
</label>
<label class="container">
<h5 style= "margin-right: 15px;font-size: 18px;">Engineering</h5>

  <input type="radio" name="subj" class="radioIN" value="Engineering">
  <span class="checkmark"></span>
</label>
<label class="container">
<h5 style= "margin-right: 15px;font-size: 18px;">Science</h5>

  <input type="radio" name="subj" class="radioIN" value="Science">
  <span class="checkmark"></span>
</label>
<label class="container">
<h5 style= "margin-right: 15px;font-size: 18px;">Marketing</h5>

  <input type="radio" name="subj" class="radioIN" value="Marketing">
  <span class="checkmark"></span>
</label>
<label class="container">
<h5 style= "margin-right: 15px;font-size: 18px;">Technology</h5>

  <input type="radio" name="subj" class="radioIN" value="technology">
  <span class="checkmark"></span>
</label>
<label class="container">
<h5 style= "margin-right: 15px;font-size: 18px;">Other</h5>

  <input type="radio" name="subj" class="radioIN" value="Other">
  <span class="checkmark"></span>
</label>


<br>


<h1 class="card-title" style="font-size: 18px;font-weight:normal;"> 
    
    Slideshow purpose:
 </h1>

  
 <br>
  <br>
  <label class="container">
  <h5 style= "margin-right: 15px;font-size: 18px;">Attract</h5>

  <input type="radio" checked="checked" name="porp" class="radioIN" value="Attract">
  <span class="checkmark"></span>
</label>
<label class="container">
<h5 style= "margin-right: 15px;font-size: 18px;">Explain</h5>

  <input type="radio" name="porp" class="radioIN" value="Explain">
  <span class="checkmark"></span>
</label>
<label class="container">
<h5 style= "margin-right: 15px;font-size: 18px;">Awareness</h5>

  <input type="radio" name="porp" class="radioIN" value="Awareness">
  <span class="checkmark"></span>
</label>
<label class="container">
<h5 style= "margin-right: 15px;font-size: 18px;">Convince</h5>

  <input type="radio" name="porp" class="radioIN" value="Convince">
  <span class="checkmark"></span>
</label>
<label class="container">
<h5 style= "margin-right: 15px;font-size: 18px;">Informative</h5>

  <input type="radio" name="porp" class="radioIN" value="Informative">
  <span class="checkmark"></span>
</label>
<label class="container">
<h5 style= "margin-right: 15px;font-size: 18px;">Marketing</h5>

  <input type="radio" name="porp" class="radioIN" value="Marketing">
  <span class="checkmark"></span>
</label>
<label class="container">
<h5 style= "margin-right: 15px;font-size: 18px;">Education</h5>

  <input type="radio" name="porp" class="radioIN" value="Education">
  <span class="checkmark"></span>
</label>
<label class="container">
<h5 style= "margin-right: 15px;font-size: 18px;">Other</h5>

  <input type="radio" name="porp" class="radioIN" value="Other">
  <span class="checkmark"></span>
</label>
<br>


      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo"  style=" height: 80px;
    background-color: #73b325;padding: 30px;font-size:21px;    text-align: left;
    color: white;">
     Step 2: Content details and delivery date
      </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
      <div class="accordion-body">

<br>
  
      <h1 class="card-title" style="font-size: 18px;font-weight:normal;"> 
    
    Slideshow level:
     :
     </h1>

     <br>
  <br>
    <label class="container">
  <h5 style= "margin-right: 15px;font-size: 18px;">Graduation project</h5>

  <input type="radio" checked="checked" name="lvl" class="radioIN" value="Graduation project">
  <span class="checkmark"></span>
</label>
<label class="container">
<h5 style= "margin-right: 15px;font-size: 18px;">Lecture</h5>

  <input type="radio" name="lvl" class="radioIN" value="Lecture">
  <span class="checkmark"></span>
</label>
<label class="container">
<h5 style= "margin-right: 15px;font-size: 18px;">Academic report</h5>

  <input type="radio" name="lvl" class="radioIN" value="Academic report">
  <span class="checkmark"></span>
</label>
<label class="container">
<h5 style= "margin-right: 15px;font-size: 18px;">Marketing</h5>

  <input type="radio" name="lvl" class="radioIN" value="Marketing">
  <span class="checkmark"></span>
</label>
<label class="container">
<h5 style= "margin-right: 15px;font-size: 18px;">Product presentation</h5>

  <input type="radio" name="lvl" class="radioIN" value="Product presentation">
  <span class="checkmark"></span>
</label>

<label class="container">
<h5 style= "margin-right: 15px;font-size: 18px;">Other</h5>

  <input type="radio" name="lvl" class="radioIN" value="Other">
  <span class="checkmark"></span>
</label>
    
    <br>
    <br>
    <form action="">
      
    <h1 class="card-title" style="font-size: 18px;font-weight:normal;"> 
        
    Slideshow time:
    
         </h1><br>
         <h3 class="card-title" style="margin-right: 0px;font-size: 18px;font-weight:normal;color:#757575"> 
            
          &nbsp The maximum show duration is 60 minutes
                </h3>
         <input type="number" class="form-control" id="ptime" name="ptime" min="10" max="60" placeholder="10" style="border-color: #73b325;
    border-style: solid;
    border-radius: 9%;margin-right: 30px;
    width: 50px;    padding: 2px;
    text-align: center;">

    
<br><br>
    <h1 class="card-title" style="font-size: 18px;font-weight:normal;"> 
        
    Number of slides :
     </h1><br>
     <h3 class="card-title" style="margin-right: 0px;font-size: 18px;font-weight:normal;color:#757575"> 
            
     The maximum number of slides is 30
                </h3>
     <input type="number" class="form-control" id="slidesNum" name="slidesNum" min="3" max="30" placeholder="3" style="border-color: #73b325;
    border-style: solid;
    border-radius: 9%;margin-right: 22px;
    width: 50px;    padding: 2px;
    text-align: center;"><br><br>
    <h1 class="card-title" style="font-size: 18px;font-weight:normal;"> 
        
    Receiving date  :
     </h1>
    <input type="date" class="form-control"   id="datemax" name="datemax"  data-date-format="dd-mm-yyyy" style="    border-color: transparent;
    border-bottom-color: #73b325;
    border-bottom-style: solid;
    
    background-color: transparent;
    width: 200px;">
    
    <br>
    <br>



      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree" style=" height: 80px;
  background-color: #73b325;padding: 30px;font-size:21px;    text-align: left;
  color: white;">
    Step 3: Additional information and details

      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
      <div class="accordion-body">
<br>
       

      <h1 class="card-title" style="font-size: 18px;font-weight:normal;"> 
        
      Subject title:
         </h1>
        <input type="text" name="proT" style="border-color: transparent;
        border-bottom-color: #73b325;
        border-bottom-style: solid;
       
        background-color: transparent;
        width: 400px;margin-right: 20px;"  class="form-control"><br><br>
        
        
        <h1 class="card-title" style="font-size: 18px;font-weight:normal;"> 
            
        Specific instructions about:
         </h1>
         <br>
         <textarea  class="form-control" id="w3review" name="proIn" rows="4" cols="50"
          placeholder="Font, images, design, content and more......"
          style="border-color: transparent;
        border-bottom-color: #73b325;
        border-bottom-style: solid;
       
        background-color: transparent;
        width: -webkit-fill-available;
        width:fill-available;margin-right: 20px;"
          ></textarea>
        <br><br>
        
        <h1 class="card-title" style="font-size: 18px;font-weight:normal;"> 
            
        Drag & drop your content file here:
         </h1>
         <h3 class="card-title" style="margin-right: 0px;font-size: 18px;font-weight:normal;color:#757575"> 
            
         The file must be PowerPoint
             </h3>
<br>
<div class="mb-3">
               <br>
             <input class="form-control form-control-sm" name="profile" id="formFileSm" type="file" style="    width: auto;
    margin-right: 20px;"
    
    accept=
" .ppt , .pptx"
>
</div>
        </form>
        <br><br>
        


      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour" style=" height: 80px;
  background-color: #73b325;padding: 30px;font-size:21px;    text-align: left;
  color: white;">
    Step 4: Submit the application
      </button>
    </h2>
   <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
      <div class="accordion-body">
<br>
      <h1 class="card-title" style="font-size: 18px;font-weight:normal;display: inline;"> 
        
     Full name
   : &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp 
         </h1>
        <input type="text" name="fn" style="border-color: transparent;
        border-bottom-color: #73b325;
        border-bottom-style: solid;
       
        background-color: transparent;
        width: 400px;display: inline;margin-right: 20px;" class="form-control"><br><br>
        
   
        <h1 class="card-title" style="font-size: 18px;font-weight:normal;display: inline;"> 
        
        Phone number

    : &nbsp  &nbsp  &nbsp  &nbsp &nbsp  &nbsp 
           </h1>
          <input type="text" name="phone" style="border-color: transparent;
          border-bottom-color: #73b325;
          border-bottom-style: solid;
         
          background-color: transparent;
          width: 400px;margin-right: 20px;" class="form-control"><br><br>

        
      <h1 class="card-title" style="font-size: 18px;font-weight:normal;display: inline;"> 
        
      Email

  :&nbsp 
         </h1>
        <input type="text" name="email" style="border-color: transparent;
        border-bottom-color: #73b325;
        border-bottom-style: solid;
       
        background-color: transparent;
        width: 400px;margin-right: 20px;" class="form-control"><br><br>
        </form>
    
        <h1 class="card-title" style="color:#ffa20f;font-size: 18px;font-weight:normal;margin-right: 0px!important;text-align: center;display: block;"> 
        
        Thank you for contacting us!

         </h1>

         <h1 class="card-title" style="color:#ffa20f;font-size: 18px;font-weight:normal;text-align: center;    display: block;
    margin-top: 10px!important;margin-right: 0px!important;"> 
        
         We will contact you as soon as possible.


         </h1>
         <br><br>
      </div>
    </div>
  </div>

</div>

<!-- //////////////////////////////////////////////////////// -->

 




</div>
    
    
  </div>

</div>


<script>

function saveInfo(){

  $(document).ready(function(){
        
    swal({
  title: "Confirm",
  text: "Are you sure?",
  icon: "warning",
  buttons: ["Cancel", "Yes"],
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
   
    
    
  var proF = $("input[name='subj']:checked").val();
  var proP = $("input[name='porp']:checked").val();
  var proLvl = $("input[name='lvl']:checked").val();
  var proTime = $("input[name='ptime']").val();
  var nos = $("input[name='slidesNum']").val();
  var proD = $("input[name='datemax']").val();
  var proT = $("input[name='proT']").val();
  var proIn = $("textarea[name='proIn']").val();
  // var proFile = $("input[name='profile']").val();
  var fn = $("input[name='fn']").val();
  var phone  = $("input[name='phone']").val();
  var email = $("input[name='email']").val();

//   var input = document.getElementById("formFileSm");
// var file = input.value.split("\\");
// var proFile = file[file.length-1];
var file = $("input[name='profile']").files[0];
var proFile = $(file.name);

var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {



        swal("Submitted!", {
      icon: "success",
    });



       alert(this.responseText);
          // document.getElementById("saveInfo.php").innerHTML = this.responseText;
      }
    
  };

  xmlhttp.open("GET", "saveInfo.php?proF=" + proF+"&proP="+proP+"&proLvl="+proLvl+"&proTime="+proTime+"&nos="+nos+"&proD="+proD+"&proT="+proT+"&proIn="+proIn+"&fn="+fn+"&phone="+phone+"&email="+email+"&proFile="+proFile , true);
  xmlhttp.send();



  } else {
    swal("Cancelled!");
  }
});



//         swal({
// title:"للتأكيد",
// text: "هل انت متأكد من تقديم الطلب ؟",
// icon: "success",
// button: "أجل",
// })
// .then((value) => {

//   var proF = $("input[name='subj']:checked").val();
//   var proP = $("input[name='porp']:checked").val();
//   var proLvl = $("input[name='lvl']:checked").val();
//   var proTime = $("input[name='ptime']").val();
//   var nos = $("input[name='slidesNum']").val();
//   var proD = $("input[name='datemax']").val();
//   var proT = $("input[name='proT']").val();
//   var proIn = $("textarea[name='proIn']").val();
//   // var proFile = $("input[name='subj']:checked").val();
//   var fn = $("input[name='fn']").val();
//   var phone  = $("input[name='phone']").val();
//   var email = $("input[name='email']").val();



  
// var xmlhttp = new XMLHttpRequest();
//   xmlhttp.onreadystatechange = function() {
//       if (this.readyState == 4 && this.status == 200) {
//       //  alert(this.responseText);
//           // document.getElementById("saveInfo.php").innerHTML = this.responseText;
//       }
    
//   };

//   xmlhttp.open("GET", "saveInfo.php?proF=" + proF+"&proP="+proP+"&proLvl="+proLvl+"&proTime="+proTime+"&nos="+nos+"&proD="+proD+"&proT="+proT+"&proIn="+proIn+"&fn="+fn+"&phone="+phone+"&email="+email , true);
//   xmlhttp.send();


// });

 });



//   $("input").keyup(function(){
//   if((proF != "") && (proP != "") && (proLvl != "" )&& (proT != "") && (nos != "") && (proD != "") && (proT != "") && (proIn != "") && (fn != "") && (phone != "") && (email != "" )){
//     var e = document.getElementById("sendOrder");
// e.removeAttribute("disabled");

//   }});



  


}







$("input").change(function(){
    var count = 0, attr = "disabled", $sub = $("#sendOrder"), $inputs = $("input");  
    $inputs.each(function(){
        count += ($.trim($(this).val())) ? 1:0;
    });
   if (count >= $inputs.length ) {
    $sub.removeAttr(attr);
    

   } else {
     $sub.attr(attr,attr);      
   }
    
});

</script>


<!-- ////////////////////////////////////////////////////FOOTER  //////////////////////////////////////////////////// -->


<div style="max-width: 100%!important;">

<div  class="container" style="text-align: center;">

<br><br><br>



<div class="row justify-content-center" style="--bs-gutter-x: 3rem!important;">
<div class="col col-12 col-sm-12 col-md-6 col-lg-3 order-1 order-lg-3" style="direction: ltr;" > 


    <br>
    <h5  class="fH5">    Home </h5>
    <h5  class="fH5">   Who are we</h5>
    <h5  class="fH5">   What we do</h5>
    <h5  class="fH5">   Customers reviews</h5>
</div>

<div class="col col-12 col-sm-12 col-md-6 col-lg-3 order-2 order-lg-2  " style="direction: ltr;" > 


    <br>
    <h5  class="fH5">    Terms of Service</h5>
    <h5  class="fH5">      Privacy policy</h5>
    <h5  class="fH5">     Contact us</h5>
  <a href="#" class="btn facebookBtn"> <i class="fa fa-facebook-f"></i> &nbsp; Follow us </a>
    
</div>


<div class="col col-12 col-sm-12 col-md-6 col-lg-3 order-3 order-lg-1" style="direction: ltr;" > 

<img src="assets/img/Slides.png" alt="" style="width: 250px;" >
    <!-- <br>
  
    <br><br>
    <h5  class="fH52">    جميع الحقوق محفوظة </h5>
    <h5  class="fH52">   2021 مهارات ببساطة </h5> -->
</div>
</div>
</div>
</div>


<br><br><br>






 
<!-- ////////////////////////////////////////////////////JAVA SCRIPT//////////////////////////////////////////////////// -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>