<?php
    include('conn.php');

    $Dept_S_No = "";
    $Name_of_the_Faculty = "";
    $Dept = "";
    $Desg = "";
    $DOJ = "";
    $INC = "";
    $Total_Pay_1 = "";
    $Percentage_of_DA = "";
    $DA_Amount = "";
    $Total_Pay_2 = "";
    $HRA="";
    $EPF_PAY="";
    $PF_MGT="";
    $Allow="";
    $Others="";
    $EPF_PF="";
    $CTC="";
    $GE="";
    $EPF="";
    $Account_No="";
					
    $eDept_S_No = "";
	$eName_of_the_Faculty = "";
	$eDept = "";
	$eDesg = "";
	$eDOJ = "";
	$eINC = "";
	$eTotal_Pay_1 = "";
	$ePercentage_of_DA = "";
	$eDA_Amount = "";
	$eTotal_Pay_2 = "";
	$eHRA="";
	$eEPF_PAY="";
	$ePF_MGT="";
	$eAllow="";
	$eOthers="";
	$eEPF_PF="";
	$eCTC="";
	$eGE="";
    $eEPF="";
	$eAccount_No="";


    $sql = "select * from salary_report where id = ".$_GET['eid'];
    $table = mysqli_query($cn, $sql);
    $row = mysqli_fetch_assoc($table);
					
	if(isset($_POST['submit']))
	{
		$Dept_S_No = $_POST['Dept_S_No'];
	    $Name_of_the_Faculty = $_POST['Name_of_the_Faculty'] ;
		$Dept = $_POST['Dept'];
		$Desg = $_POST['Desg'];
		$DOJ = $_POST['DOJ'];
		$INC = $_POST['INC'];
		$Total_Pay_1 = $_POST['Total_Pay_1'];
		$Percentage_of_DA = $_POST['Percentage_of_DA'];
		$DA_Amount = $_POST['DA_Amount'];
		$HRA = $_POST['HRA'];
	    $EPF_PAY = $_POST['EPF_PAY'];
		$PF_MGT = $_POST['PF_MGT'];
		$Allow = $_POST['Allow'];

	if(isset($_POST['Others']))
	$Others = $_POST['Others'];				
	$EPF_PF = $_POST['EPF_PF'];
	$CTC = $_POST['CTC'];
	$GE = $_POST['GE'];
	$EPF = $_POST['EPF'];
	$Account_No = $_POST['Account_No'];
						
    $er = 0;
						
    // if($sname == "")
    // {
    //     $er++;
    //     $esname = "*Required";
    // }
    // else
    // {
    //     $sname = test_input($sname);
    //     if(!preg_match("/^[a-zA-Z ]*$/",$sname)){
    //         $er++;
    //         $esname = "*Only letters and white space allowed";
    //     }
    // }

    // if($gname == "")
    // {
    //     $er++;
    //     $egname = "*Required";
    // }
    // else
    // {
	// 	$gname = test_input($gname);
	// 	if(!preg_match("/^[a-zA-Z ]*$/",$gname)){
	// 	$er++;
	// 	$egname = "*Only letters and white space allowed";
    //     }
    // }

    // if($contact == "")
    // {
    //     $er++;
    //     $econtact = "*Required";
    // }
    // else
    // {
    //     $contact = test_input($contact);
    //     if(!preg_match("/^[+0-9]*$/",$contact)){
    //         $er++;
    //         $econtact = "*Only numbers are allowed";
    //     }
							
    // }

    //     if($email == "")
    //     {
    //         $er++;
    //         $eemail = "*Required";
    //     }
    //     else
    //     {
    //         $email = test_input($email);
    //         if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    //         {
    //             $er++;
    //             $eemail = "*Email format is invalid";
    //         }
            
    //     }

    //     if($address == "")
    //     {
    //         $er++;
    //         $eaddress = "*Required";
    //     }

    //     if($class == "")
    //     {
    //         $er++;
    //         $eclass = "*Required";
    //     }

    //     if($shift == 0)
    //     {
    //         $er++;
    //         $eshift = "*Please select shift";
    //     }

    //     if (empty($gender))
    //     {
    //         $er++;
    //         $egender = "*Gender is required";
    //     } 
    //     else {
    //         $gender = test_input($gender);
    //     }

    //     if($blgroup == "")
    //     {
    //         $er++;
    //         $eblgroup = "*Required";
    //     }
    //     elseif(strlen($blgroup) > 3)
    //     {
    //         $er++;
    //         $eblgroup = "*Not more than 3 character";
    //     }
        
    //     else
    //     {
    //         $blgroup = test_input($blgroup);
    //         if(!preg_match("/^[a-zA-Z+-]*$/",$blgroup))
    //         {
    //             $er++;
    //             $eblgroup = "*Blood group not valid";
    //         }

    //     }

    //     if($division == 0)
    //     {
    //         $er++;
    //         $edivision = "*Please select Division";
    //     }
        if($er == 0)
        {
            $sql = "update salary_report set Dept_S_No = '".strip_tags($Dept_S_No)."', 
            Name_of_the_Faculty = '".strip_tags($Name_of_the_Faculty)."',
            Dept = '".strip_tags($Dept)."',
            Desg = '".strip_tags($Desg)."',
            DOJ = '".strip_tags($DOJ)."',
            INC = '".strip_tags($INC)."',
            Total_Pay_1 = ".strip_tags($Total_Pay_1)." ,
            Percentage_of_DA = '".strip_tags($Percentage_of_DA)."',
            DA_Amount = '".strip_tags($DA_Amount)."',
            Total_Pay_2 = '".strip_tags($Total_Pay_2)."',
            HRA = '".strip_tags($HRA)."',
            EPF_PAY = '".strip_tags($EPF_PAY)."',
            PF_MGT = '".strip_tags($PF_MGT)."',
            Allow = '".strip_tags($Allow)."',
            Others = '".strip_tags($Others)."',
            EPF_PF = '".strip_tags($EPF_PF)."',
            CTC = '".strip_tags($CTC)."',
            GE = '".strip_tags($GE)."',
            EPF = '".strip_tags($EPF)."',
            Account_No = ".strip_tags($Account_No)." where id = ".$_GET['eid'];
            
            if(mysqli_query($cn, $sql))
            {
                print '<span class = "successMessage">Data update successfully</span>';
                $row['Dept_S_No'] = "";
                $row['Name_of_the_Faculty '] = "";
                $row['Dept'] = "";
                $row['Desg'] = "";
                $row['DOJ'] = "";
                $row['INC'] = "";
                $row['Total_Pay_1'] = "";
                $row['Percentage_of_DA'] = "";
                $row['DA_Amount'] = "";
                $row['Total_Pay_2'] = "";
                $row['HRA'] = "";
                $row['EPF_PAY'] = "";
                $row['PF_MGT'] = "";
                $row['Allow'] = "";
                $row['Others'] = "";
                $row['EPF_PF'] = "";
                $row['CTC'] = "";
                $row['GE'] = "";
                $row['EPF'] = "";
                $row['Account_No'] = "";
            }
            else
            {
                print '<span>'.mysqli_error($cn).'</span>';
            }
        }
    }
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>


