<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/lodash.js/0.10.0/lodash.min.js"></script>

<script type="text/javascript">



var public_spreadsheet_url = 'https://docs.google.com/spreadsheets/d/1XBGsnX-QLhONkvk1AKF2sLFcQboVwdbsh7Ucyfo9f_I/';
var myBase

// function sortPuntos(a,b) {
//   if (a[1] < b[1])
//     return 1;
//   if (a[1] > b[1])
//     return -1;
//   return 0;
// }

function init() {
  Tabletop.init( { key: public_spreadsheet_url,
    callback: showInfo,
    simpleSheet: false } );
  }

  window.addEventListener('DOMContentLoaded', init)

  function showInfo(data) {
    console.log(data);
    myBase = data
    proximaF = myBase.meta.elements[1].Data;
    totalF = myBase.meta.elements[2].Data;
    equipos = myBase.equipos.elements;
    jugadores = myBase.jugadores.elements;
    fixture = myBase.fixture.elements;
    groupedFixture = _.groupBy(fixture, function(fecha) {
      return fecha.Fecha;
    });
    fecha1 = groupedFixture[1]

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
      temphtml += '</tr>';
      $('#tablaPos').append(temphtml)
    }

    // GOLEADORES
    for (i = 0; i < jugadores.length; i++){
      temphtml = '<tr>';
      temphtml += '<td>' + jugadores[i].Jugador + '</td>';
      temphtml += '<td>' + jugadores[i].Equipo + '</td>';
      temphtml += '<td>' + jugadores[i].Goles + '</td>';
      temphtml += '</tr>';
      $('#tablaJug').append(temphtml)
    }
    // FIXTURE
    for (j = 1; j <= totalF; j++) {
      temphtml = '<div class="fixture-div"><p>Fecha ' + j + ' <span class="poiret">' + groupedFixture[j][0].Dia + '</span></p>'
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
      temphtml += '</table>'
      $('#fechas').append(temphtml)
    }



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


    $('.svgLoader').hide('slow')
  } //documentReady

              </script>
