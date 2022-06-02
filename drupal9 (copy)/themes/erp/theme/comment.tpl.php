<?php
// $Id: comment.tpl.php,v 1.1.2.3 2009/12/26 00:22:23 simon Exp $
?>
  <div class="comment<?php print ' '. $status; ?>">
    <?php if ($picture) {
    print $picture;
  } ?>
<h3 class="title"><?php print $title; ?></h3><?php if ($new != '') { ?><span class="new"><?php print $new; ?></span><?php } ?>
    <div class="submitted"><?php print $submitted; ?></div>
    <div class="content">
     <?php print $content; ?>
     <?php if ($signature): ?>
      <div class="clear-block">
       <div>—</div>
       <?php print $signature ?>
      </div>
     <?php endif; ?>
    </div>
    <div class="links">&raquo; <?php print $links; ?></div>
  </div>
