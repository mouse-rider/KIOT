<div id="padding">
<div class="section-title">
    <h3>Staff list</h3>
</div>

        <?php 

        if(isset($_GET['did']))
        {
        delete();
        print '<h6 class= "successMessage">staff Deleted.</h6>';
        }
				
				include('conn.php');
                //$cn = mysqli_connect("localhost", "root", "", "kiot");
				$sql = "select * from salary_report";
				
				$table = mysqli_query($cn, $sql);
				
				
				print '<table>';
				print '<tr><th>S.No.</th><th>Dept. S.No</th><th>Name of the Faculty</th><th>Dept.</th><th>Desg.</th><th>DOJ</th><th>Account No.</th><th>INC</th><th>Total Pay (1)</th><th>% of DA</th><th>DA Amount</th><th>DTotal Pay (2)</th><th>HRA</th><th>EPF_PAY</th><th>PF_MGT</th><th>Allow</th><th>Others</th><th>EPF_PF</th><th>CTC</th><th>GE</th><th>EPF</th><th>VEPF</th><th>TDS</th><th>LOP(days)</th><th>LOP(amount)</th><th>HMP</th><th>ESI</th><th>STAFF CLUB</th><th>Total Deduction</th><th>NET Salary</th></tr>';
				
				while($row = mysqli_fetch_assoc($table))
				{
					print '<tr>';
					print '<td>'.htmlentities($row["id"]).'</td>';
					print '<td>'.htmlentities($row["Dept_S_No"]).'</td>';
					print '<td>'.htmlentities($row["Name_of_the_Faculty"]).'</td>';
					print '<td>'.htmlentities($row["Dept"]).'</td>';
					print '<td>'.htmlentities($row["Desg"]).'</td>';
					print '<td>'.htmlentities($row["DOJ"]).'</td>';
					print '<td>'.htmlentities($row["Account_No"]).'</td>';
					print '<td>'.htmlentities($row["INC"]).'</td>';
					print '<td>'.htmlentities($row["Total_Pay_1"]).'</td>';
					print '<td>'.htmlentities($row["Percentage_of_DA"]).'%</td>';
					//DA Amount= totalpay1 * %of DA
					print '<td>'.htmlentities($row["Total_Pay_1"]*$row["Percentage_of_DA"]/100).'</td>';
					//Totalpay2 = DAamount+totalpay1
					print '<td>'.htmlentities($row["Total_Pay_1"]*$row["Percentage_of_DA"]/100+$row["Total_Pay_1"]).'</td>';
					print '<td>'.htmlentities($row["HRA"]).'</td>';
					print '<td>'.htmlentities($row["EPF_PAY"]).'</td>';
					//PF_MGT=EPF_Pay * 12/100
					print '<td>'.htmlentities($row["EPF_PAY"]*12/100).'</td>';
					print '<td>'.htmlentities($row["Allow"]).'</td>';
					print '<td>'.htmlentities($row["Others"]).'</td>';
					//EPF_PF=EPF_Pay*1.15/100
					print '<td>'.htmlentities(round($row["EPF_PAY"]*1.15/100)).'</td>';
					//CTC=Total_Pay_1+DA amount+HRA+PF_MGT+Othes+EPF_PF
					print '<td>'.htmlentities($row["Total_Pay_1"]+$row["Total_Pay_1"]*$row["Percentage_of_DA"]/100+$row["HRA"]+$row["EPF_PAY"]*12/100+$row["Others"]+round($row["EPF_PAY"]*1.15/100)).'</td>';
					//GE=Totalpay1+DAamount+other+HRA
					print '<td>'.htmlentities($row["Total_Pay_1"]+$row["Total_Pay_1"]*$row["Percentage_of_DA"]/100+$row["Others"]+$row["HRA"]).'</td>';
					//EPF=EPF_PAY*12/100
					print '<td>'.htmlentities($row["EPF_PAY"]*12/100).'</td>';
					
					print '<td>'.htmlentities($row["VEPF"]).'</td>';
					print '<td>'.htmlentities($row["TDS"]).'</td>';
					print '<td>'.htmlentities($row["LOP"]).'</td>';
					//LOP amt for current month day calculation
					$month = date("m");
					$year = date("y");
					$d=cal_days_in_month(CAL_GREGORIAN,$month,$year);
					//echo "There was $d days in ".$month."/".$year;
					// LOP amt = NET salary / no. of days * Absent days 
					print '<td>'.htmlentities(round((($row["Total_Pay_1"]+$row["Total_Pay_1"]*$row["Percentage_of_DA"]/100+$row["Others"]+$row["HRA"])-($row["EPF_PAY"]*12/100+$row["TDS"]+$row["VEPF"]))/$d)*$row["LOP"]).'</td>';
					print '<td>'.htmlentities($row["HMF"]).'</td>';
					// ESI=GE*0.75%
					print '<td>'.htmlentities(($row["Total_Pay_1"]+$row["Total_Pay_1"]*$row["Percentage_of_DA"]/100+$row["Others"]+$row["HRA"])*0.75/100).'</td>';
					
					print '<td>'.htmlentities($row["STAFF_CLUB"]).'</td>';
					// total-deduction=EPF+TDS+VEPF+LOP+ESI+STAFF_CLUB
					print '<td>'.htmlentities($row["EPF_PAY"]*12/100+$row["TDS"]+$row["VEPF"]).'</td>';//include LOP+STAFF_CLUB
					// NET SALARY = GE-TOTAL_deduction
					//print '<td>'.htmlentities($row["Total_Pay_1"]+$row["Total_Pay_1"]*$row["Percentage_of_DA"]/100+$row["Others"]+$row["HRA"]-$row["EPF_PAY"]*12/100+$row["TDS"]+$row["VEPF"]).'</td>';
					print '<td>'.htmlentities((($row["Total_Pay_1"]+$row["Total_Pay_1"]*$row["Percentage_of_DA"]/100+$row["Others"]+$row["HRA"])-($row["EPF_PAY"]*12/100+$row["TDS"]+$row["VEPF"]))-round((($row["Total_Pay_1"]+$row["Total_Pay_1"]*$row["Percentage_of_DA"]/100+$row["Others"]+$row["HRA"])-($row["EPF_PAY"]*12/100+$row["TDS"]+$row["VEPF"]))/$d)*$row["LOP"]).'</td>';

					print '<td> <a class= "action-e" href= "?a=edit&eid='.$row["id"].'"><i class="fa fa-wrench" title="Update"></i></a>
					<a class= "action-d" href= "?a='.$_GET['a'].'&did='.$row['id'].'"><i class="fa fa-trash" title="Delete"></i></a></td>';
					print '</tr>';
				}
				
				// $cnt++;
				// // Genrating Execel  filess
				// header("Content-type: application/octet-stream");
				// header("Content-Disposition: attachment; filename=".$filename."-Report.xls");
				// header("Pragma: no-cache");
				// header("Expires: 0");
				
				// print '</table>';
				
				

    function delete()
        {
            $cn = mysqli_connect("localhost", "root", "", "kiot");
            $sql = "delete from salary_report where id = ".$_GET['did'];
            mysqli_query($cn, $sql);
        }
	
    ?>

		<!-- <div class="btn">
			<form action="" method="post">
				<button type="submit" id="btnExport" name='export'
					value="Export to Excel" class="btn btn-info">Export to Excel</button>
			</form>
		</div> -->
<!-- <?php
// $cnt++;
// // Genrating Execel  filess
// header("Content-type: application/octet-stream");
// header("Content-Disposition: attachment; filename=".$filename."-Report.xls");
// header("Pragma: no-cache");
// header("Expires: 0");
// } ?>
</table> -->
     
</div>
