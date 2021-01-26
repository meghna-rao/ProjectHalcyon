
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"
      rel="stylesheet"
      id="bootstrap-css"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.css"
      rel="stylesheet"
      id="bootstrap-css"
    />
      <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset=“UTF-8”>

      
      
    <style>




  input[type="text"] {

      background-color:rgba(255, 255, 255, 0.788);

       color:black;
        width:90%;
height: 100%;
background-color: rgba(204, 190, 240, 0);
color: rgba(204, 190, 240, 0);
border: none;
font-size: 0.01rem;
font-weight: 600;
      }

      @media(min-width:800px){
 #username{
   margin-left: 3rem;
    color:black;

}
      }










    body {

        background-attachment: fixed;
        background-repeat: no-repeat;


  background-image: linear-gradient( rgb(255, 255, 255) 10%,rgb(123, 78, 236) 40%, rgb(149, 112, 241) 50%, rgb(204, 190, 240)100%);
        font-family: "Vibur", cursive;
        /*   the main font */
        font-family: "Abel", sans-serif;

        /* background-image: linear-gradient(to top, #d9afd9 0%, #97d9e1 100%); */
      }








td {
 padding-left:3rem ;
  text-align: left;
padding-right: 3rem;
}






select{ background-color:rgba(255, 255, 255, 0.788);
height:5rem;
font-size: 1.5rem;
border-radius:5px;
width:80%;
color:black;

}





.datetext{

  width: 100%;
height: 100%;
  border-style: solid;
  border-width: 0.05rem;
  border-radius: 5px;
   color:black;

}

.meterheader{
  margin-left:37%;
}


@media(min-width:800px){

.meterheader{
  margin-left: 40%;
}

  .datetext{

  width: 50%;
  border-style: solid;
  border-width: 0.1rem;
  border-radius: 5px;
   color:black;
margin-top: 1rem;
   margin-left: 25%;
}
}
.emailtext{


border-style: solid;
border-width: 0.1rem;
border-radius: 5px;
 color:black;
 font-size: 2rem;

}

 table {

  border-radius: 5px;
   background-image: linear-gradient(-225deg, #a28ccc 0%, 	#bc94dc 80%);
 color: rgb(34, 34, 34);


}

td{

  font-size: 2rem;
}

th{
  font-size: 3rem;
  color:rgb(15, 7, 53);
}


.title{

width: 30%;
margin-top: 1rem;
margin-bottom: 2rem;
}



@media(min-width: 900px){
.title{

width: 10%;
margin-top: 1rem;
margin-bottom: 2rem;
}


}





.headerquestion
      {
        margin-top: 3rem;
        font-size: 1.5em;
        font-weight: 600;
        text-align: center;
        font-family: "Century Gothic", sans-serif;
        color:rgb(255, 255, 255);
        text-shadow: 2px 2px 4px rgb(13, 13, 153);
      }

      .write {
 font-family: "Abel", sans-serif;
        color:black;
        outline: none;
        border: solid 0.1rem;
        background-color: rgba(248, 246, 246, 0.925);
        border-radius: 5px 5px 5px 5px;
        transition: 0.2s linear;
        box-shadow: 2px 2px 4px rgb(112, 112, 114);


word-wrap: break-word;


}

.emoji{
 width: 50%;

}
.selectIcon{
width:60%;

}



.emojigrid{

display:grid;
grid-template-rows: 1fr 1fr 1fr;
grid-template-columns: 1fr 1fr 1fr  ;
column-gap: 0;
row-gap: 0;
margin-left: 15%;

}
@media(min-width:600px){
  .emoji{
 width:70%;

}

.selectIcon{
width:83%;
margin-right: 1rem;

}
.emojigrid{
margin-left: 0;
display:grid;
grid-template-rows: 1fr;
grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr ;
}
}

.submits {
  width: 48%;
  display: inline-block;
  float: center;
  text-align: center;
  display: inline-block;


  width: 280px;
  height: 50px;

  background: #fff;
  border-radius: 5px;

  outline: none;
  border: none;

  cursor: pointer;
  text-align: center;
  transition: all 0.2s linear;


  letter-spacing: 0.05em;
color:white;
  background: #946efd;
  margin-bottom: 3rem;
  font-size: 2rem;
}

/* buttons hover */
button:hover {
  transform: translatey(3px);
  box-shadow: none;
}

/* buttons hover Animation */
button:hover {
  animation: ani9 0.4s ease-in-out infinite alternate;
}
@keyframes ani9 {
  0% {
    transform: translateY(3px);
  }
  100% {
    transform: translateY(5px);
  }
}

#journal{


 border:solid 0.08rem;
}

textarea{

padding: 1rem;
     word-break: break-all;
     width: 90%;
     height: 300px;
  

      }

      @media(max-width: 900px){
        textarea{

padding: 1rem;
     word-break: break-all;
     width: 99%;


      }
      }

