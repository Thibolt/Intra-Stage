<?php
include ('students-header.php');
include ('students-static-navbar-form.php');
?>
<div class="jumbotron">
    <h2><span class="glyphicon glyphicon-file"></span> Formulaire de stage</h2>
    <hr>
    <br />
    <form name="student-form" method="" action="#" >
        <legend>Elève | SIO</legend>
        <label for="student-name">Nom Prénom</label>
        <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <select class="form-control" id="student-name" name="student_name" required="">
                <option value="#"></option>
            </select>
        </div>

        <br/>
        
        <label for="student-option">Option</label>
        <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <select class="form-control" id="student-option" name="student_option" required="">
                <option value="SISR">SISR</option>
                <option value="SLAM">SLAM</option>
            </select>
        </div>

        <br/>

        <label for="student-born">Date de naissance</label>
        <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
            <input class="form-control" type="date" id="student-born" name="student_born" placeholder="jj/mm/aaaa" required="">
        </div>

        <br/>

        <label for="student-address">Adresse</label>
        <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
            <input class="form-control" type="text" id="student-address" name="student" placeholder="42, rue d'unix" required="">
        </div>

        <br/>

        <label for="student-postalCode">Code Postal</label>
        <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span></span>
            <input class="form-control" type="text" maxlength="5" id="student-postalCode" name="student_postalCode" placeholder="86000" required="">
        </div>

        <br/>

        <label for="student-city">Ville</label>
        <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span></span>
            <input class="form-control force-capital" type="Text" id="student-city" name="student_city" placeholder="POITIERS" required="">
        </div>

        <br/>
</div>
<div class="jumbotron">
    <legend>L'Entreprise</legend>
    <label for="entreprise-name">Nom</label>
    <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-flag"></span></span>
        <input class="form-control force-capital" type="Text" id="entreprise-name" name="entreprise_name" placeholder="Nom de l'entreprise" required="">
    </div>

    <br/>

    <label for="entreprise-address">Adresse</label>
    <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
        <input class="form-control" type="text" id="entreprise-address" name="entreprise_address" placeholder="42, rue du GNU" required="">
    </div>

    <br/>

    <label for="entreprise-addressBis">Adresse suite</label>
    <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
        <input class="form-control" type="text" id="entreprise-addressBis" name="entreprise_addressBis" placeholder="Zone Industrielle, CEDEX 08" required="">
    </div>

    <br/>

    <label for="entreprise-PostalCode">Code Postal</label>
    <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span></span>
        <input class="form-control" type="text" maxlength="5" id="entreprise-PostalCode" name="entreprise_PostalCode" placeholder="86000" required="">
    </div>

    <br/>

    <label for="entreprise-city">Ville</label>
    <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span></span>
        <input class="form-control force-capital" type="Text" id="entreprise-city" name="entreprise_city" placeholder="POITIERS" required="">
    </div>

    <br/>

    <label for="entreprise-tel">Téléphone</label>
    <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-phone-alt"></span></span>
        <input class="form-control" type="tel" id="entreprise-tel" name="entreprise_tel" placeholder="05-49-01-02-03" required="">
    </div>

    <br />

</div>
<div class="jumbotron">
    <legend>Représentant</legend>
    <label for="rep-civility">Civilité</label>
    <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
        <select class="form-control" id="rep-civility" name="rep_civility" required="">
            <option value="Monsieur">Monsieur</option>
            <option value="Mademoiselle">Mademoiselle</option>
            <option value="Madame">Madame</option>
        </select>
    </div>

    <br/>

    <label for="rep-name">Nom</label>
    <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
        <input class="form-control force-capital" type="text" id="rep-name" name="rep_name" placeholder="Stallman" required="">
    </div>

    <br/>

    <label for="rep-firstName">Prénom</label>
    <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
        <input class="form-control" type="text" id="rep-firstName" name="rep_firstName" placeholder="Richard">
    </div>

    <br/>

    <label for="rep-fonction">Fonction</label>
    <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-briefcase"></span></span>
        <input class="form-control" type="text" id="rep-fonction" name="rep_fonction" placeholder="Directeur des Services d'Informations" required="">
    </div>

    <br />

</div>
<div class="jumbotron">
    <legend>Maître de stage</legend>
    <label for="master-civility">Civilité</label>
    <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
        <select class="form-control" id="master-civility" name="master_civility" required="">
            <option value="Monsieur">Monsieur</option>
            <option value="Mademoiselle">Mademoiselle</option>
            <option value="Madame">Madame</option>
        </select>
    </div>

    <br/>

    <label for="master-name">Nom</label>
    <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
        <input class="form-control force-capital" type="text" id="master-name" name="master_name" placeholder="Torvalds" required="">
    </div>

    <br/>

    <label for="master-firstName">Prénom</label>
    <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
        <input class="form-control" type="text" id="master-firstName" name="master_firstName" placeholder="linux">
    </div>

    <br/>

    <label for="master-fonction">Fonction</label>
    <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-briefcase"></span></span>
        <input class="form-control" type="text" id="master-fonction" name="master_fonction" placeholder="Administrateur ..." required="">
    </div>

    <br/>

    <label for="master-tel">Téléphone</label>
    <div class="input-group">
        <span class="input-group-addon"><span class="glyphicon glyphicon-phone-alt"></span></span>
        <input class="form-control" type="tel" id="master-tel" name="master_tel" placeholder="05-49-01-02-03" required="">
    </div>

    <br/>

    <label for="master-email">E-mail</label>
    <div class="input-group">
        <span class="input-group-addon">@</span>
        <input class="form-control" type="email" id="master-email" name="master_email" placeholder="exemple@exemple.fr" required="">
    </div>
</div>
<div class="jumbotron">
    <legend>Confirmation</legend>
    <div class="well">
        Nous vous rappelons que toutes les informations rentrées dans ce formulaire servirons à la rédaction de votre convention de stage.
        Par ailleurs toute fausse information annulera la convention de stage.
    </div>
    <input type="hidden" id="date-time" name="date_time" value="#">
    <p class="center"><button class="btn btn-primary btn-lg" type="submit">Envoyer</button></p>
</div>
</form>
<?php
include('students-footer.php');
?>
