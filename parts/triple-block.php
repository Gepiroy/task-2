<div class="triple-block">
  <div class="triple-block-heading">
    <div class="justify-left">
      <h1 class="triple-block__title"><?php echo $args['title'] ?? null; ?></h1>
    </div>
    <div class="justify-right">
      <p class="triple-block__comment"><?php echo $args['comment'] ?? null; ?></p>
    </div>
  </div>
  <div class="triple-body">
    <?php echo $args['content']; ?>
  </div>
</div>

<style scoped>
  .triple-body{
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-auto-flow: row dense;
    column-gap: 25px;
  }
  .triple-block-heading{
    display: grid;
    grid-template-columns: 1fr 1fr;
  }
  .triple-block__title{
    text-transform: uppercase;
    font-size: 40px;
    font-weight: 600;
    line-height: 43px;
    letter-spacing: 0.800000011920929px;
    text-align: left;
    color: #263238;
  }
  .triple-block__comment{
      font-size: 28px;
      font-weight: 400;
      line-height: 34px;
      letter-spacing: 0px;
      text-align: left;
      color: #676F73;
  }
</style>