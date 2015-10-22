<!DOCTYPE html>
<html lang="en">
	<head lang="en">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>test</title>   
        
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
 <link rel="stylesheet" href="ref/bootstrap.min.css.css">
  <script src="ref/jquery.min.js"></script>
  <script src="ref/bootstrap.min.js"></script>

    <link rel="stylesheet" href="silviomoreto-bootstrap-select-a8ed49e/dist/css/bootstrap-select.css">
    <script src="silviomoreto-bootstrap-select-a8ed49e/dist/js/bootstrap-select.js"></script>
    <link rel="stylesheet" type="text/css" href="model2_test_css.css">
       
     <script src="model2_test_js.js"></script>

  <link rel="stylesheet" href="ref/jquery-ui.css">
  <script src="ref/jquery-ui.js"></script>

    <link rel="stylesheet" href="silviomoreto-bootstrap-select-a8ed49e/dist/css/bootstrap-select.css">
    <script src="silviomoreto-bootstrap-select-a8ed49e/dist/js/bootstrap-select.js"></script>
    <link rel="stylesheet" type="text/css" href="model2_test_css.css">
       
        
       <style>
             .modal-content {
                  -webkit-box-shadow: none;
                  box-shadow: none;
                  border-radius: 0px;
                }
            .golden_button {
  display: block;
  width: 100%;
  background-color: #ffcd00;
  border-color: #ffcd00;
  border-radius: 0px;
}
            body {
                font-family: Microsoft Yahei;   
            }
        h4{
            font-size: 21px;
        }
        
        </style>
    </head>
    <body>
        
        
         
<?php


            if(isset($_POST['submit'])){
                $username = htmlspecialchars($_POST['username']);
                $password = htmlspecialchars($_POST['password']);

             }

//check if username correct

            if (preg_match("/^[a-zA-Z0-9_]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+.*$", $username)) {
                echo "";
            } else {
                echo "user-email wrong";

                return;
            }


//check if password has one digit, one lower case letter and a upper case letter
            if(preg_match("/^[A-Za-z]+\d+.*$", $password)){
            
            }else {
                echo "password wrong, password has to contain at least one lower case letter, one upper case lettter and a digit."
            }
 
?>
<form method = "post" action = "<?= $_SERVER['PHP_SELF'] ?>">
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="modal-content">
          <div class="modal-header">
            
              <h4 class="modal-title" id="myModalLabel">Tb W</h4>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="col-xs-7">
                      <div class="well">
                          <form id="loginForm" method="POST" action="/login/" novalidate="novalidate">
                              <div class="form-group">
                                  <label for="username" class="control-label">username</label>
                                  <input type="text" class="form-control" id="username" name="username" value="" required="" title="请输入用户名" placeholder="example@gmail.com">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label">password</label>
                                  <input type="password" class="form-control" id="password" name="password" value="" required="" title="请输入密码" placeholder="********">
                                  <span class="help-block"></span>
                              </div>
                              <div id="loginErrorMsg" class="alert alert-error hide">wrong password</div>
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" name="remember" id="remember"> remember password
                                  </label>
                                  <p class="help-block">(if private)</p>
                              </div>
                              <button type="submit" class="btn btn-default btn-block " style="background-color: #ffcd00;border-color:#ffcd00;color:white;">login</button>
                              <a href="/forgot/" class="btn btn-default btn-block" style="background-color: #009dd9;border-color:#009dd9;color:white;">help</a>
                          </form>
                      </div>
                  </div>
                  <div class="col-xs-5">
                      <p class="lead">register now <span class="text-success">free</span></p>
                      <ul class="list-unstyled" style="line-height: 2">
                          <li><span class="fa fa-check text-success"></span> introduction</li>
                          <li><span class="fa fa-check text-success"></span> introduction</li>
                          <li><span class="fa fa-check text-success"></span> introduction</li>
                          <li><span class="fa fa-check text-success"></span> Fast checkout</li>
                          <li><span class="fa fa-check text-success"></span> Get a gift <small>(only new customers)</small></li>
                          <li><a href="/read-more/"><u>more info</u></a></li>
                      </ul>
                      <p><a href="/new-customer/" class="btn btn-default btn-block " style="background-color: #ffcd00;border-color:#ffcd00;color:white;">COME JOIN US!</a></p>
                  </div>
              </div>
          </div>
      </div>
			</div>
		  </div>
        
        <script>
                        $("#login-modal").modal({backdrop: "static"});

            $('#login-modal').modal('show');
        
        </script>
    
    </form>
        
    </body>
  
</html>

