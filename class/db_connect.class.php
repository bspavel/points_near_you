<?php
class db_connect
{
    private $con = '';
	private $resQuery;
    function __construct($lat0,$lng0,$r)
	{
        $this->connect();
		$this->selQuery($lat0,$lng0,$r);
    }        
    function __destruct()
	{
        $this->close();
    } 
    function connect()
	{
        require_once __DIR__.'/../config.php';
        $this->con = mysqli_connect
		(
			DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE
		) or die(mysqli_error());
        return $this->con;
    }
    function close()
	{
         mysqli_close($this->con);
    }        
    function query($query)
	{
        return mysqli_query($this->con, $query);
    }
	private function selQuery($lat0=0,$lng0=0,$r=5)
	{
	
		$this->resQuery = $this->query
			(
				"
				SELECT
					`cc`.`name` AS `point`
				FROM
					`coordinates` AS cc
				WHERE
					  (POW((`lat`-{$lat0}),2)+".
					  "POW((`lng`-{$lng0}),2))<=POW({$r},2)
				"
			);	
	}	
	public function getPointArr()
	{
		$dt = array();
		if (mysqli_num_rows($this->resQuery) > 0)
		{
			while ($row = mysqli_fetch_assoc($this->resQuery))
			{
				$dt[] = $row["point"];
			}
		}
		return $dt;
	}
}
?>