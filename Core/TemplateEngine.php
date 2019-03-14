<?php
namespace Core;

class TemplateEngine {

    public function parse($f){
        $content = file_get_contents($f);
        $content = preg_replace('([{][{])', ' <?= htmlentities(', $content);
        $content = preg_replace('([}][}])', ')?>', $content);
        //$content = preg_replace('([@][i][f])', '<? php if ', $content);
        //preg_replace_callback('([{][{])', function(){ return ' <?= htmlentities(';}, $content );
        
        //$content = preg_replace('/<!--(.*)-->/Uis', '', $content);
        // $content = preg_replace('/[-][-]/', '', $content);
        //$content = preg_replace('/<!--.*?-->/', '', $content);
        
        //echo $content;
            //$tmp = fopen('tmp.php', 'r');
           file_put_contents('tmp.php', $content);
            //echo $content;
    }
}