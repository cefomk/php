<?php
$jsonDummy = file_get_contents('https://dummyjson.com/user');
$jsonDummyArray = json_decode($jsonDummy, true);

?>
<style>
	.robot {
		display: flex;
		flex-wrap: wrap;

	}
</style>
<div class="robot">

	<?php
	foreach ($jsonDummyArray['users'] as $key => $val) {
	?>
		<figure>
			<img src="<?= $val['image'] ?>" alt="">
			<caption>
				<p><?= $val['firstName'] ?> <?= $val['lastName'] ?></p>
				<p><?= $val['email'] ?></p>
			</caption>
		</figure>
	<?php
	}
	?>
</div>