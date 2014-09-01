			<?php if (!empty($tabs)): ?>
			<div class="row">
				<div class="medium-12 columns">
          <div class="action-tabs">
            <?php print render($tabs); ?>
            <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
          </div>
				</div>
			</div>
      <?php endif; ?>
