<?php

/**
* Plugin Name: Age plugin
* Plugin URI: https://www.Age.com/
* Description: This is the plugin to add age attribute.
* Version: 1.0
* Author: Author
* Author URI: http://Halaabdelaziz.com/
**/


defined('ABSPATH') or die('you can not access this file');

add_action( 'show_user_profile', 'extra_user_profile_fields' );
add_action( 'edit_user_profile', 'extra_user_profile_fields' );

function extra_user_profile_fields( $user ) { ?>
    <table class="form-table">
    <tr>
        <th><label for="age"><?php _e("age"); ?></label></th>
        <td>
            <input type="number" min="0" name="age" id="age" value="<?php echo esc_attr( get_the_author_meta('age', $user->ID ) ); ?>" class="regular-text" /><br />
            <span class="description"><?php _e("Please enter your age it must be positive."); ?></span>
        </td>
    </tr>
    </table>
<?php } 

add_action( 'personal_options_update', 'save_extra_user_profile_fields' );
add_action( 'edit_user_profile_update', 'save_extra_user_profile_fields' );

function save_extra_user_profile_fields( $user_id ) {
    if ( empty( $_POST['_wpnonce'] ) || ! wp_verify_nonce( $_POST['_wpnonce'], 'update-user_' . $user_id ) ) {
        return;
    }
    
    if ( !current_user_can( 'edit_user', $user_id ) ) { 
        return false; 
    }

    update_user_meta( $user_id, 'age', $_POST['age'] );     
    
}
/* handle field validation */
add_filter( 'user_profile_update_errors', 'wppbc_custom_input_validation', 10, 3 );
function wppbc_custom_input_validation( $errors,$user_id ){
	if ( ! empty( $_POST['age'] ) && intval( $_POST['age'] ) < 0 ) {
		$errors->add( 'age', __( '<strong>ERROR</strong>: Your age must be positive value.') );
	}
	return $errors;
}

/*Add custom field to ‘user’ endpoint*/
add_action( 'rest_api_init', 'adding_user_meta_rest' );
    /**
     * Adds user_meta to rest api 'user' endpoint.
     */
    function adding_user_meta_rest() {
        register_rest_field( 'user',
            'user_meta',
            array(
                'get_callback'      => 'user_meta_callback',
                'update_callback'   => null,
                'schema'            => null,
            )
        );
    }
    /**
     * Return user meta object.
     *
     * @param array $user User.
     * @param string $field_name Registered custom field name ( In this case 'user_meta' )
     * @param object $request Request object.
     *
     * @return mixed
     */
    function user_meta_callback( $user, $field_name, $request) {
        return get_user_meta( $user['id'] );
    }
