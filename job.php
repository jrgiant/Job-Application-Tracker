<?php
$page_title = "new";
require 'header.php';
parse_str($_SERVER["QUERY_STRING"], $query_string);
require_once 'db/db.php';
$db = new db();
if (isset($_POST['job-title']) && !empty($_POST['job-title'])) {
    //check if job exists
    if (isset($query_string['jobID'])) {
        //update Job
    }
    //does not exist
    else {
            //create new job
        }

    }
    ?>
	    <div class="container">
	        <form id="application-form">
	            <div class="row">
	                <div class="col-md-6">

	                    <div class="rendered-form">
	                        <div class="">
	                            <h3>Job Application</h3></div>
	                        <div class="form-group field-job-title">
	                            <label for="job-title" class="label">Job Title</label>
	                            <input type="text" placeholder="i.e. Software Engineer" class="form-control" name="job-title" id="job-title">
	                        </div>
	                        <div class="form-group field-job-description">
	                            <label for="job-description" class="label">Job Description</label>
	                            <textarea type="textarea" class="form-control" name="job-description" id="job-description"></textarea>
	                        </div>
	                        <div class="form-group field-application-date">
	                            <label for="application-date" class="label">Application Date</label>
	                            <input type="date" class="form-control" name="application-date" id="application-date">
	                        </div>
	                        <div class="form-group field-type-select">
	                            <label for="type-select" class="label">How did you apply</label>
	                            <select class="form-control" name="type-select" id="type-select">
	                                <?php
                                        $methods = $db->getMethods();
                                        foreach ($methods as $method) {
                                            echo "<option value=\"$method[id]\"".($method['isDefault']?'Selected="True"':'').">$method[name]</option'>";
                                        }
                                    ?>
	                            </select>
	                        </div>
	                        <div class="form-group field-how-select">
	                            <label for="how-select" class="label">Where did you apply from</label>
	                            <select class="form-control" name="how-select" id="how-select">
	                                <?php
                                        $types = $db->getTypes();
                                        foreach ($types as $type) {
                                            echo "<option value=\"$type[id]\"".($type['isDefault']?'Selected="True"':'').">$type[name]</option'>";
                                        }
                                    ?>
	                            </select>
	                        </div>

	                    </div><!--/.rendered-form-->
	                </div><!--/.col-md-6-->
	                                        <div class="col-md-6 company-form">

	                            <div class="">
	                                <h1 id="control-5425042">Company Information</h1>
	                            </div>
	                            <div class="form-group field-comp-name">
	                                <label for="comp-name" class="label">Company Name</label>
	                                <input type="text" class="form-control" name="comp-name" id="comp-name">
	                            </div>
	                            <ul id="select-company-name"></ul>
	                            <div class="form-group field-comp-address">
	                                <label for="comp-address" class="label">Company Address</label>
	                                <textarea type="textarea" class="form-control" name="comp-address" id="comp-address"></textarea>
	                            </div>
	                            <div class="form-group field-comp-phone">
	                                <label for="comp-phone" class="label">Company Phone</label>
	                                <input type="text" class="form-control" name="comp-phone" id="comp-phone">
	                            </div>
	                            <div class="form-group field-comp-poc-name">
	                                <label for="comp-poc-name" class="label">POC Name</label>
	                                <input type="text" class="form-control" name="comp-poc-name" id="comp-poc-name">
	                            </div>
	                            <div class="form-group field-comp-poc-email">
	                                <label for="comp-poc-email" class="label">POC Email</label>
	                                <input type="text" class="form-control" name="comp-poc-email" id="comp-poc-email">
	                            </div>
	                            <div class="group form-group field-is-recruiter">
	                                <label for="is-recruiter" class="group-label">
	                                    <div>Check the block if this is a recruitment company</div>
	                                </label>
	                                <div class="checkbox-group">
	                                    <div class="checkbox-inline">
	                                        <label for="is-recruiter-0" class="kc-toggle">
	                                            <input name="is-recruiter[]" id="is-recruiter-0" value="option-1" type="checkbox"><span></span>Option 1</label>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="form-group field-select-recruit-or-jb">
	                                <label for="select-recruit-or-jb" class="label">Select recruiter representative or job board (if applicable)</label>
	                                <select class="form-control" name="select-recruit-or-jb" id="select-recruit-or-jb">
	                                    <option value="-1" selected="true" id="select-recruit-or-jb-0">None</option>
                                        <?php 
                                            $companies = $db->getAllCompanyNames(true);
                                            foreach ($companies as $comp) {
                                                echo "<option value=\"$comp[id]\">$comp[name]</option>";
                                            }

                                        ?>
	                                </select>
	                            </div>
	                        </div><!--/.company-from.col-md-6-->
	                <?php if (isset($query_string["jobID"])): ?>
	                    <div class="col-md-6">
	                        <div class="">
	                            <h3>After Application</h3></div>
	                        <div class="group form-group field-results">
	                            <label for="results" class="group-label">Results</label>
	                            <div class="radio-group">
	                                <div class="radio-inline">
	                                    <input name="results" id="results-0" value="option-1" type="radio">
	                                    <label for="results-0">Option 1</label>
	                                </div>
	                                <div class="radio-inline">
	                                    <input name="results" id="results-1" value="option-2" type="radio">
	                                    <label for="results-1">Option 2</label>
	                                </div>
	                                <div class="radio-inline">
	                                    <input name="results" id="results-2" value="option-3" type="radio">
	                                    <label for="results-2">Option 3</label>
	                                </div>
	                                <div class="radio-inline">
	                                    <input name="results" id="results-other" class="undefined other-option" value="" type="radio">
	                                    <label for="results-other">Other
	                                        <input type="text" id="results-other-value" class="other-val">
	                                    </label>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="form-group field-next-steps">
	                            <label for="next-steps" class="label">Next Steps</label>
	                            <textarea type="textarea" class="form-control" name="next-steps" id="next-steps"></textarea>
	                        </div>
	                        <div class="form-group field-last-contact-date">
	                            <label for="last-contact-date" class="label">Last Contact</label>
	                            <input type="date" class="form-control" name="last-contact-date" id="last-contact-date">
	                        </div>
	                        <div class="form-group field-history">
	                            <label for="history" class="label">History</label>
	                            <textarea type="textarea" class="form-control" name="history" id="history"></textarea>
	                        </div>

	                    </div>
	                    <?php endif;?>

            </div><!--/.row-->
            <div class="form-group field-save-button">
                <button type="submit" class="btn btn-success btn-large" name="save-button" style="success" id="save-button">Save</button>
            </div>
        </form>
    </div>
    <!--/.container-->

    <script>
        // let company_select = document.getElementById('company-select');
        // company_select.addEventListener('change', function(e) {
        //     let selected_index = company_select.selectedIndex;

        //     if (/new/i.test(company_select.options[selected_index].value)) {
        //         let comp = document.querySelector('.company-form');
        //         if (comp) comp.style.display = "block";
        //     }

        // });
    </script>
    <?php
