<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){

    echo "These are the information you fill filled up in the form:";
    echo "<br>";
    echo "------------------------------------------------------------------";

    echo "<br><br>";
    echo "Part - I: Information Regarding Account";
    echo "<br> <br>";

    //Name of the Account (In English Block Letter):
    if(empty($_POST["AfirstName"])){                            // checks if the field is empty
        echo "Name(English): ";                                 // if its empty sends this msg
    }else{                                                      // run this code snippet
        $firstname = htmlspecialchars($_POST["AfirstName"]);    // takes the feilds value puts it in the variable
        if($firstname === strtoupper($firstname)){              // checks if the field data is in all caps 
            echo "Name(English): "."$firstname";                // if its true prints this line with data
            echo "<br>";
        }else{                                                  // else print this line
            echo "Name(English): "."PLEASE FILL UP WITH ALL BLOCK LETTERS";
        }
    }
    echo "<br>";

    //হিসাবের শিরোনাম (বাংলায়):
    $Banglafirstname = htmlspecialchars($_POST["BfirstName"]); // the "htmlspecialchars" takes the input data and converts it into html special charactor for security resons so that no code can be executed in the input field
    echo "হিসাবের শিরোনাম (বাংলায়): "."$Banglafirstname";
    echo "<br>";

    //Type of Account (Mark Tick):
    if(empty($_POST["ACC_checkbox"])){
        echo "Type of Account: ";
    }else{
        foreach($_POST["ACC_checkbox"] as $ACC_type){
            echo "Type of Account: " . "$ACC_type";
        }
        //other
        $other_ACC = htmlspecialchars($_POST["Other_ACC"]);
        echo " ($other_ACC)";
    }
    echo "<br>";

    //Currency (Mark Tick):
    if(empty($_POST["Currency_checkbox"])){
        echo "Currency: ";
    }else{
        foreach($_POST["Currency_checkbox"] as $currency){
            echo "Currency: " . "$currency";
        }
        //other
        $Currency = htmlspecialchars($_POST["Currency"]);
        echo " ($Currency)";
    }
    echo "<br>";

    //Mode of Operation of Account (Mark Tick):
    if(empty($_POST["MOA"])){
        echo "Mode of Operation of Account: ";
    }else{
        foreach($_POST["MOA"] as $MOA) {
            echo "Mode of Operation of Account: " . "$MOA";
        }
        //other
        $MODE_OP_ACC = htmlspecialchars($_POST["MODE_OP_ACC"]);
        echo " ($MODE_OP_ACC)";
    }
    echo "<br>";

    //Amount of Initial Deposit:
    echo "Amount of Initial Deposit:";
    $In_Figure = htmlspecialchars($_POST["In_Figure"]);
    echo " [In Figure:" . "$In_Figure] /";
    $In_Word = htmlspecialchars($_POST["In_Word"]);
    echo " [In Word:" . "$In_Word]";
    echo "<br>";

    //Other Services:
    if(empty($_POST["MOA"])){
        echo "Other Services: ";
    }else{
        foreach($_POST["Other_Services"] as $Other_Services){
            echo "Other Services:" . "$Other_Services";
        }
    }
    echo "<br>";

    //////////////// PART TWO FORM DATA /////////////////

    echo "<br>";
    echo "Part II: Information Related to Person";
    echo "<br> <br>";

    //A/C No:
    $AC_no = htmlspecialchars($_POST["A/C_No"]);
    echo "A/C_No: ". "$AC_no" ;
    echo "<br>";

    //Name of the Account (In English Block Letter):
    if(empty($_POST["A2firstName"])){
        echo "Name(English): ";
    }else{
        $A2firstName = htmlspecialchars($_POST["A2firstName"]);
        if($firstname === strtoupper($A2firstName)){
            echo "Name(English): "."$A2firstName";
            echo "<br>";
        }else{
            echo "Name(English): "."PLEASE FILL UP WITH ALL BLOCK LETTERS";
        }
    }
    echo "<br>";

    //হিসাবের শিরোনাম (বাংলায়):
    $B2firstName = htmlspecialchars($_POST["B2firstName"]);
    echo "হিসাবের শিরোনাম (বাংলায়): " . "$B2firstName";
    echo "<br>";

    //Date of Birth:
    $DOB = htmlspecialchars($_POST["DOB"]);
    echo "Date of Birth: " . "$DOB";
    echo "<br>";

    //Father's Name:
    $FatherName = htmlspecialchars($_POST["FatherName"]);
    echo "Father's name: " . "$FatherName";
    echo "<br>";

    //Mother's Name:
    $MotherName = htmlspecialchars($_POST["MotherName"]);
    echo "Mother's Name: " . "$MotherName";
    echo "<br>";

    //Name of spouse:
    $SpouseName = htmlspecialchars($_POST["SpouseName"]);
    echo "Name of spouse: " . "$SpouseName";
    echo "<br>";

    //Photo
    $image = htmlspecialchars($_POST["image"]);
    echo "Your Photo: " . "$image";
    echo "<br>";

    //Nationality:
    $Nationality = htmlspecialchars($_POST["Nationality"]);
    echo "Nationality: " . "$Nationality";
    echo "<br>";

    //Gender
    $Gender = htmlspecialchars($_POST["Gender"]);
    echo "Gender: " . "$Gender";
    echo "<br>";

    //Resident Status (Mark Tick):
    if(empty($_POST["Resident"])){
        echo "Resident Status: ";
    }else{
        foreach($_POST["Resident"] as $Resident){
            echo "Resident Status: " . "$Resident";
        }
    }
    echo "<br>";

    //Occupation (Detailed):
    $Occupation = htmlspecialchars($_POST["Occupation"]);
    echo "Occupation: " . "$Occupation";
    echo "<br>";

    //Monthly Income:
    $Income = htmlspecialchars($_POST["Income"]);
    echo "Monthly income: " . "$Income";
    echo "<br>";

    //Source of Fund (Detailed):
    $Fund = htmlspecialchars($_POST["Fund"]);
    echo "Source of Fund: " . "$Fund";
    echo "<br>";

    //Tax Identification No. (TIN) If applicable:
    $TIN = htmlspecialchars($_POST["TIN"]);
    echo "Tax Identification No(TIN): " . "$TIN";
    echo "<br>";

    //Present Address:
    $R_V = htmlspecialchars($_POST["R_V"]);
    $PO = htmlspecialchars($_POST["PO"]);
    $PS = htmlspecialchars($_POST["PS"]);
    $DIS = htmlspecialchars($_POST["DIS"]);
    echo "Permanent Address: " . " Road/Village: " ."$R_V" . ", Post office:" 
    . "$PO" . ", Police Station:". "$PS" . ", District:" . "$DIS";
    echo "<br>";

    //Permanent Address:
    $P_R_V = htmlspecialchars($_POST["P_R_V"]);
    $P_PO = htmlspecialchars($_POST["P_PO"]);
    $P_PS = htmlspecialchars($_POST["P_PS"]);
    $P_DIS = htmlspecialchars($_POST["P_DIS"]);
    $P_Number = htmlspecialchars($_POST["P_Number"]);
    $P_Email = htmlspecialchars($_POST["P_Email"]);
    echo "Permanent Address: " . " Road/Village: " ."$P_R_V" . ", Post office: " . "$P_PO" . ", Police Station: " 
    . "$P_PS" . ", District: " . "$P_DIS" . ", Phone Number: " . "$P_Number" . ", Email: " . "$P_Email";
    echo "<br>";

    //National ID Card No:
    $NID = htmlspecialchars($_POST["NID"]);
    echo "National ID Card No: " . "$NID";
    echo "<br>";

    //Passport No./ Birth Registration No./ Others<sup>2</sup> / To be mentioned specifically:
    $Docu = htmlspecialchars($_POST["Docu"]);
    echo "Other Documents: " . "$Docu";
    echo "<br>";

    echo "Introducer's Information: In case of unavailability of NID: ";

    //Name:
    $UN_name = htmlspecialchars($_POST["UN_name"]);
    echo "Name: " . "$UN_name";
    echo "<br>";

    //Account / National ID Card No. (with date of birth):
    $UN_NID = htmlspecialchars($_POST["UN_NID"]);
    echo "Account / National ID Card No. (with date of birth): " . "$UN_NID";
    echo "<br>";
    
    //Signature (with date):
    $Sign = htmlspecialchars($_POST["Sign"]);
    echo "Signature (with date): " . "$Sign";
    echo "<br>";

}