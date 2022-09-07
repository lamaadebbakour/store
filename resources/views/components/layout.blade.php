<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="styles/navbar.css">
        <link rel="stylesheet" href="styles/footer.css">
        <link rel="stylesheet" href="styles/styles.css">
        <script defer src="https://unpkg.com/alpinejs@3.10.3/dist/cdn.min.js"></script>

        <title> Clothing Store</title>
  <style>

	/* .slider{
        width: 500px;
        margin:auto;
        overflow:hidden;
    }
    .slider ul{
        padding:0px;
        width:1500px;
        list-style:none;
    }
    .slider ul li{
        float:left;
        position: relative;
        animation: sliding 2s ease-in-out infinite;
    } */
    /* <style type="text/css">
	img{width:500px;height:500px;border:2px #cc0066 ridge;}
	ul{list-style-type:none;}
	li{float:left;} */



        header {
            height: 150px;
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    background-color: #24252A;

}


li, a, button{
    font-family: "Montserrat", sans-serif;
    font-weight: 500;
    font-size: 25px;
    color: #edf0f1;
    text-decoration: none;
}

header{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 30px 10%;
    text-align: center;
}


.nav_links{
  
    text-align: center;
    list-style: none;
}

.nav_links li{
    display: inline-block;
    padding : 0 20px;
}

.nav_links li a{
    transition: all 0.3s ease 0s;
}
.nav_links li a:hover{
    color: #0088a9
}

button{
    padding: 9px 25px;
    background-color: rgba(0, 136, 169, 1);
    border: none;
    border-radius: 50px;
    cursor: pointer;
    transition: all 0.3s ease 0s;
}

button:hover{
    background-color: rgba(0, 136, 169, 0.8);
}

            .card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
  }
  
  .card:hover {
    box-shadow: 50px 50px 50px 0 rgba(0,0,0,0.2);
  }
  
  .container {
    padding: 2px 16px;
  }

  .card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    border-radius: 5px; 
  }
  
  img {
    border-radius: 5px 5px 0 0;
  }
  .row {
    display: flex;
  }
  .column {
    flex: 33.33%;
    padding: 5px;
  }
  @import url('https://fonts.googleapis.com/css2?family=Ropa+Sans&display=swap');

*{
    font-family: "Ropa Sans"
}
.heading{
    text-align: center;
    font-family: "Ropa Sans"
}
.registration-form{
    width: 50%;
    text-align: center;
    display: flex;
    justify-content: space-around;
    margin: auto;
}
.fieldset{
    width: 50%;
    padding-left: 20px;
    padding-right: 20px;
}
.inner-heading{
    text-align: start;
}
.input-field{
    width: 90%;
}
.input-container {
    display: flex;
    width: 100%;
    margin-bottom: 15px;
}
.icon {
    position: absolute;
    color: dodgerblue;
    min-width: 50px;
    margin-top: 5px;
    text-align: center;
}
.input-field {
    width: 100%;
    padding: 10px;
    padding-left: 10px;
    outline: none;
}
.input-field-icon{
    width: 100%;
    padding: 10px;
    padding-left: 50px;
    outline: none;
}
.input-field:focus {
    border: 2px solid dodgerblue;
}
.submit-button{
    background-color: dodgerblue;
    color: white;
    height: 40px;
    padding-left:10px;
    padding-top: 10px;
    font-size: 16px;
    border-radius: 10px;
    text-align: center;
    border-color: white;
    display: flex;
}
.submit-button:hover{
    background-color: rgba(38, 40, 187, 0.842);
    border-color: aliceblue;
}
.submit-button:focus{
    outline: white;
}
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');

footer{
	/* position: fixed; */
	bottom: 0;
}
.footer-distributed{
    font-family: "Montserrat", sans-serif;
	background-color: #292c2f;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 16px sans-serif;
	padding: 10px 50px;
	margin-top: 60px;
	margin-left: -10px;
}
 
.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
	display: inline-block;
	vertical-align: top;
}
 
.footer-distributed .footer-left{
	width: 40%;
}
 
.footer-distributed h3{
	color:  #ffffff;
	font: normal 36px 'Cookie', cursive;
	margin: 0;
}
 
.footer-distributed h3 span{
	color:  #5383d3;
}
 
 
.footer-distributed .footer-links{
	color:  #ffffff;
	margin: 20px 0 12px;
	padding: 0;
}
 
.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.8;
	text-decoration: none;
	color:  inherit;
}
 
