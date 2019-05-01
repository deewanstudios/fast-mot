<?

/**
 * Servicing class
 * This is the class that holds all the methods for building the servcing page
 *
 * @package com.fastmot.website.servicing.page.controller
 * @author  Deewanstudios Limited
 */
class Servicing extends Controller {

    // Declare page id
    protected $pageId = 3;

    // Decleare Home Model
    protected $model = 'ServicingModel';

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
        $ogurl = URL . "servicing";
        $ogsite_name = "Fast MOT";

        $data = $this -> loadModel($this -> model);
        $pageC = $data -> HomepageContent();
        $ima = $data -> getImages();
        $serviceType = $data -> servicesInfo();
        $basicChecklist = $data -> basicChecked();
        $basicRep = $data -> basicReplaced();
        $fullChecklist = $data -> fullChecked();
        $fullRep = $data -> fullReplaced();

        require_once '../application/views/templates/header.php';
        require_once '../application/views/servicing/servicing.php';
        require_once '../application/views/templates/footer.php';

    }

}
