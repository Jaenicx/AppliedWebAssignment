<?php 

    include('phpqrcode/qrlib.php'); 
   // include('phpqrcode/tools/merged_config.php');

    // how to build raw content - QRCode with detailed Business Card (VCard) 
    error_reporting(E_ERROR | E_PARSE);
     $Data1;

    // here our data 
    $name         = 'NeXt Gen'; 
    $sortName     = 'Gen;NeXt'; 
    $phone        = '(876)778-2372'; 
    $phonePrivate = '(876)531-7140'; 
    $phoneCell    = '(876)508-6164'; 
    $orgName      = 'Ncx Gaming Inc.'; 

    $email        = 'nexxtgengaming@gmail.com'; 

    // if not used - leave blank! 
    $addressLabel     = 'Our Office'; 
    $addressPobox     = ''; 
    $addressExt       = 'Suite 123'; 
    $addressStreet    = '7th Avenue'; 
    $addressTown      = 'Kingston'; 
    $addressRegion    = 'KN'; 
    $addressPostCode  = '876'; 
    $addressCountry   = 'Jamaica'; 
    
    // we building raw data 
    $codeContents  = 'BEGIN:VCARD'."\n"; 
    $codeContents .= 'VERSION:2.1'."\n"; 
    $codeContents .= 'N:'.$sortName."\n"; 
    $codeContents .= 'FN:'.$name."\n"; 
    $codeContents .= 'ORG:'.$orgName."\n"; 

    $codeContents .= 'TEL;WORK;VOICE:'.$phone."\n"; 
    $codeContents .= 'TEL;HOME;VOICE:'.$phonePrivate."\n"; 
    $codeContents .= 'TEL;TYPE=cell:'.$phoneCell."\n"; 

    $codeContents .= 'ADR;TYPE=work;'. 
        'LABEL="'.$addressLabel.'":' 
        .$addressPobox.';' 
        .$addressExt.';' 
        .$addressStreet.';' 
        .$addressTown.';' 
        .$addressPostCode.';' 
        .$addressCountry 
    ."\n"; 

    $codeContents .= 'EMAIL:'.$email."\n"; 

    $codeContents .= 'END:VCARD'; 
    // generating 
   QRcode::png($codeContents, $Data1.'026.png'); 
    //QRcode::png('code data text', '026.png');
    // displaying 
   // echo '<img src="026.png" />'; 
    echo '<img src="'.$Data1.'026.png" />';

   