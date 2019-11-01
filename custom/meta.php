<div class="my_meta_control">
    <div>
        <input type="radio" name="_my_meta[ct]" value="1" onclick="ctlow('1')" <?php if(isset($meta['ct'])){if($meta['ct'] == '1'){print 'checked';}}?>>Filme
        <input type="radio" name="_my_meta[ct]" value="2" onclick="ctlow('2')" <?php if(isset($meta['ct'])){if($meta['ct'] == '2'){print 'checked';}}?>>Série
    </div>
    <div>
        <div>
            <label>[KEY] URL do trailer</label>
            <input type="text" name="_my_meta[key]" value="<?php if(!empty($meta['key'])) echo $meta['key']; ?>"/>
        </div>

        <div>
            <label>Titulo original do filme</label>
            <input type="text" name="_my_meta[torig]" value="<?php if(!empty($meta['torig'])) echo $meta['torig']; ?>"/>
        </div>

        <div>
            <label>Ano do filme</label>
            <input type="text" name="_my_meta[ano]" value="<?php if(!empty($meta['ano'])) echo $meta['ano']; ?>"/>
        </div>

        <div>
            <label>Diretor do filme</label>
            <input type="text" name="_my_meta[drt]" value="<?php if(!empty($meta['drt'])) echo $meta['drt']; ?>"/>
        </div>

        <div>
            <label>Elenco do filme</label>
            <input type="text" name="_my_meta[elenco]" value="<?php if(!empty($meta['elenco'])) echo $meta['elenco']; ?>"/>
        </div>

        <div>
            <label>Duração do filme</label>
            <input type="text" name="_my_meta[durat]" value="<?php if(!empty($meta['durat'])) echo $meta['durat']; ?>"/>
        </div>

        <div>
            <label>Origem do filme</label>
            <input type="text" name="_my_meta[orig]" value="<?php if(!empty($meta['orig'])) echo $meta['orig']; ?>"/>
        </div>

        <div>
            <label>Classificação e Qualidade</label>
            <select name="_my_meta[classf]">
                <option value="l" <?php if(isset($meta['classf'])){if($meta['classf'] == 'l'){print 'selected';}}?>>Livre</option>
                <option value="10" <?php if(isset($meta['classf'])){if($meta['classf'] == '10'){print 'selected';}}?>>10</option>
                <option value="12" <?php if(isset($meta['classf'])){if($meta['classf'] == '12'){print 'selected';}}?>>12</option>
                <option value="14" <?php if(isset($meta['classf'])){if($meta['classf'] == '14'){print 'selected';}}?>>14</option>
                <option value="16" <?php if(isset($meta['classf'])){if($meta['classf'] == '16'){print 'selected';}}?>>16</option>
                <option value="18" <?php if(isset($meta['classf'])){if($meta['classf'] == '18'){print 'selected';}}?>>18</option>
            </select>
            <select name="_my_meta[qualt]" class="float_r">
                <option value="CAM" <?php if(isset($meta['qualt'])){if($meta['qualt'] == 'CAM'){print 'selected';}}?>>CAM</option>
                <option value="TS" <?php if(isset($meta['qualt'])){if($meta['qualt'] == 'TS'){print 'selected';}}?>>TS</option>
                <option value="HD" <?php if(isset($meta['qualt'])){if($meta['qualt'] == 'HD'){print 'selected';}}?>>HD</option>
                <option value="TVRip" <?php if(isset($meta['qualt'])){if($meta['qualt'] == 'TVRip'){print 'selected';}}?>>TVRip</option>
                <option value="HDCam" <?php if(isset($meta['qualt'])){if($meta['qualt'] == 'HDCam'){print 'selected';}}?>>HDCam</option>
                <option value="HDRip" <?php if(isset($meta['qualt'])){if($meta['qualt'] == 'HDRip'){print 'selected';}}?>>HDRip</option>
                <option value="HDTs" <?php if(isset($meta['qualt'])){if($meta['qualt'] == 'HDTs'){print 'selected';}}?>>HDTs</option>
                <option value="WEBDL" <?php if(isset($meta['qualt'])){if($meta['qualt'] == 'WEBDL'){print 'selected';}}?>>WEBDL</option>
                <option value="BRRip" <?php if(isset($meta['qualt'])){if($meta['qualt'] == 'BRRip'){print 'selected';}}?>>BRRip</option>
                <option value="BDRip" <?php if(isset($meta['qualt'])){if($meta['qualt'] == 'BDRip'){print 'selected';}}?>>BDRip</option>
                <option value="DVDRip" <?php if(isset($meta['qualt'])){if($meta['qualt'] == 'DVDRip'){print 'selected';}}?>>DVDRip</option>
            </select>
        </div>

        <div>
            <label>IDIOMA E IMDB</label>
            <select name="_my_meta[aud]">
                <option value="" <?php if(isset($meta['aud'])){if($meta['aud'] == ''){print 'selected';}}?>>Áudio?</option>
                <option value="1" <?php if(isset($meta['aud'])){if($meta['aud'] == '1'){print 'selected';}}?>>Dublado</option>
                <option value="2" <?php if(isset($meta['aud'])){if($meta['aud'] == '2'){print 'selected';}}?>>Legendado</option>
            </select>
            <input type="text" name="_my_meta[imdb]" class="float_r w_49" value="<?php if(!empty($meta['imdb'])) echo $meta['imdb']; ?>" placeholder="IMDB do filme ex: 7,6"/>
        </div>
        <!--TAGS PLAYER-->
        <div class="ct_filmes <?php if(isset($meta['ct'])){if($meta['ct'] == '1'){print 'd_fall';}}?>">
            <label>LINKS E PLAYERS</label>
            <div class="mb_ova3">
                <input type="text" class="w_65 float_l" name="_my_meta[url_1]" value="<?php if(!empty($meta['url_1'])) echo $meta['url_1']; ?>" placeholder="URL_1 do filme"/>
                <input type="text" class="w_34 float_r" name="_my_meta[ply_1]" value="<?php if(!empty($meta['ply_1'])) echo $meta['ply_1']; ?>" placeholder="*Nome do Player_1"/>
            </div>
            <div class="mb_ova3">
                <input type="text" class="w_65 float_l" name="_my_meta[url_2]" value="<?php if(!empty($meta['url_2'])) echo $meta['url_2']; ?>" placeholder="URL_2 do filme"/>
                <input type="text" class="w_34 float_r" name="_my_meta[ply_2]" value="<?php if(!empty($meta['ply_2'])) echo $meta['ply_2']; ?>" placeholder="*Nome do Player_2"/>
            </div>
            <div>
                <input type="text" class="w_65 float_l" name="_my_meta[url_3]" value="<?php if(!empty($meta['url_3'])) echo $meta['url_3']; ?>" placeholder="URL_3 do filme"/>
                <input type="text" class="w_34 float_r" name="_my_meta[ply_3]" value="<?php if(!empty($meta['ply_3'])) echo $meta['ply_3']; ?>" placeholder="*Nome do Player_3"/>
            </div>
        </div>
        <div class="ct_series <?php if(isset($meta['ct'])){if($meta['ct'] == '2'){print 'd_fall';}}?>">
            <div>
                <label>LINKS E PLAYERS</label>
                <input type="text" name="_my_meta[cts_key]" value="<?php if(!empty($meta['cts_key'])) echo $meta['cts_key']; ?>" placeholder="URL PARA KEY"/>
            </div>

            <div>
                <div class="mb_10">
                    <label>Quatas TEMPORADAS?</label>
                    <input type="number" name="_my_meta[s_post]" value="<?php if(!empty($meta['s_post'])) echo $meta['s_post']; ?>"/>

                    <a href="#" class="btn btn-primary" role="button" data-toggle="modal" data-target=".S_POST">Atualizar EPs</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php if(!empty($meta['s_post'])) : ?>
