<?php

class BenefitsPostTypeClass{
    const ID = 'benefits_post_type';

    function add_actions(){
        add_action( 'init', [$this, 'register_type'] );
        add_action( 'admin_head', [$this, 'add_help_tabs'] );

        add_action('add_meta_boxes', [$this, 'add_meta_boxes']);
        add_action('save_post', [$this, 'save_meta_data']);

        add_filter( 'manage_edit-'.self::ID.'_columns', [$this, 'add_columns']); // Задавание хедеров колонок
        add_action( 'manage_'.self::ID.'_posts_custom_column', [$this, 'fill_column'], 10, 2); // Заполнение (отображение).
    }

    function register_type(){
        $labels = array(
            'name' => 'Бенефиты',
            'singular_name' => 'Бенефит'
        );

        $args = array(
            'labels' => $labels,
            'public' => true,
            'publicly_queryable' => true,
            'has_archive' => false,
            'menu_position' => 2,
            'supports' => array( 'title', 'custom-fields' )
        );

        register_post_type( self::ID, $args );
    }

    const ICON_FIELD_ID = 'benefits-icon';
    function add_meta_boxes() {
        add_meta_box(
            self::ICON_FIELD_ID,
            'Иконка',
            [$this, 'icon_html'],
            self::ID
        );
    }

    function icon_html(){
        wp_nonce_field( plugin_basename(__FILE__), 'icon_nonce' );
        ?>
        <p class="description">Загрузите иконку</p>
        <input type="file" id="icon-blyat" name="icon-blyat" size="25" class="postbox">
        <?php
    }

    function save_meta_data($post_id) {
        //По идее оно срабатывает вообще на все посты. Ну и мы тут зарегали, что, если при сейве было где-либо icon-file задан, то он к посту присобачится.
        //Проверю позже, будет ли срабатывать, если не указывать сию функцию в каждом следующем посту. Если не будет - вынесу в отдельный файл, следуя SRP.
        //wp_die('post is ' . json_encode($_POST));
        //$meta_url = get_post_meta( $post_id, 'icon-blyat', true);
        /*$image_url = $_POST['icon-blyat'];
        $attachment_id = attachment_url_to_postid( $image_url );
        $img = wp_get_attachment_image_src( $attachment_id, 'full' );
        wp_die('img is ' . $img . '; image_url is ' . $image_url);
        if(!empty($file['name'])) {
            wp_die('file is ' . $file);
            if($file['type'] == 'image/svg+xml') {
                $upload = wp_upload_bits($file['name'], null, file_get_contents($file['tmp_name']));
                if(isset($upload['error']) && $upload['error'] != 0) {
                    wp_die('Ошибка загрузки файла: ' . $upload['error']);
                } else {
                    update_post_meta($post_id, self::ICON_FIELD_ID, $upload);
                }
            }
            else {
                wp_die("Требуется иконка в .svg формате.");
            }*
        }*/
    }

    function add_columns($columns){
        $to_add = array( 
            'icon' => 'Иконка',
            'lore' => 'Описание'
        );

        $columns = array_slice($columns, 0, 2, true) + $to_add + array_slice($columns, 2, null, true);

        return $columns;
    }

    function fill_column($column, $post_id){
        switch ( $column ) {
            case 'icon': {
                $icon = get_post_meta( $post_id, 'icon', true );
                if($icon == null) echo "Иконка не установлена.";
                else echo "Пока буду выводить текст...";
                break;
            }
        }
    }

    function add_help_tabs() {

        $screen = get_current_screen();

        if ( $screen->post_type !== self::ID ) {
            return;
        }

        $screen->add_help_tab( array(
            'id'      => self::ID.'_tab_1',
            'title'   => 'Общая информация',
            'content' => '<h3>Общая информация</h3><p>Здесь находятся посты из первого блока страницы той.</p><p>Как грамотно называть такие блоки без заголовка, и надо ли было этому вообще посты прикручивать - жду в фидбеке.</p>'
        ) );

    }
}

?>