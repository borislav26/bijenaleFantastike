<?php 
require_once './../vendor/autoload.php';
function cleanText($string){
    $string = trim($string);
    $string = stripslashes($string);
    $string = htmlspecialchars($string);
    return $string;
}


if(isset($_POST)){
    
    
    $mailSender = new \PHPMailer\PHPMailer\PHPMailer();
    $currentTime = time();
    $htmlBody = "<h1>Nova prijava za ucesce na takmicenju</h1><br><br><h3>Podaci o takmicaru:</h3>";
    
    if(isset($_POST["email"]) && !empty($_POST["email"])){
        $email = cleanText($_POST["email"]);
        $htmlBody.="<p>Email:<b>".$email."</b></p>";
    }
    if(isset($_POST["name"]) && !empty($_POST["name"])){
        $name = cleanText($_POST["name"]);
        $htmlBody.="<p>Ime:<b>".$name."</b></p>";
    }
    if(isset($_POST["surName"]) && !empty($_POST["surName"])){
        $surName = cleanText($_POST["surName"]);
        $htmlBody.="<p>Prezime:<b>".$surName."</b></p>";
    }
    if(isset($_POST["dateOfBirth"]) && !empty($_POST["dateOfBirth"])){
        $dateOfBirth = cleanText($_POST["dateOfBirth"]);
        $htmlBody.="<p>Datum rodjenja:<b>".$dateOfBirth."</b></p>";
    }
    if(isset($_POST["cityOfbirth"]) && !empty($_POST["cityOfbirth"])){
        $cityOfBirth = cleanText($_POST["cityOfbirth"]);
        $htmlBody.="<p>Mesto rodjenja:<b>".$cityOfBirth."</b></p>";
    }
    if(isset($_POST["school"]) && !empty($_POST["school"])){
        $school = cleanText($_POST["school"]);
        $htmlBody.="<p>Obrazovanje:<b>".$school."</b></p>";
    }
    if(isset($_POST["adress"]) && !empty($_POST["adress"])){
        $adress = cleanText($_POST["adress"]);
        $htmlBody.="<p>Adresa prebivalista:<b>".$adress."</b></p>";
    }
    if(isset($_POST["cityOfResidence"]) && !empty($_POST["cityOfResidence"])){
        $cityOfResidence = cleanText($_POST["cityOfResidence"]);
        $htmlBody.="<p>Mesto prebivalista:<b>".$cityOfResidence."</b></p>";
    }
    if(isset($_POST["countryOfResidence"]) && !empty($_POST["countryOfResidence"])){
        $countryOfResidence = cleanText($_POST["countryOfResidence"]);
        $htmlBody.="<p>Drzava prebivalista:<b>".$countryOfResidence."</b></p>";
    }
    if(isset($_POST["phoneNumber"]) && !empty($_POST["phoneNumber"])){
        $phoneNumber = cleanText($_POST["phoneNumber"]);
        $htmlBody.="<p>Broj telefona:<b>".$phoneNumber."</b></p>";
    }
    if(isset($_POST["numberOfPictures"]) && !empty($_POST["numberOfPictures"])){
        $numberOfPictures = cleanText($_POST["numberOfPictures"]);
        $htmlBody.="<p>Broj slika koje kandidat prilaze:<b>".$numberOfPictures."</b></p>";
    }
    

    
    
    if(isset($_FILES["firstPictureFile"]) && !empty($_FILES["firstPictureFile"])){
        $tmpFilePath1 = $_FILES['firstPictureFile']['tmp_name'];
        $newFilePath1 = "./../picturesTMP/1-".$currentTime."-".str_replace(" ","_",$_FILES['firstPictureFile']['name']);
            if(move_uploaded_file($tmpFilePath1, $newFilePath1)){
                $mailSender->addAttachment($newFilePath1);
            }
        $htmlBody.="<br><br><h3>Podaci o slikama:</h3>";    
        if(isset($_POST["firstPictureAuthor"]) && !empty($_POST["firstPictureAuthor"])){
            $firstPictureAuthor = cleanText($_POST["firstPictureAuthor"]);
        }
        if(isset($_POST["firstPictureName"]) && !empty($_POST["firstPictureName"])){
            $firstPictureName = cleanText($_POST["firstPictureName"]);
        }
        if(isset($_POST["firstPictureTehnique"]) && !empty($_POST["firstPictureTehnique"])){
            $firstPictureTehnique = cleanText($_POST["firstPictureTehnique"]);
        }
        if(isset($_POST["firstPictureYear"]) && !empty($_POST["firstPictureYear"])){
            $firstPictureYear = cleanText($_POST["firstPictureYear"]);
        }
        if(isset($_POST["firstPictureHeight"]) && !empty($_POST["firstPictureHeight"])){
            $firstPictureHeight = cleanText($_POST["firstPictureHeight"]);
        }
        if(isset($_POST["firstPictureWidth"]) && !empty($_POST["firstPictureWidth"])){
            $firstPictureWidth = cleanText($_POST["firstPictureWidth"]);
        }
        if(isset($_POST["firstPictureWeight"]) && !empty($_POST["firstPictureWeight"])){
            $firstPictureWeight = cleanText($_POST["firstPictureWeight"]);
        }
        if(isset($_POST["firstPicturePrice"]) && !empty($_POST["firstPicturePrice"])){
            $firstPicturePrice = cleanText($_POST["firstPicturePrice"]);
        }
        
$htmlBody.="<table  style='font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;'>
  <tr>
    <th style='  border: 1px solid #ddd;
  padding: 8px;'>Slika</th>
    <th style='  border: 1px solid #ddd;
  padding: 8px;'>Autor</th>
    <th style='  border: 1px solid #ddd;
  padding: 8px;'>Naziv</th>
  <th style='  border: 1px solid #ddd;
  padding: 8px;'>Tehnika</th>
  <th style='  border: 1px solid #ddd;
  padding: 8px;'>Godina</th>
  <th style='  border: 1px solid #ddd;
  padding: 8px;'>Visina</th>
  <th style='  border: 1px solid #ddd;
  padding: 8px;'>Sirina</th>
  <th style='  border: 1px solid #ddd;
  padding: 8px;'>Tezina</th>
  <th style='  border: 1px solid #ddd;
  padding: 8px;'>Cena</th>
  </tr><tr>
    <td style='  border: 1px solid #ddd;
  padding: 8px;'>".$_FILES['firstPictureFile']['name']."</td>
    <td style='  border: 1px solid #ddd;
  padding: 8px;'>".$firstPictureAuthor."</td>
    <td style='  border: 1px solid #ddd;
  padding: 8px;'>".$firstPictureName."</td>
    <td style='  border: 1px solid #ddd;
  padding: 8px;'>".$firstPictureTehnique."</td>
    <td style='  border: 1px solid #ddd;
  padding: 8px;'>".$firstPictureYear."</td>
    <td style='  border: 1px solid #ddd;
  padding: 8px;'>".$firstPictureHeight."</td>
    <td style='  border: 1px solid #ddd;
  padding: 8px;'>".$firstPictureWidth."</td>
    <td style='  border: 1px solid #ddd;
  padding: 8px;'>".$firstPictureWeight."</td>
    <td style='  border: 1px solid #ddd;
  padding: 8px;'>".$firstPicturePrice."</td>
  </tr>
";
            
    }
    if(isset($_FILES["secondPictureFile"]) && !empty($_FILES["secondPictureFile"])){

        $tmpFilePath2 = str_replace(" ", "_",$_FILES['secondPictureFile']['tmp_name']);
        $newFilePath2 = "./../picturesTMP/2-".$currentTime."-".str_replace(" ","_",$_FILES['secondPictureFile']['name']);
            if(move_uploaded_file($tmpFilePath2, $newFilePath2)){
                $mailSender->addAttachment($newFilePath2);
            }
            
        if(isset($_POST["secondPictureAuthor"]) && !empty($_POST["secondPictureAuthor"])){
            $secondPictureAuthor = cleanText($_POST["secondPictureAuthor"]);
        }
        if(isset($_POST["secondPictureName"]) && !empty($_POST["secondPictureName"])){
            $secondPictureName = cleanText($_POST["secondPictureName"]);
        }
        if(isset($_POST["secondPictureTehnique"]) && !empty($_POST["secondPictureTehnique"])){
            $secondPictureTehnique = cleanText($_POST["secondPictureTehnique"]);
        }
        if(isset($_POST["secondPictureYear"]) && !empty($_POST["secondPictureYear"])){
            $secondPictureYear = cleanText($_POST["secondPictureYear"]);
        }
        if(isset($_POST["secondPictureHeight"]) && !empty($_POST["secondPictureHeight"])){
            $secondPictureHeight = cleanText($_POST["secondPictureHeight"]);
        }
        if(isset($_POST["secondPictureWidth"]) && !empty($_POST["secondPictureWidth"])){
            $secondPictureWidth = cleanText($_POST["secondPictureWidth"]);
        }
        if(isset($_POST["secondPictureWeight"]) && !empty($_POST["secondPictureWeight"])){
            $secondPictureWeight = cleanText($_POST["secondPictureWeight"]);
        }
        if(isset($_POST["secondPicturePrice"]) && !empty($_POST["secondPicturePrice"])){
            $secondPicturePrice = cleanText($_POST["secondPicturePrice"]);
        }
        
        $htmlBody.="<tr>
    <td style='  border: 1px solid #ddd;
  padding: 8px;'>".$_FILES['secondPictureFile']['name']."</td>
    <td style='  border: 1px solid #ddd;
  padding: 8px;'>".$secondPictureAuthor."</td>
    <td style='  border: 1px solid #ddd;
  padding: 8px;'>".$secondPictureName."</td>
    <td style='  border: 1px solid #ddd;
  padding: 8px;'>".$secondPictureTehnique."</td>
    <td style='  border: 1px solid #ddd;
  padding: 8px;'>".$secondPictureYear."</td>
    <td style='  border: 1px solid #ddd;
  padding: 8px;'>".$secondPictureHeight."</td>
    <td style='  border: 1px solid #ddd;
  padding: 8px;'>".$secondPictureWidth."</td>
    <td style='  border: 1px solid #ddd;
  padding: 8px;'>".$secondPictureWeight."</td>
    <td style='  border: 1px solid #ddd;
  padding: 8px;'>".$secondPicturePrice."</td>
  </tr>";
    }
    if(isset($_FILES["thirdPictureFile"]) && !empty($_FILES["thirdPictureFile"])){

        $tmpFilePath3 = str_replace(" ", "_",$_FILES['thirdPictureFile']['tmp_name']);
        $newFilePath3 = "./../picturesTMP/3-".$currentTime."-".str_replace(" ","_",$_FILES['thirdPictureFile']['name']);
            if(move_uploaded_file($tmpFilePath3, $newFilePath3)){
                $mailSender->addAttachment($newFilePath3);
            }
            
        if(isset($_POST["thirdPictureAuthor"]) && !empty($_POST["thirdPictureAuthor"])){
            $thirdPictureAuthor = cleanText($_POST["thirdPictureAuthor"]);
        }
        if(isset($_POST["thirdPictureName"]) && !empty($_POST["thirdPictureName"])){
            $thirdPictureName = cleanText($_POST["thirdPictureName"]);
        }
        if(isset($_POST["thirdPictureTehnique"]) && !empty($_POST["thirdPictureTehnique"])){
            $thirdPictureTehnique = cleanText($_POST["thirdPictureTehnique"]);
        }
        if(isset($_POST["thirdPictureYear"]) && !empty($_POST["thirdPictureYear"])){
            $thirdPictureYear = cleanText($_POST["thirdPictureYear"]);
        }
        if(isset($_POST["thirdPictureHeight"]) && !empty($_POST["thirdPictureHeight"])){
            $thirdPictureHeight = cleanText($_POST["thirdPictureHeight"]);
        }
        if(isset($_POST["thirdPictureWidth"]) && !empty($_POST["thirdPictureWidth"])){
            $thirdPictureWidth = cleanText($_POST["thirdPictureWidth"]);
        }
        if(isset($_POST["thirdPictureWeight"]) && !empty($_POST["thirdPictureWeight"])){
            $thirdPictureWeight = cleanText($_POST["thirdPictureWeight"]);
        }
        if(isset($_POST["thirdPicturePrice"]) && !empty($_POST["thirdPicturePrice"])){
            $thirdPicturePrice = cleanText($_POST["thirdPicturePrice"]);
        }
        
                $htmlBody.="<tr>
    <td style='  border: 1px solid #ddd;
  padding: 8px;'>".$_FILES['thirdPictureFile']['name']."</td>
    <td style='  border: 1px solid #ddd;
  padding: 8px;'>".$thirdPictureAuthor."</td>
    <td style='  border: 1px solid #ddd;
  padding: 8px;'>".$thirdPictureName."</td>
    <td style='  border: 1px solid #ddd;
  padding: 8px;'>".$thirdPictureTehnique."</td>
    <td style='  border: 1px solid #ddd;
  padding: 8px;'>".$thirdPictureYear."</td>
    <td style='  border: 1px solid #ddd;
  padding: 8px;'>".$thirdPictureHeight."</td>
    <td style='  border: 1px solid #ddd;
  padding: 8px;'>".$thirdPictureWidth."</td>
    <td style='  border: 1px solid #ddd;
  padding: 8px;'>".$thirdPictureWeight."</td>
    <td style='  border: 1px solid #ddd;
  padding: 8px;'>".$thirdPicturePrice."</td>
  </tr>";
    }
    
    $htmlBody.="</table>";
    
//    $filesNumber = count($_FILES["images"]["name"]);
//    for($i=0;$i<$filesNumber;$i++){
//        $tmpFilePath = $_FILES['images']['tmp_name'][$i];
//        
//        if($tmpFilePath != null){
//            $newFilePath = "./../picturesTMP/".$currentTime."-".$_FILES['images']['name'][$i];
//            
//            if(move_uploaded_file($tmpFilePath, $newFilePath)){
//                $mailSender->addAttachment($newFilePath);
//            }
//        }
//    }
    
    $mailSender->isSMTP();
    $mailSender->Host = "mail.bijenalefantastike.rs";   
    $mailSender->Port = "587";
    $mailSender->SMTPAuth = true;
    $mailSender->Username = "office@bijenalefantastike.rs";
    $mailSender->Password = "bienale2021";
    $mailSender->From = $email;
    $mailSender->FromName = $name." ".$surName;
    $mailSender->addAddress("office@bijenalefantastike.rs");
    $mailSender->isHTML(true);
    $mailSender->Subject = "Nova prijava sa brojem ".$currentTime;
    $mailSender->Body = $htmlBody;
    
    try{
        $mailSender->send();
        $_POST["success"]="Uspesno ste poslali prijavu";
        header("Location: ./../contact-us.php?message=success");
    }catch(Exception $e){
        echo $e->getMessage();
        echo "Mail error" . $mailSender->ErrorInfo;
    }
    
}

?>
