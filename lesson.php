<div class="lesson">
    <?php
    $id = $_GET["lesson"];
    $posts = selecionadiversosdados("SELECT * FROM `aula` WHERE id=$id");
    $content = selecionadiversosdados("SELECT * FROM pergunta WHERE idAula = $id");
        foreach($posts as $p) {
            ?>
            <div>
                <div class="title" style="margin-top:25px; margin-bottom:25px;">
                    <h1><?php print($p["titulo"]); ?></h1>
                </div>

                <div class="conteudo">
                    <p><?php print($p["conteudo"]); ?></p>
                </div>
            </div>
            <h2 class="title" style="margin-top: 25px;">Questions</h2>
            <div class="questionBox" style="margin-bottom: 50px;">
            <?php
            foreach ($content as $c) {
                ?> 
                    <form method="get">
                        <button class="card" type="submit" name="opt" value="2">
                            <p><?php print($c["titulo"]); ?></p>
                        </button>
                        <input type="hidden" name="idAns" value="<?php print($c["id"]); ?>">
                    </form>
                <?php
            }
        }
    ?></div>
</div>