
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.ico">

    <title>Mapping Evaluation</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Static navbar -->
    <div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="images/LogoSmall.png">&nbsp;&nbsp;Mapping Evaluation</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="http://www.fleao.com.br">by Felipe Leão</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <li><a href="../navbar/">Instructions</a></li>
            <li class="active"><a href="./">Evaluate!</a></li>
              <li><a href="../navbar/">About the Research</a></li>
            <li><a href="../navbar-fixed-top/">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>


    <div class="container">


      <div class="row extra-margin">
        <div class="col-md-12">
          <h2><span class="glyphicon glyphicon-asterisk"></span> Is the <strong>Synset</strong> a subtype of the <strong>Semantic Type</strong>?</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="panel panel-warning">
            <div class="panel-heading">
              <h3 class="panel-title"><strong>Wordnet Synset</strong></h3>
            </div>
            <div class="panel-body">
              <dl class="dl-horizontal">
                <dt>Words:</dt>
                <dd>Procurement, Procrurance, Procural</dd>
                <dt>Gloss:</dt>
                <dd>the act of getting possession of something; "he was responsible for the procurement of materials and supplies".</dd>
              </dl>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title"><strong>Semantic Type</strong></h3>
            </div>
            <div class="panel-body">
              <dl class="dl-horizontal">
                <dt>Name:</dt>
                <dd>Animate</dd>
                <dt>Definition:</dt>
                <dd>Lorem ipsum dolor sit amet.</dd>
                <hr/>
                <dt>Name:</dt>
                <dd>Animate</dd>
                <dt>Definition:</dt>
                <dd>Lorem ipsum dolor sit amet.</dd>
              </dl>
            </div>
          </div>
        </div>
      </div>
      <div class="row text-center extra-margin">
        <div class="col-md-12">
            <button type="button" class="btn btn-danger">
              <span class="glyphicon glyphicon-remove"></span> Wrong
            </button>
            <button type="button" class="btn btn-success">
              <span class="glyphicon glyphicon-ok"></span> Correct
            </button>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <p class="text-center text-muted"><small>Evaluations completed <span class="text-success"><strong>40%</strong></span> (325 of 1000)</small></p>
          <div class="progress">
            <div class="progress-bar progress-bar-info" style="width: 40%"></div>
          </div>
        </div>
      </div>




    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
