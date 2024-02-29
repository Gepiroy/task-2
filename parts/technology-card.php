<div class="technology-card">
  <img src="<?php echo get_stylesheet_directory_uri() . "/assets/img/" . $args['icon'] ?? "FirstIcon.svg"; ?>">
  <div class="technology-card-texts">
    <h3 class="technology-card__title"><?php echo $args['title'] ?? "title not set"; ?></h3>
    <p class="technology-card__lore"><?php echo $args['lore'] ?? "lore not set"; ?></p>
  </div>
</div>

<style scoped>
.technology-card{
  display: flex;
  gap: 4rem;
  align-items: center;
  padding: 2rem;
}
.technology-card-texts{
  display: flex;
  flex-direction: column;
}

.technology-card__title{
  font-size: 30px;
  font-weight: 600;
  line-height: 32px;
  letter-spacing: 0.800000011920929px;
  text-align: left;
  color: #263238;
  margin: 0;
}

.technology-card__lore{
  font-size: 16px;
  font-weight: 400;
  line-height: 17px;
  letter-spacing: 0.800000011920929px;
  text-align: left;
  margin: 0;

  color: #676F73;
}
</style>