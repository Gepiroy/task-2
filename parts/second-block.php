<?php
ob_start();
?>
<?php
for ($i=0; $i<3; $i++){
  get_template_part( "/parts/second-block-card", null, ['icon' => 'FirstIcon.svg', 'title' => 'some title', 'lore' => 'some lore'] );
}
?>
<?php
$content = ob_get_clean();
get_template_part( "/parts/triple-block", null, ['content' => $content] );
?>