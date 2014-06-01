<?php
  include_once("./config/constants.php");
  include_once("./template/header.tpl.php");
?>



      <div class="section">

        <h1 class="page-header">Instructions</h1>

        <div class="alert alert-info">
          <p>First of all, <strong>THANK YOU! =)</strong></p>
          <p>Your help is essential for the success of this work, and we're no just saying it! If you wish to understand a little bit better what this research aims to achieve and how it can impact on computational linguistics and conceptual modelling fields, please refer to the <a href="<?= APPLICATION_ROOT ?>/about">about section</a>.</p>
        </div>

        <p>When you click on the <strong>Begin Evaluation</strong> button in the end of this page you'll be redirected to the <em>evaluate</em> section of this application. Once the evaluation begins you'll be able to interrupt it at any time you wish without losing the work done up to that point. When you log back with your username the system will take you to the point where you have stopped.</p>
        <p>We have conducted an automatic mapping of <a href="http://wordnet.princeton.edu/">Wordnet</a> synsets to Semantic Types. This evaluation aims at gathering information about how correct the mapping rules applied are, and this is where you can help! Once at a time we'll show you <em>synset</em> and the correspondent Semantic Type our mapping have related to it. Your job is to tell us if the given synset can be seen as a subtype of the given Semantic Type.</p>
        <p>A <strong>synset</strong> is the name given to a <em>"Synonym Set"</em>, which is simply a set of words that on a given context have the same meaning (synonyms), This meaning is also referred to as the <em>"gloss"</em>. An example of a simple synset is given below.</p>


        <div class="panel panel-warning bigger-margin">
          <div class="panel-heading">
            <h3 class="panel-title"><strong>Wordnet Synset</strong></h3>
          </div>
          <div class="panel-body">
            <dl class="dl-horizontal">
              <dt>Words:</dt>
              <dd>car, auto, automobile, machine, motorcar</dd>
              <dt>Gloss:</dt>
              <dd>a motor vehicle with four wheels; usually propelled by an internal combustion engine. "he needs a car to get to work".</dd>
            </dl>
          </div>
        </div>

        <p>The <strong>Words</strong> section gives the different words that can be used as synonyms for the specified meaning. The <strong>Gloss</strong> part gives the definition of that meaning, and sometimes a example of a sentence where one of the words related to that meaning can be used (inside quotation marks).</p>
        <p>On the other hand <strong>Semantic Types</strong> are meta classes responsible for grouping words by general meanings. Each Semantic Type describe a meaning that can be assumed by nouns or verbs. In this work we are dealing exclusively with Noun Semantic Types, and consequently only noun synsets. An example of  the Semantic Type that would be related to the "car" synset given above is <em>Artefact</em>, which is decribed below.</p>

        <div class="panel panel-success bigger-margin">
          <div class="panel-heading">
            <h3 class="panel-title"><strong>Semantic Type</strong></h3>
          </div>
          <div class="panel-body">
            <dl class="dl-horizontal">
              <dt>Name:</dt>
              <dd>Artefact</dd>
              <dt>Definition:</dt>
              <dd>Metaclasse cujas metapropriedades determinam classes de coisas fabricadas pelo homem, ou seja, que não existem na natureza.</dd>
            </dl>
          </div>
        </div>

        <p>Sometimes more than one Semantic type will be related to the synset. When this happens you have to evaluate the mapping as a whole, meaning that you must observe if indeed both Semantic Types can be related to the synset. Once Synset and Semantic Type are analyzed please tell us if the mapping is correct or wrong by clicking on the correpondent button. Once clicked, your answer will be saved and a new mapping will be shown for you to evaluate.</p>
        <p>Please, click the button below to begin.</p>

        <div class="text-center">
          <button type="button" class="btn btn-success btn-lg">
            <span class="glyphicon glyphicon-play"></span>&nbsp;&nbsp;&nbsp;Begin Evaluation
          </button>
        </div>

        <div class="bs-callout bs-callout-danger">
          <h4 class="text-danger"><strong>We won't be able to use partial answers!</strong></h4>
          <p>Please, understand that we won't be able to use partial answers, so your participation will only be useful to us if you evaluate all the mappings shown. If you have ever conducted an academic research, you can understand how difficult it is to find specialists and that they are not allways willing to help, so...</p>
          <p><strong>Thank you very much in advance!&nbsp;&nbsp;&nbsp;:)</strong></p>
        </div>



        <div class="clearfix"></div>


      </div>


<?php include_once("./template/footer.tpl.php"); ?>
