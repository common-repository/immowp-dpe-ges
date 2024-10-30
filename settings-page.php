<?php

add_action('admin_menu', 'immowpdpeges_register_options_page');
function immowpdpeges_register_options_page() {
    add_options_page('DPE / GES réglages', 'DPE / GES', 'manage_options', 'immowp-dpe-ges', 'immowpdpeges_admin_settings');
}

function immowpdpeges_admin_settings(){
    if (!current_user_can('manage_options', __CLASS__)){
        wp_die(__('Vous ne disposez pas des autorisations suffisantes pour accéder à cette page.', 'immowp-dpe-ges'));
    }
    
    ?>
<div class="wrap banner">
	<h1><?php _e('DPE / GES', 'immowp-dpe-ges'); ?></h1>
    <div id="shortcodes" class="section">
        <h2><?php echo __('Shortcodes', 'immowp-dpe-ges'); ?></h2>
        <table class="form-table">
            <tr>
                <th><?php echo __('DPE/GES', 'immowp-dpe-ges'); ?></th>
                <td><textarea style="width:100%" readonly>[DPEGES dpe="256" ges="27"]</textarea></td>
            </tr>
            <tr>
                <th><?php echo __('DPE/GES options', 'immowp-dpe-ges'); ?></th>
                <td><textarea style="width:100%" readonly>[DPEGES dpe="256" ges="27" soumis_dpe="1" date_dpe="31/01/2022" montant_estimation_min="1200" montant_estimation_max="1400" date_reference="31/12/2022" georisques="1" zone_climatique="0" inline="true"]</textarea></td>
            </tr>
            <tr>
                <th><?php echo __('DPE/GES avec meta key', 'immowp-dpe-ges'); ?></th>
                <td><textarea id="shortcode-6" name="shortcode[]" style="width:100%" class="shortcode" readonly>[DPEGES dpe_meta_key="custom_dpe" ges_meta_key="custom_ges" soumis_dpe_meta_key="1" date_dpe_meta_key="custom_date_dpe" montant_estimation_min_meta_key="custom_montant_min" montant_estimation_max_meta_key="custom_montant_max" date_reference_meta_key="custom_date_reference" georisques_meta_key="custom_georisques" inline="true"]</textarea></td>
            </tr>
        </table>
        <table class="form-table-details form-table">
            <tr>
                <th style="padding:0 10px 0 0;"><?php echo __('DPE valeur *', 'immowp-dpe-ges'); ?></th>
                <td style="padding:0 10px;"><?php _e('Valeur du DPE', 'immowp-dpe-ges'); ?></td>
            </tr>
            <tr>
                <th style="padding:0 10px 0 0;"><?php echo __('GES valeur *', 'immowp-dpe-ges'); ?></th>
                <td style="padding:0 10px;"><?php _e('Valeur du GES', 'immowp-dpe-ges'); ?></td>
            </tr>
            <tr>
                <th style="padding:0 10px 0 0;"><?php echo __('Soumis DPE', 'immowp-dpe-ges'); ?></th>
                <td style="padding:0 10px;"><?php _e('Bien soumis au DPE, 1 pour oui, 0 pour non, par défaut 1', 'immowp-dpe-ges'); ?></td>
            </tr>
            <tr>
                <th style="padding:0 10px 0 0;"><?php echo __('Date DPE', 'immowp-dpe-ges'); ?></th>
                <td style="padding:0 10px;"><?php _e('Date de réalisation du DPE', 'immowp-dpe-ges'); ?></td>
            </tr>
            <tr>
                <th style="padding:0 10px 0 0;"><?php echo __('Montant estimation min', 'immowp-dpe-ges'); ?></th>
                <td style="padding:0 10px;"><?php _e('Estimation minimum de la facture d\'énergie', 'immowp-dpe-ges'); ?></td>
            </tr>
            <tr>
                <th style="padding:0 10px 0 0;"><?php echo __('Montant estimation max', 'immowp-dpe-ges'); ?></th>
                <td style="padding:0 10px;"><?php _e('Estimation maximum de la facture d\'énergie', 'immowp-dpe-ges'); ?></td>
            </tr>
            <tr>
                <th style="padding:0 10px 0 0;"><?php echo __('Date référence', 'immowp-dpe-ges'); ?></th>
                <td style="padding:0 10px;"><?php _e('Date des prix de référence pour l\'estimation', 'immowp-dpe-ges'); ?></td>
            </tr>
            <tr>
                <th style="padding:0 10px 0 0;"><?php echo __('Géorisques', 'immowp-dpe-ges'); ?></th>
                <td style="padding:0 10px;"><?php _e('Affichage des géorisques, 1 pour oui, 0 pour non; par défaut 1', 'immowp-dpe-ges'); ?></td>
            </tr>
            <tr>
                <th style="padding:0 10px 0 0;"><?php echo __('Zone climatiques', 'immowp-dpe-ges'); ?></th>
                <td style="padding:0 10px;"><?php _e('Bien situé en zone climatiques rigoureuses, 1 pour oui, 0 pour non; par défaut 0', 'immowp-dpe-ges'); ?></td>
            </tr>
        </table>
        <br>
        <br>
        <p><?php _e('Pour toutes demandes immobilières ou corrections, n\'hésitez pas à utiliser le support sur WordPress.org ou envoyer un mail à support@immowp.fr.'); ?></p>

        <small><a href="https://www.service-public.fr/particuliers/vosdroits/F16096" target="_blank"><?php _e('DPE/GES', 'immowp-dpe-ges'); ?></a></small><br>
        <small><a href="https://www.adil27.org/fileadmin/Sites/ADIL_27/documents/DP_DPE.pdf" target="_blank"><?php _e('Dossier de presse DPE/GES', 'immowp-dpe-ges'); ?></a></small><br>
        <small><a href="https://www.georisques.gouv.fr/sites/default/files/ial/plaquette_IAL.pdf" target="_blank"><?php _e('Information Géorisques', 'immowp-dpe-ges'); ?></a></small><br>
    </div>
<?php

}