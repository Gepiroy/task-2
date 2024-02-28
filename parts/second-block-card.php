<div class="second-block__card">
  <img src="<?php echo get_stylesheet_directory_uri() . "/assets/img/" . $args['icon'] ?? "FirstIcon.svg" ?>">
  <h3><?php echo $args['title'] ?? "title not set" ?></h3>
  <p><?php echo $args['lore'] ?? "lore not set" ?></p>
</div>

<style scoped>
  .second-block__card{
    border: solid black;
    border-width: 1px 1px 1px 0;
    height: 100%;
  }
  .second-block__card h3{
    font-size: 24px;
    font-weight: 600;
    line-height: 29px;
    letter-spacing: 0em;
    text-align: left;
  }
  .second-block__card p{
    font-size: 22px;
    font-weight: 400;
    line-height: 27px;
    letter-spacing: 0px;
    text-align: left;
    color: #676F73;
  }
</style>