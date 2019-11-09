<?php
include_once DB_DIR.'catBreedController.php';
    ?>

<div class="row">
    <form class="col s12">
        <div class="row">
            <div class="input-field col l4 m6 s12">
                <input id="icon_prefix" type="text" class="validate">
                <label for="icon_prefix">Cat name</label>
            </div>
            <div class="input-field col l4 m6 s12">
                <select>
                    <option value="" disabled selected>breed</option>
                    <?php foreach (getBreedList() as $breed) : ?>
                        <option value="<?=$breed['breed_name']?>"><?=$breed['breed_name']?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <div class="col l4 m12">
                <span class="slider-val" id="lower-value"></span>
                <div id="range-slider"></div>
                <span class="slider-val" id="upper-value"></span>
            </div>
            <button class="btn waves-effect waves-light col l4 m6 s12 offset-l4 offset-m3" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
            </button>
        </div>
    </form>
</div>
