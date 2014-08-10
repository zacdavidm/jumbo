			<?php if (!empty($tabs)): ?>
				<div class="action-tabs">
					<?php print render($tabs); ?>
					<?php if (!empty($tabs2)): print render($tabs2); endif; ?>
				</div>
      <?php endif; ?>
