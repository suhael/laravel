<?php
/**
 * Created by IntelliJ IDEA.
 * User: sakhtar
 * Date: 16/09/2014
 * Time: 17:03
 */
class Allergy extends Eloquent {
    public function recipes()
    {
        return $this->belongsToMany('Recipe', 'recipe_allergy');
    }
}
?>