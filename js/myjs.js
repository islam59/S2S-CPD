/*START # REGISTRATION FORM VALIDATION*/
function validation(){

    var author_id = document.forms['registerForm']['author_id'].value;
    if(author_id == '') { alert('Select Community Mobilizer !'); return false; }

    var batch_id = document.forms['registerForm']['batch_id'].value; 
    if(batch_id == ''){ alert('Select Your Batch !'); return false; }

    var house_road_no = document.forms['registerForm']['house_road_no'].value;
    if(house_road_no == ''){ alert('Missing House & Road No !'); return false; }

    var slum_name = document.forms['registerForm']['slum_name'].value;
    if(slum_name == ''){ alert('Missing Slum Name !'); return false; }

    var block_line_name = document.forms['registerForm']['block_line_name'].value; 
    if(block_line_name == ''){ alert('Missing Line Name !'); return false; }

    var area_name = document.forms['registerForm']['area_name'].value; 
    if(area_name == ''){ alert('Missing Area Name !'); return false; }

    var landmark = document.forms['registerForm']['landmark'].value;
    if(landmark == ''){ alert('Missing landmark !'); return false; }

    var thana = document.forms['registerForm']['thana'].value; 
    if(thana == ''){ alert('Missing Thana !'); return false; }

    var ward = document.forms['registerForm']['ward'].value; 
    if(ward == ''){ alert('Missing Ward No. !'); return false; }

    var city_corporation = document.forms['registerForm']['city_corporation'].value; 
    if(city_corporation == ''){ alert('Missing City Corporation !'); return false; }

    var youth_name = document.forms['registerForm']['youth_name'].value;
    if(youth_name == ''){ alert('Missing Youth Name !'); return false; }

    var birthdate = document.forms['registerForm']['birthdate'].value; 
    if(birthdate == ''){ alert('Missing Birthdate !'); return false; }

    var sex = document.forms['registerForm']['sex'].value; 
    if(sex == ''){ alert('Missing Sex Information !'); return false; }


    var educational_status = document.forms['registerForm']['educational_status'].value; 
    if(educational_status == ''){ alert('Missing Educational Status !'); return false; }
    if(educational_status == 'Dropout')
    { 
		var grade_completed = document.forms['registerForm']['grade_completed'].value; 
    	if(grade_completed == ''){ alert('Missing Completed Grade !'); return false; }
	}
	elseif(educational_status == 'Continuing')
	{
	    var grade_continuing = document.forms['registerForm']['grade_continuing'].value; 
	    if(grade_continuing == ''){ alert('Missing Continuing Grade !'); return false; }
	}


    var working_status = document.forms['registerForm']['working_status'].value; 
    if(working_status == ''){ alert('Please Select a Batch !'); return false; }
    if(working_status == 'Yes')
    {
	    var work_type = document.forms['registerForm']['work_type'].value; 
	    if(work_type == ''){ alert('Missing Type of Work !'); return false; }

	    var salary = document.forms['registerForm']['salary'].value; 
	    if(salary == ''){ alert('Missing Salary !'); return false; }	    	

	    var company_address = document.forms['registerForm']['company_address'].value; 
	    if(company_address == ''){ alert('Missing Company Address !'); return false; }
    }


    var disability_type = document.forms['registerForm']['disability_type'].value; 
    if(disability_type == ''){ alert('Missing Disable Information !'); return false; }

    var mothers_name = document.forms['registerForm']['mothers_name'].value; 
    if(mothers_name == ''){ alert("Missing Mother's Name !"); return false; }

    var fathers_name = document.forms['registerForm']['fathers_name'].value; 
    if(fathers_name == ''){ alert("Missing Father's Name !"); return false; }

    var guardian_name = document.forms['registerForm']['guardian_name'].value; 
    if(guardian_name == ''){ alert("Missing Guardian's Name !"); return false; }

    var mothers_occupation = document.forms['registerForm']['mothers_occupation'].value; 
    if(mothers_occupation == ''){ alert("Missing Mother's Occupation !"); return false; }

    var fathers_occupation = document.forms['registerForm']['fathers_occupation'].value; 
    if(fathers_occupation == ''){ alert("Missing Father's Occupation !"); return false; }

    var youth_contact_number = document.forms['registerForm']['youth_contact_number'].value; 
    if(youth_contact_number == ''){ alert("Missing Youth's Contact Number !"); return false; }

    var father_contact_number = document.forms['registerForm']['father_contact_number'].value; 
    if(father_contact_number == ''){ alert("Missing Father's Contact Number !"); return false; }

    var mother_contact_number = document.forms['registerForm']['mother_contact_number'].value; 
    if(mother_contact_number == ''){ alert("Missing Guardian's Contact Number !"); return false; }

    var parmanent_village_name = document.forms['registerForm']['parmanent_village_name'].value; 
    if(parmanent_village_name == ''){ alert('Missing Parmanent Village Name!'); return false; }

    var parmanent_post_office = document.forms['registerForm']['parmanent_post_office'].value; 
    if(parmanent_post_office == ''){ alert('Missing Parmanet Post Office !'); return false; }

    var parmanent_thana = document.forms['registerForm']['parmanent_thana'].value; 
    if(parmanent_thana == ''){ alert('Missing Parmanet Thana !'); return false; }

    var parmanent_district = document.forms['registerForm']['parmanent_district'].value; 
    if(parmanent_district == ''){ alert('Missing Parmanent District !'); return false; }

    var parmanent_division = document.forms['registerForm']['parmanent_division'].value; 
    if(parmanent_division == ''){ alert('Missing Parmanent Division !'); return false; }

    var confirmation = document.forms['registerForm']['confirmation'].value; 
    if(confirmation == ''){ alert('Check & Confirm All The Information You Provided !'); return false; }

    //var profile_picture = document.forms['registerForm']['profile_picture'].value; 
    //if(profile_picture == ''){ alert('Please Select a Batch !'); return false; }

}/*END # REGISTRATION FORM VALIDATION*/

function localMessage(){
    alert('ok');
}