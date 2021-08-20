function get(id) {
  return document.getElementById(id);
}
function loadDoc() {
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "MemberProfile.php", true);
  xhr.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      get("demo").innerHTML = this.responseText;
    }
  };
  xhr.send();
}
function loadDoc2() {
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "MemberActivity.php", true);
  xhr.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      get("demo").innerHTML = this.responseText;
    }
  };
  xhr.send();
}
function loadDoc3() {
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "MemberNotice.php", true);
  xhr.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      get("demo").innerHTML = this.responseText;
    }
  };
  xhr.send();
}
function loadDoc4() {
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "MemberWorkout.php", true);
  xhr.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      get("demo").innerHTML = this.responseText;
    }
  };
  xhr.send();
}
function loadDoc5() {
  var xhr = new XMLHttpRequest();
  xhr.open("GET", "NutritionSchedule.php", true);
  xhr.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      get("demo").innerHTML = this.responseText;
    }
  };
  xhr.send();
}
