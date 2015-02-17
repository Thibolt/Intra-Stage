<?php
include('students-header.php');
include ('students-static-navbar-eval.php');
?>
<div class="jumbotron">
    <h2><span class="glyphicon glyphicon-star"></span> Evaluation de son lieu de stage</h2>
    <hr>
    <div class="well">
        Suite à votre stage vous avez la possibilité de lui donner une note. Cette note sera basée sur plusieurs critères.
    </div>
    <form name="" method="" action="">
    <div class="well">
        <label for="">Quelle note donneriez-vous à accueil qui vous à été porter le premier jour ?</label>
        <br/>
        <span class="radio-eval"><input type="radio" id="pg-1" name="personnal_greeting" value="1">1</span>
        <span class="radio-eval"><input type="radio" id="pg-2" name="personnal_greeting" value="2">2</span>
        <span class="radio-eval"><input type="radio" id="pg-3" name="personnal_greeting" value="3">3</span>
        <span class="radio-eval"><input type="radio" id="pg-4" name="personnal_greeting" value="4">4</span>
        <span class="radio-eval"><input type="radio" id="pg-5" name="personnal_greeting" value="5">5</span>
        <span class="radio-eval"><input type="radio" id="pg-6" name="personnal_greeting" value="6">6</span>
        <span class="radio-eval"><input type="radio" id="pg-7" name="personnal_greeting" value="7">7</span>
        <span class="radio-eval"><input type="radio" id="pg-8" name="personnal_greeting" value="8">8</span>
        <span class="radio-eval"><input type="radio" id="pg-9" name="personnal_greeting" value="9">9</span>
        <span class="radio-eval"><input type="radio" id="pg-10" name="personnal_greeting" value="10">10</span>
    </div>
    <div class="well">
        <label for="">Quelle note donneriez-vous à l'ambiance dans le service auquel vous étiez pendant la période de stage ?</label>
        <br/>
        <span class="radio-eval"><input type="radio" id="as-1" name="atmosphere_service" value="1">1</span>
        <span class="radio-eval"><input type="radio" id="as-2" name="atmosphere_service" value="2">2</span>
        <span class="radio-eval"><input type="radio" id="as-3" name="atmosphere_service" value="3">3</span>
        <span class="radio-eval"><input type="radio" id="as-4" name="atmosphere_service" value="4">4</span>
        <span class="radio-eval"><input type="radio" id="as-5" name="atmosphere_service" value="5">5</span>
        <span class="radio-eval"><input type="radio" id="as-6" name="atmosphere_service" value="6">6</span>
        <span class="radio-eval"><input type="radio" id="as-7" name="atmosphere_service" value="7">7</span>
        <span class="radio-eval"><input type="radio" id="as-8" name="atmosphere_service" value="8">8</span>
        <span class="radio-eval"><input type="radio" id="as-9" name="atmosphere_service" value="9">9</span>
        <span class="radio-eval"><input type="radio" id="as-10" name="atmosphere_service" value="10">10</span>
    </div>
    <div class="well">
        <label for="missions">Quelle note donneriez-vous aux différentes tâches que vous avez pu effectuer tout au long du stage ?</label>
        <br/>
        <span class="radio-eval"><input type="radio" id="mi-1" name="missions" value="1">1</span>
        <span class="radio-eval"><input type="radio" id="mi-2" name="missions" value="2">2</span>
        <span class="radio-eval"><input type="radio" id="mi-3" name="missions" value="3">3</span>
        <span class="radio-eval"><input type="radio" id="mi-4" name="missions" value="4">4</span>
        <span class="radio-eval"><input type="radio" id="mi-5" name="missions" value="5">5</span>
        <span class="radio-eval"><input type="radio" id="mi-6" name="missions" value="6">6</span>
        <span class="radio-eval"><input type="radio" id="mi-7" name="missions" value="7">7</span>
        <span class="radio-eval"><input type="radio" id="mi-8" name="missions" value="8">8</span>
        <span class="radio-eval"><input type="radio" id="mi-9" name="missions" value="9">9</span>
        <span class="radio-eval"><input type="radio" id="mi-10" name="missions" value="10">10</span>
    </div>
    <div class="well">
        <label for="missions">Quelle note donneriez-vous sur l'environnement technologique de l'entreprise ? (exemple : ordianteur de stagiaire avec 500Mo de RAM)</label>
        <br/>
        <span class="radio-eval"><input type="radio" id="te-1" name="technological environment" value="1">1</span>
        <span class="radio-eval"><input type="radio" id="te-2" name="technological environment" value="2">2</span>
        <span class="radio-eval"><input type="radio" id="te-3" name="technological environment" value="3">3</span>
        <span class="radio-eval"><input type="radio" id="te-4" name="technological environment" value="4">4</span>
        <span class="radio-eval"><input type="radio" id="te-5" name="technological environment" value="5">5</span>
        <span class="radio-eval"><input type="radio" id="te-6" name="technological environment" value="6">6</span>
        <span class="radio-eval"><input type="radio" id="te-7" name="technological environment" value="7">7</span>
        <span class="radio-eval"><input type="radio" id="te-8" name="technological environment" value="8">8</span>
        <span class="radio-eval"><input type="radio" id="te-9" name="technological environment" value="9">9</span>
        <span class="radio-eval"><input type="radio" id="te-10" name="technological environment" value="10">10</span>
    </div>
    <div class="well">
        <label for="missions">Avez-vous eu une gratification pour votre travail effectué pendant la période de stage ?</label>
        <br/>
        <span class="radio-eval"><input type="radio" id="gra-1" name="gratification" value="yes">Oui</span>
        <span class="radio-eval"><input type="radio" id="gra-2" name="gratification" value="no">Non</span>
    </div>
    <div class="well">
        <label for="comment">Vous pouvez laisser un commentaire sur votre stage :</label>
        <br/>
        <span><textarea rows="8" cols="100" id="comment" maxlength="600" placeholder="600 caractères maximum..." name="comment" value=""></textarea></span>
    </div>
        <p class="center"><button class="btn btn-primary btn-lg ">Soumettre</button></p>
    </form>
</div>
<?php
include('students-footer.php');
?>