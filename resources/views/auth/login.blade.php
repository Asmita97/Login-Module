@extends('layouts.master')
@section('content')
<title>LOGIN PAGE</title>
<head>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>     
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    
    
    
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
     <meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    
     <link rel="stylesheet" href="/css/demo.css">
  <!-- example style for inner toggle -->
  <link rel="stylesheet" href="/css/example.wink.css">
  <!-- custom modernizr build -->
  <script src="/vendor/modernizr.custom.js"></script>
  
  <script>if(Modernizr.input.placeholder)document.getElementsByTagName('html')[0].className+=' inputplaceholder';
    
    </script>
  
<style>
*
    {
        margin: 0;
        padding: 0;
    }
    
    body:before {
    content:"";
    display:block;
    position:fixed;
    width:100%;
    height:100%;
    left:0;
    top:0;
     margin: 0 auto 0 auto;  
    z-index:-1;
 background-color: #F1F4F7;
   -webkit-filter: blur(2px);
 filter: blur(2px);

}
body{
    font-family: 'Open Sans', sans-serif;
    padding: 0;
    width:100%; 
    text-align:center;  
 }

.col-md-12, .col-sm-12, .col-xs-12 {
    float:none;
    display:inline-block;
    vertical-align:middle;
    margin-right:-4px;
}
    
p{
    font-size:10px;
    text-decoration: none;
    color:#0C85A5;
    padding-top: 10%;
    padding-bottom:10%;
    word-wrap: break-word;

}
    p1
    {
        font-size:10px;
        text-decoration: none;
        color:#0C85A5;
        padding-top: 2%;
        padding-bottom:2%;
        word-wrap: break-word;
    }
a
    {
        color: inherit;
    }

h1{
  font-size:2em;
  color:#0C85A5;
    align-content: center;

}





.mobile
{
    background-color: #fff; 
    border: #A8C8D8 1px solid; 
    padding-bottom: 10%;
    padding-top: 3%;
    width:80%;
    box-shadow: 5px 5px 5px #BCBEBF;
}

.btn
    {
        background-color: #28F1C7;
        color:white;
        border-radius:4px;
        width: 80%;
        font-weight:800;
        font-size:0.8em;
        margin-top:3%;    
    
   
    }
    #btn3
    {
         
        background-color: #28F1C7;
        color:white;
        border-radius:4px;
        font-weight:800;
        font-size:0.8em;
        margin-top:3%;    
    }
    #btn4
    {

        background-color: #3498db;
        color:white;
        border-radius:4px;
       
        font-weight:800;
        font-size:0.8em;
        margin-top:3%;    
    }




.btn:hover
{
    background-color: #15E1C2; 
    color: white;
}
.vcenter 
{
    vertical-align: middle;
    float: none;
    display: inline-block;
}


#btn2{
    
  background:#3498db;
  color:white;
  border-radius:4px;
  border:1px solid;
  font-weight:800;
  font-size:0.8em;

}

#btn0
    {
        background: #3498db;
            color:white;
        border-radius: 4px;
        font-weight: 800;
        font-size: 0.8em;
    }
    #btn0:hover
    {
        background-color: skyblue;
    }

#btn2:hover
{ 
background-color: skyblue; 
}
    
.form-control
{
    margin-top:3%;
    margin-bottom: 3%;
    width: 80%;
    margin-left:10%;
    word-wrap: break-word;
}
/* Custom, iPhone Retina */ 
    @media only screen and (min-width : 1px) {
    .container
{
    background-color: #fff; 
    border: #A8C8D8 1px solid; 
    padding: inherit;
    padding-top: 3%;
    width:80%;
    margin-top: 8em;
    box-shadow: 5px 5px 5px #BCBEBF;
}    
    }

    /* Extra Small Devices, Phones */ 
    @media only screen and (min-width : 1px) {
.container
{
    background-color: #fff; 
    border: #A8C8D8 1px solid; 
    padding: inherit;
    padding-top: 3%;
    width:80%;
    margin-top: 8em;
    box-shadow: 5px 5px 5px #BCBEBF;
}
    }

    /* Small Devices, Tablets */
    @media only screen and (min-width : 768px) {
.container
{
    background-color: #fff; 
    border: #A8C8D8 1px solid; 
    padding: inherit;
    padding-top: 3%;
    width:50%;
    margin-top: 10em;
    box-shadow: 5px 5px 5px #BCBEBF;
}
    }

    /* Medium Devices, Desktops */
    @media only screen and (min-width : 992px) {
.container
{
    background-color: #fff; 
    border: #A8C8D8 1px solid; 
    padding: inherit;
    padding-top: 3%;
    width:40%;
    margin-top: 8em;
    box-shadow: 5px 5px 5px #BCBEBF;
}
    }

    /* Large Devices, Wide Screens */
    @media only screen and (min-width : 1200px) {
.container
{
    background-color: #fff; 
    border: #A8C8D8 1px solid; 
    padding: inherit;
    padding-top: 3%;
    width:30%;
    margin-top: 8em;
    box-shadow: 5px 5px 5px #BCBEBF;
}
    }
   

