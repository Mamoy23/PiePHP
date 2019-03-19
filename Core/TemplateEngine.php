<?php
namespace Core;

class TemplateEngine {

    public function parse($f){
        $content = file_get_contents($f);
        /*$content = preg_replace('([{][{])', ' <?= htmlentities(', $content);
        $content = preg_replace('([}][}])', ')?>', $content);
        $content = preg_replace('([@][i][f])', '<?php if ', $content);*/
        //preg_replace_callback('([{][{])', function(){ return ' <?= htmlentities(';}, $content );
        
        //$content = preg_replace('/<!--(.*)-->/Uis', '', $content);
        // $content = preg_replace('/[-][-]/', '', $content);
        //$content = preg_replace('/<!--.*?-->/', '', $content);
        
        //echo $content;
            //$tmp = fopen('tmp.php', 'r');
            //echo $content;
        $content = preg_replace_callback_array(
            [
                '~([{][{])(.*?)([}][}])~' => function($match) {
                    return '<?= htmlentities('.$match[2].')?>';
                },
                '~([@][i][f][\s])(\(.*?\).*?\))~' => function($match) {
                    return '<?php if'. $match[2].':?>';
                }, 
                '~([@][e][l][s][e][i][f][\s])(\(.*?\).*?\))~' => function($match) {
                    return '<?php elseif'.$match[2].': ?>';
                },
                '~([@][e][l][s][e])~' => function($match) {
                    return '<?php else: ?>';
                },
                '~([@][e][n][d][i][f])~' => function($match) {
                    return '<?php endif; ?>';
                },
                '~([@][f][o][r][e][a][c][h][\s])(\(.*?\))~' => function($match) {
                    return '<?php foreach'.$match[2].': ?>';
                },
                '~([@][e][n][d][f][o][r][e][a][c][h])~' => function($match) {
                    return '<?php endforeach; ?>';
                },
                '~([@][i][s][s][e][t])(\(.*?\))~' => function($match) {
                    return '<?php if(isset'.$match[2].'): ?>';
                },
                '~([@][e][n][d][i][s][s][e][t])~' => function($match) {
                    return '<?php endif; ?>';
                },
                '~([@][e][m][p][t][y])(\(.*?\))~' => function($match) {
                    return '<?php if(empty'.$match[2].'): ?>';
                },
                '~([@][e][n][d][e][m][p][t][y])~' => function($match) {
                    return '<?php endif; ?>';
                },
                '~([@][!][e][m][p][t][y])(\(.*?\))~' => function($match) {
                    return '<?php if(!empty'.$match[2].'): ?>';
                },
                '~([@][e][n][d][!][e][m][p][t][y])~' => function($match) {
                    return '<?php endif; ?>';
                }
            ],
            $content
        );
        file_put_contents('tmp.php', $content);
    }
}