main {
  max-width: 900px;
  margin: auto;
  padding: 0.5rem;
  text-align: center;
}


      input[type="email"] {
        background-color:rgb(255, 255, 255);

        font-family: "Abel", sans-serif;
margin-left: 25%;
        outline: none;
        border: none;
        height: 5rem;
        width:50%;
        border-radius: 5px 5px 5px 5px;
        transition: 0.2s linear;
         color:black;
         margin-bottom: 1rem;

      }

      @media(max-width: 900px){
          input[type="email"] {
        background-color:rgb(255, 255, 255);

        font-family: "Abel", sans-serif;
margin-left: 0;
        outline: none;
        border: none;
        height: 5rem;
        width:99.5%;
        border-radius: 5px 5px 5px 5px;
        transition: 0.2s linear;
         color:black;
         margin-bottom: 1rem;

      }
      }

      .logout{

          margin: 2rem;
          width: 10rem;
          color: black;
          background-color: #dac6e2;
          border: none;
          border-radius: 5px;
          font-size: 2rem;

      }

      .logout:hover{
          color: white;
          background-color: #802ec4;
      }


.topnav {
  background-color: rgba(142, 196, 221, 0);
  overflow: hidden;
  margin-bottom: 1rem;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #000000;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: rgb(164, 81, 231);
  color: white;
  margin: 1rem;
  border-radius: 5px;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #db99e4;
  color: black;
}

i{
    margin-right: 0.5rem;
}


li a:hover {
  transform: translatey(3px);
  box-shadow: none;
}

/* buttons hover Animation */
li a:hover {
 
  animation: ani9 0.4s ease-in-out infinite alternate;
}
@keyframes ani9 {
  0% {
    transform: translateY(3px);
  }
  100% {
    transform: translateY(5px);
  }
}


    </style>
    <script>

      type="text/javascript"
      src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js"
    </script>

    <script>
      function setFormImage(id) {

        if (id != "" && !document.getElementById("input_" + id)) {
          var img = document.createElement("input");
          img.type = "text";
          img.id = "input_" + id;
          img.name = "images[]";
          img.value = id;



          document.imageSubmit.appendChild(img);
        }
      }

      $(document).ready(function () {
        $("#jqueryimages img").click(function () {
          setFormImage(this.id);
        });
      });

    </script>

    </script>

  </head>

  <body>
    <div class="topnav">
        <div style="text-align:right;" >

            <a href="<?php echo "moodjournal.php"; ?>"><i class="fa fa-home"></i>Home</a>

  <a href="<?php echo "logout.php"; ?>"><i class="fa fa-power-off"></i>Logout</a>

  <a href="<?php echo "resetpassword.php"; ?>"><i class="fa fa-tasks"></i>Change Password</a>


     </div>


</div>



  
     <div style="text-align: center;">

<img src="logo.png" class="title">

           <div class="container">



	        	<form action="process.php" method="post"name="imageSubmit" onsubmit="submitForm();">
		            <div class="form-group">
                        <div style="text-align: center;">
                  <input type="email" class="form-control" id="email" class="emailtext"
        name = "Email"  value = "<?php  echo $_SESSION['Email'];?>" readonly >
        </div>
		                <div class='input-group date datetext' id='datepicker'>
		                    <input type='text' style="font-size:2rem ;background-color:white; color: black; " name='date'class="form-control" required/>
		                    <span class="input-group-addon" style="height: 5rem;">
		                        <span class="glyphicon glyphicon-calendar"></span>
		                    </span>
		                </div>
		            </div>

 <h5 class="headerquestion">How do you feel today?</h5>

      <div id="jqueryimages"  >
      <div class="emojigrid">
        <img src="./img/pensiveface.png" id="sad" class="emoji myIcons" />
        <img src="./img/smilingface.png" id="smiling" class="emoji myIcons" />
        <img src="./img/angryface.png" id="angry" class="emoji myIcons" />
        <img src="./img/cryingface.png" id="crying" class="emoji myIcons" />
        <img src="./img/sleeping.png" id="sleepy" class="emoji myIcons" />
        <img src="./img/sick.png" id="sick" class="emoji myIcons" />
        <img
          src="./img/screaming.png"
          id="scared"
          class="emoji myIcons"
        />
        <img src="./img/stareyes.png" id="excited" class="emoji myIcons" />
        <img src="./img/laughing.png" id="laughing" class="emoji myIcons demo" />
      </div>
    </div>
     <h5 class="headerquestion">How did your day go?</h5>
       <p>
                <textarea
                   class="write"
                type="text"
                name="journal"
               id="journal"
>
      </textarea>
              </p>

       <div style="text-align: center;"> <button class=" submits":hover name="sub"  >Submit


      </button></div>
</form>
  </body>

    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"
    ></script>
    <script>
      $(function () {
        $("#datepicker").datepicker({
          format: "dd/mm/yyyy",
          autoclose: true,
          todayHighlight: true,
          showOtherMonths: true,
          selectOtherMonths: true,
          autoclose: true,
          changeMonth: true,
          changeYear: true,
          orientation: "button",
        });
      });

    </script>

    <script>
      $('.myIcons').bind('click', function() {
  $(this).toggleClass('selectIcon');
});

    </script>


</html>