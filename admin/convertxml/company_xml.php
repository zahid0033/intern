<?php
    require '../../config.php';
    
    $filename="company".time().".xml";

    $sql = "select * from company order by compId desc";
    $res = mysqli_query($conn, $sql);
   
    $xml = new XMLWriter();
    $xml->openMemory();
    //$xml->openURI("php://output");  //print on screen no file output
    $xml->setIndent(true);
    $xml->startDocument('1.0', 'UTF-8');
    $xml->startElement('Company');
    while ($row = mysqli_fetch_assoc($res)) {
      $xml->startElement("info");
      $xml->writeElement("id", $row['compId']);
      $xml->writeElement("Name", $row['compName']);
      $xml->writeElement("Mail", $row['compAddress']);
	  $xml->writeElement("Password", $row['compWebLink']);
      $xml->writeElement("deletionTime", $row['compType']);
      $xml->endElement();
    }
    $xml->endElement();
    $xml->endDocument();

    //header('Content-type: text/xml'); //print on screen no file output with output memory
    //echo $xml->outputMemory(); //print on screen no file output with output memory
    
    $file = $xml->outputMemory();
    file_put_contents($filename,$file);
    
    //$xml->flush(); //print on screen no file output

    // Free result set
    mysqli_free_result($res); 
    // Close connections
    mysqli_close($conn);
    header("location:../view_all_company.php");
?>