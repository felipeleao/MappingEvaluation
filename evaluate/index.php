<?php
  include_once("../config/constants.php");
  include_once("../login/security.php");

  protectPage(); // Chama a função que protege a página

  include_once("../template/header.tpl.php");
?>



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


<?php include_once("../template/footer.tpl.php"); ?>
