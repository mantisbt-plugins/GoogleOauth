<?php
/**
 * User API
 *
 */

use Mantis\Exceptions\ClientException;

/**
 * Get a user id from their GMAIL email address
 *
 * @param string $p_email The email address to retrieve data for.
 * @param boolean $p_throw true to throw exception when not found, false otherwise.
 * @return array
 */
function user_get_id_by_gmail_address( $p_email, $p_throw = false ) {

  $table = plugin_table('user');
  
	db_param_push();
	$t_query = "SELECT user_id AS id FROM {$table} WHERE gmail_address=" . db_param();
	$t_result = db_query( $t_query, array( $p_email ) );

	$t_row = db_fetch_array( $t_result );
	if( $t_row ) {
		return $t_row['id'];
	}

	if( $p_throw ) {
		throw new ClientException(
			"User with gmail_address '$p_email' not found",
			ERROR_USER_BY_EMAIL_NOT_FOUND,
			array( $p_email ) );
	}

	return false;
}