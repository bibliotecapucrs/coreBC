<?php
/**
 * Add new fields above 'Update' button.
 *
 * @param WP_User $user User object.
 */
function tm_additional_profile_fields( $user ) {

    $months 	= array( 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' );
    $default	= array( 'day' => 1, 'month' => 'Jnuary', 'year' => 1950, );
    $birth_date = wp_parse_args( get_the_author_meta( 'birth_date', $user->ID ), $default );

    ?>
    <h3>Informações extra</h3>

    <table class="form-table">
   	 <tr>
   		 <th><label for="birth-date-day">Aniversário</label></th>
   		 <td>
   			 <select id="birth-date-day" name="birth_date[day]"><?php
   				 for ( $i = 1; $i <= 31; $i++ ) {
   					 printf( '<option value="%1$s" %2$s>%1$s</option>', $i, selected( $birth_date['day'], $i, false ) );
   				 }
   			 ?></select>
   			 <select id="birth-date-month" name="birth_date[month]"><?php
   				 foreach ( $months as $month ) {
   					 printf( '<option value="%1$s" %2$s>%1$s</option>', $month, selected( $birth_date['month'], $month, false ) );
   				 }
   			 ?></select>
   			 <select id="birth-date-year" name="birth_date[year]"><?php
   				 for ( $i = 1950; $i <= 2015; $i++ ) {
   					 printf( '<option value="%1$s" %2$s>%1$s</option>', $i, selected( $birth_date['year'], $i, false ) );
   				 }
   			 ?></select>
   		 </td>
   	 </tr>
    </table>
    <?php
}

add_action( 'show_user_profile', 'tm_additional_profile_fields' );
add_action( 'edit_user_profile', 'tm_additional_profile_fields' );


/**
 * Save additional profile fields.
 *
 * @param  int $user_id Current user ID.
 */
function tm_save_profile_fields( $user_id ) {

    if ( ! current_user_can( 'edit_user', $user_id ) ) {
     return false;
    }

    if ( empty( $_POST['birth_date'] ) ) {
     return false;
    }

    update_usermeta( $user_id, 'birth_date', $_POST['birth_date'] );
}

add_action( 'personal_options_update', 'tm_save_profile_fields' );
add_action( 'edit_user_profile_update', 'tm_save_profile_fields' );



