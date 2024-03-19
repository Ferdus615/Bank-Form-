<?php 
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){

    echo "These are the information you fill filled up in the form:";
    echo "<br> <br>";

    echo "------------------------------------------------------------------";
    echo "<br><br>";
    echo "Part - I: Information Regarding Account";
    echo "<br> <br>";

    if(empty($_POST["AfirstName"])){
        $_SESSION['error_msg'] = "Fill up the input field";
        header("Location: index.php");
        exit();
    }else{
        $firstname = htmlspecialchars($_POST["AfirstName"]);
        if($firstname === strtoupper($firstname)){
            echo "Name(English): "."$firstname";
            echo "<br>";
        }else{
            $_SESSION['error_msg'] = "Fill up the input field with ALL CAPITAL LETTER";
            header("Location: index.php");
            exit();
        }
    }

    $Banglafirstname = htmlspecialchars($_POST["BfirstName"]);
    echo "হিসাবের শিরোনাম (বাংলায়): "."$Banglafirstname";
    echo "<br>";

    foreach($_POST["ACC_checkbox"] as $ACC_type){
        echo "Type of Account: $ACC_type";
    }
    //other
    $other_ACC = htmlspecialchars($_POST["Other_ACC"]);
    echo " ($other_ACC)";
    echo "<br>";

    foreach($_POST["Currency_checkbox"] as $currency){
        echo "Currency: $currency";
    }
    //other
    $Currency = htmlspecialchars($_POST["Currency"]);
    echo " ($Currency)";
    echo "<br>";

    foreach($_POST["MOA"] as $MOA) {
        echo "Mode of Operation of Account: $MOA";
    }
    //other
    $MODE_OP_ACC = htmlspecialchars($_POST["MODE_OP_ACC"]);
    echo " ($MODE_OP_ACC)";
    echo "<br>";

    echo "Amount of Initial Deposit:";
    $In_Figure = htmlspecialchars($_POST["In_Figure"]);
    echo " [In Figure: $In_Figure] /";
    $In_Word = htmlspecialchars($_POST["In_Word"]);
    echo " [In Word: $In_Word]";
    echo "<br>";

    foreach($_POST["Other_Services"] as $Other_Services){
        echo "Other Services: $Other_Services";
    }
    echo "<br>";

    //////////////// PART TWO FORM DATA /////////////////

    echo "<br>";
    echo "Part II: Information Related to Person";
    echo "<br> <br>";

    $AC_no = htmlspecialchars($_POST["A/C_No"]);
    echo "A/C_No: ". "$AC_no" ;
    echo "<br>";

    $A2firstName = htmlspecialchars($_POST["A2firstName"]);
    echo "Name of the Account: " . "$A2firstName";
    echo "<br>";

    $B2firstName = htmlspecialchars($_POST["B2firstName"]);
    echo "হিসাবের শিরোনাম (বাংলায়): " . "$B2firstName";
    echo "<br>";

    $FatherName = htmlspecialchars($_POST["FatherName"]);
    echo "Father's name : " . "$FatherName";
    echo "<br>";

    $MotherName = htmlspecialchars($_POST["MotherName"]);
    echo "Mother's Name: " . "$MotherName";
    echo "<br>";

    $SpouseName = htmlspecialchars($_POST["SpouseName"]);
    echo "Name of spouse: " . "$SpouseName";
    echo "<br>";

    $image = htmlspecialchars($_POST["image"]);
    echo "Your Photo: " . "$image";
    echo "<br>";

    $Nationality = htmlspecialchars($_POST["Nationality"]);
    echo "Nationality: " . "$Nationality";
    echo "<br>";

    $Gender = htmlspecialchars($_POST["Gender"]);
    echo "Gender: " . "$Gender";
    echo "<br>";

    foreach($_POST["Resident"] as $Resident){
        echo "Resident Status: " . "$Resident";
    }
    echo "<br>";

    $Occupation = htmlspecialchars($_POST["Occupation"]);
    echo "Occupation: " . "$Occupation";
    echo "<br>";

    $Income = htmlspecialchars($_POST["Income"]);
    echo "Monthly income: " . "$Income";
    echo "<br>";

    $Fund = htmlspecialchars($_POST["Fund"]);
    echo "Source of Fund: " . "$Fund";
    echo "<br>";

    $TIN = htmlspecialchars($_POST["TIN"]);
    echo "Tax Identification No(TIN): " . "$TIN";
    echo "<br>";

    $R_V = htmlspecialchars($_POST["R_V"]);
    $PO = htmlspecialchars($_POST["PO"]);
    $PS = htmlspecialchars($_POST["PS"]);
    $DIS = htmlspecialchars($_POST["DIS"]);
    echo "Permanent Address: " . " Road/Village: " ."$R_V" . ", Post office:" . "$PO" . ", Police Station:". "$PS" . ", District:" . "$DIS";
    echo "<br>";

    $P_R_V = htmlspecialchars($_POST["P_R_V"]);
    $P_PO = htmlspecialchars($_POST["P_PO"]);
    $P_PS = htmlspecialchars($_POST["P_PS"]);
    $P_DIS = htmlspecialchars($_POST["P_DIS"]);
    $P_Number = htmlspecialchars($_POST["P_Number"]);
    $P_Email = htmlspecialchars($_POST["P_Email"]);
    echo "Permanent Address: " . " Road/Village: " ."$P_R_V" . ", Post office: " . "$P_PO" . ", Police Station: ". "$P_PS" . ", District: " . "$P_DIS" . ", Phone Number: " . "$P_Number" . ", Email: " . "$P_Email";
    echo "<br>";

    $NID = htmlspecialchars($_POST["NID"]);
    echo "National ID Card No: " . "$NID";
    echo "<br>";

    $Docu = htmlspecialchars($_POST["Docu"]);
    echo "Other Documents: " . "$Docu";
    echo "<br>";

    echo "Introducer's Information: In case of unavailability of NID: ";

    $UN_name = htmlspecialchars($_POST["UN_name"]);
    echo "Name: " . "$UN_name";
    echo "<br>";

    $UN_NID = htmlspecialchars($_POST["UN_NID"]);
    echo "Account / National ID Card No. (with date of birth): " . "$UN_NID";
    echo "<br>";
    
    $Sign = htmlspecialchars($_POST["Sign"]);
    echo "Signature (with date): " . "$Sign";
    echo "<br>";

}