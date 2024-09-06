<!-- All Post Builder -->
<?php while(has_sub_field('post_builder')): ?>

	<?php if(get_row_layout() == 'post_subheading'): // Subheading: Select ?>
			<div class="row justify-content-center">
				<div class="col-12 col-lg-10">
					<?php if(get_sub_field('unit_subheading_select') == 'subheadingh2') : ?>
						<h2 class="atm--post-h2" id="<?php the_sub_field('unit_subheading_anchor');?>"><?php the_sub_field('unit_subheading_text');?></h2>
					<?php elseif(get_sub_field('unit_subheading_select') == 'subheadingh3') : ?>
						<h3 class="atm--post-h3"><?php the_sub_field('unit_subheading_text');?></h3>
					<?php elseif(get_sub_field('unit_subheading_select') == 'subheadingh4') : ?>
						<h4 class="atm--post-h4"><?php the_sub_field('unit_subheading_text');?></h4>
					<?php endif; ?>
				</div>
			</div>
	<?php endif; ?>

	<?php if(get_row_layout() == 'post_paragraph'): // Paragraph ?>
		<div class="row justify-content-center">
			<div class="col-12 col-lg-10">
				<div class="mol--post-paragraph">
					<?php the_sub_field('unit_paragraph'); ?>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php if(get_row_layout() == 'post_image'): // Image ?>
		<?php if(get_sub_field('unit_image_type') == 'imagescreenshot') : ?>
			<div class="row justify-content-center">
				<div class="col-12">
					<div class="mol--image-full d-flex justify-content-center">
						<figure class="atm--post-img">
							<img class="mw-100" src="<?php the_sub_field('unit_image'); ?>" alt="<?php the_sub_field('unit_image_caption'); ?>">
							<?php if(get_sub_field('unit_image_caption')) : ?>
								<figcaption><?php the_sub_field('unit_image_caption'); ?></figcaption>
							<?php endif; ?>
						</figure>
					</div>
				</div>
			</div>
		<?php elseif(get_sub_field('unit_image_type') == 'imageui') : ?>
			<div class="row justify-content-center">
				<div class="col-12 col-lg-10">
					<div class="mol--image-full d-flex justify-content-center">
						<?php if(get_sub_field('unit_image_outline')) : ?>
							<figure class="atm--post-img atm--post-img-outline">
								<?php if(get_sub_field('unit_image_maxwidth')) : ?>
									<img class="mw-100" style="width:<?php the_sub_field('unit_image_maxwidth'); ?>px" src="<?php the_sub_field('unit_image'); ?>" alt="<?php the_sub_field('unit_image_caption'); ?>">
									<?php if(get_sub_field('unit_image_caption')) : ?>
										<figcaption><?php the_sub_field('unit_image_caption'); ?></figcaption>
									<?php endif; ?>
								<?php else : ?>
									<img class="mw-100" src="<?php the_sub_field('unit_image'); ?>" alt="<?php the_sub_field('unit_image_caption'); ?>">
									<?php if(get_sub_field('unit_image_caption')) : ?>
										<figcaption><?php the_sub_field('unit_image_caption'); ?></figcaption>
									<?php endif; ?>
								<?php endif; ?>
							</figure>
						<?php else : ?>
							<figure class="atm--post-img">
								<?php if(get_sub_field('unit_image_maxwidth')) : ?>
									<img class="mw-100" style="width:<?php the_sub_field('unit_image_maxwidth'); ?>px" src="<?php the_sub_field('unit_image'); ?>" alt="<?php the_sub_field('unit_image_caption'); ?>">
									<?php if(get_sub_field('unit_image_caption')) : ?>
										<figcaption><?php the_sub_field('unit_image_caption'); ?></figcaption>
									<?php endif; ?>
								<?php else : ?>
									<img class="mw-100" src="<?php the_sub_field('unit_image'); ?>" alt="<?php the_sub_field('unit_image_caption'); ?>">
									<?php if(get_sub_field('unit_image_caption')) : ?>
										<figcaption><?php the_sub_field('unit_image_caption'); ?></figcaption>
									<?php endif; ?>
								<?php endif; ?>
							</figure>
						<?php endif; ?>
					</div>
				</div>
			</div>
		<?php elseif(get_sub_field('unit_image_type') == 'imagegeneral') : ?>
			<div class="row justify-content-center">
				<div class="col-12 col-lg-10">
					<div class="mol--image-full d-flex justify-content-center">
						<figure class="atm--post-img">
							<img class="mw-100" src="<?php the_sub_field('unit_image'); ?>" alt="<?php the_sub_field('unit_image_caption'); ?>">
							<?php if(get_sub_field('unit_image_caption')) : ?>
								<figcaption><?php the_sub_field('unit_image_caption'); ?></figcaption>
							<?php endif; ?>
						</figure>
					</div>
				</div>
			</div>
		<?php endif; ?>
	<?php endif; ?>

	<?php if(get_row_layout() == 'post_image_two'): // Two images in a row, no captions  ?>
		<div class="row justify-content-center">
			<div class="col-12 col-lg-10">
				<section class="org--image-row">
					<div class="row">
						<div class="col-12 col-md-6 mol--image-block">
							<figure>
								<img class="mw-100" src="<?php the_sub_field('image_row_two_one'); ?>">
							</figure>
						</div>
						<div class="col-12 col-md-6 mol--image-block">
							<figure>
								<img class="mw-100" src="<?php the_sub_field('image_row_two_two'); ?>">
							</figure>
						</div>
					</div>
				</section>
			</div>
		</div>
	<?php endif; ?>

	<?php if(get_row_layout() == 'post_image_three'): // Three images in a row, no captions  ?>
		<div class="row justify-content-center">
			<div class="col-12 col-lg-10">
				<section class="org--image-row">
					<div class="row">
						<div class="col-12 col-md-4 mol--image-block">
							<figure>
								<img class="mw-100" src="<?php the_sub_field('image_row_three_one'); ?>">
							</figure>
						</div>
						<div class="col-12 col-md-4 mol--image-block">
							<figure>
								<img class="mw-100" src="<?php the_sub_field('image_row_three_two'); ?>">
							</figure>
						</div>
						<div class="col-12 col-md-4 mol--image-block">
							<figure>
								<img class="mw-100" src="<?php the_sub_field('image_row_three_three'); ?>">
							</figure>
						</div>
					</div>
				</section>
			</div>
		</div>
	<?php endif; ?>

	<?php if(get_row_layout() == 'post_video'): // Video ?>
		<div class="row justify-content-center">
			<div class="col-12 col-lg-10">
				<div class="mol--video-embed ratio ratio-16x9">
					<?php the_sub_field('post_embed'); ?>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php if(get_row_layout() == 'post_code_block'): // Code block ?>
		<div class="row justify-content-center">
			<div class="col-12 col-lg-10">
				<section class="mol--code-block atm--highlightjs">
					<pre><code><?php the_sub_field('unit_code_block'); ?></code></pre>
					<script>
					     var snippets = document.getElementsByTagName('pre');
					     var numberOfSnippets = snippets.length;
					     for (var i = 0; i < numberOfSnippets; i++) {
					         code = snippets[i].getElementsByTagName('code')[0].innerText;
					 
					         snippets[i].classList.add('hljs'); // append copy button to pre tag
					 
					         snippets[i].innerHTML = '<div class="atm--code-header"><div class="d-flex"><div class="ms-auto"><button class="hljs-copy">Copy</button></div></div></div>' + snippets[i].innerHTML; // append copy button
					 
					         snippets[i].getElementsByClassName('hljs-copy')[0].addEventListener("click", function () {
					             this.innerText = 'Copying..';
					             navigator.clipboard.writeText(code);
					             this.innerText = 'Copied!';
					             button = this;
					             setTimeout(function () {
					                 button.innerText = 'Copy';
					             }, 1000)
					         });
					     }
					</script>
				</section>
			</div>
		</div>
	<?php endif; ?>

	<?php if(get_row_layout() == 'post_list'): // List: Select ?>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <section class="mol--list">
                    <?php if( get_sub_field('unit_introduction_para') ): ?>
                    	<p class="bullet-intro"><?php the_sub_field('unit_introduction_para'); ?></p>
                    <?php endif; ?>
                    <?php if(get_sub_field('unit_list_type') == 'listbullet') : ?>
                    	<?php 
		                    $values = get_sub_field('unit_bullet_point');
		                    if ($values){ 
		                    echo '<ul>';
		                    foreach($values as $value){
		                        echo '<li class="atm--list-bullet">'.$value['item_list'].'</li>'; 
		                    }
		                    echo '</ul>';
		                    } 
		                ?>
                    <?php elseif(get_sub_field('unit_list_type') == 'listnumber') : ?>
                    	<?php 
		                    $values = get_sub_field('unit_bullet_point');
		                    if ($values){ 
		                    echo '<ol>';
		                    foreach($values as $value){
		                        echo '<li class="atm--list-bullet">'.$value['item_list'].'</li>'; 
		                    }
		                    echo '</ol>';
		                    } 
		                ?>
                    <?php endif; ?>
                    <?php if( get_sub_field('unit_conclusion_para') ): ?>
                    	<p class="bullet-outro"><?php the_sub_field('unit_conclusion_para'); ?></p>
                    <?php endif; ?>
                </section>
            </div>
        </div>
    <?php endif; ?>

	<?php if(get_row_layout() == 'post_callout'): // Callout ?>
		<div class="row justify-content-center">
			<div class="col-12 col-lg-10">
				<div class="mol--post-callout">
					<span><?php the_sub_field('unit_callout'); ?></span>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php if(get_row_layout() == 'post_button'): // Button ?>
    	<div class="row justify-content-center">
			<div class="col-12 col-lg-10">
				<div class="mol--post-button d-flex justify-content-center">
					<a class="button" href="<?php the_sub_field('unit_button_link'); ?>">
						<?php the_sub_field('unit_button_text'); ?>
					</a>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php if(get_row_layout() == 'post_hr'): // HR / Page Break ?>
    	<div class="row justify-content-center">
			<div class="col-12 col-lg-10">
				<div class="mol--post-break d-flex justify-content-center">
					<?php if(get_sub_field('add_page_break')) { ?>
						<figure>
							<img class="mw-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/use-VersionLogo-Cassette.png">
						</figure>
					<?php } ?>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php if(get_row_layout() == 'post_markdown'): // Markdown ?>
		<!-- TBC -->
	<?php endif; ?>

	<?php if(get_row_layout() == 'post_conclusion'): // Conclusion ?>
    	<div class="row justify-content-center">
			<div class="col-12 col-lg-10">
				<div class="mol--post-conclusion">
					<p class="atm--post-outro"><?php the_sub_field('unit_conclusion'); ?></p>
				</div>
			</div>
		</div>
	<?php endif; ?>

<?php endwhile; ?>