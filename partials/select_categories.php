<div class="category-select-wrapper clearfix">
  <span class="category-select-header"><?php _e('Kategorieauswahl'); ?></span>
  <div class="form-group">
    <form id="category-select" class="category-select" action="<?php echo esc_url(home_url('/')); ?>" method="get">
      <?php wp_dropdown_categories('show_count=1&hierarchical=1&class=form-control'); ?>
      <input type="submit" name="submit" class="btn btn-default" value="Anzeigen"/>
    </form>
  </div>
</div>