<?
/**
 *
 */
class Gallery extends Controller {

    // Declare page id
    protected $pageId = 6;

    // Decleare Home Model
    protected $model = 'GalleryModel';

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
        $ogurl = URL . "gallery";
        $ogsite_name = "Fast MOT";

        $galleryData = $this -> loadModel($this -> model);

        $galleryImages = $galleryData -> getImages();

        require_once '../application/views/templates/header.php';
        require_once '../application/views/gallery/gallery.php';
        require_once '../application/views/templates/footer.php';

    }

}
?>