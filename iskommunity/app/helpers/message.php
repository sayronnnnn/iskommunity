<?php if(isset($_SESSION['message'])): ?>
    <div class="msg">
        <p>You are logged in!</p>
    </div>
    <?php 
    unset($_SESSION['message']);
    ?>
<?php endif;?>