let countries = ["Kazakhstan","Russia","England","France"];
let cities_by_country = {"Kazakhstan":["Almaty","Astana","Karagandy"],"Russia":["Moscow","Saint-Petersburg","Kazan"],"England":["London","Manchester","Liverpool"],"France":["Paris","Lyon","Marseille"]};

let con = document.getElementById('countries');
for (var i = 0; i < countries.length; i++) {
	var y = document.createElement("option");
	y.innerHTML = countries[i];
	y.value = countries[i];
	con.appendChild(y);
}

