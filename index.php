<?php
    require("essential/db/db.php");
    require("essential/ses/session.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Optimus Web Project</title>
        <?php
        require("include/imp/AllStylesheets.php");
        require("include/imp/topscripts.php");
        ?>
	</head>
	<body style="background: #f3f3f3">
    <?php
    //login/signup modal
        require("forward/modal.php");
    //header
        include("include/head/header.php");
        ?>
    <div class="container-fluid mainBar-fluid">
        <?php
        //maincontent
            require("forward/dataindex.php");
        ?>
    </div>
    <?php
    //footer
        require("include/foot/footer.php");
        require("include/imp/bottomscripts.php");
    ?>
	</body>
</html>