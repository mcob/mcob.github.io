<?php 
header('Content-Type: application/json');
$data['json_string'] = "{\"root\":{";  //open Json string
$data['json_string'] .= "\"prompt\": \"". get_field('root_question', 'options') ."\",";
    $data['json_string'] .= "\"progress\": 0,";
    $data['json_string'] .= "\"options\": [";
    if (have_rows('options', 'options')):
      while (have_rows('options', 'options')) : the_row();
        $data['json_string'] .= "{";
            $data['json_string'] .= "\"answer\": \"" . get_sub_field('answer') . "\",";
            $data['json_string'] .= "\"node\": \"" . get_sub_field('id') . "\"";
        $data['json_string'] .= "},";
      endwhile; 
      $data['json_string'] = rtrim($data['json_string'], ",");
    endif;
    $data['json_string'] .= "]";
  $data['json_string'] .= "},";

//Level 1
while (have_rows('options', 'options')) : the_row();
  
 $data['json_string'] .= "\"" . get_sub_field('id') . "\": {";
  if(get_sub_field('type') == 'branch'):
    $data['json_string'] .= "\"prompt\": \"" . get_sub_field('level_2_question') . "\",";
    $data['json_string'] .= "\"progress\": \"" . get_sub_field('progress') ."\",";
    $data['json_string'] .= "\"options\": [";
    while (have_rows('options_2')) : the_row();
      $data['json_string'] .= "{";
            $data['json_string'] .= "\"answer\": \"" . get_sub_field('answer') . "\",";
            $data['json_string'] .= "\"node\": \"" . get_sub_field('id') . "\"";
        $data['json_string'] .= "},";
      endwhile; 
    $data['json_string'] = rtrim($data['json_string'], ",");
    $data['json_string'] .= "]";
  else :
    $data['json_string'] .= "\"results\": [";
    foreach (get_sub_field('programs') as $post) : setup_postdata($post);
      $link = get_field('link');
      $data['json_string'] .= "{";
        $data['json_string'] .= "\"title\": \"" . get_field('heading') . "\",";
        $data['json_string'] .= "\"link\": \"" .  $link['url'] . "\",";
        $data['json_string'] .= "\"description\":";
        $data['json_string'] .= "\"" . get_field('description') . "\"";
      $data['json_string'] .= "},";
    endforeach; wp_reset_postdata();
    $data['json_string'] = rtrim($data['json_string'], ",");
    $data['json_string'] .= "]";
  endif;
  
$data['json_string'] .= "},";

endwhile;

//Level 2
while (have_rows('options', 'options')) : the_row();
  if( have_rows('options_2') ): 
    while (have_rows('options_2')) : the_row();
      $data['json_string'] .= "\"" . get_sub_field('id') . "\": {";
  if(get_sub_field('type') == 'branch'): 
    $data['json_string'] .= "\"prompt\": \"" . get_sub_field('level_3_question') . "\",";
    $data['json_string'] .= "\"progress\": \"" . get_sub_field('progress') . "\",";
    $data['json_string'] .= "\"options\": [";
    while (have_rows('options_3')) : the_row();
      $data['json_string'] .= "{";
          $data['json_string'] .= "\"answer\": \"" . get_sub_field('answer') . "\",";
          $data['json_string'] .= "\"node\": \"" . get_sub_field('id') . "\"";
      $data['json_string'] .= "},";
    endwhile;
    $data['json_string'] = rtrim($data['json_string'], ",");
    $data['json_string'] .= "]},";
  else :
    $data['json_string'] .= "\"results\": [";
    foreach (get_sub_field('programs') as $post) : setup_postdata($post);
      $link = get_field('link'); 
      $description = get_field('description');
      $data['json_string'] .= "{";
        $data['json_string'] .= "\"title\": \"" . get_field('heading') ."\",";
        $data['json_string'] .= "\"link\": \"" . $link['url'] ."\",";
        $data['json_string'] .= "\"description\": " . json_encode(preg_replace( "/\r|\n/", "", $description));
      $data['json_string'] .= "},";
    endforeach; wp_reset_postdata();
    $data['json_string'] = rtrim($data['json_string'], ",");
    $data['json_string'] .= "]},";
  endif;
    endwhile;
  endif;
  

endwhile;

//Level 3
while (have_rows('options', 'options')) : the_row(); 
  if( have_rows('options_2') ): 
    while (have_rows('options_2')) : the_row();
      if( have_rows('options_3') ):
        while (have_rows('options_3')) : the_row();
          $data['json_string'] .= "\"" . get_sub_field('id') . "\": {";
          $data['json_string'] .= "\"results\": [";
          foreach (get_sub_field('programs') as $post) : setup_postdata($post);
            $link = get_field('link'); 
            $description = get_field('description');
            $data['json_string'] .= "{";
              $data['json_string'] .= "\"title\": \"" . get_field('heading') . "\",";
              $data['json_string'] .= "\"link\": \"" . $link['url'] . "\",";
              $data['json_string'] .= "\"description\": " . json_encode(preg_replace( "/\r|\n/", "", $description));
            $data['json_string'] .= "},";
          endforeach; wp_reset_postdata();
          $data['json_string'] = rtrim($data['json_string'], ",");
          $data['json_string'] .= "]},";
        endwhile;
      endif; 
    endwhile;
  endif; 
endwhile;
$data['json_string'] = rtrim($data['json_string'], ",");
$data['json_string'] .= "}";

echo $data['json_string'];
file_put_contents(plugin_dir_path( __FILE__ ) . '../src/js/data.json', $data['json_string']);
