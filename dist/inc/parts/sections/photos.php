﻿<?php /* Photos Section */ ?>
<section id="photos">
	<?php title("Fotos"); ?>

	<div class="content">
		<div class="container">

			<div class="row description">
				<div class="off-md-2 col-md-8 off-xs-1 col-xs-10">
					<p>Nesses 11 anos de namoro, conhecemos alguns lugares legais e passamos por diversos momentos e fases, na qual em algumas oportunidades conseguimos registrar.</p>
				</div>
			</div>

		</div>
		<div class="container-fluid">

			<div class="row middle-md">
				<div class="col-md-4 col-xs-12">
				<iframe width="100%" height="360" src="https://www.youtube.com/embed/6MmNsu9oOLk?rel=0&amp;controls=1" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="col-md-8 col-xs-12">
					<div class="gallery">
						<?php
						$dir          = 'assets/img/gallery';
						$file_display = array(
							'jpg',
							'jpeg',
							'png',
							'gif'
							);

						if (file_exists($dir) == false) {
							echo 'Directory \'', $dir, '\' not found!';
						} else {
							$dir_contents = scandir($dir);

							foreach ($dir_contents as $file) {
								$tmp = explode('.', $file);
								$file_type = strtolower(end($tmp));

								if ($file !== '.' && $file !== '..' && in_array($file_type, $file_display) == true) {
									echo '<a class="image" href="'. $dir. '/'. $file. '"><img src="inc/timthumb.php?src='. $dir. '/'. $file. '&w=70" /></a>';
								}
							}
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>


</section>