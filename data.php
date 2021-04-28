<?php
$q=@$_GET["q"];
if($q==""){
	exit();
}
if(isset($_POST["limit"], $_POST["start"]))
{
$string = file_get_contents("https://api.yumika.id/radio/?a=".urlencode($q)."&hal=".$_POST['start']."&key=0ac2e378c1e8a52157ea50ea41d998a6");
$result = json_decode($string, true);

foreach($result as $row)
 {
  echo '
				<div class="card">
				  <div class="card-body">
					<h5 class="card-title">'.$row["nama"].'</h5>
					<audio  controls id="track2" src="'.$row["url"].'"  type="audio/x-mpegurl">
						<p>Your browser does not support the audio element</p>
					</audio>
				  </div>
				</div>
  ';
 }
}
?>
