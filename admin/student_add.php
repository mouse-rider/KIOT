
<link rel="stylesheet" href="../style.css">

<?php
					$Dept_S_No = $Name_of_the_Faculty = $Dept = $Desg = $DOJ = $INC = $Total_Pay_1 = $Percentage_of_DA = $HRA=$EPF_PAY=$Allow=$Others=$EPF= $Account_No=$VEPF=$TDS=$LOP=$HMF=$STAFF_CLUB="";
					
					$eDept_S_No = $eName_of_the_Faculty = $eDept = $eDesg = $eDOJ = $eINC = $eTotal_Pay_1 = $ePercentage_of_DA = $eHRA=$eEPF_PAY=$eAllow=$eOthers=$eEPF= $eAccount_No=$eVEPF=$eTDS=$eLOP=$eHMF=$eSTAFF_CLUB="";
					
					
					
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
					$HRA = $_POST['HRA'];
					$EPF_PAY = $_POST['EPF_PAY'];
					$Allow = $_POST['Allow'];
					if(isset($_POST['Others']))
					$Others = $_POST['Others'];
					$VEPF = $_POST['VEPF'];
					$Account_No = $_POST['Account_No'];
					$TDS=$_POST['TDS'];
					$LOP=$_POST['LOP'];
					$HMF=$_POST['HMF'];
					$STAFF_CLUB=$_POST['STAFF_CLUB'];
					
						$er = 0;
						
						if($er == 0)
						{
                             $cn = mysqli_connect("localhost", "root", "", "kiot");
							
							$sql = "INSERT INTO salary_report(Dept_S_No, Name_of_the_Faculty, Dept, Desg, DOJ, Account_No, INC, Total_Pay_1, Percentage_of_DA, HRA, EPF_PAY, Allow, Others, VEPF, TDS, LOP, HMF, STAFF_CLUB) VALUES (
							'".mysqli_real_escape_string($cn, strip_tags($Dept_S_No))."',
							'".mysqli_real_escape_string($cn, strip_tags($Name_of_the_Faculty))."', 
							'".mysqli_real_escape_string($cn, strip_tags($Dept))."', 
							'".mysqli_real_escape_string($cn, strip_tags($Desg))."', 
							'".mysqli_real_escape_string($cn, strip_tags($DOJ))."', 
							'".mysqli_real_escape_string($cn, strip_tags($Account_No))."', 
							'".mysqli_real_escape_string($cn, strip_tags($INC))."', 
							'".mysqli_real_escape_string($cn, strip_tags($Total_Pay_1))."', 
							'".mysqli_real_escape_string($cn, strip_tags($Percentage_of_DA))."', 
							'".mysqli_real_escape_string($cn, strip_tags($HRA))."', 
							'".mysqli_real_escape_string($cn, strip_tags($EPF_PAY))."', 
							'".mysqli_real_escape_string($cn, strip_tags($Allow))."', 
							'".mysqli_real_escape_string($cn, strip_tags($Others))."',
							'".mysqli_real_escape_string($cn, strip_tags($VEPF))."', 
							'".mysqli_real_escape_string($cn, strip_tags($TDS))."', 
							'".mysqli_real_escape_string($cn, strip_tags($LOP))."', 
							'".mysqli_real_escape_string($cn, strip_tags($HMF))."', 
							".mysqli_real_escape_string($cn, strip_tags($STAFF_CLUB))."
							)";
							
							if(mysqli_query($cn , $sql))
							{
								print '<span class = "successMessage">Data saved into system.</span>';
								$Dept_S_No = $Name_of_the_Faculty = $Dept = $Desg = $DOJ = $INC = $Total_Pay_1 = $Percentage_of_DA = $HRA=$EPF_PAY=$Allow=$Others=$EPF= $Account_No=$VEPF=$TDS=$LOP=$HMF=$STAFF_CLUB="";

									
							}
							else
							{
								print '<span class= "errorMessage">'.mysqli_error($cn).'hello</span>';
							}
						}
						else
						{
							print '<span class = "errorMessage">Please fill all the required fields correctly.</span>';
						}
					}
					
					function test_input($data) {
					  $data = trim($data);
					  $data = stripslashes($data);
					  $data = htmlspecialchars($data);
					  return $data;
					}
					
//================================ PHP End =============================	
?>

