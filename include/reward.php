<div class="reward">
	<div class="reward__wraper">
		<div class="reward__slider slider-one-item owl-carousel">
			<? if( have_rows('rewards','options') ): ?> 
			    <? while( have_rows('rewards','options') ): the_row(); ?> 
			    	<div href="#" class="reward__slider-el">
			    		<div style="background-image:url(<? the_sub_field('img');?>)" class="reward__slider-el-img"></div>
			    		<div class="reward__slider-el-text"><? the_sub_field('text');?></div>
			    	</div>
			    <? endwhile; ?>
			<? endif; ?>
		</div>
	</div>
	<div class="reward__get">
		<a href="/otzyvy/" class="reward__get__link">
			<div class="link-more">
				<div class="link-more__text">все награды</div>
				<div class="link-more__icon">
					<svg class="icon">
						<use xlink:href="#arrow-right"></use>
					</svg>
				</div>
			</div>
		</a>
	</div>
</div>