$companies = $db->getAllCompanyNames();
if ($companies): ?>
<script>
    const allCompInfo = {
    <?php
//for each company in companies create a json object
$print = "";
foreach ($companies as $comp) {
    $print .= "'$comp[name]' : {'id' : '$comp[id]', 'address' : '$comp[address]', 'phone' : '$comp[phone]', 'poc_email' : '$comp[poc_email]', 'poc_name' : '$comp[poc_name]'},";
} // end of forEach;
echo rtrim($print, ",");

?>
    }
    const compName = document.getElementById('comp-name');
    //comp-address, comp-phone, comp-poc-name, comp-poc-email, is-recruiter-0, select-recruit-or-jb
let populateCompNameUl = true;
compName.addEventListener('keyup', function(e) {
  if (!populateCompNameUl || e.target.value.length < 3) return false;
  const regex = new RegExp(e.target.value, 'i');
  const compNameArray = Object.keys(allCompInfo);
  let foundArray = '';
  compNameArray.forEach((el, ind)=>{

    if (el.match(regex)) foundArray += `<li>${el}</li>`;
  });
  let select_company_name = document.getElementById('select-company-name');
  if (select_company_name){
    select_company_name.innerHTML = foundArray;
    document.querySelectorAll('#select-company-name li').forEach((item,index)=> item.addEventListener('click',(e)=>{
      compName.value = e.target.innerText;

      select_company_name.innerHTML = '';
    }))
  }
});

</script>
    <?php
else:echo 'error connecting to database';
endif; //companies?

require 'footer.php';

?>