<div class="form-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h3 id="et">Edit the ID:
                        <?php print $_GET['eid'].', Name: '.$row["Name_of_the_Faculty"]; ?>'s information</h3>
                </div>
                <div class="row">
					<div class="col-md-12">
						<form action="" method="post">
							<div class="row">
								<div class="col-md-6">
									<div class="left-side-form">
										<h5><label for="Dept_S_No"> Dept_S_No</label>
										<span class="error"><?php print $eDept_S_No; ?></span></h5>
										<p><input type="text" name="Dept_S_No" value="<?php print $Dept_S_No; ?>"></p>

										<h5><label for="Name_of_the_Faculty">Name_of_the_Faculty</label><span class="error">
												<?php print $eName_of_the_Faculty; ?></span></h5>
										<p><input type="text" name="Name_of_the_Faculty" value="<?php print $Name_of_the_Faculty; ?>"></p>

										<h5><label for="Dept">Dept</label><span class="error">
												<?php print $eDept; ?></span></h5>
										<p><input type="text" name="Dept" value="<?php print $Dept; ?>"></p>

										<h5><label for="Desg">Desg</label><span class="error">
												<?php print $eDesg; ?></span></h5>
										<p><input type="text" name="Desg" value="<?php print $Desg; ?>"></p>

										<h5><label for="address">DOJ</label><span class="error">
												<?php print $eDOJ; ?></span></h5>
										<p><textarea name="DOJ"><?php print $DOJ; ?></textarea></p>

										<h5><label for="Desg">INC</label><span class="error">
												<?php print $eINC; ?></span></h5>
										<p><input type="text" name="INC" value="<?php print $INC; ?>"></p>

										<h5><label for="Total_Pay_1">Total_Pay_1</label><span class="error">
												<?php print $eTotal_Pay_1; ?></span></h5>
										<p><input type="text" name="Total_Pay_1" value="<?php print $Total_Pay_1; ?>"></p>

										<h5><label for="Percentage_of_DA">Percentage_of_DA</label><span class="error">
												<?php print $ePercentage_of_DA; ?></span></h5>
										<p><input type="text" name="Percentage_of_DA" value="<?php print $Percentage_of_DA; ?>"></p>

										<h5><label for="DA_Amount">DA_Amount</label><span class="error">
												<?php print $eDA_Amount; ?></span></h5>
										<p><input type="text" name="DA_Amount" value="<?php print $DA_Amount; ?>"></p>

										

										
									</div>
								</div>
								<div class="col-md-6">
									<div class="right-side-form">
										<h5><label for="HRA">HRA</label><span class="error">
												<?php print $eHRA; ?></span></h5>
										<p><input type="text" name="HRA" value="<?php print $HRA; ?>"></p>

										<h5><label for="EPF_PAY">EPF_PAY</label><span class="error">
												<?php print $eEPF_PAY; ?></span></h5>
										<p><input type="text" name="EPF_PAY" value="<?php print $EPF_PAY; ?>"></p>

										<h5><label for="PF_MGT">PF_MGT</label><span class="error">
												<?php print $ePF_MGT; ?></span></h5>
										<p><input type="text" name="PF_MGT" value="<?php print $PF_MGT; ?>"></p>

										<h5><label for="Allow">Allow</label><span class="error">
												<?php print $eAllow; ?></span></h5>
										<p><input type="text" name="Allow" value="<?php print $Allow; ?>"></p>

										<h5><label for="Others">Others</label><span class="error">
												<?php print $eOthers; ?></span></h5>
										<p><input type="text" name="Others" value="<?php print $Others; ?>"></p>

										<h5><label for="EPF_PF">EPF_PF</label><span class="error">
												<?php print $eEPF_PF; ?></span></h5>
										<p><input type="text" name="EPF_PF" value="<?php print $EPF_PF; ?>"></p>

										<h5><label for="CTC">CTC</label><span class="error">
												<?php print $eCTC; ?></span></h5>
										<p><input type="text" name="CTC" value="<?php print $CTC; ?>"></p>

										<h5><label for="GE">GE</label><span class="error">
												<?php print $eGE; ?></span></h5>
										<p><input type="text" name="GE" value="<?php print $GE; ?>"></p>

										<h5><label for="EPF">EPF</label><span class="error">
												<?php print $eEPF; ?></span></h5>
										<p><input type="text" name="EPF" value="<?php print $EPF; ?>"></p>

										<h5><label for="Account_No">Account_No</label><span class="error">
												<?php print $eAccount_No; ?></span></h5>
										<p><input type="text" name="Account_No" value="<?php print $Account_No; ?>"></p>
										<!-- <h5><label for="shift">shift</label></h5>
										<p><select name="shift" id="">
												<option value="0">select</option>
												<option value="1">morning</option>
												<option value="2">evening</option>
											</select><span class="error">
												<?php //print $eshift; ?></span></p> -->


										<!-- <h5><label for="gender">Gender</label></h5>
										<input type="radio" name="gender" value="male"><span>Male</span>
										<input type="radio" name="gender" value="female"><span>Female</span>
										<input type="radio" name="gender" value="others"><span>Others</span>
										<span class="error">
											<?php //print $egender; ?></span> -->

										<!-- <h5><label for="blgroup">blood group</label><span class="error">
												<?php //print $eblgroup; ?></span></h5>

										<p><input type="text" name="blgroup" value="<?php print $blgroup; ?>"></p> -->

										<!-- <h5><label for="division">division</label></h5>
										<p><select name="division" id="">
												<option value="0">N/A</option>
												<option value="1">Science</option>
												<option value="2">Commarce</option>
												<option value="3">Arts</option>
											</select><span class="error">
												<?php// print $edivision; ?></span></p> -->

										<p><input type="submit" name="submit" value="Submit"></p>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>
