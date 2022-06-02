<?php
// $Id: node.tpl.php,v 1.1.2.4 2009/12/26 00:22:23 simon Exp $
?>
  <div class="node<?php if ($sticky) { print " sticky"; } ?><?php if (!$status) { print " node-unpublished"; } ?>">
    <?php if ($picture) {
      print $picture;
    }?>
    <?php if ($page == 0) { ?><h2 class="title"><a href="<?php print $node_url?>"><?php print $title?></a></h2><?php }; ?>
    <span class="submitted"><?php print $submitted?></span>
    <div class="taxonomy"><?php print $terms?></div>
    <?php if ($links) { ?><div class="links"><?php print $links?></div><?php }; ?>
    <div class="content"><?php print $content?></div>
    <?php if ($links) { ?><div class="links"><?php print $links?></div><?php }; ?>
  </div>
