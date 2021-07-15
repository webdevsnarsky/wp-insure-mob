<section class="about">
			<div class="container">
				<div class="about__inner">
					<div class="about__row row">
						<div class="about__image-wrap">
							<img src="<?php the_field('about_image') ?>" alt="about" class="about__image">
						</div>
						<div class="about__content">
							<h2 class="about__title title"><?php the_field('about_title') ?></h2>
							<p class="about__descr"><?php the_field('about_descr') ?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>