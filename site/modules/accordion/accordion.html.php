<section class="column">
               <?php $accordions = $module->accordions()->yaml() ?>
                <?php $first = a::first($accordions) ?>
                <?php foreach($accordions as $accordion): ?>

                <label class="accordion">

                  <div class="accordion__header"><?php echo $accordion['header'] ?>
                  </div>

        					<div class="accordion__content">
        						<h6><?php echo $accordion['title'] ?></h6>
        						<p><?php echo $accordion['content'] ?></p>
        					</div>
			        	</label>

                <?php endforeach ?>
</section>
