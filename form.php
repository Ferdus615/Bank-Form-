<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./style.css">

    <title>Banking Form Data</title>
</head>

<body>

    <div class="container">

        <div class="bankinfo">
            <p class="name">SEU BANK</p>
            <p class="branch">Tejgoan Branch</p>
        </div>

        <div class="Title">
            <P>Part - I: Information Regarding Account</p>
        </div>


        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {                         // checks the current request method in post and retrives all the values submitted through the form

            //Name of the Account (In English Block Letter):
            if (empty($_POST["AfirstName"])) {                              // checks if the field is empty
                echo "Name(English): ";                                     // if its empty sends this msg
            } else {                                                        // run this code snippet
                $firstname = htmlspecialchars($_POST["AfirstName"]);        // takes the feilds value puts it in the variable
                if ($firstname === strtoupper($firstname)) {                // checks if the field data is in all caps 
                    echo "Name(English): " . "<b>$firstname</b>";                  // if its true prints this line with data
                } else {                                                    // else print this line
                    echo "Name(English): " . "PLEASE FILL UP WITH ALL BLOCK LETTERS";
                }
            }
            echo "<br>";

            //হিসাবের শিরোনাম (বাংলায়):
            $Banglafirstname = htmlspecialchars($_POST["BfirstName"]); // the "htmlspecialchars" takes the input data and converts it into html special charactor for security resons so that no code can be executed in the input field
            echo "হিসাবের শিরোনাম (বাংলায়): " . "<b>$Banglafirstname</b>";
            echo "<br>";

            //Type of Account (Mark Tick):
            if (empty($_POST["ACC_checkbox"])) {
                echo "Type of Account: ";
            } else {
                foreach ($_POST["ACC_checkbox"] as $ACC_type) {
                    echo "Type of Account: " . "<b>$ACC_type</b>";
                }
                //other
                $other_ACC = htmlspecialchars($_POST["Other_ACC"]);
                echo " <b>($other_ACC)</b>";
            }
            echo "<br>";

            //Currency (Mark Tick):
            if (empty($_POST["Currency_checkbox"])) {
                echo "Currency: ";
            } else {
                foreach ($_POST["Currency_checkbox"] as $currency) {
                    echo "Currency: " . "<b>$currency</b>";
                }
                //other
                $Currency = htmlspecialchars($_POST["Currency"]);
                echo " <b>($Currency)</b>";
            }
            echo "<br>";

            //Mode of Operation of Account (Mark Tick):
            if (empty($_POST["MOA"])) {
                echo "Mode of Operation of Account: ";
            } else {
                foreach ($_POST["MOA"] as $MOA) {
                    echo "Mode of Operation of Account: " . "<b>$MOA</b>";
                }
                //other
                $MODE_OP_ACC = htmlspecialchars($_POST["MODE_OP_ACC"]);
                echo " <b>($MODE_OP_ACC)</b>";
            }
            echo "<br>";

            //Amount of Initial Deposit:
            echo "Amount of Initial Deposit:";
            $In_Figure = htmlspecialchars($_POST["In_Figure"]);
            echo " [In Figure:" . "<b>$In_Figure</b>] /";
            $In_Word = htmlspecialchars($_POST["In_Word"]);
            echo " [In Word:" . "<b>$In_Word</b>]";
            echo "<br>";

            //Other Services:
            if (empty($_POST["MOA"])) {
                echo "Other Services: ";
            } else {
                foreach ($_POST["Other_Services"] as $Other_Services) {
                    echo "Other Services:" . "<b>$Other_Services</b>";
                }
            }
            echo "<br>";
        }
        ?>

        <!-- //////////////// PART TWO FORM DATA ///////////////// -->

        <div class="Title">Part II: Information Related to Person
            <sup>1</sup>
        </div>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            //A/C No:
            $AC_no = htmlspecialchars($_POST["A/C_No"]);
            echo "A/C_No: " . "<b>$AC_no</b>";
            echo "<br>";

            //Name of the Account (In English Block Letter):
            if (empty($_POST["A2firstName"])) {
                echo "Name(English): ";
            } else {
                $A2firstName = htmlspecialchars($_POST["A2firstName"]);
                if ($firstname === strtoupper($A2firstName)) {
                    echo "Name(English): " . "<b>$A2firstName</b>";
                    echo "<br>";
                } else {
                    echo "Name(English): " . "PLEASE FILL UP WITH ALL BLOCK LETTERS";
                }
            }
            echo "<br>";

            //হিসাবের শিরোনাম (বাংলায়):
            $B2firstName = htmlspecialchars($_POST["B2firstName"]);
            echo "হিসাবের শিরোনাম (বাংলায়): " . "<b>$B2firstName</b>";
            echo "<br>";

            //Date of Birth:
            $DOB = htmlspecialchars($_POST["DOB"]);
            echo "Date of Birth: " . "<b>$DOB</b>";
            echo "<br>";

            //Father's Name:
            $FatherName = htmlspecialchars($_POST["FatherName"]);
            echo "Father's name: " . "<b>$FatherName</b>";
            echo "<br>";

            //Mother's Name:
            $MotherName = htmlspecialchars($_POST["MotherName"]);
            echo "Mother's Name: " . "<b>$MotherName</b>";
            echo "<br>";

            //Name of spouse:
            $SpouseName = htmlspecialchars($_POST["SpouseName"]);
            echo "Name of spouse: " . "<b>$SpouseName</b>";
            echo "<br>";

            //Photo
            $image = htmlspecialchars($_POST["image"]);
            echo "Your Photo: " . "<b>$image</b>";
            echo "<br>";

            //Nationality:
            $Nationality = htmlspecialchars($_POST["Nationality"]);
            echo "Nationality: " . "<b>$Nationality</b>";
            echo "<br>";

            //Gender
            $Gender = htmlspecialchars($_POST["Gender"]);
            echo "Gender: " . "<b>$Gender</b>";
            echo "<br>";

            //Resident Status (Mark Tick):
            if (empty($_POST["Resident"])) {
                echo "Resident Status: ";
            } else {
                foreach ($_POST["Resident"] as $Resident) {
                    echo "Resident Status: " . "<b>$Resident</b>";
                }
            }
            echo "<br>";

            //Occupation (Detailed):
            $Occupation = htmlspecialchars($_POST["Occupation"]);
            echo "Occupation: " . "<b>$Occupation</b>";
            echo "<br>";

            //Monthly Income:
            $Income = htmlspecialchars($_POST["Income"]);
            echo "Monthly income: " . "<b>$Income</b>";
            echo "<br>";

            //Source of Fund (Detailed):
            $Fund = htmlspecialchars($_POST["Fund"]);
            echo "Source of Fund: " . "<b>$Fund</b>";
            echo "<br>";

            //Tax Identification No. (TIN) If applicable:
            $TIN = htmlspecialchars($_POST["TIN"]);
            echo "Tax Identification No(TIN): " . "<b>$TIN</b>";
            echo "<br>";

            //Present Address:
            $R_V = htmlspecialchars($_POST["R_V"]);
            $PO = htmlspecialchars($_POST["PO"]);
            $PS = htmlspecialchars($_POST["PS"]);
            $DIS = htmlspecialchars($_POST["DIS"]);
            echo "Permanent Address: " . " Road/Village: " . "<b>$R_V</b>" . ", Post office:"
                . "<b>$PO</b>" . ", Police Station:" . "<b>$PS</b>" . ", District:" . "<b>$DIS</b>";
            echo "<br>";

            //Permanent Address:
            $P_R_V = htmlspecialchars($_POST["P_R_V"]);
            $P_PO = htmlspecialchars($_POST["P_PO"]);
            $P_PS = htmlspecialchars($_POST["P_PS"]);
            $P_DIS = htmlspecialchars($_POST["P_DIS"]);
            $P_Number = htmlspecialchars($_POST["P_Number"]);
            $P_Email = htmlspecialchars($_POST["P_Email"]);
            echo "Permanent Address: " . " Road/Village: " . "<b>$P_R_V</b>" . ", Post office: " . "<b>$P_PO</b>" . ", Police Station: "
                . "<b>$P_PS</b>" . ", District: " . "<b>$P_DIS</b>" . ", Phone Number: " . "<b>$P_Number</b>" . ", Email: " . "<b>$P_Email</b>";
            echo "<br>";

            //National ID Card No:
            $NID = htmlspecialchars($_POST["NID"]);
            echo "National ID Card No: " . "<b>$NID</b>";
            echo "<br>";

            //Passport No./ Birth Registration No./ Others<sup>2</sup> / To be mentioned specifically:
            $Docu = htmlspecialchars($_POST["Docu"]);
            echo "Other Documents: " . "<b>$Docu</b>";
            echo "<br>";

            echo "Introducer's Information: In case of unavailability of NID: ";

            //Name:
            $UN_name = htmlspecialchars($_POST["UN_name"]);
            echo "Name: " . "<b>$UN_name</b>";
            echo "<br>";

            //Account / National ID Card No. (with date of birth):
            $UN_NID = htmlspecialchars($_POST["UN_NID"]);
            echo "Account / National ID Card No. (with date of birth): " . "<b>$UN_NID</b>";
            echo "<br>";

            //Signature (with date):
            $Sign = htmlspecialchars($_POST["Sign"]);
            echo "Signature (with date): " . "<b>$Sign</b>";
        }
        ?>
    </div>

    <div class="backbtn">
        <a class="back" href="index.html">BACK</a>
    </div>

    <footer>
        <div class="myinfo">
            <p>Ferdus Rhaman</p>
            <p>2020000000038</p>
            <p>Batch-54</p>
        </div>
    </footer>

</body>

</html>