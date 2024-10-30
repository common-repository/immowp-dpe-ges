<?php
$dpeBlankDisplay = '';
$gesBlankDisplay = '' ;
$DpeGesInline = $display_inline ? 'energyDiagnosticContainer_inline' : 'energyDiagnosticContainer';
$lettre_dpe = '';
$lettre_ges = '';
$dpe_value = str_replace(',','.',$dpe_value);
$ges_value = str_replace(',','.',$ges_value);

if($zone_climatique) {
    if ( (is_numeric($dpe_value) && $dpe_value < 70) || (is_string($dpe_value) && strtoupper($dpe_value) == 'A') ) { 
        $lettre_dpe = 'A';
    } else if ( (is_numeric($dpe_value) && $dpe_value < 110) || (is_string($dpe_value) && strtoupper($dpe_value) == 'B') ){ 
        $lettre_dpe = 'B';
    } else if ( (is_numeric($dpe_value) && $dpe_value < 180) || (is_string($dpe_value) && strtoupper($dpe_value) == 'C') ){ 
        $lettre_dpe = 'C';
    } else if ( (is_numeric($dpe_value) && $dpe_value < 250) || (is_string($dpe_value) && strtoupper($dpe_value) == 'D') ){ 
        $lettre_dpe = 'D';
    } else if ( (is_numeric($dpe_value) && $dpe_value < 390) || (is_string($dpe_value) && strtoupper($dpe_value) == 'E') ){ 
        $lettre_dpe = 'E';
    } else if ( (is_numeric($dpe_value) && $dpe_value < 500) || (is_string($dpe_value) && strtoupper($dpe_value) == 'F') ){ 
        $lettre_dpe = 'F';
    } else if ( (is_numeric($dpe_value) && $dpe_value >= 500) || (is_string($dpe_value) && strtoupper($dpe_value) == 'G') ){ 
        $lettre_dpe = 'G';
    } else {
        $dpeBlankDisplay = ' dpe-blank-active';
    }
    
    if ( (is_numeric($ges_value) && $ges_value < 6) || (is_string($ges_value) && strtoupper($ges_value) == 'A') ) { 
        $lettre_ges = 'A';
    } else if( (is_numeric($ges_value) && $ges_value < 11) || (is_string($ges_value) && strtoupper($ges_value) == 'B') ) { 
        $lettre_ges = 'B';
    } else if( (is_numeric($ges_value) && $ges_value < 30) || (is_string($ges_value) && strtoupper($ges_value) == 'C') ) { 
        $lettre_ges = 'C';
    } else if( (is_numeric($ges_value) && $ges_value < 50) || (is_string($ges_value) && strtoupper($ges_value) == 'D') ) { 
        $lettre_ges = 'D';
    } else if( (is_numeric($ges_value) && $ges_value < 80) || (is_string($ges_value) && strtoupper($ges_value) == 'E') ) { 
        $lettre_ges = 'E';
    } else if( (is_numeric($ges_value) && $ges_value < 110) || (is_string($ges_value) && strtoupper($ges_value) == 'F') ) { 
        $lettre_ges = 'F';
    } else if( (is_numeric($ges_value) && $ges_value >= 110) || (is_string($ges_value) && strtoupper($ges_value) == 'G') ) { 
        $lettre_ges = 'G';
    } else {
        $gesBlankDisplay = ' ges-blank-active';
    }
} else {
    if ( (is_numeric($dpe_value) && $dpe_value < 70) || (is_string($dpe_value) && strtoupper($dpe_value) == 'A') ) { 
        $lettre_dpe = 'A';
    } else if ( (is_numeric($dpe_value) && $dpe_value < 110) || (is_string($dpe_value) && strtoupper($dpe_value) == 'B') ) { 
        $lettre_dpe = 'B';
    } else if ( (is_numeric($dpe_value) && $dpe_value < 180) || (is_string($dpe_value) && strtoupper($dpe_value) == 'C') ) { 
        $lettre_dpe = 'C';
    } else if ( (is_numeric($dpe_value) && $dpe_value < 250) || (is_string($dpe_value) && strtoupper($dpe_value) == 'D') ) { 
        $lettre_dpe = 'D';
    } else if ( (is_numeric($dpe_value) && $dpe_value < 330) || (is_string($dpe_value) && strtoupper($dpe_value) == 'E') ) { 
        $lettre_dpe = 'E';
    } else if ( (is_numeric($dpe_value) && $dpe_value < 420) || (is_string($dpe_value) && strtoupper($dpe_value) == 'F') ) { 
        $lettre_dpe = 'F';
    } else if ( (is_numeric($dpe_value) && $dpe_value >= 420) || (is_string($dpe_value) && strtoupper($dpe_value) == 'G') ) { 
        $lettre_dpe = 'G';
    } else {
        $dpeBlankDisplay = ' dpe-blank-active';
    }
    
    if ( (is_numeric($ges_value) && $ges_value < 6) || (is_string($ges_value) && strtoupper($ges_value) == 'A') ) { 
        $lettre_ges = 'A';
    } else if( (is_numeric($ges_value) && $ges_value < 11) || (is_string($ges_value) && strtoupper($ges_value) == 'B') ) { 
        $lettre_ges = 'B';
    } else if( (is_numeric($ges_value) && $ges_value < 30) || (is_string($ges_value) && strtoupper($ges_value) == 'C') ) { 
        $lettre_ges = 'C';
    } else if( (is_numeric($ges_value) && $ges_value < 50) || (is_string($ges_value) && strtoupper($ges_value) == 'D') ) { 
        $lettre_ges = 'D';
    } else if( (is_numeric($ges_value) && $ges_value < 70) || (is_string($ges_value) && strtoupper($ges_value) == 'E') ) { 
        $lettre_ges = 'E';
    } else if( (is_numeric($ges_value) && $ges_value < 100) || (is_string($ges_value) && strtoupper($ges_value) == 'F') ) { 
        $lettre_ges = 'F';
    } else if( (is_numeric($ges_value) && $ges_value >= 100) || (is_string($ges_value) && strtoupper($ges_value) == 'G') ) { 
        $lettre_ges = 'G';
    } else {
        $gesBlankDisplay = ' ges-blank-active';
    }
}


