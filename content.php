<?php
$idAns = $_GET["idAns"];
$answers = selecionadiversosdados("SELECT * FROM resposta WHERE idPergunta = $idAns");
$c = selecionaumdado("SELECT * FROM pergunta WHERE id = $idAns");
$numQuestions = selecionaumdado("SELECT numQuestions FROM aula WHERE id='".$c["id"]."'");
$nextSwitch = "next";

$counting = executasql("SELECT COUNT(*) FROM achievements WHERE idUser='".$_SESSION["ID"]."'");
if($numQuestions["numQuestions"] <= $counting) {
    $nextSwitch = "back";
} else {
  $nextSwitch = "next";
}
$random = rand(1,3);
    ?>
        <div class="titulo-pergunta"><p>Question <?php print($c["id"]); ?></p></div>
        <div class="questionDesc">
            <h1><?php print($c["titulo"]); ?></h1>
            <img class="questionImg" src="../img/Imagens/<?php print($random); ?>.png" alt="">
        </div>
        <form method="post" id="answerForm">
    <?php
    foreach ($answers as $a) {
        ?>
            <div class="card form-check box_<?php print($a["id"]); ?>">
            <input class="check form-check-input" type="radio" name="checkAnswer" id="ckAns_<?php print($a["id"]); ?>" value="<?php print($a["id"]); ?>">
            <label class="form-check-label" for="ckAns_<?php print($a["id"]); ?>">
                <p><?php print($a["conteudo"]);?></p>
            </label>
            </div>
            <br>
        <?php
    }
    ?>
    <input type="hidden" id="question" value="<?php print($idAns); ?>">
    <button class="btn btn-primary" id="submitAnswer" type="submit">Send</button>
    </form> <?php
?>

<div class="modal fade" id="modalFail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actually...</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus quos perferendis commodi blanditiis delectus cumque repudiandae aliquid, consequatur rem inventore, fugit libero fugiat officia sed temporibus nihil. Hic, dicta ducimus?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Try again</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalSuccess" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="right" id="exampleModalLabel">You are right!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus quos perferendis commodi blanditiis delectus cumque repudiandae aliquid, consequatur rem inventore, fugit libero fugiat officia sed temporibus nihil. Hic, dicta ducimus?
      </div>
      <div class="modal-footer">
              <button type="button" class="btn btn-primary" id="<?php print($nextSwitch); ?>">Next</button>
      </div>
    </div>
  </div>
</div>
