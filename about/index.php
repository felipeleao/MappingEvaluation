<?php
  include_once("../config/constants.php");
  include_once("../template/header.tpl.php");
?>



      <div class="section">

        <h1 class="page-header">About the Research</h1>

        <p>The <strong>Mapping Evaluation</strong> intends to pose as a helper application on the evaluation step of the case study being currently conducted as a part of my Master's Research in Information Systems, being developed at <a href="http://www.unirio.br/">UNIRIO</a> (Federal University of the State of Rio de Janeiro). The main goal is to propose an automatic method to learn well-founded conceptual models through Natural Language Processing (NLP). A big part of this method is the mapping of WordNet synsets (along with their correspondent Supersenses) to Semantic Types.</p>
        <p>Out of the context of this research the mapping can be really useful by itself, since it expands the semantics of Wordnet. Considering the amount of projects around the world that use WordNet as a lexical/semantical database, we believe that many other researches can benefit from the relation of synsets to Semantic Types, which expose some attributes not currently available on WordNet.</p>

        <h2 class="page-header">WordNet</h2>

        <p><a href="http://wordnet.princeton.edu/">WordNet</a> is a large lexical database originally developed for the english language at Princeton University. Nouns, verbs, adjectives and adverbs are grouped into sets of cognitive synonyms (synsets), each expressing a distinct concept. Synsets are interlinked by means of conceptual-semantic and lexical relations. Such structure makes it a useful tool for computational linguistics and natural language processing.</p>
        <p>WordNet superficially resembles a thesaurus, in that it groups words together based on their meanings. However, there are some important distinctions. First, WordNet interlinks not just word forms—strings of letters—but specific senses of words. As a result, words that are found in close proximity to one another in the network are semantically disambiguated. Second, WordNet labels the semantic relations among words, whereas the groupings of words in a thesaurus does not follow any explicit pattern other than meaning similarity.</p>
        <p>Among the semantical relations approached by WordNet, it is possible to cite common multilingual relations, such as Hypernym/Hyponym, Holonym/Meronym and Derivational Relations.</p>
        <p>An online version of Princeton's WordNet is <a href="http://wordnetweb.princeton.edu/perl/webwn">publicly available</a>. If you wish to check similar projects for other languages  refer to <a href="http://globalwordnet.org/">globalwordnet.org</a>.</p>

        <h2 class="page-header">Semantic Types</h2>

        <p>Throughout this work, when using the term <em>Semantic Type</em>, we are referring to the classes participating on the semantic approach to english grammar developed by R.M.W Dixon, published by Oxford press in 2005 (1st ed.) under the title of <a href="http://global.oup.com/academic/product/a-semantic-approach-to-english-grammar-9780199283071;jsessionid=C007C781E607BDAF7273338D404E38E3?cc=br&lang=en&#">A Semantic Approach to English Grammar</a>.</p>
        <p>In its work Dixon describes the Semantic Types as a way of organizing the thousands of terms of a language under groups sharing a meaning element. While word classes (e.g. nouns, verbs, adjectives, etc.) are simply a grammatical way of organization, Semantic Types aim at grouping them semantically, helping to express a common meaning among all members. Even though Dixon focus on the english Semantic Types, such classes can be identified in any given language.</p>

        <h2 class="page-header">About the author</h2>

        <p>This project is being developed by <a href="http://www.fleao.com.br">Felipe Leão</a> (me) under the advisoring of professors Kate Revoredo and Fernanda Baião as a step of the research related to the development of a Master's thesis in Information Systems at UNIRIO. For more informations about the research and publications related to it go to my <a href="http://www.fleao.com.br/publications">publications</a> section.</p>


        <p class="text-center"><img src="<?= IMAGES_ROOT ?>/LogoMedium.png" /></p>

      </div>



        <div class="clearfix"></div>


      </div>


<?php include_once("../template/footer.tpl.php"); ?>
