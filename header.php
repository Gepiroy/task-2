<div class="main-header">
  <div class="main-header-content">
    <div class="left-menu">
      <a class="left-menu__item" href="some-href">
        <icon-logo></icon-logo>
      </a>
      <a class="left-menu__item" href="some-href">
        ПОРТФОЛИО
      </a>
      <a class="left-menu__item" href="some-href">
        О КОМПАНИИ
      </a>
      <a class="left-menu__item" href="some-href">
        УСЛУГИ
      </a>
      <a class="left-menu__item" href="some-href">
        КОНТАКТЫ
      </a>
    </div>
    <div class="right_menu">
      <p class="right_menu__phone-number"><span style="color: var(--text-purple)">8 (800)</span> 350 93 98</p>
      <right-menu-button></right-menu-button>
    </div>
  </div>
  <hr />
</div>
<style scoped>
  .main-header{
    padding: 0 80px;
  }
  .main-header-content{
    display: grid;
    grid-template-columns: 50% 50%;
  }
  .left-menu{
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 100%;
  }
  .left-menu__item{
    color: var(--shadow);
    font-size: 14px;
    font-weight: 400;
    line-height: 17px;
    letter-spacing: 0.8399999737739563px;
    text-align: left;
    text-decoration: none;
  }
  .right_menu{
    display: flex;
    justify-content: right;
    padding: 14px;
    gap: 4rem;
  }
  .right_menu__phone-number{
    font-size: 20px;
    font-weight: 400;
    line-height: 24px;
    letter-spacing: 0em;
    text-align: left;
  }
</style>