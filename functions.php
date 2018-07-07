/* Adiciona botao para LinkedIn company */
function jetpackme_linkedin_company_icon( $html_array ) {
    return
        $html_array +
        array(
            23 =>    // This key can be modified to change the order the new item will appear in the list
                '<a title="" '
                . 'href="https://www.linkedin.com/company/octanage" '
                . 'class="genericon genericon-linkedin" target="_blank">'
                . '<span class="screen-reader-text">Octanage no LinkedIn</span></a>'
        );
}
add_filter( 'jetpack_social_media_icons_widget_array', 'jetpackme_linkedin_company_icon' );

/* Adiciona botao para RSS Feed  */
function jetpackme_feed_icon( $html_array ) {
    return
        $html_array +
        array(
            83 =>    // This key can be modified to change the order the new item will appear in the list
                '<a title="" '
                . 'href="https://octanage.podbean.com/feed.xml" '
                . 'class="genericon genericon-feed" target="_blank">'
                . '<span class="screen-reader-text">Feed do Octanage</span></a>'
        );
}
add_filter( 'jetpack_social_media_icons_widget_array', 'jetpackme_feed_icon' );

/* Adiciona botao para Pinterest Alt  */
function jetpackme_pinterest_alt_icon( $html_array ) {
    return
        $html_array +
        array(
            43 =>    // This key can be modified to change the order the new item will appear in the list
                '<a title="" '
                . 'href="https://pinterest.com/Octanage" '
                . 'class="genericon genericon-pinterest-alt" target="_blank">'
                . '<span class="screen-reader-text">Octanage no Pinterest</span></a>'
        );
}
add_filter( 'jetpack_social_media_icons_widget_array', 'jetpackme_pinterest_alt_icon' );


/* Re-ordena Insta como #1  */
function jetpackme_instagram_icon( $html_array ) {
    return
        $html_array +
        array(
            13 =>    // This key can be modified to change the order the new item will appear in the list
                '<a title="" '
                . 'href="https://instagram.com/octanagepodcast" '
                . 'class="genericon genericon-instagram" target="_blank">'
                . '<span class="screen-reader-text">Octanage no Instagram</span></a>'
        );
}
add_filter( 'jetpack_social_media_icons_widget_array', 'jetpackme_instagram_icon' );

/* Re-ordena YouTube como #5  */
function jetpackme_youtube_icon( $html_array ) {
    return
        $html_array +
        array(
            33 =>    // This key can be modified to change the order the new item will appear in the list
                '<a title="" '
                . 'href="https://www.youtube.com/channel/UC7BWDJ8Zulwd9O4IZ8esrEg" '
                . 'class="genericon genericon-youtube" target="_blank">'
                . '<span class="screen-reader-text">Octanage no Youtube</span></a>'
        );
}
add_filter( 'jetpack_social_media_icons_widget_array', 'jetpackme_youtube_icon' );
