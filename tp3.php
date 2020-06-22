<?php include 'header.php'; 

$portrait1 = array('name'=>'Victor', 'firstname'=>'Hugo', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
$portrait2 = array('name'=>'Jean', 'firstname'=>'de La Fontaine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
$portrait3 = array('name'=>'Pierre', 'firstname'=>'Corneille', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
$portrait4 = array('name'=>'Jean', 'firstname'=>'Racine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');

?>

<!--
<div class="row">
    <div class="col-6 text-center mt-3">
        <p class="font-weight-bold text-center"><?= $portrait1['name'] . ' ' . $portrait1['firstname'] ?></p>
        <img class="img-fluid" src="<?= $portrait1['portrait'] ?>" alt="<?= $portrait1['name'] . ' ' . $portrait1['firstname'] ?>">
    </div>
    <div class="col-6 text-center mt-3">
        <p class="font-weight-bold text-center"><?= $portrait2['name'] . ' ' . $portrait2['firstname'] ?></p>
        <img class="img-fluid" src="<?= $portrait2['portrait'] ?>" alt="<?= $portrait2['name'] . ' ' . $portrait2['firstname'] ?>">
    </div>
    <div class="col-6 text-center mt-3">
        <p class="font-weight-bold text-center"><?= $portrait3['name'] . ' ' . $portrait3['firstname'] ?></p>
        <img class="img-fluid" src="<?= $portrait3['portrait'] ?>" alt="<?= $portrait3['name'] . ' ' . $portrait3['firstname'] ?>">
    </div>
    <div class="col-6 text-center mt-3">
        <p class="font-weight-bold text-center"><?= $portrait4['name'] . ' ' . $portrait4['firstname'] ?></p>
        <img class="img-fluid" src="<?= $portrait4['portrait'] ?>" alt="<?= $portrait4['name'] . ' ' . $portrait4['firstname'] ?>">
    </div>
</div>
-->

<?php function display($portrait) { ?>
        <div class="col-6 text-center mt-3 p-0">
            <p class="font-weight-bold text-center"><?= $portrait['name'] . ' ' . $portrait['firstname'] ?></p>
            <img class="img-fluid mb-3" style="width: 300px; height: 300px; border-radius: 50%" src="<?= $portrait['portrait'] ?>" alt="<?= $portrait['name'] . ' ' . $portrait['firstname'] ?>">
        </div>
<?php } ?>

<div class="row">
<?= display($portrait1) ?>
<?= display($portrait2) ?>
<?= display($portrait3) ?>
<?= display($portrait4) ?>
</div>

<?php include 'footer.php' ?>