
 <?php

if (!isset($CFG)) {
    echo '<html><head><script>alert("This page may only be accessed throught the applications.\n Apologies for any inconvienence.")</script></head><body></body></html>';
    die();
}

class DB
{
    private $dbArgs;
    public function __construct()
    {
        global $CFG;
        unset($this->dbArgs);
        $this->dbArgs = array($CFG->dbHost, $CFG->dbUser, $CFG->dbPass, $CFG->dbName);
    }
    public function testLink()
    {
        $retValue = '';
        echo "<h1>Testing Database Connection</h1><p>";
        $mysqli = $this->openDataBase();
        if (!$mysqli || $mysqli->connect_errno) {
            var_dump($mysqli);
            echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error . '</p>';

        }
        if (!$result = $mysqli->query('Select * from app_type;')) {
            echo "Falied to get data from database: " . $mysqli->error . '</p>';

        } else {
            echo "Success! Here are the results:</p><p>";
            var_dump($result);
            echo '</p>';
        }
        $this->closeDataBase($mysqli);
        echo '<p>' . (is_resource($mysqli) ? 'Database Still Open' : 'Database Closed') . '</p>';
    }
    private function openDataBase()
    {
        $db = new mysqli(...$this->dbArgs);
        if (!$db || $db->connect_errno) {
            return false;
        }
        return $db;
    }
    private function closeDataBase($dbConnection)
    {
        if ($dbConnection) {$dbConnection->close();}
    }
    private function getData($sql)
    {
        $retValue = array();
        if ($db = $this->openDataBase()) {
            if ($result = $db->query($sql)) {
                while ($comp = $result->fetch_assoc()) {
                    array_push($retValue, $comp);
                }
            } else {
                echo 'error in retreving results. Check SQL';
            }
            $this->closeDataBase($db);
        }
        return $retValue;

    }
    private function setData($type, $tableName, $dataArray, $id = null)
    {
        $retvalue = -1;
        //go through data array and pull out keys and data to seperate arrays
        // build string for sql
        $cols = '';
        $vals = '';
        $isFirst = true;

        if (preg_match('/insert/i', $type) !== 0) {
            $err = 'error Creating the new record. Check SQL';
            foreach ($dataArray as $col => $value) {
                $cols .= ($isFirst ? '' : ',') . "' $col . '";
                $vals .= ($isFirst ? '' : ',') . "'$value . '";
                $isFirst = false;
                $isSelect = true;
            }

            $sql = "INSERT INTO '$tableName' ($cols) VALUES ($vals);";
        } else if (preg_match('/update/i', $type) !== 0) {
            $sql = "UPDATE '$tableName' SET ";
            $err = 'error updating record. Check SQL';
            foreach ($dataArray as $col => $value) {
                $sql .= ($isFirst ? '' : ',') . "'$col' = '$value'";
                $isFirst = false;

            }
            $sql .= "WHERE $tableName.id = $id;";

        }
        if ($db = $this->openDataBase()) {

            if ($result = $db->query($sql)) {
                $retvalue = (isset($isSelect) && $isSelect) ? $db->insert_id: $result;
            } else {
                echo $err;
            }

            $this->closeDataBase($db);
        }
        return $retValue;

    }
    public function getAllCompanyNames($recuitersOnly = false)
    {
        return $this->getData('Select * from app_company where isRecruiter ' . ($recuitersOnly ? '=' : '<>') . '1;');
    }
    public function setCompany($data)
    {
        return $this->setData('insert', 'app_company', $data);
    }
    public function getTypes()
    {
        return $this->getData('Select * from app_type;');
    }
    public function getMethods()
    {
        return $this->getData('Select * from app_how;');

    }
    /**
     * @link https: //www.w3schools.com/php/php_mysql_insert.asp

     */
    public function setApplication($data)
    {
        return $this->setData('insert','application',$data);
    }
    public function updateApplication($id = null)
    {
        if ($id == null) {
            return false;
        }
        return $this->setData('update', 'application', $data, $id);

    }
    public function newApplication()
    {
        $defaultJob = array(
            'jobTitle' => '',
            'jobDescription' => '',
            'dateApplied' => '12/12/1960',
            'howApplied' => '',
            'typeApplied' => '',
            'WhereApplied' => '',
            'results' => '',
            'nextSteps' => '',
            'history' => '',
            'lastContact' => '',
        );
        $defaultCompany = array(
            'companyID' => 0,
            'companyName' => '',
            'companyPhone' => "",
            'companyAddress' => "",
            'companyIsRecuriter' => 0,
            'companyPOCEmail' => '',
            'comapnyPOCName' => '',
        );
        return array_merge($defaultJob, $defaultCompany);
    }

}
?>