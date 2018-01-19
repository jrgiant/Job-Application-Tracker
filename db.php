
 <?php 

require_once("config.php");
class DB {
    private $mysqli;
    function __construct(){
        global $CFG;
        $this->mysqli = new mysqli($CFG->dbHost, $CFG->dbUser, $CFG->dbPass, $CFG->dbName); 
    }
    public function testLink(){
        echo "in TestLink\n";
        $mysqli = $this->mysqli;
        if (!$mysqli || $mysqli->connect_errno) {
            var_dump($mysqli);
            echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            die();
        }     
        if (!$result = $mysqli->query('Select * from app_type;')){
            echo "Falied to get data from database: ". $mysqli->error;
        }
        echo "success: here are the results.";
        var_dump($result);
    }
}
?> 