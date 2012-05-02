<?php
class Blog
{

    static public function slugify($text)
    {
        // replace all non letters or digits by -
        $text = preg_replace('/\W+/', '-', $text);

        // trim and lowercase
        $text = strtolower(trim($text, '-'));

        return $text;
    }
    
    static public function hasToBeCut($post) 
    {
        if(strlen($post) >= sfConfig::get('app_length_of_post_on_main_page')) return true;
        
        return false;
    }
    
    static public function cutPost($post)
    {
        $post = substr($post, 0 , sfConfig::get('app_length_of_post_on_main_page'));
        
        return $post;
        
    }
}