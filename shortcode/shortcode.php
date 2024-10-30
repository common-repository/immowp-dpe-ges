<?php
function immowpdpeges_add_shortcode(){
    wp_enqueue_style( 'immowpdpeges-css', plugin_dir_url( IMMOWPDPEGES_PLUGIN_FILE ) . 'dist/css/style.min.css' );
    add_shortcode('DPEGES', 'immowpdpeges_html_dpeges');
}
add_action( 'init', 'immowpdpeges_add_shortcode');

/*
*  immowpdpeges_html_dpeges
*
*  This function will return the html of DPE
*
*  @type	function
*  @date	15/01/2022
*  @since	1.4
*
*  @param	$atts (array) User defined attributes in shortcode tag
*  @return	(string)
*/
function immowpdpeges_html_dpeges( $atts ){
    $args = shortcode_atts( array(
        'dpe' => '',
        'ges' => '',
        'inline' => 'true',
        'dpe_meta_key' => null,
        'ges_meta_key' => null,
        'date_dpe' => null,
        'date_dpe_meta_key' => null,
        'montant_estimation_min' => null,
        'montant_estimation_min_meta_key' => null,
        'montant_estimation_max' => null,
        'montant_estimation_max_meta_key' => null,
        'date_reference' => null,
        'date_reference_meta_key' => null,
        'georisques' => 0,
        'georisques_meta_key' => 0,
        'zone_climatique' => 0,
        'zone_climatique_meta_key' => 0,
        'soumis_dpe' => 1,
        'soumis_dpe_meta_key' => 0
    ), $atts );

    ob_start();

    // Get template
    if(!empty($args['dpe_meta_key'])){
        global $post;
        $dpe_value = get_post_meta(get_the_ID(), $args['dpe_meta_key'], true);
    } else {
        $dpe_value = $args['dpe'];
    }

    if(!empty($args['ges_meta_key'])){
        $ges_value = get_post_meta(get_the_ID(), $args['ges_meta_key'], true);
    } else {
        $ges_value = $args['ges'];
    }
    
    if(!empty($args['date_dpe_meta_key'])){
        $date_dpe = get_post_meta(get_the_ID(), $args['date_dpe_meta_key'], true);
    } else {
        $date_dpe = $args['date_dpe'];
    }
    
    if(!empty($args['montant_estimation_min_meta_key'])){
        $montant_estimation_min = get_post_meta(get_the_ID(), $args['montant_estimation_min_meta_key'], true);
    } else {
        $montant_estimation_min = $args['montant_estimation_min'];
    }

    if(!empty($args['montant_estimation_max_meta_key'])){
        $montant_estimation_max = get_post_meta(get_the_ID(), $args['montant_estimation_max_meta_key'], true);
    } else {
        $montant_estimation_max = $args['montant_estimation_max'];
    }

    if(!empty($args['date_reference_meta_key'])){
        $date_reference = get_post_meta(get_the_ID(), $args['date_reference_meta_key'], true);
    } else {
        $date_reference = $args['date_reference'];
    }

    if(!empty($args['georisques_meta_key'])){
        $georisques = get_post_meta(get_the_ID(), $args['georisques_meta_key'], true);
    } else {
        $georisques = $args['georisques'];
    }

    if(!empty($args['zone_climatique_meta_key'])){
        $zone_climatique = get_post_meta(get_the_ID(), $args['zone_climatique_meta_key'], true);
    } else {
        $zone_climatique = $args['zone_climatique'];
    }

    if(!empty($args['soumis_dpe_meta_key'])){
        $soumis_dpe = get_post_meta(get_the_ID(), $args['soumis_dpe_meta_key'], true);
    } else {
        $soumis_dpe = $args['soumis_dpe'];
    }

    $display_inline = 'true' === $args['inline'];

    if(!empty($date_dpe) && strtotime(str_replace("/", "-", $date_dpe)) < strtotime("01-07-2021"))
        include apply_filters( 'immowpdpeges_shorcode_template', plugin_dir_path( __FILE__ ) . 'dpeges-template.php', 'newdpeges' );
    else
        include apply_filters( 'immowpdpeges_shorcode_template', plugin_dir_path( __FILE__ ) . 'newdpeges-template.php', 'newdpeges' );

    $output = ob_get_clean();

    return $output;
}