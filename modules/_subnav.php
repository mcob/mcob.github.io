<?php
$root_id = get_queried_object_id();
$subnav = wp_list_pages([
  'child_of' => $root_id,
  'echo' => false,
  'title_li' => '',
  'exclude' => get_exclude_child_ids($root_id),
  'depth' => 1,
]);
?>

<?php if ($subnav) : ?>
  <?php if (!get_field('hide_subnav')) : ?>
    <nav class="subnav" aria-label="navigation">
      <button class="subnav__toggle">
        <span class="subnav__toggle__text">
          In this Section
        </span>
        <?php echo svgstore('arrow', '', 'subnav__toggle__icon') ?>
      </button>
      <ul class="subnav__list">
        <?php echo $subnav; ?>
      </ul>
    </nav>
  <?php endif; ?>
<?php endif; ?>
