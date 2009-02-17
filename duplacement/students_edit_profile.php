<?php
session_start();
include('include/config.php');
include('include/commonfunctions.php');
if (empty($_SESSION['stUser'])) {
  	header('location:signin.php');	
}

include('studentheader.php');
?>

<script type="text/javascript">
// only for demo purposes
$.validator.setDefaults({
	submitHandler: function() {
		alert("submitted!");
	}
});



$().ready(function() {
// validate the comment form when it is submitted
$("#signupForm").validate();

var template = jQuery.format($("#template").val());
function addRow() {
	$(template(i++)).appendTo("#orderitems tbody");
}

var i = 1;
// start with one row
addRow();
// add more rows on click
$("#add").click(addRow);


function removerow(id) {
//$("#st_ex_duration_1").remove();
$(id).remove();
//$("#st_ex_duration_1").css("display") ="none";

}

$("#remove", "st_ex_duration_1").click(removerow);

});


</script>

<style>

em.error { color: black; }
#warning { display: block; }

#signupForm .error {
	width: auto;
	display:block;
	color:#FF0000;
	size:10px;
}
/*select.error {
	border: 1px dotted navy;
}*/

</style>

        <div align="left" style="text-align:justify; float:left;">
          <div class="nav">
          <div class="navbar"> 
            <img src="images/nav-left-bar.jpg" alt="leftbar" style="float:left;" /> 
            <img src="images/nav-img-studs.jpg" alt="" style="float:left; padding-left:4px; padding-top:8px;"/> 
            <img src="images/nav-right-bar.jpg" alt="rightbar" style="float:right;" />
          </div>
          
          <div class="navbarB">
          <?php include("studentmenu.php"); ?>
          </div>

          <div class="navmain">
            <div class="navmainbar"> 
            <img src="images/nav-left-bar.jpg" style="float:left" /> 
            <img src="images/nav-img-editpro.jpg" alt="my_profile" style="float:left; padding-left:4px; padding-top:8px;"/> 
            <img src="images/nav-right-bar.jpg" style="float:right" /> </div>
            <div class="blue" style="height:30px; background-image:url(images/nav-bar-table1.jpg); padding-left:10px; padding-right:10px; width:580px; float:left;"></div>
            <div style="background-image:url(images/nav-grads-bar.jpg); background-repeat:repeat-x;  background-repeat:repeat-x; 
            padding-left:15px; padding-bottom:5px; padding-right:10px; padding-top:10px; width:575px; float:left;">
			
	

            <form name="signupForm" id="signupForm" action="" method="post" enctype="multipart/form-data" class="form">
            <table width="560" border="0" cellspacing="0" cellpadding="0" >
            <tr>
            <td width="150" height="25" align="left" valign="top"><span class="star">* </span>Key Skills</td>
            <td width="20" height="25" align="center" valign="top">:</td>
            <td width="0" height="25" align="left" valign="top"><input name="st_keyskills" type="text" class="required form" minlength="2" " id="st_keyskills"  
			size="27"/></td>
            <td width="70" align="right" valign="top"></td>
            </tr>
            <tr>
            <td width="150" height="25" align="left" valign="top"><span class="star">* </span>Resume Headline</td>
            <td width="20" height="25" align="center" valign="top">:</td>
            <td width="0" height="25" align="left" valign="top"><input name="st_resumeheadline" type="text" class="required form" id="st_resumeheadline" size="27" /></td>
            <td width="70" align="right" valign="top"></td>
            </tr>
            <tr>
            <td width="150" height="15" align="left" valign="top"></td>
            <td height="15" align="center" valign="top"></td>
            <td width="0" height="15" align="left" valign="top">search: I have experience....</td>
            <td width="70" align="right" valign="top"></td>
            </tr>
            <tr>
            <td width="150" height="10" align="left" valign="top"></td>
            <td height="10" align="center" valign="top"></td>
            <td width="0" height="10" align="left" valign="top"></td>
            <td width="70" align="right" valign="top"></td>
            </tr>
           <!-- <tr>
            <td width="150" height="25" align="left" valign="top"><span class="star">* </span><strong>Experience 01</strong></td>
            <td width="20" height="25" align="center" valign="top"></td>
            <td width="0" height="25" align="left" valign="top"></td>
            <td width="70" align="right" valign="top"></td>
            </tr>
            <tr>
            <td width="150" height="25" align="left" valign="top"><span class="star">* </span>Duration</td>
            <td width="20" height="25" align="center" valign="top">:</td>
            <td width="0" height="25" align="left" valign="top"><input name="name" type="text" class="form" id="user_name" size="27" />            </td>
            <td width="70" align="right" valign="top"></td>
            </tr>
            <tr>
            <td width="150" height="25" align="left" valign="top"><span class="star">*</span> Function</td>
            <td width="20" height="25" align="center" valign="top">:</td>
            <td width="0" height="25" align="left" valign="top"><input name="name" type="text" class="form" id="user_name" size="27" />            </td>
            <td width="70" align="right" valign="top"></td>
            </tr>

            <tr>
            <td width="150" height="25" align="left" valign="top"><span class="star">* </span>Industry</td>
            <td width="20" height="25" align="center" valign="top">:</td>
            <td width="0" height="25" align="left" valign="top"><select name="industry_{0}" class="form" id="ind" style="width:175px;">
                    <option value="0" selected="selected" >-- Select Industry --</option>
                    <?php //echo $options = ListOptions("dup_industry", "industryid", "industryname"); ?>
                  </select></td>
              <td width="70" align="right" valign="top"></td>
              </tr>
              <tr>
              <td width="150" height="25" align="left" valign="top"><span class="star">* </span>Remuneration</td>
              <td width="20" height="25" align="center" valign="top">:</td>
              <td width="0" height="25" align="left" valign="top"><select name="salary_{0}" class="form" id="re" style="width:175px;">
                <option value="0" selected="selected" >-- Select Salary --</option>
                <?php //echo $options = ListOptions("dup_salary", "salaryid", "salarytext"); ?>
              </select></td>
            <td width="70" align="right" valign="top"></td>
            </tr>
            <tr>
            <td width="150" height="10" align="left" valign="top"></td>
            <td height="10" align="center" valign="top"></td>
            <td width="0" height="10" align="left" valign="top"></td>
            <td width="70" align="right" valign="top"></td>
            </tr>
            <tr>
            <td width="150" height="25" align="left" valign="top"><span class="star">* </span><strong>Experience 02</strong></td>
            <td width="20" height="25" align="center" valign="top"></td>
            <td width="0" height="25" align="left" valign="top"></td>
            <td width="70" align="right" valign="top"></td>
            </tr>
            <tr>
            <td width="150" height="25" align="left" valign="top"><span class="star">* </span>Duration</td>
            <td width="20" height="25" align="center" valign="top">:</td>
            <td width="0" height="25" align="left" valign="top"><input name="name" type="text" class="form" id="user_name" size="27" />            </td>
            <td width="70" align="right" valign="top"></td>
            </tr>
            <tr>
            <td width="150" height="25" align="left" valign="top"><span class="star">*</span> Function</td>
            <td width="20" height="25" align="center" valign="top">:</td>
            <td width="0" height="25" align="left" valign="top"><input name="name" type="text" class="form" id="user_name" size="27" />            </td>
            <td width="70" align="right" valign="top"></td>
            </tr>

            <tr>
            <td width="150" height="25" align="left" valign="top"><span class="star">* </span>Industry</td>
            <td width="20" height="25" align="center" valign="top">:</td>
            <td width="0" height="25" align="left" valign="top"><select name="industry" class="form" id="ind" style="width:175px;">
                    <option value="0" selected="selected" >-- Select Industry --</option>
                    <option value="Accounting/Taxation" >Accounting/ Taxation</option>
                    <option value="Advertising/PR/Events Management" >Advertising/ PR/ Events Management</option>
                    <option value="Architecture/Interior Design" >Architecture/ Interior Design</option>
                    <option value="Auto" >Auto</option>
                    <option value="Banking/Broking/Financial Services" >Banking/ Broking/ Financial Services</option>
                    <option value="BPO/ ITeS/KPO/Transcription" >BPO/ ITeS/KPO/ Transcription</option>
                    <option value="Consumer Durables" >Consumer Durables</option>
                    <option value="Consulting" >Consulting</option>
                    <option value="Defense/Government" >Defense/ Government</option>
                    <option value="Education/Teaching/Training" >Education/ Teaching/ Training</option>
                    <option value="Export/Import" >Export/ Import</option>
                    <option value="Fashion/Garments/Merchandising" >Fashion/ Garments/ Merchandising</option>
                    <option value="FMCG/Foods/Beverage" >FMCG/ Foods/ Beverage</option>
                    <option value="Hotels/Restaurants/Travel/Airlines" >Hotels/ Restaurants/ Travel/Airlines</option>
                    <option value="Healthcare/Medical/Hospital" >Healthcare/ Medical/Hospital</option>
                    <option value="Industrial Products/Machinery" >Industrial Products/ Machinery</option>
                    <option value="Insurance" >Insurance</option>
                    <option value="IT-Hardware" >IT-Hardware</option>
                    <option value="IT-Software" >IT-Software</option>
                    <option value="Legal" >Legal</option>
                    <option value="Media/Entertainment" >Media/ Entertainment</option>
                    <option value="NGO/Social Service" >NGO/Social Service</option>
                    <option value="Pharma/Biotech/Clinical Research" >Pharma/ Biotech/ Clinical Research</option>
                    <option value="Real Estate/Property" >Real Estate/ Property</option>
                    <option value="Recruitment/Employment" >Recruitment/ Employment</option>
                    <option value="Retail" >Retail</option>
                    <option value="Telecom/ISP" >Telecom/ ISP</option>
                    <option value="other" >Others</option>
                  </select></td>
              <td width="70" align="right" valign="top"></td>
              </tr>
              <tr>
              <td width="150" height="25" align="left" valign="top"><span class="star">* </span>Remuneration</td>
              <td width="20" height="25" align="center" valign="top">:</td>
              <td width="0" height="25" align="left" valign="top"><select name="re2" class="form" id="re2" style="width:175px;">
                <option value="0" selected="selected" >-- Select Salary --</option>
                <option value="1" >below 1.2 lac</option>
                <option value="2" >1.2 lac - 2.4 lacs</option>
                <option value="3" >2.4 lacs - 4.8 lacs</option>
                <option value="4" >5.0 lacs - 6.0 lacs</option>
                <option value="5" >6.0 lacs - 7.0 lacs</option>
                <option value="6" >7.0 lacs - 8.0 lacs</option>
                <option value="7" >above 8 lacs</option>
              </select></td>
              <td width="70" align="right" valign="top"><a href="#" class="link">..add</a></td>
              </tr>
              <tr>
              <td width="150" height="10" align="left" valign="top"></td>
              <td height="10" align="center" valign="top"></td>
              <td width="0" height="10" align="left" valign="top"></td>
              <td width="70" align="right" valign="top"></td>
              </tr>
            <tr>
            <td width="150" height="25" align="left" valign="top"><span class="star">* </span><strong>Experience 03</strong></td>
            <td width="20" height="25" align="center" valign="top"></td>
            <td width="0" height="25" align="left" valign="top"></td>
            <td width="70" align="right" valign="top"></td>
            </tr>
            <tr>
            <td width="150" height="25" align="left" valign="top"><span class="star">* </span>Duration</td>
            <td width="20" height="25" align="center" valign="top">:</td>
            <td width="0" height="25" align="left" valign="top"><input name="name" type="text" class="form" id="user_name" size="27" />            </td>
            <td width="70" align="right" valign="top"></td>
            </tr>
            <tr>
            <td width="150" height="25" align="left" valign="top"><span class="star">*</span> Function</td>
            <td width="20" height="25" align="center" valign="top">:</td>
            <td width="0" height="25" align="left" valign="top"><input name="name" type="text" class="form" id="user_name" size="27" />            </td>
            <td width="70" align="right" valign="top"></td>
            </tr>

            <tr>
            <td width="150" height="25" align="left" valign="top"><span class="star">* </span>Industry</td>
            <td width="20" height="25" align="center" valign="top">:</td>
            <td width="0" height="25" align="left" valign="top"><select name="industry" class="form" id="ind" style="width:175px;">
                    <option value="0" selected="selected" >-- Select Industry --</option>
                    <option value="Accounting/Taxation" >Accounting/ Taxation</option>
                    <option value="Advertising/PR/Events Management" >Advertising/ PR/ Events Management</option>
                    <option value="Architecture/Interior Design" >Architecture/ Interior Design</option>
                    <option value="Auto" >Auto</option>
                    <option value="Banking/Broking/Financial Services" >Banking/ Broking/ Financial Services</option>
                    <option value="BPO/ ITeS/KPO/Transcription" >BPO/ ITeS/KPO/ Transcription</option>
                    <option value="Consumer Durables" >Consumer Durables</option>
                    <option value="Consulting" >Consulting</option>
                    <option value="Defense/Government" >Defense/ Government</option>
                    <option value="Education/Teaching/Training" >Education/ Teaching/ Training</option>
                    <option value="Export/Import" >Export/ Import</option>
                    <option value="Fashion/Garments/Merchandising" >Fashion/ Garments/ Merchandising</option>
                    <option value="FMCG/Foods/Beverage" >FMCG/ Foods/ Beverage</option>
                    <option value="Hotels/Restaurants/Travel/Airlines" >Hotels/ Restaurants/ Travel/Airlines</option>
                    <option value="Healthcare/Medical/Hospital" >Healthcare/ Medical/Hospital</option>
                    <option value="Industrial Products/Machinery" >Industrial Products/ Machinery</option>
                    <option value="Insurance" >Insurance</option>
                    <option value="IT-Hardware" >IT-Hardware</option>
                    <option value="IT-Software" >IT-Software</option>
                    <option value="Legal" >Legal</option>
                    <option value="Media/Entertainment" >Media/ Entertainment</option>
                    <option value="NGO/Social Service" >NGO/Social Service</option>
                    <option value="Pharma/Biotech/Clinical Research" >Pharma/ Biotech/ Clinical Research</option>
                    <option value="Real Estate/Property" >Real Estate/ Property</option>
                    <option value="Recruitment/Employment" >Recruitment/ Employment</option>
                    <option value="Retail" >Retail</option>
                    <option value="Telecom/ISP" >Telecom/ ISP</option>
                    <option value="other" >Others</option>
                  </select></td>
              <td width="70" align="right" valign="top"></td>
            </tr>
              <tr>
              <td width="150" height="25" align="left" valign="top"><span class="star">* </span>Remuneration</td>
              <td width="20" height="25" align="center" valign="top">:</td>
              <td width="0" height="25" align="left" valign="top"><select name="re3" class="form" id="re3" style="width:175px;">
                <option value="0" selected="selected" >-- Select Salary --</option>
                <option value="1" >below 1.2 lac</option>
                <option value="2" >1.2 lac - 2.4 lacs</option>
                <option value="3" >2.4 lacs - 4.8 lacs</option>
                <option value="4" >5.0 lacs - 6.0 lacs</option>
                <option value="5" >6.0 lacs - 7.0 lacs</option>
                <option value="6" >7.0 lacs - 8.0 lacs</option>
                <option value="7" >above 8 lacs</option>
              </select></td>
              <td width="70" align="right" valign="top"><a href="#" class="link">..remove</a></td>
              </tr> -->
			  
			  
			  <tr>
			  	<td colspan="4"><table id="orderitems"><tbody></tbody></table></td>
			  </tr>
			  <tr>
			  	<td  align="right" colspan="4" id="add"><a href="#_{0}">add more</a></td>
			  </tr>
              <tr>
              <td width="150" height="10" align="left" valign="top"></td>
              <td height="10" align="center" valign="top"></td>
              <td width="0" height="10" align="left" valign="top"></td>
              <td width="70" align="right" valign="top" > </td>
              </tr>
              <tr>
              <td width="150" height="10" align="left" valign="top"></td>
              <td height="10" align="center" valign="top"></td>
              <td width="0" height="10" align="left" valign="top"></td>
              <td width="70" align="right" valign="top"></td>
              </tr>

              <tr>
              <td width="150" height="25" align="left" valign="top"><strong>Upload Resume</strong></td>
              <td width="20" height="25" align="center" valign="top">:</td>
              <td width="0" height="25" align="left" valign="top"><input type="image" src="images/du-btn-upload.jpg" name="submit2" id="submit2" value="Submit" /></td>
              <td width="70" align="right" valign="top"></td>
              </tr>
              <tr>
              <td width="150" height="25" align="left" valign="top">Copy or paste resume</td>
              <td width="20" height="25" align="center" valign="top">:</td>
              <td width="0" height="25" align="left" valign="top"><textarea name="st_textresume" cols="21" rows="5" class="form" id="description"></textarea></td>
              <td width="70" align="right" valign="top"></td>
              </tr>
              <tr>
              <td width="150" height="10" align="left" valign="top"></td>
              <td height="10" align="center" valign="top"></td>
              <td width="0" height="10" align="left" valign="top"></td>
              <td width="70" align="right" valign="top"></td>
              </tr>
              <tr>
              <td width="150" height="35" align="left" valign="top"></td>
              <td width="20" height="35" align="center" valign="top"></td>
              <td width="0" height="35" align="left" valign="top"><input type="image" src="images/du-btn-submit.jpg" name="submit" id="submit" value="Submit" /></td>
              <td width="70" align="right" valign="top"></td>
              </tr>
              </table>
			  </form>
              <br />
              <br />
              <br />
              <br />
              <br />
              <br />
              <br />
              <br />
              <br />
              <br />
              <br />
              <br />
            </div>
          </div>
        </div>
