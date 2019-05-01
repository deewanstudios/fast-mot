<?

/**
 * Repairs class
 * This is the class that holds all the methods for building the Mot page
 *
 * @package com.fastmot.website.tyres.page.controller
 * @author  Deewanstudios Limited
 */
class Repairs extends Controller {

    // Declare page id
    protected $pageId = 4;

    // Decleare Home Model
    protected $model = 'RepairsModel';

    // public function __construct(){}

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
        $ogurl = URL . "repairs";
        $ogsite_name = "Fast MOT";

        $data = $this -> loadModel($this -> model);
        $pageC = $data -> HomepageContent();
        $ima = $data -> getImages();

        require_once '../application/views/templates/header.php';
        require_once '../application/views/repairs/repairs.php';
        require_once '../application/views/templates/footer.php';

    }

}
