<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/5.7.0/d3.min.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>  
	<title>Document</title>
</head>

<script>
d3.csv("http://localhost/PROJET/file1.csv")
.then(makeChart2);
function makeChart2(Participants) {

var ParticipantLabels = Participants.map(function(d) {return d.nom});
var moyenneData = Participants.map(function(d) {return +d.moyenne});

var chart = new Chart('myChart2', {
type: 'line',
options: {
maintainAspectRatio: false,
legend: {
  display: true
},
scales: {
  xAxes: [
    {
         
      
  
          scaleLabel: {
        display: true,
        labelString: 'La moyenne Par Personne' ,
        fontSize: 20
      }
    }
  ]
}
},
data: {
labels: ParticipantLabels,
datasets: [
  {
    data: moyenneData,
    backgroundColor: ParticipantLabels
  }
]
}
})
}

d3.csv("http://localhost/PROJET/file1.csv")
.then(makeChart1);
function makeChart1(Participants) {

var ParticipantLabels = Participants.map(function(d) {return d.nom});
var moyenneData = Participants.map(function(d) {return +d.moyenne});

var chart = new Chart('myChart1', {
type: 'horizontalBar',
options: {
maintainAspectRatio: false,
legend: {
  display: true
},
scales: {
  xAxes: [
    {
         
      
  
          scaleLabel: {
        display: true,
        labelString: 'La moyenne Par Personne',
        fontSize: 20
      }
    }
  ]
}
},
data: {
labels: ParticipantLabels,
datasets: [
  {
    data: moyenneData,
    backgroundColor: ParticipantLabels
  }
]
}
})
}

// Request data using D3

</script>



<body>
  <?php
  include('update.php');
  ?>
	<div>

		<p style="text-align: center; font-size: 100%; margin-top: 20px; "><span id=span1></span>  <span id=span2></span> </p>
		<p style="text-align: center; font-size: 100%; ">Votre moyenne est <span id=span3></span> /10</p>
		

	</div>
  <div>
    <canvas id="myChart2"></canvas>
    <canvas id="myChart1"></canvas>

  </div>
	<script>
		function getCookie(name){
    if(document.cookie.length == 0)
      return null;

    var regSepCookie = new RegExp('(; )', 'g');
    var cookies = document.cookie.split(regSepCookie);

    for(var i = 0; i < cookies.length; i++){
      var regInfo = new RegExp('=', 'g');
      var infos = cookies[i].split(regInfo);
      if(infos[0] == name){
           return unescape (infos[1]);
      }
    }
    return null;
  }
/*on insere les valeur de cookies dans les input dont les ID sont 'session-nom' et 'session-prenom'*/
var moyenne = document.getElementById('span3').innerHTML = getCookie('moyenne');




	</script>
</body>
</html>