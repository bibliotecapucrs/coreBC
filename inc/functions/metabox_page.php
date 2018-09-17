<?php
/**
* Add The Meta Box - Cria campos na edição
**/
function corebc_add_custombox()
{
    $screens = ['page', 'corebc_cpt'];
    foreach ($screens as $screen) {
        add_meta_box(
            'corebc_box_id',           // Unique ID
            'Link para a seção',  // Box title
            'corebc_custom_box_html',  // Content callback, must be of type callable
            $screen                   // Post type
        );
    }
}
add_action('add_meta_boxes', 'corebc_add_custombox');
function corebc_custom_box_html($post)
{
?>
    <label for="corebc_link">Link para a seção</label>
    <input type="text" name="corebc_link" id="corebc_link" value="<?php echo get_post_meta($post->ID, '_corebc_meta_key', true);?>" >
<br>
    <label for="corebc_desc">Descrição da seção</label>
    <input type="text" name="corebc_desc" id="corebc_desc" value="<?php echo get_post_meta($post->ID, '_corebc_meta_desc', true);?>" >

<?php
}

function corebc_save_postdata($post_id)
{
    if (array_key_exists('corebc_link', $_POST)) {
        update_post_meta(
            $post_id,
            '_corebc_meta_key',
            $_POST['corebc_link']
        );
    }

    if (array_key_exists('corebc_desc', $_POST)) {
        update_post_meta(
            $post_id,
            '_corebc_meta_desc',
            $_POST['corebc_desc']
        );
    }

}
add_action('save_post', 'corebc_save_postdata');
?>