.footer-distributed .footer-company-name{
	color:  #8f9296;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}
 
 
.footer-distributed .footer-center{
	width: 35%;
}
 
.footer-distributed .footer-center i{
	background-color:  #33383b;
	color: #ffffff;
	font-size: 25px;
	width: 38px;
	height: 38px;
	border-radius: 50%;
	text-align: center;
	line-height: 42px;
	margin: 10px 15px;
	vertical-align: middle;
}
 
.footer-distributed .footer-center i.fa-envelope{
	font-size: 17px;
	line-height: 38px;
}
 
.footer-distributed .footer-center p{
	display: inline-block;
	color: #ffffff;
	vertical-align: middle;
	margin:0;
}
 
.footer-distributed .footer-center p span{
	display:block;
	font-weight: normal;
	font-size:14px;
	line-height:2;
}
 
.footer-distributed .footer-center p a{
	color:  #5383d3;
	text-decoration: none;;
}
 
.footer-distributed .footer-right{
	width: 20%;
}
 
.footer-distributed .footer-company-about{
    font-family: "Montserrat", sans-serif;
	line-height: 20px;
	color:  #92999f;
	font-size: 13px;
	font-weight: normal;
	margin: 0;
}
 
.footer-distributed .footer-company-about span{
    font-family: "Montserrat", sans-serif;

	display: block;
	color:  #ffffff;
	font-size: 14px;
	font-weight: bold;
	margin-bottom: 20px;
}
 
.footer-distributed .footer-icons{
	margin-top: 25px;
}
 
.footer-distributed .footer-icons a{
    font-family: "Montserrat", sans-serif;
	display: inline-block;
	width: 35px;
	height: 35px;
	cursor: pointer;
	background-color:  #33383b;
	border-radius: 2px;
	font-size: 20px;
	color: #ffffff;
	text-align: center;
	line-height: 35px;
	margin-right: 3px;
	margin-bottom: 5px;
}
 
 
@media (max-width: 880px) {
 
	.footer-distributed{
		font: bold 14px sans-serif;
	
	}
 
	.footer-distributed .footer-left,
	.footer-distributed .footer-center,
	.footer-distributed .footer-right{
		display: block;
		width: 100%;
		font-family: "Montserrat", sans-serif;
		margin-bottom: 40px;
		text-align: center;
	}
 
	.footer-distributed .footer-center i{
		margin-left: 0;
	}
	.main {
		line-height: normal;
		font-size: auto;
	}
 
}
</style>   
</head>

    <body class="container">
        <header hight=200>
            <!-- <img class="logo" src="../images/logo.png" alt="logo"> -->
            <nav>
                <ul class="nav_links">
                    <li><a href="/admin">Admin Page</a></li>
                    <li> <a href='/'>Home </a></li>
                   
                    <li> <a href="AboutUs.html">About</a></li>
                </ul>
            </nav>
            <div class="mt-8 md:mt-0 flex items-center">
          @guest
              <a class="cta" href="/register"><button>Register</button></a>
            <a class="cta" href="/login"><button>Login</button></a>
          @else

              <form method="POST" action="/Logout" class="text-xs font-semibold text-blue-500 ml-6">
                   @csrf

                    <a class="cta" href="/Logout"><button>Logout</button></a>
           </form>
  <br>   
    @endguest
           

        </header>
        @auth
        <center>
        <div class="relative lg:inline-flex bg-gray-100 rounded-xl">
            <x-category-dropdown />
        </div>
        </center>
        @endauth 

  

    {{$slot}}
    <footer class="footer-distributed">
            <div class="footer-left">
                <h3>your<span>&nbsp;Store</span></h3>
                    <p class="footer-links">
                    <a href="index.html">Home</a>
                    <a href="AboutUs.html">About</a>
                    <a href="FAQS.html">Faq</a>
                    <a href="Contacts.html">Contact</a>
                </p>
                <p class="footer-company-name">Lama Bakour &copy; 2022</p>
            </div>
            <div class="footer-center">
                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>Flower Garden Street</span>Idleb</p>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <p>+91 9294612920</p>
                </div>
                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="mailto:support@company.com">yourstore@gmail.com</a></p>
                    </div>
                </div>
                <div class="footer-right">
                    <p class="footer-company-about">
                        <span>About the company</span>
                        We provide almost all variety of clothings for all sizes
                    </p>
                    <div class="footer-icons">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/in/Lama Bakour"><i class="fa fa-linkedin"></i></a>
                        <a href="https://www.github.com/Lama Bakour"><i class="fa fa-github"></i></a>
                    </div>
                </div>
            </div>
        </footer>
</body>
</html>