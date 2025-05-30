<?php
include "libs/load.php"
?>
<!doctype html>
<html lang="en">

<?php
//print(dirname($_SERVER['DOCUMENT_ROOT'],2));
//printf($__site_config);
?>

<?php
load_template("_head")
?>

<body>
<?php
load_template("_header")
?>
<main>

<?php
load_template("_calltoaction")
?>

<?php
load_template("_photos")
?>
</main>

<?php
load_template("_footer")
?>
</body>
</html>