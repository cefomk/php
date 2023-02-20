<?php
include '../include/fonctions.php';

$jsonRandomUser = file_get_contents('https://randomuser.me/api/?results=20');
$jsonRandomUserArray = json_decode($jsonRandomUser, true);
//dd($jsonRandomUserArray);;
?>
<style>
.souligne {
	text-decoration: underline;
}
</style>
<div class="robot">

	<?php
	foreach ($jsonRandomUserArray['results'] as $key => $val) {
	?>
		<figure>
		<img src="<?= $val['picture']['large'] ?>" alt="">
			<caption>
			<?php if ($val['gender'] === 'female') { ?>	
				<p class="souligne"><?= $val['name']['first']?> <?= $val['name']['last']?></p>
			<?php } else { ?>
				<p><?= $val['name']['first']?> <?= $val['name']['last']?></p>
			<?php } ?>
				<p><?= $val['email']?></p>
			</caption>
		</figure>
	<?php
	}
	?>
	
</div>