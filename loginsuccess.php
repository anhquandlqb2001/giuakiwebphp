<?php

    require "./header.php";
?>

    <main>
    <?php
          if (isset($_SESSION['username'])) {
            echo '<h3 class="form-title active" id="primary">'.$_SESSION['username'].'</h3>';
          }
    ?>
    </main>

<?php

    require "./footer.php";