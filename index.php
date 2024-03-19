<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Banking Form</title>
    
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
<?php 
session_start();

if(isset($_SESSION['error_msg'])) {
    echo $_SESSION['error_msg'];
    unset($_SESSION['error_msg']);
}
?>


<div class="form-container">

    <form action="form.php" method="POST"> 
        <div class="partOne">Part - I: Information Regarding Account</div>
        <ol type="1">
            <li>
                <label>Name of the Account (In English Block Letter): </label>
                    <input type="text" name="AfirstName">
                <br>
                <label>হিসাবের শিরোনাম (বাংলায়): </label>
                    <input type="text" name="BfirstName">            
            </li>

            <li>
                <label>Type of Account (Mark Tick): </label>
                    <input type="checkbox" name="ACC_checkbox[]" value="Saving"> Saving 
                    <input type="checkbox" name="ACC_checkbox[]" value="Current "> Current 
                    <input type="checkbox" name="ACC_checkbox[]" value="SND"> SND 
                    <input type="checkbox" name="ACC_checkbox[]" value="FC "> FC 
                    <input type="checkbox" name="ACC_checkbox[]" value="RFCD"> RFCD 
                    <input type="checkbox" name="ACC_checkbox[]" value="NFCD "> NFCD 
                    <input type="checkbox" name="ACC_checkbox[]" value="Other "> Other 
                    <input type="text" name="Other_ACC" value="">                  
            </li>

            <li>
                <label>Currency (Mark Tick): </label>
                    <input type="checkbox" name="Currency_checkbox[]" value="Taka "> Taka 
                    <input type="checkbox" name="Currency_checkbox[]" value="USD "> USD 
                    <input type="checkbox" name="Currency_checkbox[]" value="Euro"> Euro 
                    <input type="checkbox" name="Currency_checkbox[]" value="GBP"> GBP 
                    <input type="checkbox" name="Currency_checkbox[]" value="Other"> Other
                    <input type="text" name="Currency" value="">                
            </li>

            <li>
                <label>Mode of Operation of Account (Mark Tick): 
                    <input type="checkbox" name="MOA[]" value="Singly"> Singly 
                    <input type="checkbox" name="MOA[]" value="Jointly"> Jointly 
                    <input type="checkbox" name="MOA[]" value="Either or Survivor"> Either or Survivor 
                    <input type="checkbox" name="MOA[]" value="Any One "> Any One 
                    <input type="checkbox" name="MOA[]" value="Other">  Other 
                    <input type="text" name="MODE_OP_ACC" value=""> </label>
            </li>

            <li>
                <label>Amount of Initial Deposit: </label> 
                    In Figure <input type="text" name="In_Figure"> 
                    In Word <input type="text" name="In_Word"> 
                <br/>
                   
            </li>

            <li>
                <label>Other Services: </label>
                    <input type="checkbox" name="Other_Services[]" value="Cheque Book "> Cheque Book 
                    <input type="checkbox" name="Other_Services[]" value="Debit Card"> Debit Card 
                    <input type="checkbox" name="Other_Services[]" value="Internet Banking"> Internet Banking 
                    <input type="checkbox" name="Other_Services[]" value="SMS Banking"> SMS Banking   
                    <input type="checkbox" name="Other_Services[]" value="Online Transaction"> Online Transaction 
                    <input type="checkbox" name="Other_Services[]" value="E-Statement"> E-Statement 
                    <input type="checkbox" name="Other_Services[]" value="TAP"> TAP
            </li>

        </ol>

        <div class="partOne">Part II: Information Related to Person
            <sup>1</sup> 
        </div>
            <br/>
            <label class="acno">A/C No:</label> 
                <input type="text" name="A/C_No" placeholder="For Bank's Use Only"> 

        <ol type="1">
            <div class="container">
                <div class="folabel">
                    <li>
                        <label>Name of the Account (In English Block Letter):</label> 
                        <input type="text" name="A2firstName">
                        <br/>
                        <label>হিসাবের শিরোনাম (বাংলায়):</label>
                        <input type="text" name="B2firstName">       
                    </li>

                    <li>
                        <label>Date of Birth : </label> 
                        <input type="text" name="DOB">          
                    </li>

                    <li>
                        <label>Father's Name : </label>  
                        <input type="text" name="FatherName">           
                    </li>

                    <li>
                        <label>Mother's Name : </label>
                        <input type="text" name="MotherName">            
                    </li>

                    <li>
                        <label>Name of spouse: </label>
                        <input type="text" name="SpouseName">             
                    </li>
                </div>

                <div class="photo">
                    <p>Photo Here</p>
                    <input class="img" type="file" name="image" accept="image/*">
                </div>
            </div>
            
            <div class="rowTwo">
                <li>
                    <label>Nationality: </label>
                    <input type="text" name="Nationality" value="">
                </li>  
                      
                <li>
                    <label>Gender: </label>
                    <input type="text" name="Gender" value="">             
                </li>
                (In case of foreign citizen, copy of passport with Valid VISA must be obtained)
                
            </div>

            <li>
                <label>Resident Status (Mark Tick): </label>
                <input type="checkbox" name="Resident[]" value="Resident "> Resident 
                <input type="checkbox" name="Resident[]" value="Non-Resident"> Non-Resident 
                <span>(If needed, instructions of Bank's Guidelines for Foreign Exchange Transaction should be followed)</span>
                <br/>                  
            </li>

            <div class="rowTwo">
                <li>
                    <label>Occupation (Detailed): </label>
                    <input type="text" name="Occupation" value="">              
                </li>
                <li>
                    <label>Monthly Income: </label>
                    <input type="text" name="Income" value="">              
                </li>
            </div>

            <li>
                <label>Source of Fund (Detailed): </label> 
                <input type="text" name="Fund" value="">             
            </li>

            <li>
                <label>Tax Identification No. (TIN) If applicable: </label> 
                    <input type="text" name="TIN" value="">              
            </li>

            <li>
                <ol type="a">
                    <li>
                        <label>Present Address: </label> 
                            Road/Village: <input type="text" name="R_V">
                            Post office: <input type="text" name="PO">
                            Police Station: <input type="text" name="PS">
                            District: <input type="text" name="DIS">
                    </li>
                    <li>
                        <label>Permanent Address: </label> 
                            Road/Village: <input type="text" name="P_R_V">
                            Post office: <input type="text" name="P_PO">
                            Police Station: <input type="text" name="P_PS">
                            District: <input type="text" name="P_DIS">
                            Phone Number: <input type="text" name="P_Number">
                            Email: <input type="text" name="P_Email">
                    </li>
                </ol>            
            </li>

            <li> 
                Identification:
                <ol type="a">
                    <li>
                        <label>National ID Card No: </label> 
                            <input type="text" name="NID" >
                            <b>OR</b>
                    </li>
                    <li>
                        <label>Passport No./ Birth Registration No./ Others<sup>2</sup> / To be mentioned specifically:.... </label>
                            <input type="text" name="Docu">  
                    </li>
                    <li>
                        <label>Introducer's Information: In case of unavailability of NID: </label><br>
                            Name: <input type="text" name="UN_name"> 
                            Account / National ID Card No. (with date of birth): <input type="text" name="UN_NID"> 
                            Signature (with date): <input type="text" name="Sign">  
                    </li>
                </ol>            
            </li>
        </ol>
        <!-- <input class="btn" type="submit" name="submit" value="Submit"> -->
        <button class="btn" type="submit">Submit</button>
    </form>
</div>

</body>
</html>