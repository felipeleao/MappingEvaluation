<?php
  include_once("../config/constants.php");
  include_once("../login/security.php");

  protectPage(); // Chama a função que protege a página

  include_once("../template/header.tpl.php");
?>


    <div id="main_content">
        <div class="row extra-margin">
            <div class="col-md-12">
              <h2 class="less-margin"><span class="glyphicon glyphicon-asterisk"></span> Is the <strong>Synset</strong> a subtype of the <strong>Semantic Type</strong>?</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
              <div class="panel panel-warning" id="synset">
                <div class="panel-heading">
                  <h3 class="panel-title"><strong>Wordnet Synset</strong></h3>
                </div>
                <div class="panel-body">
                  <dl class="dl-horizontal content">
                    <!-- here goes the synsets -->
                    <p class="text-center"><strong>Loading...</strong></p>
                  </dl>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="panel panel-success" id="semantic_type">
                <div class="panel-heading">
                  <h3 class="panel-title"><strong>Semantic Type</strong></h3>
                </div>
                <div class="panel-body">
                  <dl class="dl-horizontal content">
                    <!-- here goes the semantic types -->
                    <p class="text-center"><strong>Loading...</strong></p>
                  </dl>
                </div>
              </div>
            </div>
        </div>
        <div class="row text-center extra-margin">
            <div class="col-md-12">
                <button type="button" class="btn btn-danger" id="btn_wrong">
                  <span class="glyphicon glyphicon-remove"></span> Wrong
                </button>
                <button type="button" class="btn btn-success" id="btn_correct">
                  <span class="glyphicon glyphicon-ok"></span> Correct
                </button>
            </div>
        </div>
    </div>
    <div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-center text-muted">
                    <small>Evaluations completed <strong>
                    <span id="percentage" class="text-success">0%</span></strong>
                    (<span id="evaluated">?</span> of <span id="totalSynsets">?</span>)</small>
                </p>
            <div class="progress">
                <div id="progressbar" class="progress-bar progress-bar-info" style="width: 0%"></div>
            </div>
        </div>
    </div>





<?php include_once("../template/commonjs.tpl.php"); ?>

    <script>
        var application_root = "<?= APPLICATION_ROOT; ?>";
        $(window).ready(function(){
            loadMapping();
            loadButtonActions();
        });
    </script>

<?php include_once("../template/footer.tpl.php"); ?>
