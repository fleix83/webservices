<section class="column">


               <?php $accordions = $module->accordions()->yaml() ?>
                <?php $first = a::first($accordions) ?>
                <?php foreach($accordions as $accordion): ?>

                <label class="accordion">
  				      	<input type='<?php echo html($module->accordiontype()) ?>' name='<?php echo html($module->accordiontype()) ?>-accordion' <?php if($accordion == $first) echo ' checked="checked"' ?>>

                  <div class="accordion__header"><?php echo $accordion['header'] ?>
                  </div>

        					<div class="accordion__content">
        						<h6><?php echo $accordion['title'] ?></h6>
        						<p><?php echo $accordion['content'] ?></p>
        					</div>
			        	</label>
                
                <?php endforeach ?>

</section>
