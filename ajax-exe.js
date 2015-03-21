/**
 * @author Piotrek
 */
//Tworzę obiekt AJAX
	var ajax = createXmlHttpRequestObject();
	
	function createXmlHttpRequestObject() {
			var ajax;
			
			if(window.ActiveXObject) {
				try {
					ajax = new ActiveXObject("Microsoft.XMLHTTP");
				} catch(e) {
					ajax = false;
				}
			}
			else {
				try {
					ajax = new XMLHttpRequest();
				} catch(e) {
					ajax = false;
				}
			}
			if (!ajax) 
				alert("Nie uadło się utworzyc obiektu");
			else 
			return ajax;
	}
	
	if(ajax) {
		var zmienna = document.getElementById("html_element").value;
		var dane = "zmienna=" + zmienna;
		ajax.open("POST", "plik docelowy php", true);
		ajax.onreadystatechange = handle; 
		ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		ajax.send(dane);
	}
	//Funkcja obsługuje odpowiedź serwera w funkcji save_staff
	function handle() {
		if(ajax.readyState == 4) {
			if(ajax.status == 200) {
				try {
					document.getElementById("tbody").innerHTML = ajax.responseText; //responsText albo responseXML
				}catch(e) {
					alert(e.toString());
				}
			} else {
				alert(ajax.statusText);
			}
		}
	}