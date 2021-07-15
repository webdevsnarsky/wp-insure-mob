<section class="promo" style="background:center/cover no-repeat url(<?php the_field('promo_bgc') ?>)">
	<div class="container">
		<div class="promo__inner">
			<h1 class="promo__title"><?php the_field('promo_title') ?></h1>
			<div class="promo__timer timer">
				<div class="row">
					<?php if (have_rows('timer')) : ?>
						<?php while (have_rows('timer')) : the_row(); ?>
							<div class="timer__item">
								<span class="timer__number timer__day"><?php the_sub_field('timer_numb'); ?></span>
								<p class="timer__unit"><?php the_sub_field('timer_ins'); ?></p>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="promo__wrap">
		<div class="container">
			<div class="promo__box">
				<div class="promo__holder">
					<button class="promo__button button">Заказать курс</button>
					<div class="promo__counts">
						<div class="promo__count">
							<span class="promo__count-name">Учеников всего:</span>
							<span class="promo__count-number promo__count-students"><?php the_field('promo_count_students') ?></span>
						</div>
						<div class="promo__count">
							<span class="promo__count-name">Успешно закончили курс:</span>
							<span class="promo__count-number  promo__count-succsess"><?php the_field('promo_count_succsess') ?></span>
						</div>
					</div>
				</div>
				<div class="promo__wrapper">
					<div class="promo__earned">
						<span class="promo__earned-name">Заработано учениками:</span>
						<span class="promo__earned-count"><?php the_field('promo_earned_count') ?><span class="currancy">₽</span></span>
					</div>
					<div class="promo__progress">
						<div class="promo__line-wrap">
							<div class="promo__line" style="width:<?php the_field('promo_percent') ?>;"></div>
						</div>
						<div class="promo__numbers">
							<span class="promo__price promo__start">0</span>
							<span class="promo__price promo__end"><?php the_field('promo_summ') ?><span class="currancy">₽</span></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>