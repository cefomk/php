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
			<img src="<?= $val['image']
					?>" alt="">
			<caption>
				<p><?= $val['firstName']
					?> <? //= $val['lastName'] 
						?></p>
				<p><?= $val['email']
					?></p>
			</caption>
		</figure>
	<?php
	}
	?>
	<?php
	// for ($i = 0; $i < count($jsonDummyArray['users']); $i++) {
	// 	echo '<p><img src="' . $jsonDummyArray['users'][$i]['image'] . '"></p>';
	// 	echo '<p>' . $jsonDummyArray['users'][$i]['firstName'] . ' ' . $jsonDummyArray['users'][$i]['lastName'] . ' </p>';
	// 	echo '<p>' . $jsonDummyArray['users'][$i]['email'] . ' </p>';
	// }

	?>

</div>