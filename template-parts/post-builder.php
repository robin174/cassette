<!-- All Post Builder -->
<?php while(has_sub_field('post_builder')): ?>

	<?php if(get_row_layout() == 'post_subheading_h2'): // Subheading: h2 ?>
		<div class="row justify-content-center">
			<div class="col-11 col-md-10 col-xl-7"> 
				<div class="mol--post-text">
					<h2 class="atm--post-h2"><?php the_sub_field('unit_subheading_h2');?></h2>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php if(get_row_layout() == 'post_subheading_h3'): // Subheading: h3 ?>
		<div class="row justify-content-center">
			<div class="col-11 col-md-10 col-xl-7"> 
				<div class="mol--post-text">
					<h3 class="atm--post-h3"><?php the_sub_field('unit_subheading_h3');?></h3>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php if(get_row_layout() == 'post_subheading_h4'): // Subheading: h4 ?>
		<div class="row justify-content-center">
			<div class="col-11 col-md-10 col-xl-7"> 
				<div class="mol--post-text">
					<h4 class="atm--post-h4"><?php the_sub_field('unit_subheading_h4');?></h4>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php if(get_row_layout() == 'post_introduction'): // Paragraph Introduction ?>
		<div class="row justify-content-center">
			<div class="col-11 col-md-9 col-lg-8 col-xl-6">
				<p class="atm--post-intro"><?php the_sub_field('unit_introduction'); ?></p>
			</div>
		</div>
	<?php endif; ?>

	<?php if(get_row_layout() == 'post_paragraph'): // Paragraph ?>
		<div class="row justify-content-center">
			<div class="col-11 col-md-8 col-xl-6">
				<div class="mol--post-paragraph">
					<?php the_sub_field('unit_paragraph'); ?>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php if(get_row_layout() == 'post_image'): // Image ?>
		<div class="row justify-content-center">
			<div class="col-9">
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

	<?php if(get_row_layout() == 'post_code_block'): // Code block ?>
		<div class="row justify-content-center">
			<div class="col-11 col-md-9">
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

	<?php if(get_row_layout() == 'post_video'): // Video ?>
		<!-- Video embed -->
	<?php endif; ?>

	<?php if(get_row_layout() == 'post_hr'): // Pager Break ?>
    	<div class="row justify-content-center">
			<div class="col-11 col-md-9">
				<div class="mol--post-break">
					<?php if(get_sub_field('add_page_break')) { ?>
						<div>
							<div class="mol--line-01">
								&nbsp;
							</div>
							<div class="mol--line-02">
								&nbsp;
							</div>
							<div class="mol--line-03">
								&nbsp;
							</div>
							<div class="mol--line-04">
								&nbsp;
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<!-- Block quote -->

	<?php if(get_row_layout() == 'post_conclusion'): // Conclusion ?>
    	<div class="row justify-content-center">
			<div class="col-11 col-md-8 col-xl-6">
				<div class="mol--post-conclusion">
					<p class="atm--post-outro"><?php the_sub_field('unit_conclusion'); ?></p>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php if(get_row_layout() == 'post_image_two'): // Two images in a row, no captions  ?>
   		<section class="org--image-block">
	   		<div class="row g-0 justify-content-center">
				<div class="col-12 col-md-9">
					<div class="mol--image-block d-flex">
						<div class="m-1 m-md-2 flex-1 flex-md-fill">
							<div class="d-flex justify-content-center">
								<figure>
									<img class="mw-100" src="<?php the_sub_field('image_row_two_one'); ?>">
								</figure>
							</div>
						</div>
						<div class="m-1 m-md-2 flex-md-fill">
							<div class="d-flex justify-content-center">
								<figure>
									<img class="mw-100" src="<?php the_sub_field('image_row_two_two'); ?>">
								</figure>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<?php if(get_row_layout() == 'post_image_three'): // Three images in a row, no captions  ?>
		<section class="org--image-block">
			<div class="row g-0 justify-content-center">
				<div class="col-12 col-md-9">
					<div class="mol--image-block d-flex">
						<div class="m-1 m-md-2 flex-1 flex-md-fill">
							<div class="d-flex justify-content-center">
								<figure>
									<img class="mw-100" src="<?php the_sub_field('image_row_three_one'); ?>">
								</figure>
							</div>
						</div>
						<div class="m-1 m-md-2 flex-md-fill">
							<div class="d-flex justify-content-center">
								<figure>
									<img class="mw-100" src="<?php the_sub_field('image_row_three_two'); ?>">
								</figure>
							</div>
						</div>
						<div class="m-1 m-md-2 flex-md-fill">
							<div class="d-flex justify-content-center">
								<figure>
									<img class="mw-100" src="<?php the_sub_field('image_row_three_three'); ?>">
								</figure>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>

<?php endwhile; ?>