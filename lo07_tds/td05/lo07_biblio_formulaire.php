<?php

// biliotheque fonctions formulaire avec bootstrap
// --------------------------------------------------
// form_begin
// --------------------------------------------------

function form_begin($class, $method, $action) {
    echo ("\n<!-- ============================================== -->\n");
    echo ("<!-- form_begin : $class $method $action) -->\n");
    printf("<form class='%s' method='%s' action='%s'>\n", $class, $method, $action);
}

// --------------------------------------------------
// form_input_text
// --------------------------------------------------

function form_input_text($label, $name, $size, $value) {
    echo ("\n<!-- form_input_text : $label $name $size $value -->\n");
    echo ("  <p>\n");

    echo ("<div class='form-group col-6'>");
    echo (" <label for='$label' class=' fw-bold'>$label</label>");
    echo (" <input type='text' class='form-control' name='$name' size='$size' value='$value' >");
    echo ("</div>");
}


// =========================
// form_select
// =========================

// Parametre $label    : permet un affichage (balise label)
// Parametre $name     : attribut pour identifier le composant du formulaire
// Parametre $multiple : si cet attribut n'est pas vide alors sélection multiple possible
// Parametre $size     : attribut size de la balise select
// Parametre $liste    : un liste d'options. Vous utiliserez un foreach pour générer les balises option

function form_select($label, $name, $multiple, $size, $liste) {
    
    echo "<div class='form-group'>";
    echo "<label for='$name'>$label</label>";
    
    if ($multiple){ echo "<select class='form-control' id='$name' ";
    $name=$name.'[]';
                    echo " name='$name' multiple='$multiple'";
    }else{  echo "<select class='form-control' id='$name' name='$name'";}
    
    if ($size) echo " size='$size'";
    echo ">";
    foreach ($liste as $option) {
        echo "<option value='$option'>$option</option>";
    }
    echo "</select>";
    echo "</div>";

}

// =========================

function form_input_reset($value) {
    
    echo "<input type='reset' class='btn btn-secondary' value='$value'>";
}

// =========================

function form_input_submit($value) {
    echo "<input type='submit' class='btn btn-primary' value='$value'>";
}

// =========================


function form_end() {
    
    echo "</form>";
}

// =========================

?>


