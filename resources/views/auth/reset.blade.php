@extends('layouts.master')

@section('content')
<title>PASSWORD CHANGE</title>
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
  
  <script>if(Modernizr.input.placeholder)document.getElementsByTagName('html')[0].className+=' inputplaceholder';</script>
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




/*
.btn:hover
{
    background-color: #15E1C2; 
    color: white;
}
*/
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
    background-color: white; 
    border: #A8C8D8 1px solid; 
    padding: inherit;
    padding-top: 3%;
    width:100%;
    margin-top: 10em;
    box-shadow: 5px 5px 5px #BCBEBF;
}    
    }

    /* Extra Small Devices, Phones */ 
    @media only screen and (min-width : 1px) {
.container
{
    background-color: white; 
    border: #A8C8D8 1px solid; 
    padding: inherit;
    padding-top: 5%;
    width:100%;
    margin-top: 10em;
    box-shadow: 5px 5px 5px #BCBEBF;
}
    }

    /* Small Devices, Tablets */
    @media only screen and (min-width : 768px) {
.container
{
    background-color: white; 
    border: #A8C8D8 1px solid; 
    padding: inherit;
    padding-top: 3%;
    padding-right: 1%;
    width:50%;
    margin-top: 10em;
    box-shadow: 5px 5px 5px #BCBEBF;
}
    }

    /* Medium Devices, Desktops */
    @media only screen and (min-width : 992px) {
.container
{
    background-color: white; 
    border: #A8C8D8 1px solid; 
    padding: inherit;
    padding-top: 2%;
    width:40%;
    margin-top: 10em;
    box-shadow: 5px 5px 5px #BCBEBF;
}
    }

    /* Large Devices, Wide Screens */
    @media only screen and (min-width : 1200px) {
.container
{
    background-color: white; 
    border: #A8C8D8 1px solid; 
    padding: inherit;
    padding-top: 2%;
    width:30%;
    margin-top: 10em;
    box-shadow: 5px 5px 5px #BCBEBF;
}
    }
   

</style>
    <div class="container">
<div class="container-fluid">
<div class="row">
 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="panel panel-default">
 <div class="panel-heading">Reset Password</div>
 <div class="panel-body">
<!--

 @if (count($errors) > 0)
    <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
        @endforeach
         </ul>
        </div>
@endif
-->

<form class="form-horizontal" role="form" method="POST" action="">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
@if (count($errors)>0)
    <div class="alert alert-danger">
        <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    
    </div>
    @endif
<!--
<div class="form-group">
<label class="col-md-4 control-label">E-Mail Address</label>
<div class="col-md-6">
<input type="email" class="form-control" name="email" value="{{ old('email') }}">
</div>
</div>
-->

<div class="form-group">
<label class="col-md-12 col-sm-12 col-xs-12">Password</label>
<div class="col-md-12 col-sm-12 col-xs-12">
<input type="password" class="form-control" name="password" required>
</div>
 </div>

 <div class="form-group">
 <label class="col-md-12 col-sm-12 col-xs-12">Confirm Password</label>
 <div class="col-md-12 col-sm-12 col-xs-12">
 <input type="password" class="form-control" name="password_confirmation" required>
 </div>
  </div>

 <div class="form-group">
 <div class="col-md-12 col-sm-12 col-xs-12">
 <button type="submit" class="btn btn-primary">
             Reset Password
 </button>
 </div>
 </div>
 </form>

 </div>
 </div>
 </div>
 </div>
</div>
    </div>

@stop