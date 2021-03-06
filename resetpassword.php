<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <style>
      @import url("https://fonts.googleapis.com/css?family=Montserrat:400,800");
      * {
       margin: 0;
       padding: 0;
      }
      body {
      background-color: white;


        font-family: "Montserrat", sans-serif;

     height: 100%;
    padding-right: 2%;
    padding-left:2% ;
      }

select {
  background-color: rgba(247, 247, 247, 0.973);
  width: 20%;
  margin-right: 0;

  border-radius: 5px 5px 5px 5px;
  color: black;
}

      h1 {
        font-weight: bold;
        margin: 0;
      }
      h2 {
        text-align: center;
      }
      p {
        font-size: 14px;
        font-weight: 100;
        line-height: 20px;
        letter-spacing: 0.5px;
        margin: 20px 0 30px;
      }
      span {
        font-size: 12px;
      }
      a {
        color: #333;
        font-size: 14px;
        text-decoration: none;
        margin: 15px 0;
      }
      button {
        border-radius: 20px;
       background-image: linear-gradient(to right, #6e128a, #775bdd, #7b4bd3);
        background-size: 200%;
        border: solid white 0.08rem;
        color: #ffffff;
        font-size: 12px;
        font-weight: bold;
        padding: 12px 45px;
        letter-spacing: 1px;
        text-transform: uppercase;
        transition: transform 80ms ease-in;
      }
      button:active {
        transform: scale(0.95);
      }

      button:hover {
        background-position: right;
      }


      input {
       border-radius: 5px;
        border: none;
        padding: 12px 15px;
        margin-top:20px ;
        width: 590px;
        background-color: rgba(247, 247, 247, 0.973);
      }::placeholder{
          color: black;
      }

      input[type="tel"] {
  width: 60%;
  height: 50px;
  background-color: rgba(247, 247, 247, 0.973);



  outline: none;
  border: none;
  margin-left: 0rem;
  border-radius: 5px 5px 5px 5px;
  transition: 0.2s linear;
}




.select {
  background-color: rgba(247, 247, 247, 0.973);
  width: 30%;

  height: 50px;
  border-radius: 5px 5px 5px 5px;
  color: black;
}


      .logo{
          width: 25%;
      }

        .select{
     height: 45px;
    margin: 0;
    }

    input[type="tel"]{
      height: 20px;
      width: 400px;
    margin: 0;
    }

      @media(max-width:900px){

      .logo{
          width: 40%;
      margin:0;
   
      }
    nav{
      margin: 0;
    }
    li a{
      margin: 0;
    }

    body{
 background-image: linear-gradient(to bottom, #ffffff, white,#a08af0, #7b4bd3,white);

 padding-left:2rem ;
  padding-right:1rem ;
    }

    .select{
     height: 45px;
    margin: 0;
    }

    input[type="tel"]{
      height: 20px;
      width:56%;
    margin: 0;
    }

    button{
      margin-left: 30%;
    }
      }







ul {
  list-style-type: none;
  text-align: left;
  margin: 0;
font: 1rem;

 background-color:  white;
}

li {
  float: left;
}

li a {
  display: block;
  color: rgb(7, 7, 7);
  text-align: center;
  font-family: "Century Gothic", sans-serif;
  font-weight: 700;
  padding: 1rem;
  text-decoration: none;
}

li a:hover {
  background-color: rgba(167, 83, 223, 0.925);
  color: white;
  border-radius: 5px;
  margin:0.5rem;
}


.navgrid{
  display: grid;
  grid-template-rows: 1fr 1fr;
  grid-template-columns: 1fr ;

  padding-right: 20%;
}

@media(max-width:900px) {
input{
  width: 87%;
}
button{
  margin-top: 1rem;
  margin-left: 30%;
}
}

@media(min-width: 900px)
{
 nav{
  margin-top: 1rem;

}

.navgrid{
  display: grid;
  grid-template-rows: 1fr;
  grid-template-columns: 1fr 1fr;
padding-right:27% ;


}
 form {
     background-image: linear-gradient(to bottom, #ffffff, #a08af0, #7b4bd3,white);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding-left: 5rem;
        padding-right: 5rem;
        height: 500px;
        text-align: center;
        width: 80%;
        margin-left: 5%;
        border-radius: 5px;
      }
form{
  height:600px;
}
}


    </style>
  </head>
  <body>


<div style="text-align: center;">

    <img src="logo.png" class="logo">

  </div>


    <div class="container" id="container">
      <div class="form-container sign-up-container">
        <form action="reset.php" method="POST">
          <h1>Reset Password</h1>
    
            <input id="Email" name="Email" type="email" placeholder="Email" />
            <input id="Password" name="Password" type="password" placeholder="Enter Old Password" />
            <input id="newf" name="newf" type="password" placeholder="Enter New Password" />
            <input id=conf name="conf" type="password" placeholder="Confirm New Password" />


<br>
           <button name="submit" >Submit</button>

        </form>
      </div>













        </div>
      </div>
    </div>
  </body>

</html>
