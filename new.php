<?php
require 'header.php';
?>
<form id="rendered-form">
  <div class="rendered-form">
    <div class="fb-text form-group field-job-title"><label for="job-title" class="fb-text-label">Job Title</label><input type="text" placeholder="i.e. Software Engineer" class="form-control" name="job-title" id="job-title"></div>
    <div class="fb-select form-group field-company-select"><label for="company-select" class="fb-select-label">Company</label><select class="form-control" name="company-select" id="company-select"><option disabled="null" selected="null">ABCompany Inc</option><option value="option-1" id="company-select-0">Option 1</option><option value="option-2" id="company-select-1">Option 2</option><option value="option-3" id="company-select-2">Option 3</option></select></div>
    <div
      class="fb-textarea form-group field-job-description"><label for="job-description" class="fb-textarea-label">Job Description</label><textarea type="textarea" class="form-control" name="job-description" id="job-description"></textarea></div>
  <div class="fb-date form-group field-application-date"><label for="application-date" class="fb-date-label">Application Date</label><input type="date" class="form-control" name="application-date" id="application-date"></div>
  <div class="fb-select form-group field-type-select"><label for="type-select" class="fb-select-label">How did you apply</label><select class="form-control" name="type-select" id="type-select"><option value="option-1" selected="true" id="type-select-0">Option 1</option><option value="option-2" id="type-select-1">Option 2</option><option value="option-3" id="type-select-2">Option 3</option></select></div>
  <div
    class="fb-select form-group field-how-select"><label for="how-select" class="fb-select-label">Where did you apply from</label><select class="form-control" name="how-select" id="how-select"><option value="option-1" selected="true" id="how-select-0">Option 1</option><option value="option-2" id="how-select-1">Option 2</option><option value="option-3" id="how-select-2">Option 3</option></select></div>
    <div
      class="fb-button form-group field-save-button"><button type="submit" class="btn btn-success" name="save-button" style="success" id="save-button">Save</button></div>
      <div class="">
        <h3 id="control-2928916">After Application</h3></div>
      <div class="fb-radio-group form-group field-results"><label for="results" class="fb-radio-group-label">Results</label>
        <div class="radio-group">
          <div class="radio-inline"><input name="results" id="results-0" value="option-1" type="radio"><label for="results-0">Option 1</label></div>
          <div class="radio-inline"><input name="results" id="results-1" value="option-2" type="radio"><label for="results-1">Option 2</label></div>
          <div class="radio-inline"><input name="results" id="results-2" value="option-3" type="radio"><label for="results-2">Option 3</label></div>
          <div class="radio-inline"><input name="results" id="results-other" class="undefined other-option" value="" type="radio"><label for="results-other">Other<input type="text" id="results-other-value" class="other-val"></label></div>
        </div>
      </div>
      <div class="fb-textarea form-group field-next-steps"><label for="next-steps" class="fb-textarea-label">Next Steps</label><textarea type="textarea" class="form-control" name="next-steps" id="next-steps"></textarea></div>
      <div class="fb-date form-group field-last-contact-date"><label for="last-contact-date" class="fb-date-label">Last Contact</label><input type="date" class="form-control" name="last-contact-date" id="last-contact-date"></div>
      <div class="fb-textarea form-group field-history"><label for="history" class="fb-textarea-label">History</label><textarea type="textarea" class="form-control" name="history" id="history"></textarea></div>
      <div class="fb-button form-group field-update-button"><button type="button" class="btn btn-info" name="update-button" style="info" id="update-button">Update</button></div>
      </div>
</form>
<?php
require 'footer.php';

 ?>
