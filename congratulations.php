<style>

.congratsTitle {
  font-family: 'SF UI Display Semibold';
  font-size: 28.5px;
  font-weight: 600;
  text-align: center;
  color: #242833;
  margin-top: 137px;
}

.trophy {
  width: 174px;
  height: 174px;
  margin-top:20px;
}

.btnBack {
    background-color: Transparent;
    background-repeat:no-repeat;
    border: none;
    cursor:pointer;
    overflow: hidden;
    outline:none;
    box-sizing: border-box;
    display: inline-block;
    width: 325px;
    height: 50px;
    border-radius: 7px;
    background-image: linear-gradient(to right, #78b5fa 1%, #9586fd);
}

.btnLearning {
    display: table;
    margin: 0 auto;
    overflow: hidden;
    bottom: 0;
}

.checkMark {
  height: 40px;
  margin-top: 40px;
  margin-bottom: 20px;
}

.congratsTitle p {
  font-family: 'SF UI Display Semibold';
  font-size: 22.8px;
  font-weight: 600;
  text-align: center;
  color: #242833;
}

.btnBack p {
  font-family: 'SF UI Display Semibold';
  font-size: 16px;
  font-weight: 600;
  margin-top: 10px;
    margin-bottom: 10px;
  text-align: center;
  color: #ffffff;
}

.bg {
  margin-bottom: 55px;
}

</style>

<?php
$course = $_GET["course"];
$idCourse = selecionaumdado("SELECT idAula FROM pergunta WHERE id='".$course."'");
$nameCourse = selecionaumdado("SELECT titulo FROM aula WHERE id='".$idCourse["idAula"]."'");

if (isset($_GET["goToMenu"])) {
    $menuSwitch = '0';
}
?>

<div class="bg">
    <div class="congratsTitle">
    <h1>Congratulations</h1>
    <img class="trophy" src="../img/Imagens/Congratulations.png" alt="Congratulations"><br>
    <img class="checkMark" src="../img/icons/check.png" alt="Check">
    <p><?php print($nameCourse["titulo"]); ?></p>
</div>

<div class="btnLearning">
    <form method="get">
    <button class="btnBack" type="submit"> <p>
        Continue learning
    </p> </button>
    </form>
</div>
</div>
