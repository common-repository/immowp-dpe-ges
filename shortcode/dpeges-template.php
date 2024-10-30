<?php
$class = 'immowp-dpe-ges';
$classSC = '';
$classBlank = '';
$DpeGesInline = $display_inline ? 'energyDiagnosticContainer_inline' : 'energyDiagnosticContainer';

?>
<div class="diagnostics-energetiques olddpe">
    <div class="diagnostic-header">
        <h4><?php _e( 'Diagnostic de performance énergétique', 'immowp-dpe-ges' ); ?></h4>
    </div>
    <div class="diagnostic-content <?php echo esc_html($DpeGesInline); ?>">
    <?php
        // DPE
        if( empty($dpe_value) ):
            $classBlank = ' dpe-blank-active';
        endif;
        $lettre_dpe = '';
        if($dpe_value == 'A'): $lettre_dpe = 'A';
        elseif($dpe_value == 'B'): $lettre_dpe = 'B';
        elseif($dpe_value == 'C'): $lettre_dpe = 'C';
        elseif($dpe_value == 'D'): $lettre_dpe = 'D';
        elseif($dpe_value == 'E'): $lettre_dpe = 'E';
        elseif($dpe_value == 'F'): $lettre_dpe = 'F';
        elseif($dpe_value == 'G'): $lettre_dpe = 'G';
        elseif($dpe_value <= 50): $lettre_dpe = 'A';
        elseif($dpe_value <= 90): $lettre_dpe = 'B';
        elseif($dpe_value <= 150): $lettre_dpe = 'C';
        elseif($dpe_value <= 230): $lettre_dpe = 'D';
        elseif($dpe_value <= 330): $lettre_dpe = 'E';
        elseif($dpe_value <= 450): $lettre_dpe = 'F';
        elseif($dpe_value > 450): $lettre_dpe = 'G';
        endif;
        ?>
        <div class="dpe<?php echo esc_html($classSC).esc_html($classBlank); ?>">
            <figure class="diagnostic diagnostic-dpe">
                <figcaption class="diagnostic-title hidden"><?php _e('Diagnostic de performance énergétique', 'immowp-dpe-ges'); ?></figcaption>
                <div class="diagnostic-container" aria-hidden="true">
                    <div class="diagnostic-legend"><span><?php _e('Logement économe', 'immowp-dpe-ges'); ?></span> <span><abbr title="<?php _e('Unité de l\'énergie primaire', 'immowp-dpe-ges'); ?>"><?php _e('KWhep / m².an', 'immowp-dpe-ges'); ?></abbr></span></div>
                    <div class="diagnostic-diagram">
                        <div class="diagnostic-line line-a"><span class="diagnostic-value"><?php _e('≤ 50', 'immowp-dpe-ges'); ?></span><span class="diagnostic-letter letter-a"><?php _e('A', 'immowp-dpe-ges'); ?></span></div>
                        <div class="diagnostic-line line-b"><span class="diagnostic-value"><?php _e('51 to 90', 'immowp-dpe-ges'); ?></span><span class="diagnostic-letter letter-b"><?php _e('B', 'immowp-dpe-ges'); ?></span></div>
                        <div class="diagnostic-line line-c"><span class="diagnostic-value"><?php _e('91 to 150', 'immowp-dpe-ges'); ?></span><span class="diagnostic-letter letter-c"><?php _e('C', 'immowp-dpe-ges'); ?></span></div>
                        <div class="diagnostic-line line-d"><span class="diagnostic-value"><?php _e('151 to 230', 'immowp-dpe-ges'); ?></span><span class="diagnostic-letter letter-d"><?php _e('D', 'immowp-dpe-ges'); ?></span></div>
                        <div class="diagnostic-line line-e"><span class="diagnostic-value"><?php _e('231 to 330', 'immowp-dpe-ges'); ?></span><span class="diagnostic-letter letter-e"><?php _e('E', 'immowp-dpe-ges'); ?></span></div>
                        <div class="diagnostic-line line-f"><span class="diagnostic-value"><?php _e('331 to 450', 'immowp-dpe-ges'); ?></span><span class="diagnostic-letter letter-f"><?php _e('F', 'immowp-dpe-ges'); ?></span></div>
                        <div class="diagnostic-line line-g"><span class="diagnostic-value"><?php _e('&gt; 450', 'immowp-dpe-ges'); ?></span><span class="diagnostic-letter letter-g"><?php _e('G', 'immowp-dpe-ges'); ?></span></div>
                    </div>
                    <div class="diagnostic-scale">
                        <span class="diagnostic-number-container number<?php echo esc_html($lettre_dpe); ?>">
                            <span class="diagnostic-number" aria-hidden="false"><?php echo esc_html($dpe_value); ?><abbr class="hidden" title="<?php _e('Unité de l\'énergie primaire', 'immowp-dpe-ges'); ?>"><?php _e('KWhep / m².an', 'immowp-dpe-ges'); ?></abbr></span>
                        </span>
                    </div>
                    <span><?php _e('Logement énergivore', 'immowp-dpe-ges'); ?></span>
                </div>
                <?php if(!$soumis_dpe) : ?>
                    <div class="dpe-blank">
                        <span class="dpe-blank-title"><?php _e('Bien non soumis au DPE', 'immowp-dpe-ges'); ?></span>
                    </div>
                <?php else : ?>
                    <div class="dpe-blank">
                        <span class="dpe-blank-title"><?php _e('DPE blank', 'immowp-dpe-ges'); ?></span>
                        <span class="dpe-blank-legend"><?php _e('Consommations non exploitables', 'immowp-dpe-ges'); ?></span>
                    </div>
                <?php endif; ?>
                
            </figure>
        </div>

        <?php 
        // GES
            if( empty($ges_value) ):
                $classBlank = ' ges-blank-active';
            endif;
            $lettre_ges = '';
            if ($ges_value == 'A'): $lettre_ges = 'A';
            elseif($ges_value == 'B'): $lettre_ges = 'B';
            elseif($ges_value == 'C'): $lettre_ges = 'C';
            elseif($ges_value == 'D'): $lettre_ges = 'D';
            elseif($ges_value == 'E'): $lettre_ges = 'E';
            elseif($ges_value == 'F'): $lettre_ges = 'F';
            elseif($ges_value == 'G'): $lettre_ges = 'G';
            elseif($ges_value <= 5): $lettre_ges = 'A';
            elseif($ges_value <= 10): $lettre_ges = 'B';
            elseif($ges_value <= 20): $lettre_ges = 'C';
            elseif($ges_value <= 35): $lettre_ges = 'D';
            elseif($ges_value <= 55): $lettre_ges = 'E';
            elseif($ges_value <= 80): $lettre_ges = 'F';
            elseif($ges_value > 80): $lettre_ges = 'G';
        endif;
        ?>
        <div class="ges<?php echo esc_html($classSC).esc_html($classBlank); ?>">
            <figure class="emission emission-ges">
                <figcaption class="emission-title hidden"><?php _e('Emission de Gaz à Effet de Serre', 'immowp-dpe-ges'); ?></figcaption>
                <div class="emission-container " aria-hidden="true">
                    <div class="emission-legend"><span><?php _e('Faible émission de GES', 'immowp-dpe-ges'); ?></span> <span><abbr title="<?php _e('Quantité d\'émissions de gaz à effet de serre', 'immowp-dpe-ges'); ?>"><?php _e('KgéqCO2 / m².an', 'immowp-dpe-ges'); ?></abbr></span></div>
                    <div class="emission-diagram">
                        <div class="emission-line line-a"><span class="emission-value"><?php _e('≤ 5', 'immowp-dpe-ges'); ?></span><span class="emission-letter letter-a"><?php _e('A', 'immowp-dpe-ges'); ?></span></div>
                        <div class="emission-line line-b"><span class="emission-value"><?php _e('6 to 10', 'immowp-dpe-ges'); ?></span><span class="emission-letter letter-b"><?php _e('B', 'immowp-dpe-ges'); ?></span></div>
                        <div class="emission-line line-c"><span class="emission-value"><?php _e('11 to 20', 'immowp-dpe-ges'); ?></span><span class="emission-letter letter-c"><?php _e('C', 'immowp-dpe-ges'); ?></span></div>
                        <div class="emission-line line-d"><span class="emission-value"><?php _e('21 to 35', 'immowp-dpe-ges'); ?></span><span class="emission-letter letter-d"><?php _e('D', 'immowp-dpe-ges'); ?></span></div>
                        <div class="emission-line line-e"><span class="emission-value"><?php _e('36 to 55', 'immowp-dpe-ges'); ?></span><span class="emission-letter letter-e"><?php _e('E', 'immowp-dpe-ges'); ?></span></div>
                        <div class="emission-line line-f"><span class="emission-value"><?php _e('56 to 80', 'immowp-dpe-ges'); ?></span><span class="emission-letter letter-f"><?php _e('F', 'immowp-dpe-ges'); ?></span></div>
                        <div class="emission-line line-g"><span class="emission-value"><?php _e('&gt; 80', 'immowp-dpe-ges'); ?></span><span class="emission-letter letter-g"><?php _e('G', 'immowp-dpe-ges'); ?></span></div>
                    </div>
                    <div class="emission-scale">
                        <span class="emission-number-container number<?php echo esc_html($lettre_ges); ?>">
                            <span class="emission-number" aria-hidden="false"><?php echo $ges_value; ?>
                                <abbr title="<?php _e('Quantité d\'émissions de gaz à effet de serre', 'immowp-dpe-ges'); ?>" class="hidden"><?php _e('KgéqCO2 / m².an', 'immowp-dpe-ges'); ?></abbr>
                            </span>
                        </span>
                    </div>
                    <span><?php _e('Forte émission de GES', 'immowp-dpe-ges'); ?></span>
                </div>
                <?php if(!$soumis_dpe) : ?>
                    <div class="ges-blank">
                        <span class="ges-blank-title"><?php _e('Bien non soumis au DPE', 'immowp-dpe-ges'); ?></span>
                    </div>
                <?php else : ?>
                    <div class="ges-blank">
                        <span class="ges-blank-title"><?php _e('GES blank', 'immowp-dpe-ges'); ?></span>
                        <span class="ges-blank-legend"><?php _e('Consommations non exploitables', 'immowp-dpe-ges'); ?></span>
                    </div>
                <?php endif; ?>
            </figure>
        </div>
    </div>
    <div class="diagnostic-footer">
        <small><?php _e( 'Diagnostic réalisé avant le 1er juillet 2021.', 'immoimmowpdpeges' ); ?></small>
    </div>
</div>
