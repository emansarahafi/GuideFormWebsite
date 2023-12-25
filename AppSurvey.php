<?php
define ('url',"https://api.telegram.org/botINSERT_BOT_TOEKN_HERE/");

$chat_id = '@Survey2022Channel';
if(isset($_POST['submit']))
    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $uni = $_POST["uni"];
    $university = $_POST["university"];
    $role = $_POST["roleoption"];
    $major = $_POST["major"];

    $radio = $_POST["radiooption"];
    if($radio =='Other next step'){
        $radio = 'Other next step: '.$_POST['otherradiooption'];
    }
    $fcheck = (array) $_POST['inp']; //casting not strictly required here
    if(isset($_POST['otherinp']) && trim($_POST['inpother'])) $fcheck[] = 'Other language(s): '.$_POST['inpother'];
    $check = implode(", ", $fcheck);
    
    $fwhere = (array) $_POST['where']; //casting not strictly required here
    if(isset($_POST['otherwhere']) && trim($_POST['whereother'])) $fwhere[] = 'Other learning method: '.$_POST['whereother'];
    $where = implode(", ", $fwhere);

    $time = $_POST["time"];
    $rate = $_POST["rating"];
    $answer = $_POST["answer"];

    $ffuturejob = (array) $_POST['job']; //casting not strictly required here
    if(isset($_POST['otherjob']) && trim($_POST['jobother'])) $ffuturejob[] = 'Other career option: '.$_POST['jobother'];
    $futurejob = implode(", ", $ffuturejob);

    $comment = $_POST["commentsection"];
    
    $iplex = $_SERVER['REMOTE_ADDR'];
    $message = urlencode("\nName: ".$name."\nEmail: ".$email."\nAge: ".$age."\nGender: ".$gender."\nUniversity: ".$uni."\nIf your university is not showing, type it here: ".$university."\nMajor: ".$role."\nIf your major is not showing, type it here: ".$major."\nWhat is your next step after graduating from university? ".$radio."\nLanguages and Frameworks known: ".$check."\nFrom where did you learn the new language(s)? ".$where."\nHow long did you spend learning the new language(s)? ".$time."\nHow experienced are you at the language(s) you learned on a scale from 1 to 3? ".$rate."\nDoes learning the new language(s) help you in a way in your career? ".$answer."\nWhat are your future career goals? ".$futurejob."\nAny comments or suggestions: ".$comment."\nIP Address: ".$iplex);
    $response = file_get_contents(url."sendmessage?text=".$message."&chat_id=".$chat_id."&parse_mode=HTML");
    header("Location: http://localhost/TashfeenUniForm/appconfirmation.html");
    exit;
?>
