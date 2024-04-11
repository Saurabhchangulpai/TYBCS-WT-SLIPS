<?php
    $STR=<<<XML
    <?xml version="1.0" ?>
    <CriketTeam>
        <team country="Australia">
            <player>Saurabh</player>
            <runs>50000</runs>
            <wicket>500</wicket>
        </team>
        <team country="Australia">
            <player>Smith</player>
            <runs>5000</runs>
            <wicket>50</wicket>
        </team>
    </CriketTeam>
    XML;
$fName="Cricket.xml";
$fp=fopen($fName,"w");
fwrite($fp,$STR);
fclose($fp);

$country="Australia"; // Corrected the country name to match the case
$player=" Virat";
$runs= 500;
$wicket= 5;

if($xml=file_get_contents($fName))
{
    $xmlDoc=new DOMDocument();
    $xmlDoc->loadXML($xml);

    $CricketTeam = $xmlDoc->getElementsByTagName("CriketTeam")->item(0);
    $team = $xmlDoc->createElement("team");
    $team->setAttribute("country", $country);

    $p = $xmlDoc->createElement("player", $player);
    $team->appendChild($p);

    $r = $xmlDoc->createElement("runs", $runs);
    $team->appendChild($r);

    $w = $xmlDoc->createElement("wicket", $wicket);
    $team->appendChild($w);

    $CricketTeam->appendChild($team);

    echo $xmlDoc->saveXML()." ";
}
?>

