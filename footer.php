<div class="footer-block">
    <div class="leave-an-order-block">
      <h1 class="leave-an-order-block__text">оставьте заявку на поддержку сайта</h1>
      <div class="leave-an-order-block__arrow"><img src="./assets/img/Arrow.svg"></img></div>
    </div>
    <div class="footer-content">
      <div class="footer-grid">
        <icon-logo style="width: 202px; height: 80px;"></icon-logo>
        <div class="footer-column">
          <h3>РАЗДЕЛЫ</h3>
          <a>Главная</a>
          <a>Портфолио</a>
          <a>О компании</a>
          <a>Цены</a>
          <a>Контакты</a>
          <a>Услуги</a>
        </div>
        <div class="footer-column">
          <h3>УСЛУГИ</h3>
          <a>Корпоративные сайты</a>
          <a>Интернет-магазины</a>
          <a>Продающие лендинги</a>
          <a>Сложные веб-сервисы</a>
          <a>Программное обеспечение</a>
          <a>Онлайн продвижение</a>
          <a>Мобильная разработка</a>
        </div>
        <div class="footer-column">
          <h3>ИНФОРМАЦИЯ</h3>
          <a>Частозадаваемые вопросы</a>
          <a>Политика конфиденциальности</a>
          <a>Вакансии</a>
          <a>Партнерам</a>
          <a>Акции</a>
        </div>
      </div>
      <hr/>
      <div class="footer-last">
        <div class="footer-last-left">
          <a>ООО «Твой стартап»</a>
          <a>© 2020 — 2022</a>
          <a style="color: #A8ADAF;">8 800 350 93 98</a>
          <a style="color: #A8ADAF;">info@your-startup.space</a>
        </div>
        <div class="footer-last-right">
          <a><vk-icon></vk-icon></a>
          <a><instagram-icon></instagram-icon></a>
        </div>
      </div>
    </div>
  </div>
<style scoped>
  .leave-an-order-block{
    display: grid;
    grid-template-columns: 3fr 1fr;
    align-items: center;
    padding: 0 136px;
    
    background: var(--text-purple);
  }
  .leave-an-order-block__arrow{
    justify-self: end;
  }
  .leave-an-order-block__text{
    text-transform: uppercase;
    font-size: 64px;
    font-weight: 600;
    line-height: 67px;
    letter-spacing: 0em;
    text-align: left;
    color: white;
  }
  .footer-block{
    padding: 80px 0 0 0;
  }
  .footer-content{
    padding: 0 80px;
  }
  .footer-grid{
    display: grid;
    padding: 80px 0;
    grid-template-columns: 1fr 1fr 1fr 1fr;
  }
  .footer-column{
    display: flex;
    flex-direction: column;
    gap: 1rem;
  }
  .footer-last{
    display: grid;
    grid-template-columns: 1fr 1fr;
    padding: 1rem 0;
  }
  .footer-last-left{
    display: flex;
    justify-content: space-between;
  }
  .footer-last-left a{
    font-size: 14px;
    font-weight: 400;
    line-height: 17px;
    letter-spacing: 0em;
    text-align: left;
    color: #676F73;
  }
  .footer-last-right{
    display: flex;
    justify-content: end;
    gap: 2rem;
  }
  .footer-column h3{
    font-size: 18px;
    font-weight: 400;
    line-height: 22px;
    letter-spacing: 0em;
    text-align: left;
    margin-bottom: 0;
    text-transform: uppercase;
  }
  .footer-column a{
    font-size: 14px;
    font-weight: 400;
    line-height: 17px;
    letter-spacing: 0em;
    text-align: left;
    color: #676F73;
    text-decoration: none;
  }
</style>