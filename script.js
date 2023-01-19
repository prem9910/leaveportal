function validateForm(){
  var full_name=document.getElementById('fname');

  var email=document.getElementById('email');

  // console.log(full_name.value);

  var valid=true;

  if (fname.value.length==0) {
    // full_name.className="wrong_input";
    fname.nextElementSibling.innerHTML="**Full Name can't be blank";
    // document.getElementById('name_error').innerHTML="Full Name can't be blank";
    valid=false;
  }

  if (email.value.length==0) {
    // full_name.className="wrong_input";
    email.nextElementSibling.innerHTML="**Email can't be blank";
    // document.getElementById('email_error').innerHTML="Email can't be blank";
    valid=false;
  }
    if (phn_no.value.length==0) {
    // full_name.className="wrong_input";
    phn_no.nextElementSibling.innerHTML="**Mobile can't be blank";
    // document.getElementById('phn_error').innerHTML="Email can't be blank";
    valid=false;
  }
    if (dgnation.value.length==0) {
    // full_name.className="wrong_input";
    dgnation.nextElementSibling.innerHTML="**Select Designation";
    // document.getElementById('phn_error').innerHTML="Email can't be blank";
    valid=false;
  }
    if (reason.value.length==0) {
    // full_name.className="wrong_input";
    reason.nextElementSibling.innerHTML="**Select Designation";
    // document.getElementById('phn_error').innerHTML="Email can't be blank";
    valid=false;
  }
      if (leave_typ.value.length==0) {
    // full_name.className="wrong_input";
    leave_typ.nextElementSibling.innerHTML="**Select Designation";
    // document.getElementById('phn_error').innerHTML="Email can't be blank";
    valid=false;
  }
 

  return valid;
}