$comparer_lettre = ['' => 0, 'A' => 1, 'B' => 2, 'C' => 3, 'D' => 4, 'E' => 5, 'F' => 6, 'G' => 7];
if( $comparer_lettre[$lettre_ges] > $comparer_lettre[$lettre_dpe] ){
    $lettre_dpe = $lettre_ges;
}

$dpeClass = 'newdpe ' . $dpeBlankDisplay;
$dpeContainerClass = 'diagnostic-scale number' . $lettre_dpe;
$dpeDiagramContainerClass = 'diagnostic-diagram number' . $lettre_dpe;
$gesClass = 'newges ' . $gesBlankDisplay;
$gesContainerClass = 'emission-scale  number' . $lettre_ges;
$gesDiagramContainerClass = 'emission-diagram number' . $lettre_ges;

?>
<div class="immowp-dpe-ges">
    <div class="diagnostics-energetiques">
        <div class="diagnostic-header">
            <h4><?php _e( 'Diagnostic de performance énergétique', 'immowp-dpe-ges' ); ?></h4>
        </div>
        <div class="diagnostic-content <?php echo esc_html($DpeGesInline); ?>">
            
            <div class="<?php echo esc_html($dpeClass); ?>">
                <figure class="diagnostic diagnostic-dpe">
                    <div class="diagnostic-container" aria-hidden="true">
                        <div class="<?php echo esc_html($dpeContainerClass); ?>">
                            <span class="diagnostic-number-container">
                                <span class="diagnostic-number" aria-hidden="false"><?php echo esc_html($dpe_value); ?></span>
                                <abbr title="<?php _e("Unité de l'énergie primaire", 'immowp-dpe-ges'); ?>"><?php _e( 'KWh/m².an', 'immowp-dpe-ges' ); ?></abbr>
                            </span>
                            <span class="emission-number-container">
                                <span class="emission-number" aria-hidden="false"><?php echo esc_html($ges_value); ?>*</span>
                                <abbr title="<?php _e('Quantité d\'émissions de gaz à effet de serre', 'immowp-dpe-ges'); ?>"><?php _e( 'kg CO2/m².an', 'immowp-dpe-ges' ); ?></abbr>
                            </span>
                        </div>
                        <div class="<?php echo esc_html($dpeDiagramContainerClass); ?>">
                            <div class="diagnostic-legend-top"><span><?php _e( 'Logement économe', 'immowp-dpe-ges' ); ?></span></div>
                            <div class="diagnostic-line line-a"><span class="diagnostic-letter letter-a"><?php _e('A', 'immowp-dpe-ges'); ?></span></div>
                            <div class="diagnostic-line line-b"><span class="diagnostic-letter letter-b"><?php _e('B', 'immowp-dpe-ges'); ?></span></div>
                            <div class="diagnostic-line line-c"><span class="diagnostic-letter letter-c"><?php _e('C', 'immowp-dpe-ges'); ?></span></div>
                            <div class="diagnostic-line line-d"><span class="diagnostic-letter letter-d"><?php _e('D', 'immowp-dpe-ges'); ?></span></div>
                            <div class="diagnostic-line line-e"><span class="diagnostic-letter letter-e"><?php _e('E', 'immowp-dpe-ges'); ?></span></div>
                            <div class="diagnostic-line line-f"><span class="diagnostic-letter letter-f"><?php _e('F', 'immowp-dpe-ges'); ?></span></div>
                            <div class="diagnostic-line line-g"><span class="diagnostic-letter letter-g"><?php _e('G', 'immowp-dpe-ges'); ?></span></div>
                            <div class="diagnostic-legend-bottom"><span><?php _e( 'Logement énergivore', 'immowp-dpe-ges' ); ?></span></div>
                        </div>
                    </div>
                    <?php if(!$soumis_dpe) : ?>
                        <div class="dpe-blank">
                            <span class="dpe-blank-title"><?php _e('Bien non soumis au DPE', 'immowp-dpe-ges'); ?></span>
                        </div>
                    <?php else : ?>
                        <div class="dpe-blank">
                            <span class="dpe-blank-title"><?php _e( 'DPE vierge', 'immowp-dpe-ges' ); ?></span>
                            <span class="dpe-blank-legend"><?php _e( 'Consommations non exploitables', 'immowp-dpe-ges' ); ?></span>
                        </div>
                    <?php endif; ?>
                </figure>
            </div>

            <div class="<?php echo esc_html($gesClass); ?>">
                <span class="ges-title"><?php _e( '* Dont émissions de gaz à effet de serre', 'immowp-dpe-ges' ); ?></span>
                <figure class="emission emission-ges">
                    <div class="emission-container " aria-hidden="true">
                        <div class="<?php echo esc_html($gesDiagramContainerClass); ?>">
                            <div class="emission-legend-top"><span><?php _e( 'Faible émission de GES', 'immowp-dpe-ges' ); ?></span> </div>
                            <div class="emission-line line-a"><span class="emission-letter letter-a"><?php _e('A', 'immowp-dpe-ges'); ?></span></div>
                            <div class="emission-line line-b"><span class="emission-letter letter-b"><?php _e('B', 'immowp-dpe-ges'); ?></span></div>
                            <div class="emission-line line-c"><span class="emission-letter letter-c"><?php _e('C', 'immowp-dpe-ges'); ?></span></div>
                            <div class="emission-line line-d"><span class="emission-letter letter-d"><?php _e('D', 'immowp-dpe-ges'); ?></span></div>
                            <div class="emission-line line-e"><span class="emission-letter letter-e"><?php _e('E', 'immowp-dpe-ges'); ?></span></div>
                            <div class="emission-line line-f"><span class="emission-letter letter-f"><?php _e('F', 'immowp-dpe-ges'); ?></span></div>
                            <div class="emission-line line-g"><span class="emission-letter letter-g"><?php _e('G', 'immowp-dpe-ges'); ?></span></div>
                            <div class="emission-legend-bottom"><span><?php _e( 'Forte émission de GES', 'immowp-dpe-ges' ); ?></span></div>
                        </div>
                        <div class="<?php echo esc_html($gesContainerClass); ?>">
                            <span class="emission-number-container">
                                <span class="emission-number" aria-hidden="false"><?php echo esc_html($ges_value); ?></span>
                                <abbr title="<?php _e('Quantité d\'émissions de gaz à effet de serre', 'immowp-dpe-ges'); ?>"><?php _e( 'KgéqCO2 / m².an', 'immowp-dpe-ges' ); ?></abbr>
                            </span>
                        </div>
                        
                    </div>
                    <?php if(!$soumis_dpe) : ?>
                        <div class="ges-blank">
                            <span class="ges-blank-title"><?php _e('Bien non soumis au DPE', 'immowp-dpe-ges'); ?></span>
                        </div>
                    <?php else : ?>
                        <div class="ges-blank">
                            <span class="ges-blank-title"><?php _e( 'GES vierge', 'immowp-dpe-ges' ); ?></span>
                            <span class="ges-blank-legend"><?php _e( 'Consommations non exploitables', 'immowp-dpe-ges' ); ?></span>
                        </div>
                    <?php endif; ?>
                    
                    
                </figure>
            </div>
        </div>
        <?php if($lettre_dpe == "F" || $lettre_dpe == "G") : ?>
            <div class="diagnostic-header diagnostic-excessif">
                <h4><?php _e( 'Logement à consommation énergétique excessive : classe ' . $lettre_dpe, 'immowp-dpe-ges' ) ?></h4>
            </div>
        <?php endif; ?>
        <?php if($montant_estimation_min && $montant_estimation_max && $date_dpe && $soumis_dpe) : ?>
            <div class="diagnostic-footer">
                <div>
                    <h4><?php _e('Facture d’énergie estimée', 'immowp-dpe-ges'); ?></h4>
                    <div class="priceTag"><?php echo sprintf(__('Entre %s€ et %s€ / an.', 'immowp-dpe-ges' ), $montant_estimation_min, $montant_estimation_max); ?></div>
                    <div>
                        <?php echo sprintf(__("Montant estimé des dépenses annuelles d'énergie pour un usage standard : entre %s€ et %s€ par an.", 'immowp-dpe-ges' ), $montant_estimation_min, $montant_estimation_max); ?>
                        <br>
                        <?php if($date_reference): ?>
                        <?php echo sprintf(__("Prix moyens des énergies indexés au %s (abonnement compris).", 'immowp-dpe-ges' ), $date_reference); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <?php if($georisques) : ?>
        <div class="diagnostic-georisques">
            <h4><?php _e('Géorisques', 'immowp-dpe-ges'); ?></h4>
            <p><?php _e('Les informations sur les risques auxquels ce bien est exposé sont disponibles sur le site Géorisques', 'immowp-dpe-ges'); ?> <a href="https://www.georisques.gouv.fr" target="_blank" rel="noreferrer"><?php _e('https://www.georisques.gouv.fr', 'immowp-dpe-ges'); ?></a></p>
        </div>
    <?php endif; ?>
</div>