<textarea style="display:none; padding-left:inherit" id="template">
<tr>
            <td width="150" height="25" align="left" valign="top" id="#_{0}"><span class="star">* </span><strong>Experience {0}</strong></td>
            <td width="20" height="25" align="center" valign="top"></td>
            <td width="0" height="25" align="left" valign="top"></td>
            <td width="70" align="right" valign="top"></td>
            </tr>
            <tr>
            <td width="150" height="25" align="left" valign="top"><span class="star">* </span>Duration</td>
            <td width="20" height="25" align="center" valign="top">:</td>
            <td width="0" height="25" align="left" valign="top"><input name="st_ex_duration_{0}" type="text" class="required form" id="st_ex_duration_{0}" size="27" />            </td>
            <td width="70" align="right" valign="top"></td>
            </tr>
            <tr>
            <td width="150" height="25" align="left" valign="top"><span class="star">*</span> Function</td>
            <td width="20" height="25" align="center" valign="top">:</td>
            <td width="0" height="25" align="left" valign="top"><input name="st_ex_function_{0}" type="text" class="required form" id="st_ex_function_{0}" size="27" />            </td>
            <td width="70" align="right" valign="top"></td>
            </tr>

           <tr>
            <td width="150" height="25" align="left" valign="top"><span class="star">* </span>Industry</td>
            <td width="20" height="25" align="center" valign="top">:</td>
            <td width="0" height="25" align="left" valign="top">
			<select name="st_ex_industry_{0}" class="required form" id="st_ex_industry_{0}" style="width:175px;">
                    <option value="" selected="selected" >-- Select Industry --</option>
                    <?php echo $options = ListOptions("dup_industry", "industryid", "industryname"); ?>
                  </select></td>
              <td width="70" align="right" valign="top"></td>
              </tr>
              <tr>
              <td width="150" height="25" align="left" valign="top"><span class="star">* </span>Remuneration</td>
              <td width="20" height="25" align="center" valign="top">:</td>
              <td width="0" height="25" align="left" valign="top">
			  <select name="st_ex_salary_{0}"  id="st_ex_salary_{0}" class="required form" style="width:175px;">
                <option value="" selected="selected" >-- Select Salary --</option>
                <?php //echo $options = ListOptions("dup_salary", "salaryid", "salarytext"); ?>
              </select></td>
            <td width="70" align="right" valign="top"><a href="#_{0}" id="remove" >Remove</a> </td>
            </tr>
</textarea>

  	  <?php include("footer.php"); ?>