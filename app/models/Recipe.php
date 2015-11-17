<?php
/**
 * Created by IntelliJ IDEA.
 * User: sakhtar
 * Date: 15/09/2014
 * Time: 16:32
 */
class Recipe extends Eloquent {
    public function ingredients()
    {
        return $this->belongsToMany('Ingredient', 'recipe_ingredients');
    }
    public function tags()
    {
        return $this->belongsToMany('Tag', 'recipe_tags');
    }
    public function allergys()
    {
        return $this->belongsToMany('Allergy', 'recipe_allergy');
    }
    public function mealtimes()
    {
        return $this->belongsToMany('MealTime', 'recipe_mealtime', 'recipe_id', 'meal_id');
    }
}
?>