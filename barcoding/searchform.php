<?php
/**
 * The template for displaying search forms in Twenty Eleven
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="text" name="s" id="search" class="Header-searchSb--input" placeholder="<?php esc_attr_e( 'Buscar', 'arreza' ); ?>"  />
	<input  class="Header-searchSb--submit" type="submit" value="<?php esc_attr_e( '', 'arreza' ); ?>">
	<button class="Header-searchSb--icon icon-search" type="submit" value=""></button>
</form>