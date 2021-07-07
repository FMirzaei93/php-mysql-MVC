<?php

Class Statics{

    public static $main_view = 'page.php';  
    public static $init_path= SITE_PATH . '\includes\init.php';
    public static $renderview_path = SITE_PATH . '\includes\RenderView.php';
    public static $connectToTheController_path = '\includes\ConnectToTheController.php';
    public static $bootstrap_path = SITE_PATH . '\includes\Bootstrap.php';
    public static $error404_path = SITE_PATH . '\view\404.php';
    public static $home_path = 'home.php'; 
    public static $db_path = SITE_PATH . '\includes\Db.php'; 
    public static $queries_path = SITE_PATH . '\includes\Queries.php'; 

    
    //---------------------------- Urls ------------------------------
    public static $home='/home';
    public static $add_article = '/articles/add';
    public static $send_article = '/articles/send';
    public static $articles_list = '/articles/list';
    public static $articles_id = '/id=';
    public static $contact_form = '/contact/form';
    public static $send_email =  '/contact/send';
    
    
    //------------------------- Actions Names -------------------------------

        public static $list='list';
        public static $add='add';
        public static $send='send';
        public static $form='form';

    
    //--------------------------- Views ---------------------------------
    
        public static $articles_list_view='articles\articles_list.php';
        public static $article_details='articles\article_details.php';
        public static $article_form_view='articles\article_form.php';
        public static $article_sent_view='articles\article_sent.php';
        public static $contact_form_view='contact\contact_form.php';
        public static $contact_sent_view='contact\contact_sent.php';
        
        
    //------------------------- Database columns ------------------------
        
        public static $Table_IdArticle = 'IdArticle';
        public static $Table_TitleArticle = 'TitleArticle';
        public static $Table_IntroArticle = 'IntroArticle';
        public static $Table_ContentArticle = 'ContentArticle';
        
        
    //----------------------- Database tables name -------------------------
        
        
        public static $articles_table_name = 'articles';
        
        
    //----------------------- Array items ----------------------------------
        
        public static $IdArticle = 'IdArticle';
        public static $TitleArticle = 'TitleArticle';
        public static $IntroArticle = 'IntroArticle';
        public static $ContentArticle = 'ContentArticle';
        
        







}