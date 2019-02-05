$('#claude').on('click','#revealHintUsr',function(e){
	e.preventDefault();
	$('#usrButtonHint').hide();
     alert("Hi");
});
							            
function loadHint1_Value() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("claude").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "42E6AE8EA03B/show_valueUsr.php", true);
  xhttp.send();
}