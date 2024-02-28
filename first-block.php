<template>
  <div class="first-block">
    <div class="supporting-sites">
      <h1>ПОДДЕРЖКА САЙТОВ</h1>
      <slot></slot>
      <h3>
        Решаем все технические вопросы, чтобы вы могли сосредоточиться
        <span>на своём бизнесе.</span>
      </h3>
      <discuss-project-button></discuss-project-button>
    </div>
    <!--img src=<?php echo get_stylesheet_directory_uri() . "/assets/img/GroupOfThings.svg"?> /-->
  </div>
</template>
<style scoped>
  .first-block {
    display: grid;
    grid-template-columns: 50% 50%;
  }
  .supporting-sites {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: start;
  }
  .supporting-sites h1 {
    font-size: 64px;
    font-weight: 700;
    line-height: 77px;
    letter-spacing: 0em;
    text-align: left;
    color: #263238;
  }
  .supporting-sites h3 {
    font-size: 26px;
    font-weight: 400;
    line-height: 31px;
    letter-spacing: 0em;
    text-align: left;
    color: #676f73;
  }
  .supporting-sites span {
    font-weight: 600;
    color: var(--purple);
  }
</style>
