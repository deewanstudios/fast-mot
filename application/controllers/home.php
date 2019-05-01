<?
/**
 * Home class
 * This is the class that holds all the methods for retrieving data from the database for the servcing page
 *
 * @package com.fastmot.website.home.page.controller
 * @author  Deewanstudios Limited
 */
class Home extends Controller {

    // Declare page id
    protected $pageId = 1;

    // Decleare Home Model
    protected $model = 'HomeModel';

    public function index() {

        // Get page head information from Functions class

        $info = new Functions();
        $tags = $info -> getPageInfo($this -> pageId);

        foreach ($tags AS $pageMeta);
        $pageTitle = $pageMeta["title"];

        $pageDescription = $pageMeta["description"];

        $pageKeywords = $pageMeta["keywords"];

        $ogtitle = $pageTitle;
        $ogdescription = $pageDescription;
        $ogkeywords = $pageKeywords;
        $ogtype = "website";
        $ogurl = URL . "home";
        $ogsite_name = "Fast MOT";

        // Call LoadModel function from Controller
        $data = $this -> loadModel($this -> model);

        // Retrieve information from model class
        $pageC = $data -> HomepageContent();
        $ima = $data -> getImages();

        // include templates and views
        require_once '../application/views/templates/header.php';
        require_once '../application/views/home/index.php';
        require_once '../application/views/templates/footer.php';

    }

}
?>