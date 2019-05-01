<?
session_start();
/**
 *
 */

class Feedback extends Controller {

    // Declare page id
    protected $pageId = 7;

    // Decleare Home Model
    protected $model = 'FeedbackModel';

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
        $ogurl = URL . "feedback";
        $ogsite_name = "Fast MOT";

        $feedbackData = $this -> loadModel($this -> model);

        $content = $feedbackData -> feedbackContent();

        $ima = $feedbackData -> getImages();

        $reviews = $feedbackData -> getComments();

        require_once '../application/views/templates/header.php';

        require_once '../application/views/feedback/feedback.php';

        require_once '../application/views/templates/footer.php';

        // echo "<pre>";
        // echo $home -> names;
        // var_dump($_POST);
        // echo "</pre>";
        //
        // echo "<pre>";
        // echo 'home/index';
        // echo "</pre>";
    }

    public function feedbackForm() {
        // load views
        require_once '../application/views/templates/header.php';

        require_once '../application/views/feedback/feedback_form.php';

        require_once '../application/views/templates/footer.php';

        if (isset($_POST['submit_feedback'])) {
            return $this -> commentForm();
        }

        // echo "<pre>";
        // echo $home -> names;
        // var_dump($_POST);
        // echo "</pre>";
    }

    public function safe_input($data) {

        $data = trim($data);

        $data = htmlspecialchars($data);
        $data = htmlentities($data);
        $data = addslashes($data);
        $data = html_entity_decode($data);
        $data = stripslashes($data);
        // $data = strip_tags($data);
        return $data;
    }

    public function commentForm() {

        $name;
        $comment;

        $nameErr;

        $comErr;

        $valid = TRUE;

        if (($_SERVER['REQUEST_METHOD'] == 'POST') && (isset($_POST['submit_feedback']))) {

            if (empty($_POST['name'])) {
                $nameErr = "Your name is required";
                echo "<script>alert('$nameErr')</script>";
                $valid = FALSE;

            } else {
                $name = $this -> safe_input($_POST['name']);
                $_SESSION["name"] = $name;
                // echo $name;

            }

            if (empty($_POST['comment'])) {
                $comErr = "Comment box cannot be empty";
                echo "<script>alert('$comErr')</script>";
                $valid = FALSE;

            } else {
                $comment = $this -> safe_input($_POST['comment']);
                // echo $comment;

            }

            $model = 'FeedbackModel';

            $feedbackData = $this -> loadModel($model);

            if ($valid == TRUE) {

                echo "<script>alert('You have successfully submitted your comment.')</script>";
                $feedbackData -> insertFeedback($name, $comment);
                header('location: ' . URL . 'feedback/feedbackconfirmation');
                // exit;
            } else {
                echo "<script>alert('There was a problem, please try again.')</sript>";

                // header('location:' . URL . 'feedback/feedbackform');

                // var_dump($errors);
            }
        }

    }

    public function feedbackConfirmation() {
        function successful() {

            $fname = $_SESSION["name"];

            $appreciation = "Thanks " . $fname . "." . BR;

            $message = "Your feedback has been successfully emailed to the site administrator" . BR . "and we appreciate you contacting us." . BR . "We will be in touch soon.";

            $redirect = "<p> You will be redirected to the feedback page in.</p>";

            $countdown = 10;

            return array($appreciation, $message, $countdown, $redirect);

        }

        $outcome = successful();

        // load views
        require_once '../application/views/templates/header.php';

        require_once '../application/views/feedback/feedback_confirmation.php';

        require_once '../application/views/templates/footer.php';

    }

}
?>