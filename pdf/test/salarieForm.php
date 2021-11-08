<?php
/**
 * Formulaire salarié
 */
// Si l'action n'est pas fournie, on la crée avec la valeur par défaut (le formulaire s'appelle lui-même) 
if (!isset($action)) {
  $action = '#';
}
// Si l'ID n'est pas fourni, on ne la passe pas dans la query string de l'URL
$query_string=null;
if ($salarie->get_id() !=""){
  $query_string = "?id=".$salarie->get_id();
}
// Empèche la saisie dans le formulaire si le booléen $is_disabled est à vrai
$disabled="";
if (isset($is_disabled) && $is_disabled==true) {
  $disabled="disabled";
}
?>
<form action="<?php echo $action.$query_string; ?>" method="post">
  <p>Matricule<br /><input type="text" name="matricule" value="<?php echo $salarie->get_matricule(); ?>" <?php echo $disabled; ?> ></p>
  <p>Nom<br /><input type="text" name="nom" value="<?php echo $salarie->get_nom(); ?>" <?php echo $disabled; ?>></p>
  <p>Prénom<br /><input type="text" name="prenom" value="<?php echo $salarie->get_prenom(); ?>" <?php echo $disabled; ?>></p>
  <p>Service<br />
    <select name="id_service" <?php echo $disabled; ?>>
      <?php
// Affiche la liste des services dans une dropdown list
foreach ($services as $service) {
    // Sélectionne le service dans la dropdown list s'il existe
    if ($salarie->get_id_service()==$service->get_id()) {
        $selected = 'selected';
    } else {
        $selected = '';
    }
    echo '<option value="'.$service->get_id().'" '.$selected.'>'.$service->get_libelle().'</option>'.PHP_EOL;
}
?>
    </select>
  </p>
  <br />
  <p><input type="submit" name="submit" value="OK"></p>
</form>