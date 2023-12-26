<?php if(count($errors) > 0):?>
    <div class="errormsg">
        <ul>
            <?php foreach($errors as $error):?>
                <li><?php echo $error?></li>    
            <?php endforeach;?>
        </ul>
    </div>
<?php endif;?>