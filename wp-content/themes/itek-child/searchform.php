<?php
/**
 * The template for displaying search forms in iTek
 *
 * @package iTek
 */
?>
<form role="search" method="get" class="header-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Bạn muốn tìm gì?', 'placeholder', 'itek' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', 'itek' ); ?>">

</form>
