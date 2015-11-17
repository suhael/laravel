<?php
/**
 * Created by IntelliJ IDEA.
 * User: sakhtar
 * Date: 17/09/2014
 * Time: 10:29
 */
class Tag extends Eloquent {
    public function recipes()
    {
        return $this->belongsToMany('Recipe', 'recipe_tags');
    }
}

?>