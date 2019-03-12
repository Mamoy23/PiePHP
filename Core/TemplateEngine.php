<?php
namespace Core;

class TemplateEngine {

    public function a(){
        $content = file_get_contents('/var/www/html/w2php502p1/src/View/User/show.php');
        $content = preg_replace('([{][{])', ' <?=htmlentities(', $content);
        $content = preg_replace('([}][}])', ')?>', $content);
        // $content = preg_replace('/[!][-][-]/', '', $content);
        // $content = preg_replace('/[-][-]/', '', $content);
        //$content = preg_replace('/<!--.*?-->/', '', $content);
        
        
            return $content;
            //echo $content;
    }
}