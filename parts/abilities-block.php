<?php
ob_start();
?>
<?php
for ($i=0; $i<3; $i++){
  get_template_part( "/parts/ability-card", null, [
    'number' => str_pad(''.($i+1), 2, "0", STR_PAD_LEFT),
    'title' => 'some title',
    'lore' => 'some lore'
    ] );
}
?>
<?php
$content = ob_get_clean();
get_template_part( "/parts/triple-block", null, [
  'title' => 'Возможности',
  'content' => $content
  ]);
?>