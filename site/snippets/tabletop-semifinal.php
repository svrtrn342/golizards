<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/lodash.js/0.10.0/lodash.min.js"></script>

<script type="text/javascript">
// function sortPuntos(a,b) {
//   if (a[1] < b[1])
//     return 1;
//   if (a[1] > b[1])
//     return -1;
//   return 0;
// }

var googledata={};
var public_spreadsheet_url="https://sheets.googleapis.com/v4/spreadsheets/1qTXuL_zwbAqxsXbsLJ1bVC9bKMeKszVMN1UeJZC__Ys/values/{sheet_tab_name}/?key=AIzaSyCRlo0uTPnoL9Vz7pB5VMXg5FhHzPFla10";
var sheetnames=["meta","equipos","goleadores","fairplay","fixture","suspendidos","playoffs"];

function convert_to_old_format(new_json){

var old_json=[];
for(var i=1;i<new_json.length;i++)	{
var sub_json={};	
for(var j=0;j<new_json[0].length;j++)	{
try{
sub_json[new_json[0][j]]=new_json[i][j];
}catch(ex){}	
	
}
old_json.push(sub_json)	;
	
}

return old_json;
	
}
function fetch_sheet_tab_json(tab_url,tab_name){
	let xhr = new XMLHttpRequest();
	console.log(tab_url);
    xhr.open("GET", tab_url, true);
	 xhr.onload = function() {
		  
		googledata[tab_name]=convert_to_old_format(JSON.parse(xhr.response).values);
		var willshowinfo=true;
		for(var i=0;i<sheetnames.length;i++){
		if(!googledata[sheetnames[i]]){
			willshowinfo=false;
		}	
		}
		if(willshowinfo){
        showInfo(googledata);
		}
      }
	xhr.send();

    return xhr.responseText;
	
}	

