<?php
    require '../../config.php';
    
    $filename="employee".time().".xml";

    $sql = "select * from employer order by eId desc";
    $res = mysqli_query($conn, $sql);
   
    $xml = new XMLWriter();
    $xml->openMemory();
    //$xml->openURI("php://output");  //print on screen no file output
    $xml->setIndent(true);
    $xml->startDocument('1.0', 'UTF-8');
    $xml->startElement('Candidates');
    while ($row = mysqli_fetch_assoc($res)) {
      $xml->startElement("info");
      $xml->writeElement("id", $row['eId']);
      $xml->writeElement("Name", $row['eName']);
      $xml->writeElement("Mail", $row['eMail']);
	  $xml->writeElement("Password", $row['ePass']);
	  $xml->writeElement("compId", $row['eCompId']);
	  $xml->writeElement("Mobile", $row['eMobile']);
	  $xml->writeElement("Position", $row['ePosition']);
	  $xml->writeElement("DateOFBirth", $row['eDob']);
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
    header("location:../view_all_employee.php");
?>