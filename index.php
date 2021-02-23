<?php
require "header.php";
require "database.php";
$date = null;
$h = null;
$m = null;
$s = null;
$error = null;
if (isset($_POST['update'])) {
      is_numeric($date = htmlentities($_POST['dat']));
      is_numeric($h = htmlentities($_POST['h']));
      is_numeric($m = htmlentities($_POST['m']));
      is_numeric($s = htmlentities($_POST['s']));


      try {
            if (!empty($data) || ($h > 0 && $h !== "") || ($m > 0 && $m !== "") || ($s > 0 && $s !== "")) {

                  $update = $db->prepare("UPDATE timer SET date='" . $date . "',h='" . $h . "',m='" . $m . "',s='" . $s . "' WHERE id=1");
                  $update->execute(array($date, $h, $m, $s));
            }
      } catch (\Throwable $th) {
            $error = $th->getMessage();
      }
}
?>

<div class="container">
      <div id="account_rendering" class="account_rendering"></div>
      <?php if ($error) : ?>
      <div class="error">Désoler mauvaise donnée</div>
      <?php endif; ?>
      <form action="" method="post" class="form">
            <input type="date" name="dat" id="date" class="date" value="<?= ($date < 0) ? $date == 0 : "" ?>">
            Hours &rArr;<input type="number" name="h" id="hours" min="0" class="hours" value="<?= $h ?>">
            Minute &rArr;<input type="number" name="m" id="minute" min="0" class="minute" value="<?= $m ?>">
            Second &rArr;<input type="number" name="s" id="second" min="0" class="second" value="<?= $s ?>"> <br>
            <input type="submit" name="update" id="update" min="0" value='update'>
      </form>


      <?php require "footer.php"; ?>