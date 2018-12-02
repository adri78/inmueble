<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Panel de Loguin</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="panel2/favicon_16.ico"/>
    <link rel="bookmark" href="panel2/favicon_16.ico"/>
    <!-- site css -->
    <link rel="stylesheet" href="dist/css/site.min.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">
    <!-- <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'> -->
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="dist/js/site.min.js"></script>
    <style>
      body {
        background-color: #303641;
        color: #C1C3C6;
        box-sizing: border-box;

      }

      .container{
        height: 85vh;

        display: flex;
        align-items: center;
        justify-content: center;
        margin: auto;
      }
      .form-signin{
        width: 430px;
        padding: 15px;
        margin: 0 auto;
      }
      .checkbox{
        text-align: right;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <form class="form-signin" role="form" action="index.html">
        <h3 class="form-signin-heading">Panel </h3>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class="glyphicon glyphicon-user"></i>
            </div>
            <input type="text" class="form-control" name="username" id="username" placeholder="Usuario" autocomplete="off" />
          </div>
        </div>

        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class=" glyphicon glyphicon-lock "></i>
            </div>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" />
          </div>
        </div>

        <label class="checkbox">
          <input type="checkbox" value="remember-me"> &nbsp Recuerdame
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit" id="entrar">Entrar</button>
      </form>

    </div>
    <br><br>
    <!--footer-->
    <div class="site-footer login-footer">
      <div class="container1">
        <div class="copyright clearfix text-center">
          <h3>Mainetti panel</h3>
         </div>
      </div>
    </div>

    <script>
      const entrar= document.getElementById("entrar").addEventListener("click",function (e) {
          e.preventDefault();
          location.href ="./panel2/index.php";
      })
    </script>

  </body>
</html>
