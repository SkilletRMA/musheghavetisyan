<?php
add_action('admin_init', 'event_media_add_meta_box', 1);
function event_media_add_meta_box() {

// add one new metabox on the 'packages' edit screen
    add_meta_box(
        'event_media_first_metabox', // ID of the metabox
        'Event Title Content', // title of the metabox
        'event_media_metabox_callback', // callback function, see below
        array('event'), // <--- your post-type slug
        'normal', // context
        'high' // priority
    );
}
function event_media_metabox_callback() {
    global $post;

    // get value of our custom field
    $event_media_field = get_post_meta($post->ID, 'event-media-field-name', true);

    // create a nonce for secure saving
    wp_nonce_field( 'event_media_first_nonce', 'event_media_first_nonce' );

    // check if our custom field has content
    if( $event_media_field ) {
        // if it has content, set the $content so we can display it as value in the field
        $content = $event_media_field;
    } else {
        // if it has no content, just return an empty value
        $content = '';
    }

    // create a new instance of the WYSIWYG editor
    wp_editor( $content, 'event_media_editor' , array(
        'wpautop'       => true,
        'textarea_name' => 'event-media-field-name', // this is the 'name' attribute of our field
        'textarea_rows' => 10,
    ) );

}
add_action('save_post', 'event_media_save_meta_box');
function event_media_save_meta_box($post_id) {

    // check our nonce
    if ( ! isset( $_POST['event_media_first_nonce'] ) ||
        ! wp_verify_nonce( $_POST['event_media_first_nonce'], 'event_media_first_nonce' ) )
        return;

    // check for autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return;

    // check if user has rights
    if (!current_user_can('edit_post', $post_id))
        return;

    // check if content exists in our custom field
    if ( isset( $_POST['event-media-field-name'] ) ) {
        $contents = $_POST['event-media-field-name'];

        // if content exists than update the meta value
        update_post_meta( $post_id, 'event-media-field-name', $contents );
    }
};

add_action('admin_init', 'prfx_add_meta_box', 1);
function prfx_add_meta_box() {

// add one new metabox on the 'packages' edit screen
add_meta_box(
'prfx_first-metabox', // ID of the metabox
'Post Content', // title of the metabox
'prfx_metabox_callback', // callback function, see below
array('team', 'page', 'event'), // <--- your post-type slug
'normal', // context
'high' // priority
);
}
function prfx_metabox_callback() {
    global $post;

    // get value of our custom field
    $first_field = get_post_meta($post->ID, 'my-first-field-name', true);

    // create a nonce for secure saving
    wp_nonce_field( 'prfx_first_nonce', 'prfx_first_nonce' );

    // check if our custom field has content
    if( $first_field ) {
        // if it has content, set the $content so we can display it as value in the field
        $content = $first_field;
    } else {
        // if it has no content, just return an empty value
        $content = '';
    }

    // create a new instance of the WYSIWYG editor
    wp_editor( $content, 'first_custom_editor' , array(
        'wpautop'       => true,
        'textarea_name' => 'my-first-field-name', // this is the 'name' attribute of our field
        'textarea_rows' => 10,
    ) );

}
add_action('save_post', 'prfx_save_meta_box');
function prfx_save_meta_box($post_id) {

    // check our nonce
    if ( ! isset( $_POST['prfx_first_nonce'] ) ||
        ! wp_verify_nonce( $_POST['prfx_first_nonce'], 'prfx_first_nonce' ) )
        return;

    // check for autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return;

    // check if user has rights
    if (!current_user_can('edit_post', $post_id))
        return;

    // check if content exists in our custom field
    if ( isset( $_POST['my-first-field-name'] ) ) {
        $contents = $_POST['my-first-field-name'];

        // if content exists than update the meta value
        update_post_meta( $post_id, 'my-first-field-name', $contents );
    }
};