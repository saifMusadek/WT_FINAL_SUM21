var hasError = false;
function get(id) {
  return document.getElementById(id);
}

function validate() {
  refresh();
  if (get("name").value == "") {
    hasError = true;
    get("err_name").innerHTML = "*Name Req";
  } else if (get("name").value.length <= 3) {
    hasError = true;
    get("err_name").innerHTML = "*Name must be more than 3 characters";
  } else if (get("username").value == "") {
    hasError = true;
    get("err_uname").innerHTML = "*Uname Req";
  } else if (get("username").value.length <= 3) {
    hasError = true;
    get("err_uname").innerHTML = "*Must be greater than 3";
  } else if (get("password").value == "") {
    hasError = true;
    get("err_password").innerHTML = "*Pass Req";
  } else if (get("confirm_password").value == "") {
    hasError = true;
    get("err_confirm_password").innerHTML = "*Pass Req";
  } else if (get("email").value == "") {
    hasError = true;
    get("err_email").innerHTML = "*Email Req";
  } else if (get("lang").value == "") {
    hasError = true;
    get("err_lang").innerHTML = "*Lang Req";
  } else if (get("city").value == "") {
    hasError = true;
    get("err_city").innerHTML = "*City Req";
  } else if (get("state").value == "") {
    hasError = true;
    get("err_state").innerHTML = "*State Req";
  } else if (get("number").value == "") {
    hasError = true;
    get("err_number").innerHTML = "*Num Req";
  } else if (get("nid").value == "") {
    hasError = true;
    get("err_nid").innerHTML = "*Nid Req";
  } else if (get("resume").value == "") {
    hasError = true;
    get("err_resume").innerHTML = "*Resume Req";
  }
  function refresh() {
    hasError = false;
    get("err_name").innerHTML = "";
    get("err_uname").innerHTML = "";
    get("err_pass").innerHTML = "";
    get("err_confirm_pass").innerHTML = "";
    get("err_email").innerHTML = "";
    get("err_lang").innerHTML = "";
    get("err_city").innerHTML = "";
    get("err_state").innerHTML = "";
    get("err_number").innerHTML = "";
    get("err_nid").innerHTML = "";
    get("err_resume").innerHTML = "";
  }
  return !hasError;
}
