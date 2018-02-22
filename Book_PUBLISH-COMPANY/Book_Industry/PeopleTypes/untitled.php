<?php
ERROR_REPORTING( E_ALL | E_STRICT );
ini_set("display_errors", 1);
function __autoload($class_name) 
{
    include $class_name . '.php';
}
class Client
{
        //Variable to select the correct class
	private $task;
 
        //Which submit button used?
	public function __construct()
	{
	    if(isset($_POST['insert']))
            {
                unset($_POST['insert']);
                $this->task= new DataEntry();   
            }
            elseif(isset($_POST['all']))
            {
                unset($_POST['all']);
                $this->task= new DataDisplay();
            } 
            elseif(isset($_POST['update']))
            {
                unset($_POST['update']);
                $this->task= new DataUpdate();
            }
            elseif(isset($_POST['kill']))
            {
                unset($_POST['kill']);
                $this->task= new DeleteRecord();
            } 
	}	
}
$worker = new Client();
?>






























<?php
class DataEntry
{
    //Variable for MySql connection
    private $hookup;
    private $sql;
    private $tableMaster;
 
    //Field Variables
    private $name;
    private $email;
    private $lang;
 
    public function __construct()
    {
        //Get table name and make connection
            $this->tableMaster="basics";
        $this->hookup=UniversalConnect::doConnect();
 
        //Get data from HTML form
        $this->name=$_POST['name'];
        $this->email=$_POST['email'];
        $this->lang=$_POST['lang'];
 
        //Call private methods for MySql operations
        $this->doInsert();
        $this->hookup->close();
    }
 
    private function doInsert()
    {
        $this->sql = "INSERT INTO $this->tableMaster (name,email,lang) VALUES ('$this->name','$this->email', '$this->lang')";
 
        try
        {   
            $this->hookup->query($this->sql);
            printf("User name: %s <br/> Email: %s <br/> uses %s the most for programming.",$this->name,$this->email,$this->lang);
        }
 
        catch (Exception $e)
        {
            echo "There is a problem: " . $e->getMessage();
            exit();
        }
    }
}
?>

























<?php
class DataDisplay
{
    //Variable for MySql connection
    private $hookup;
    private $sql;
    private $tableMaster;
 
    public function __construct()
    {
        //Get table name and make connection
            $this->tableMaster="basics";
        $this->hookup=UniversalConnect::doConnect();
        $this->doDisplay();
        $this->hookup->close(); 
    }
 
    private function doDisplay()
    {
            //Create Query Statement
        $this->sql ="SELECT * FROM $this->tableMaster";
 
        try
        {
        $result = $this->hookup->query($this->sql);
 
        while ($row = $result->fetch_assoc()) 
        {
            printf("ID: %s Name: %s Email: %s <br />Computer Language: %s<p />",$row['id'], $row['name'],$row['email'],$row['lang'] );
        }
 
        $result->close();
        }
        catch(Exception $e)
        {
        echo "Here's what went wrong: " . $e->getMessage();
        }
    }
}
?>






















<?php
class DataUpdate
{
   private $hookup;
   private $tableMaster;
   private $sql;
   //Fields
   private $id;
   private $name;
   private $email;
   private $lang;
 
   public function __construct()
   {
      $this->id=intval($_POST['id']);
      $this->name=$_POST['name'];
      $this->email=$_POST['email'];
      $this->lang=$_POST['lang'];
 
      $this->tableMaster="basics";
      $this->hookup=UniversalConnect::doConnect();
 
       //Call each update
      $this->doName();
      $this->doEmail();
      $this->doLang();
 
    //Close once
      $this->hookup->close();
   }
 
   private function doName()
   {
      $this->sql ="UPDATE $this->tableMaster SET name='$this->name' WHERE id='$this->id'";
      try
      {
     $result = $this->hookup->query($this->sql);
     echo "Name update complete.<br />";
      }
      catch(Exception $e)
      {
     echo "Here's what went wrong: " . $e->getMessage();
      } 
   }
 
   private function doEmail()
   {
      $this->sql ="UPDATE $this->tableMaster SET email='$this->email' WHERE id='$this->id'";
      try
      {
     $result = $this->hookup->query($this->sql);
     echo "Name update complete.<br />";
      }
      catch(Exception $e)
      {
     echo "Here's what went wrong: " . $e->getMessage();
      } 
   }
 
   private function doLang()
   {
      $this->sql ="UPDATE $this->tableMaster SET lang='$this->lang' WHERE id='$this->id'";
      try
      {
     $result = $this->hookup->query($this->sql);
         echo "Computer language update complete.<br />";
      }
      catch(Exception $e)
      {
     echo "Here's what went wrong: " . $e->getMessage();
      } 
   }
}
?>






















<?php
class DeleteRecord
{
        //Variables for MySql connection
    private $hookup;
    private $sql;
    private $tableMaster;
 
        //From HTML
        private $deadman;
 
    public function __construct()
    {
        $this->deadman =intval($_POST['idd']);
            //Get table name and make connection
            $this->tableMaster="basics";
        $this->hookup=UniversalConnect::doConnect();
        $this->recordKill();
        $this->hookup->close(); 
    }
 
    private function recordKill()
    {
            //Create Query Statement
        $this->sql ="Delete FROM $this->tableMaster WHERE id='$this->deadman'";
 
        try
        {
        $result = $this->hookup->query($this->sql);
        printf("Record with ID=%s: has been dropped.<br />",$this->deadman );
        }
        catch(Exception $e)
        {
        echo "Here's what went wrong: " . $e->getMessage();
        }
    }
}
?>











