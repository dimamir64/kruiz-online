<!DOCTYPE html>
<html lang="ru">
	<title>Список судовладельцев</title>
	<body>
		<ul>
			<pre>
				<?php foreach ($providers as $provider):?>

					<li><?php echo print_r($provider, true);?></li>

				<?php endforeach;?>
			</pre>
		</ul>
	</body>
</html>
