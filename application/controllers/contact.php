<?
session_start();
/**
 *
 */
class Contact extends Controller {

    // Declare page id
    protected $pageId = 8;

    // Decleare COntact Model
    protected $model = 'ContactModel';

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
        $ogurl = URL . "contact";
        $ogsite_name = "Fast MOT";

        require_once '../application/views/templates/header.php';
        require_once '../application/views/contact/contact.php';
        require_once '../application/views/templates/footer.php';

        if (isset($_POST['submit_contact'])) {
            $this -> contactForm();

        }

    }

    public function safe_input($data) {

        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = htmlentities($data);
        $data = addslashes($data);
        return $data;
    }

    public function contactForm() {

        $name;
        $surname;
        $email;
        $tel;
        $moreInfo;

        $nameErr;
        $surnameErr;
        $emailErr;
        $telErr;
        $moreInfoErr;

        $valid = TRUE;

        if (($_SERVER['REQUEST_METHOD'] == 'POST') && (isset($_POST['submit_contact']))) {

            if (empty($_POST['name'])) {
                $nameErr = "Your name is required";
                $valid = FALSE;
            } else {
                $name = $this -> safe_input($_POST['name']);
                $_SESSION["name"] = $name;

            }

            if (empty($_POST['lname'])) {
                $surnameErr = "Your surname is required";
                $valid = FALSE;
            } else {
                $surname = $this -> safe_input($_POST['lname']);
                $_SESSION["surname"] = $surname;

            }

            if (empty($_POST['email'])) {
                $emailErr = "Your email is required";
                $valid = FALSE;
            } else {
                $email = $this -> safe_input($_POST['email']);
            }

            if (empty($_POST['phoneNumber'])) {
                $telErr = "Your telephone number is required";
                $valid = FALSE;
            } else {
                $tel = $this -> safe_input($_POST['phoneNumber']);
            }

            if (empty($_POST['comment'])) {
                $moreInfoErr = "Comment box cannot be empty";
                $valid = FALSE;
            } else {
                $moreInfo = $this -> safe_input($_POST['comment']);

            }

            $contactData = $this -> loadModel($this -> model);

            if ($valid == TRUE) {

                $contactData -> insert($name, $surname, $email, $tel, $moreInfo);
                $this -> sendEmail();
                header('location: ' . URL . 'contact/contactconfirmation');

            } else {
                echo "<script>alert('There was a problem, please try again.')</sript>";

            }
        }

    }

    public function contactConfirmation() {
        function successful() {

            $name = $_SESSION["name"];

            $appreciation = "Thanks " . $name . "." . BR;

            $message = "Your enquiry has been successfully emailed to the site administrator" . BR . "and we appreciate you contacting us." . BR . "We will be in touch soon.";

            $redirect = "<p> You will be redirected to the feedback page in.</p>";

            $countdown = 10;

            return array($appreciation, $message, $countdown, $redirect);

        }

        $outcome = successful();

        // load views
        require_once '../application/views/templates/header.php';

        require_once '../application/views/contact/contact_confirmation.php';

        require_once '../application/views/templates/footer.php';

    }

    public function sendEmail() {
        // multiple recipients
        // daniel@deewanstudios.com, info@deewanstudios.com, noreply@deewanstudios.com
        // contact@fastmot.com
        $to = 'contact@fastmot.com';
        // note the comma
        
        // Form input
        $fname = $this -> safe_input($_POST['name']);
        $sname = $this -> safe_input($_POST['lname']);
        $email = $this -> safe_input($_POST['email']);
        $tel = $this -> safe_input($_POST['phoneNumber']);
        // $emailSubject = "You have a new email from, $fname $sname";
        $message = ($_POST['comment']);
        $emailSubject = 'Enquiry From Fastmot';

        $trimmedMessage = (($message));
        $wrapped = wordwrap($trimmedMessage, 70);
        $body = <<<EOD

Contact Information:<br>

Full Name: $fname $sname<br>

Email Address: $email<br>

Email Address: $tel<br>
<br><hr><br>
    <p>$wrapped</p>


EOD;

        $headers = 'From: Contact Form <admin@fastmot.com>' . "\r\n";
        $headers .= 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        // Mail it
        mail($to, $emailSubject, $body, $headers);
    }

}
?>