<!-- S_POST BOX -->
<div class="modal fade S_POST" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-md box_ove_top">
        <div class="modal-content bg_fall_spost">
            <div class="modal-body">
                <?php 
                    if(!empty($meta['s_post'])) {
                        $s_post = $meta['s_post'];
                        for ($i=1; $i<=$s_post; $i++){
                            print   '<div class="mb_10">';
                            print       '<a class="btn btn-primary" role="button" data-toggle="collapse" href="#'.$meta['cts_key'].'_'.$i.'" aria-expanded="false" aria-controls="'.$meta['cts_key'].'_'.$i.'">T'.$i.'</a>';
                            print       '<span class="mlr_5px dis_in"><input type="checkbox" class="chec_b" name="_my_meta['.$meta['cts_key'].'_'.$i.'_d]" value="ok"'; if(isset($meta[$meta['cts_key'].'_'.$i.'_d'])){if($meta[$meta['cts_key'].'_'.$i.'_d'] == 'ok'){print 'checked';}} print '>Dublado</span>';
                            print       '<span class="mlr_5px dis_in"><input type="checkbox" class="chec_b" name="_my_meta['.$meta['cts_key'].'_'.$i.'_l]" value="ok"'; if(isset($meta[$meta['cts_key'].'_'.$i.'_l'])){if($meta[$meta['cts_key'].'_'.$i.'_l'] == 'ok'){print 'checked';}} print '>Legendado</span>';

                            print       '<div class="collapse" id="'.$meta['cts_key'].'_'.$i.'">';
                            print           '<div class="mb_10">T'.$i.': <input type="number" name="_my_meta['.$meta['cts_key'].'_'.$i.']" value="'.$meta[$meta['cts_key'].'_'.$i].'"/></div>';
                                            $s_pline = $meta[$meta['cts_key'].'_'.$i];
                                            if(!empty($s_pline)) {
                                                
                                                for ($e=1; $e<=$s_pline; $e++){
                                                    $s_audid = $meta[$meta['cts_key'].'_'.$i.'_d'];
                                                    $s_audil = $meta[$meta['cts_key'].'_'.$i.'_l'];
                                                    print '<div class="mb_10">';
                                                    if(isset($s_audid) && $s_audid == 'ok') {
                                                        print '<div>T'.$i.'-EP'.$e.' <b>D</b>: <input type="text" class="mx_plans" name="_my_meta['.$meta['cts_key'].'_'.$i.'_'.$e.'d]" value="'.$meta[$meta['cts_key'].'_'.$i.'_'.$e.'d'].'"/></div>';
                                                    }
                                                    if(isset($s_audil) && $s_audil == 'ok') {
                                                        print '<div>T'.$i.'-EP'.$e.' <b>L</b>: <input type="text" class="mx_plans" name="_my_meta['.$meta['cts_key'].'_'.$i.'_'.$e.'l]" value="'.$meta[$meta['cts_key'].'_'.$i.'_'.$e.'l'].'"/></div>';
                                                    }
                                                    print '</div>';
                                                }
                                            }
                            print       '</div>';
                            print   '</div>';
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>