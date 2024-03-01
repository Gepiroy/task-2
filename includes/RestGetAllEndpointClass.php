<?php
class RestGetAllEndpointClass
{
  public $id;
  function __construct($id)
  {
    $this->id = $id;
  }

  function add_actions()
  {
    add_action('rest_api_init', function () {
      register_rest_route('task-2/v1', '/' . $this->id, array(
        'methods' => 'GET',
        'callback' => [$this, 'get_all'],
      ));
    });
  }
  function get_all($data)
  {
    $posts = get_posts(array(
      'post_type' => $this->id,
      'orderby' => 'date',
      'order' => 'asc'
    ));
    $ret = array();
    foreach ($posts as $post) {
      $fields = get_fields($post->ID);
      $to_insert = array();
      $to_insert['title'] = $post->post_title;
      foreach ($fields as $key => $field) {
        switch ($key) {
          case 'icon':
            $to_insert[$key] = $field;//['url'];
            break;
          default:
            $to_insert[$key] = $field;
            break;
        }
      }
      $ret[] = $to_insert;
    }
    return $ret;
  }
}
