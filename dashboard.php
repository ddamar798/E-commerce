<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Register Succes!";
            } else {
                echo "Register Failed!";
            }
        ?>
    </p>
<?php endif; ?>