function init() {
    console.log('Fetching updated data.');


for(var i=0;i<sheetnames.length;i++){
	fetch_sheet_tab_json(public_spreadsheet_url.replace("{sheet_tab_name}",sheetnames[i]),sheetnames[i]);
}


	/*
	var meta=convert_to_old_format(JSON.parse(fetch_sheet_tab_json(public_spreadsheet_url.replace("{sheet_tab_name}","meta"),"meta")).values);
	

	var equipos=convert_to_old_format(JSON.parse(fetch_sheet_tab_json(public_spreadsheet_url.replace("{sheet_tab_name}","equipos"))).values);
	var goleadores=convert_to_old_format(JSON.parse(fetch_sheet_tab_json(public_spreadsheet_url.replace("{sheet_tab_name}","goleadores"))).values);
	var fairplay=convert_to_old_format(JSON.parse(fetch_sheet_tab_json(public_spreadsheet_url.replace("{sheet_tab_name}","fairplay"))).values);
	var fixture=convert_to_old_format(JSON.parse(fetch_sheet_tab_json(public_spreadsheet_url.replace("{sheet_tab_name}","fixture"))).values);
	var suspendidos=convert_to_old_format(JSON.parse(fetch_sheet_tab_json(public_spreadsheet_url.replace("{sheet_tab_name}","suspendidos"))).values);
	var playoffs=convert_to_old_format(JSON.parse(fetch_sheet_tab_json(public_spreadsheet_url.replace("{sheet_tab_name}","playoffs"))).values);
    data["meta"]=meta;
	data["equipos"]=equipos;
	data["goleadores"]=goleadores;
	data["fairplay"]=fairplay;
	data["fixture"]=fixture;
	data["suspendidos"]=suspendidos;
	data["playoffs"]=playoffs;
	showInfo(data);
	*/
  }

  window.addEventListener('DOMContentLoaded', init)

  function showInfo(data) {
    console.log(data);
   
    myBase = data;
	proximaF = myBase.meta[1].Data;
	totalF =   myBase.meta[2].Data;
	
	equipos = myBase.equipos;
	
	

	jugadores = myBase.goleadores;
	amonestados = myBase.fairplay;
	fixture = myBase.fixture;
	suspendidos = myBase.suspendidos;
	playoffs = myBase.playoffs;
	
	groupedFixture = _.groupBy(fixture, function(fecha) {
      return fecha.Fecha;
    });
	//console.log(groupedFixture);
    fecha1 = groupedFixture[1];

    // POSICIONES
    for (i = 0; i < equipos.length; i++){
      temphtml = '<tr>';
      temphtml += '<td>' + equipos[i].Equipo + '</td>';
      temphtml += '<td>' + equipos[i].Puntos + '</td>';
      temphtml += '<td>' + equipos[i].PJ + '</td>';
      temphtml += '<td>' + equipos[i].PG + '</td>';
      temphtml += '<td>' + equipos[i].PE + '</td>';
      temphtml += '<td>' + equipos[i].PP + '</td>';
      temphtml += '<td>' + equipos[i].GF + '</td>';
      temphtml += '<td>' + equipos[i].GC + '</td>';
      temphtml += '<td>' + equipos[i].Dif + '</td>';
      temphtml += '<td>' + equipos[i].FP + '</td>';
      temphtml += '</tr>';
      $('#tablaPos').append(temphtml)
    }
    // GOLEADORES
    for (i = 0; i < jugadores.length; i++){
      if (jugadores[i].Goles != 0) {
        temphtml = '<tr>';
        temphtml += '<td>' + jugadores[i].Jugador + '</td>';
        temphtml += '<td>' + jugadores[i].Equipo + '</td>';
        temphtml += '<td>' + jugadores[i].Goles + '</td>';
        temphtml += '</tr>';
        $('#tablaJug').append(temphtml)
      }
    }
    // AMONESTADOS
    for (i = 0; i < amonestados.length; i++){
      if ((amonestados[i].Amarillas != 0)|(amonestados[i].Rojas != 0)) {
        temphtml = '<tr>';
        temphtml += '<td>' + amonestados[i].Jugador + '</td>';
        temphtml += '<td>' + amonestados[i].Equipo + '</td>';
        temphtml += '<td>' + amonestados[i].Amarillas + '</td>';
        temphtml += '<td>' + amonestados[i].Rojas + '</td>';
        temphtml += '</tr>';
        $('#tablaFair').append(temphtml)
      }
    }

    // FIXTURE
	
    for (j = 1; j <= totalF; j++) {
      temphtml = '<div class="fixture-div w-100"><p>Fecha ' + j + ' <span class="poiret">' + groupedFixture[j][0].Dia + '</span></p>'
      // temphtml += '<p>Dia ' + groupedFixture[j][0].Dia + '</p>'

      if (j<proximaF) {
        temphtml += '<table align="center" class="tabla" id="fecha'+j+'" border="1"><thead><tr><td>Local</td><td></td><td></td><td>Visitante</td></tr></thead>'
        for (i = 0; i < groupedFixture[j].length; i++) {
          temphtml += '<tr>'
          temphtml += '<td>' + groupedFixture[j][i].Local + '</td>'
          temphtml += '<td>' + groupedFixture[j][i].gl + '</td>'
          temphtml += '<td>' + groupedFixture[j][i].gv + '</td>'
          temphtml += '<td>' + groupedFixture[j][i].Visitante + '</td>'
          temphtml += '</tr>'
        }
      }
      else {
        temphtml += '<table align="center" class="tabla" id="fecha'+j+'" border="1"><thead><tr><td>Hora</td><td>Local</td><td>Visitante</td></tr></thead>'
        for (i = 0; i < groupedFixture[j].length; i++) {
          temphtml += '<tr>'
          temphtml += '<td>' + groupedFixture[j][i].Hora + '</td>'
          temphtml += '<td>' + groupedFixture[j][i].Local + '</td>'
          temphtml += '<td>' + groupedFixture[j][i].Visitante + '</td>'
          temphtml += '</tr>'
        }
      }
      temphtml += '</table>';
	  
      $('#fechas').append(temphtml)
    }


    if (myBase.meta[3].Data == 'FALSE') {
        $('#proximaFechaNumber').html(proximaF)
        $('#proximaFechaFecha').html(groupedFixture[proximaF][0].Dia)
        temphtml = ''
        for (i = 0; i < groupedFixture[proximaF].length; i++) {
          temphtml += '<tr>'
          temphtml += '<td>' + groupedFixture[proximaF][i].Hora + '</td>'
          temphtml += '<td>' + groupedFixture[proximaF][i].Local + '</td>'
          temphtml += '<td>' + groupedFixture[proximaF][i].Visitante + '</td>'
          temphtml += '</tr>'
        }
        $('#proximaFechaTabla').append(temphtml)
      }
      else {
        $('#proximaF').hide()
      }



    // SUSPENDIDOS
    if (suspendidos.length == 0) {
      $('#divSusp').css('height','0')
    }
    for (i = 0; i < suspendidos.length; i++){
        temphtml = '<tr>';
        temphtml += '<td>' + suspendidos[i].Jugador + '</td>';
        temphtml += '<td>' + suspendidos[i].Fechas + '</td>';
        temphtml += '</tr>';
        $('#tablaSusp').append(temphtml)
    }

    for (i = 0; i < playoffs.length; i++){
      // if ((playoffs[i].Torneo == "A") && (playoffs[i].Ronda == "1")) {
      //   temphtml = '<ul class="matchup">';
      //   temphtml += '<li class="team team-top">' + playoffs[i].Local + '<span class="score">' + playoffs[i].gl + '</span></li>';
      //   temphtml += '<li class="team team-bottom">' + playoffs[i].Visitante + '<span class="score">' + playoffs[i].gv + '</span></li>';
      //   temphtml += '<li class="bracket-date">' + playoffs[i].Hora + '</li>';
      //   temphtml += '</ul>';
      //   $('#cuartosCopaOro').append(temphtml)
      // }
      if ((playoffs[i].Torneo == "A") && (playoffs[i].Ronda == "1")) {
        temphtml = '<ul class="matchup">';
        temphtml += '<li class="team team-top">' + playoffs[i].Local + '<span class="score">' + playoffs[i].gl + '</span></li>';
        temphtml += '<li class="team team-bottom">' + playoffs[i].Visitante + '<span class="score">' + playoffs[i].gv + '</span></li>';
        temphtml += '<li class="bracket-date">' + playoffs[i].Hora + '</li>';
        temphtml += '</ul>';
        $('#semiCopaOro').append(temphtml)
      }
      if ((playoffs[i].Torneo == "A") && (playoffs[i].Ronda == "2")) {
        if (playoffs[i].Local != "") {
          $('#finalCopaOro').addClass('current');
        }
        temphtml = '<ul class="matchup">';
        temphtml += '<li class="team team-top">' + playoffs[i].Local + '<span class="score">' + playoffs[i].gl + '</span></li>';
        temphtml += '<li class="team team-bottom">' + playoffs[i].Visitante + '<span class="score">' + playoffs[i].gv + '</span></li>';
        temphtml += '<li class="bracket-date">' + playoffs[i].Hora + '</li>';
        temphtml += '</ul>';
        $('#finalCopaOro').append(temphtml)
      }


      if ((playoffs[i].Torneo == "B") && (playoffs[i].Ronda == "1")) {
        temphtml = '<ul class="matchup">';
        temphtml += '<li class="team team-top">' + playoffs[i].Local + '<span class="score">' + playoffs[i].gl + '</span></li>';
        temphtml += '<li class="team team-bottom">' + playoffs[i].Visitante + '<span class="score">' + playoffs[i].gv + '</span></li>';
        temphtml += '<li class="bracket-date">' + playoffs[i].Hora + '</li>';
        temphtml += '</ul>';
        $('#semiCopaPlata').append(temphtml)
      }
      if ((playoffs[i].Torneo == "B") && (playoffs[i].Ronda == "2")) {
        if (playoffs[i].Local != "") {
          $('#finalCopaPlata').addClass('current');
        }
        temphtml = '<ul class="matchup">';
        temphtml += '<li class="team team-top">' + playoffs[i].Local + '<span class="score">' + playoffs[i].gl + '</span></li>';
        temphtml += '<li class="team team-bottom">' + playoffs[i].Visitante + '<span class="score">' + playoffs[i].gv + '</span></li>';
        temphtml += '<li class="bracket-date">' + playoffs[i].Hora + '</li>';
        temphtml += '</ul>';
        $('#finalCopaPlata').append(temphtml)
      }

      if ((playoffs[i].Torneo == "C") && (playoffs[i].Ronda == "1")) {
        temphtml = '<ul class="matchup">';
        temphtml += '<li class="team team-top">' + playoffs[i].Local + '<span class="score">' + playoffs[i].gl + '</span></li>';
        temphtml += '<li class="team team-bottom">' + playoffs[i].Visitante + '<span class="score">' + playoffs[i].gv + '</span></li>';
        temphtml += '<li class="bracket-date">' + playoffs[i].Hora + '</li>';
        temphtml += '</ul>';
        $('#semiCopaBronze').append(temphtml)
      }
      if ((playoffs[i].Torneo == "C") && (playoffs[i].Ronda == "2")) {
        if (playoffs[i].Local != "") {
          $('#finalCopaBronze').addClass('current');
        }
        temphtml = '<ul class="matchup">';
        temphtml += '<li class="team team-top">' + playoffs[i].Local + '<span class="score">' + playoffs[i].gl + '</span></li>';
        temphtml += '<li class="team team-bottom">' + playoffs[i].Visitante + '<span class="score">' + playoffs[i].gv + '</span></li>';
        temphtml += '<li class="bracket-date">' + playoffs[i].Hora + '</li>';
        temphtml += '</ul>';
        $('#finalCopaBronze').append(temphtml)
      }
    }

    if (myBase.meta[3].Data == 'TRUE') {
      $('#bracketOro').show('slow')
      $('#bracketPlata').show('slow')
      $('#bracketBronze').show('slow')
    }

    // $('#cuartosFinalOroDate').append(myBase.meta.elements[4].Data);
    $('#semiFinalOroDate').append(myBase.meta[4].Data);
    $('#finalOroDate').append(myBase.meta[5].Data);
    $('#semiFinalPlataDate').append(myBase.meta[6].Data);
    $('#finalPlataDate').append(myBase.meta[7].Data);
    // $('#semiFinalBronzeDate').append(myBase.meta.elements[8].Data);
    // $('#finalBronzeDate').append(myBase.meta.elements[9].Data);

    $('.svgLoader').hide('slow')
  } //documentReady

              </script>
