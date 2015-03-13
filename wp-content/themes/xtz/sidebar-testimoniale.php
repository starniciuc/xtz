<div class="testimonial-slider">
    <div class="container">    
        <div class="rows">
            <div class="col-lg-12">
				
                <?php
					$lang = get_bloginfo("language");
					
					if($lang == 'ru-RU'){ 
						$atrr['category'] = 'testimoniale_rus'; 
					}else {
						$atrr['category'] = 'testimoniale';
					}	
					
					echo testimonials_slider($atrr); 
				?>	 
            </div>
        </div>
    </div><!-- #secondary -->
</div>
