


<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>ALISBO MIS</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <script src='http://code.jquery.com/jquery-1.7.1.min.js'></script>
        <link rel="icon" href="assets/images/users/A.png" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-blue.css"/>
        <!-- EOF CSS INCLUDE -->                                     
    </head>
    <body>
        
        <div class="login-container lightmode">
        
            <div class="login-box animated fadeInDown">
                <div><center><img src="img/ALISBOLOGO7.png"></center></div>
                <div class="login-body">
                    <div class="login-title" style="color:teal"><center><strong>Login</strong></center></div>
                    <form action="loading.php" class="form-horizontal" method="post">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" id ="username" name = "username" placeholder="Username" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control" id = "password" name = "password" placeholder="Password"/>
                            <input type="hidden" class="form-control" id = "password" name = "date" placeholder="Password"/>
                        </div>
                    </div>
                    <div class="form-group">
                       <div class="col-md-6">
                            <button class="btn btn-info btn-block fa fa-lock" id = "sendButton" name = "submit"> Login</button>
                        </div>
                    </div>
                    </form>
                </div><center>
                <div class="login-footer">
                    <div class="" style="color:black">
                       <strong>&copy; Notorious Trio | 2017-2018 ALISBO MIS</strong>
                    </div>                   
                </div></center>
            </div>
            
        </div>
        
        
        <script>
    $(document).ready(function(){  

      var checkField;

      //checking the length of the value of message and assigning to a variable(checkField) on load
      checkField = $("input#username").val().length;
        
      var enableDisableButton = function(){         
        if(checkField > 0){
          $('#sendButton').removeAttr("disabled");
        } 
        else {
          $('#sendButton').attr("disabled","disabled");
        }
      }        
     
      //calling enableDisableButton() function on load
      enableDisableButton();
      
      $('input#username').keyup(function(){ 
        //checking the length of the value of message and assigning to the variable(checkField) on keyup
        checkField = $("input#username").val().length;
        //calling enableDisableButton() function on keyup
        enableDisableButton();
      });
    });
    </script>
        
        
        <script>
         $(document).ready(function(){  

      var checkField2;

      //checking the length of the value of message and assigning to a variable(checkField) on load
      checkField2 = $("input#password").val().length;
        
      var enableDisableButton2 = function(){         
        if(checkField2 > 0){
          $('#sendButton').removeAttr("disabled");
        } 
        else {
          $('#sendButton').attr("disabled","disabled");
        }
      }        
     
      //calling enableDisableButton() function on load
      enableDisableButton2();
      
      $('input#password').keyup(function(){ 
        //checking the length of the value of message and assigning to the variable(checkField) on keyup
        checkField2 = $("input#password").val().length;
        //calling enableDisableButton() function on keyup
        enableDisableButton2();
      });
    });
        </script>
        
    </body>
</html>