<div class="form-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h3>Add form</h3>
				</div>

				<div class="row">
					<div class="col-md-12">
						<form action="" method="post">
							<div class="row">
								<div class="col-md-6">
									<div class="left-side-form">
										<h5><label for="Dept_S_No"> Dept_S_No</label>
										<span class="error"><?php print $eDept_S_No; ?></span></h5>
										<p><input type="number" class="form-control" name="Dept_S_No" value="<?php print $Dept_S_No; ?>"></p>

										<h5><label for="Name_of_the_Faculty">Name_of_the_Faculty</label><span class="error">
												<?php print $eName_of_the_Faculty; ?></span></h5>
										<p><input type="text" class="form-control" name="Name_of_the_Faculty" value="<?php print $Name_of_the_Faculty; ?>"></p>

										<h5><label for="Dept">Dept</label><span class="error">
												<?php print $eDept; ?></span></h5>
										<p><input type="text" class="form-control" name="Dept" value="<?php print $Dept; ?>"></p>

										<h5><label for="Desg">Desg</label><span class="error">
												<?php print $eDesg; ?></span></h5>
										<p><input type="text" class="form-control" name="Desg" value="<?php print $Desg; ?>"></p>

										<h5><label for="DOJ">DOJ</label><span class="error">
												<?php print $eDOJ; ?></span></h5>
										<p><input type="date"  class="form-control" name="DOJ" value="<?php print $DOJ; ?>"></p>

										<h5><label for="Desg">INC</label><span class="error">
												<?php print $eINC; ?></span></h5>
										<p><input type="number" class="form-control" name="INC" value="<?php print $INC; ?>"></p>

										<h5><label for="Total_Pay_1">Total_Pay_1</label><span class="error">
												<?php print $eTotal_Pay_1; ?></span></h5>
										<p><input type="number" class="form-control" name="Total_Pay_1" value="<?php print $Total_Pay_1; ?>"></p>
										
										<h5><label for="Percentage_of_DA">Percentage_of_DA</label><span class="error">
												<?php print $ePercentage_of_DA; ?></span></h5>
										<p><input type="number" class="form-control" name="Percentage_of_DA" value="<?php print $Percentage_of_DA; ?>"></p>
										
										<h5><label for="HRA">HRA</label><span class="error">
												<?php print $eHRA; ?></span></h5>
										<p><input type="number" class="form-control" name="HRA" value="<?php print $HRA; ?>"></p>
										

									</div>
								</div>
								<div class="col-md-6">
									<div class="right-side-form">
										<h5><label for="EPF_PAY">EPF_PAY</label><span class="error">
												<?php print $eEPF_PAY; ?></span></h5>
										<p><input type="number" class="form-control" name="EPF_PAY" value="<?php print $EPF_PAY; ?>"></p>

										<h5><label for="Allow">Allow</label><span class="error">
												<?php print $eAllow; ?></span></h5>
										<p><input type="number" class="form-control" name="Allow" value="<?php print $Allow; ?>"></p>

										<h5><label for="Others">Others</label><span class="error">
												<?php print $eOthers; ?></span></h5>
										<p><input type="number" class="form-control" name="Others" value="<?php print $Others; ?>"></p>

										<h5><label for="Account_No">Account_No</label><span class="error">
												<?php print $eAccount_No; ?></span></h5>
										<p><input type="number" class="form-control" name="Account_No" value="<?php print $Account_No; ?>"></p>
										
										<h5><label for="VEPF">VEPF</label><span class="error">
												<?php print $eVEPF; ?></span></h5>
										<p><input type="number" class="form-control" name="VEPF" value="<?php print $VEPF; ?>"></p>
										
										<h5><label for="TDS">TDS</label><span class="error">
												<?php print $eTDS; ?></span></h5>
										<p><input type="number" class="form-control" name="TDS" value="<?php print $TDS; ?>"></p>
										
										<h5><label for="LOP">LOP</label><span class="error">
												<?php print $eLOP; ?></span></h5>
										<p><input type="number" class="form-control" name="LOP" value="<?php print $LOP; ?>"></p>
										
										<h5><label for="HMF">HMF</label><span class="error">
												<?php print $eHMF; ?></span></h5>
										<p><input type="number" class="form-control" name="HMF" value="<?php print $HMF; ?>"></p>
										
										<h5><label for="STAFF_CLUB">Staff_Club</label><span class="error">
												<?php print $eSTAFF_CLUB; ?></span></h5>
										<p><input type="number" class="form-control" name="STAFF_CLUB" value="<?php print $STAFF_CLUB; ?>"></p>
									
									</div>
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




						<!-- <form action="" method="post">
							<div class="row">
								<div class="col-md-6">
									<div class="left-side-form">
										<h5><label for="sname">Dept. S.No</label>
										<span class="error"><?php //print $esname; ?></span></h5>
										<p><input type="text" name="sname" value="<?php //print $sname; ?>"></p>

										<h5><label for="gname">Name of the Faculty</label><span class="error">
												<?php //print $egname; ?></span></h5>																	
										<p><input type="text" name="gname" value="<?php //print $gname; ?>"></p>

										<h5><label for="contact">Dept.</label><span class="error">
												<?php// print $econtact; ?></span></h5>
										<p><input type="text" name="contact" value="<?php //print $contact; ?>"></p>

										<h5><label for="email">DOJ</label><span class="error">
												<?php //print $eemail; ?></span></h5>
										<p><input type="text" name="email" value="<?php //print $email; ?>"></p>

										<h5><label for="address">INC</label><span class="error">
												<?php //print $eaddress; ?></span></h5>
										<p><textarea name="address"><?php //print $address; ?></textarea></p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="right-side-form">
										<h5><label for="class">Total Pay (1)</label><span class="error">
												<?php //print $eclass; ?></span></h5>
										<p><input type="text" name="class" value="<?php //print $class; ?>"></p>

										<h5><label for="shift">% of DA</label></h5>
										<p><select name="shift" id="">
												<option value="0">select</option>
												<option value="1">morning</option>
												<option value="2">evening</option>
											</select><span class="error">
												<?php //print $eshift; ?></span></p>


										<h5><label for="gender">DA Amount</label></h5>
										<input type="radio" name="gender" value="male"><span>Male</span>
										<input type="radio" name="gender" value="female"><span>Female</span>
										<input type="radio" name="gender" value="others"><span>Others</span>
										<span class="error">
											<?php //print $egender; ?></span>

										<h5><label for="blgroup">Total Pay (2)</label><span class="error">
												<?php// print $eblgroup; ?></span></h5>

										<p><input type="text" name="blgroup" value="<?php //print $blgroup; ?>"></p>

										<h5><label for="division">HRA</label></h5>
										<p><select name="division" id="">
												<option value="0">N/A</option>
												<option value="1">Science</option>
												<option value="2">Commarce</option>
												<option value="3">Arts</option>
											</select><span class="error">
												<?php// print $edivision; ?></span></p>

										<p><input type="submit" name="submit" value="Submit"></p>
									</div>
								</div>
							</div>
						</form> -->