$('#claude').on('click','#revealHintUsr',function(e){
	e.preventDefault();
	$('#usrButtonHint').hide();
	var userDetails = getCookie("_usrPlayName");
	//alert("Claude:"+ userDetails);
	var d = new Date();
	var storeItem = userDetails +"ViewedAt:"+d.getFullYear()+"/"+d.getMonth()+"/"+d.getDate()+" "+d.getHours()+":"+d.getMinutes()+":"+d.getSeconds();
	localStorage.setItem("SecurityMissConfigD", storeItem);
  loadHint1_Value();
});
							            
function loadHint1_Value() {
  var urlSend = "42E6AE8EA03B/1277AC2F7B5F/show_valueUsr.php?";
  var value = localStorage.getItem("SecurityMissConfigD");
  var uri = value.split(";")
  var param = "UsrReveal="+(uri[0]||'none');
  var sentURI = urlSend+param+"|A31E065F5EEC59DFB22EF1C20B83D917202B9A9C592059178183D884316A51AE";
  //alert(sentURI);
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("claude").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", sentURI, true);
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