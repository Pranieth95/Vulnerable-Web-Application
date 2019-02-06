$('#claude').on('click','#revealHintUsr',function(e){
	e.preventDefault();
	$('#usrButtonHint').hide();
	var userDetails = getCookie("_usrPlayName");
	alert("Claude:"+ userDetails);
	localStorage.setItem("UserHintSQLi", userDetails);
    loadHint1_Value();
});
							            
function loadHint1_Value() {
  var urlSend = "42E6AE8EA03B/show_valueUsr.php";
  var value = localStorage.UserHintSQLi;
  var param = "UsrReveal="+value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("claude").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", urlSend+"?"+value, true);
  xhttp.send();
}

function getCookie(name) {
	var dc = document.cookie;
	var prefix = name + "=";
	var begin = dc.indexOf("; " + prefix);
	if (begin == -1) {
		begin = dc.indexOf(prefix);
		if (begin != 0) return null;
	}
	else
	{
		begin += 2;
		var end = document.cookie.indexOf(";", begin);
		if (end == -1) {
		end = dc.length;
		}
	}
	// because unescape has been deprecated, replaced with decodeURI
	//return unescape(dc.substring(begin + prefix.length, end));
	return decodeURI(dc.substring(begin + prefix.length, end));
} 