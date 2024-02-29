<div class="ability-card">
  <div class="ability-title">
    <h1 class="ability-number"><?php echo_arg($args, 'number'); ?></h1>
  </div>
  <h3 class="ability-card__title"><?php echo_arg($args, 'title'); ?></h3>
  <p class="ability-card__lore"><?php echo_arg($args, 'lore'); ?></p>
</div>

<style scoped>
  .ability-card__title{
    text-transform: uppercase;
    font-size: 24px;
    font-weight: 600;
    line-height: 29px;
    letter-spacing: 0em;
    text-align: left;
    color: #263238;
  }
  .ability-card__lore{
    font-size: 22px;
    font-weight: 400;
    line-height: 27px;
    letter-spacing: 0px;
    text-align: left;

    color: #676F73;
  }
  .ability-title{
    position: relative;
    display: flex;
    gap: 2rem;
  }
  .ability-title hr{
    display: flex;
    flex-direction: row;
    border: 2px solid var(--text-purple);
  }
  .ability-number{
    color: var(--text-purple);
  }
  .ability-number:after{
    content:" ";
    display: block;
    height: 2px;
    margin-left: 4rem;
    width: calc(100% - 4rem);
    position: absolute;
    top: 50%;
    left: 0;
    background: var(--text-purple);
  }
</style>