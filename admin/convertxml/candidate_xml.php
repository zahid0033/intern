<?php
    require '../../config.php';
    
    $filename="candidate".time().".xml";

    $sql = "select * from candidate order by cId desc";
    $res = mysqli_query($conn, $sql);
   
    $xml = new XMLWriter();
    $xml->openMemory();
    //$xml->openURI("php://output");  //print on screen no file output
    $xml->setIndent(true);
    $xml->startDocument('1.0', 'UTF-8');
    $xml->startElement('Candidates');
    while ($row = mysqli_fetch_assoc($res)) {
      $xml->startElement("info");
      $xml->writeElement("id", $row['cId']);
      $xml->writeElement("Name", $row['cName']);
      $xml->writeElement("Mail", $row['cMail']);
      $xml->writeElement("Gender", $row['cGender']);
      $xml->writeElement("Mobile", $row['cMobile']);
      $xml->writeElement("Skill", $row['cSkill']);
      $xml->writeElement("Previous Exp", $row['cPreviousExp']);
      $xml->writeElement("Degree", $row['cDegree']);
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
    header("location:../view_all_candidate.php");
?>