</style>
    

</head>
<div class="container">
        <form name="myForm" action="handlelogin" method="post">
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <h1> L O G I N</h1>
                @if(count($errors))
            <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error) 
                 <li>{{ $error }}</li>
                @endforeach
            </ul>
            
            </div>
            @endif
        </div>
            <div class="form-group">
                         <div class="container-fluid ">
                             <div class="row">
                               
                                 <div class="col-md-12 col-sm-12 col-xs-12">
<!--           <label for="email">Email:</label>-->
                                     <div class="control-group">
                    <input type="email" name="email" placeholder="Email" onblur="field_blur(this, '');" id="email" class="form-control" required/>
                                     </div></div>
                </div>
                             <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                            <!-- <label for="pwd">Password:</label>-->
                                         <div class="control-group">
                                    <input type="password" name="password" id="pwd" placeholder="Password" onblur="field_blur(this, '');" class="form-control" required />
                                        </div> 
                    
                                 </div>
    
                             
                             </div>
                             <div class="row">
                                 <div class="col-md-12 col-sm-12 col-xs-12">
                                     <button type="submit" class="btn btn-lg" id="mybtn">Sign In</button> <!-- End Btn -->
                                 </div>
                             </div>
            
                </div>
        </div>
            </div>
    </form>
                
                             <div class="row">         
                                 <div class="col-md-12 col-sm-12 col-xs-12">
                                    <button type="submit" class="btn btn-lg" data-toggle="modal" data-target="#myModalNorm" id="btn2" > Register</button>
                                       </div>
                                 
                                 
<form name="myForm" action="postregister" method="post">
                             <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/><!-- End Btn2 -->
                               

                           <div class="modal fade" id="myModalNorm" tabindex="-1" role="dialog" 
                                aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
<!--             Modal Header -->
         <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"> 
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                                </button>
                                <h4 class="modal-title" id="myModalLabel"> Details</h4>
              @if(count($errors))
            <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error) 
                 <li>{{ $error }}</li>
                @endforeach
            </ul>
            
            </div>
            @endif
            </div>
            

            <!-- Modal Body -->

            <div class="modal-body">
                

                <form role="form">

                  <div class="user-data">
<!--                    <label for="exampleInputName">First Name</label>-->
                      <input type="text" class="form-control"
                      id="exampleInputName" name="firstname" placeholder="First Name" required/>
                  </div>
                  <div class="user-data">


<!--                  <label for="exampleInputCompany">Last Name</label>-->

                      <input type="text" class="form-control"
                          id="exampleInputDate" name="lastname" placeholder=" Last Name" required />
                  </div>

                    <div class="user-data">
<!--                    <label for="exampleInputNo">Phone No</label>-->
                      <input type="number" class="form-control"
                          id="exampleInputDate1" name="phone" placeholder="Phone No." required/>
                  </div>
            <div class="user-data">
<!--                    <label for="exampleInputAddress">Email</label>-->
                      <input type="email" class="form-control"
                          id="exampleInputemail" name="email" placeholder="Email address"required />
                  </div>
                    <div class="user-data">
<!--                    <label for="exampleInputBalance">Password</label>-->
                      <input type="password" class="form-control"
                          id="pwd" name="password" placeholder="Password" required />
                  </div>
<!--
                    <div class="form-group">
                    <label for="exampleInputBalance">Password</label>
                      <input type="password" class="form-control"
                          id="confirmpwd" name="cpassword" placeholder="ConfirmPassword" required/>
                  </div>
-->

                  <button type="submit" class="btn btn-sm" id="btn0">Submit</button>
                </form>
                
                
            
           
                <button type="button" class="btn btn-sm"
                        data-dismiss="modal">
                            Close
                </button>
    

                
            </div>
        </div>
    </div>
</div>

                           
                    </form>
   

                           
                    
    </div>
                             <div class="col-md-1 col-sm-1 col-xs-1"></div>
        <div class="col-md-10 col-sm-10 col-xs-10">
                <p>Forgot your password? <u style="color:#f1c40f;" ><a href="forgot-password">Click Here!</a></u></p>
                            </div>
</div>
<script src="/resources/views/vendor/jquery.min.js"></script>
<!-- including the plugin -->
<script src="/hideShowPassword.min.js"></script>
<script>


$('#pwd').hidePassword(true);


</script>
@stop          