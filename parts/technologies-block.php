<?php
ob_start();
?>
<?php
for ($i=0; $i<10; $i++){
  get_template_part( "/parts/technology-card", null, ['icon' => 'FirstIcon.svg', 'title' => 'some title', 'lore' => 'some lore'] );
}
?>
<?php
$content = ob_get_clean();
get_template_part( "/parts/triple-block", null, [
  'title' => 'Технологии',
  'content' => $content
  ]);
?>