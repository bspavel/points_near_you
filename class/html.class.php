<?php
class html
{
    function __construct
	(
		$latNum=null,
		$lngNum=null,
		$result=null,
		$title="Введите Ваши координаты",
		$lng="Долгота:",		
		$lat="Широта:"
	)
	{
		$this->hlresult= 
			sprintf
			(
				$this->hldt,
				$title,
				$lng,
				$lngNum,
				$lat,
				$latNum,
				$result
			);		
    }
	function __toString()
    {
        return $this->hlresult;
    }
	private $hlresult;
	private $hldt=<<<eof
 <!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title></title>
 </head>
 <body>
 <form method="get">
  <b>%s</b><p />
	%s<input type="text" name="lng" value="%d" /><br />
	%s<input type="text" name="lat" value="%d" /><br />
<p />
  <input type="submit">
 </form>
 <br />
 <b>%s</b>
 </body>
 </html>
eof;
}
?>