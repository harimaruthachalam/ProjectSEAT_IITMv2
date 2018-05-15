<!DOCTYPE html>
<html lang="en-US">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SEAT - Student Elective Allocation Tool</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<style type="text/css">
		svg > g > g:last-child { pointer-events: none }
		
		
	</style>



  <script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  title:{
    text: "Aggregate allotment for <?php echo $_GET["sem"] ?>"
  },  
  axisY: {
    title: "Count",
    titleFontColor: "#4F81BC",
    lineColor: "#4F81BC",
    labelFontColor: "#4F81BC",
    tickColor: "#4F81BC"
  },
  axisX: {
    title: "Preference Number",
    titleFontColor: "#C0504E",
    lineColor: "#C0504E",
    labelFontColor: "#C0504E",
    tickColor: "#C0504E"
  },  
  toolTip: {
    shared: true
  },
  legend: {
    cursor:"pointer",
    itemclick: toggleDataSeries
  },
  data: [{
    type: "column",
    name: "HS",
    legendText: "HS",
    showInLegend: true, 
    dataPoints:[
      
      
      { label: "1", y: <?php echo findCount("1",$_GET["sem"],1) ?> },
      { label: "2", y: <?php echo findCount("2",$_GET["sem"],1) ?> },
      { label: "3", y: <?php echo findCount("3",$_GET["sem"],1) ?> },
      { label: "4", y: <?php echo findCount("4",$_GET["sem"],1) ?> },
      { label: "5", y: <?php echo findCount("5",$_GET["sem"],1) ?> },
      { label: "6", y: <?php echo findCount("6",$_GET["sem"],1) ?> },
      { label: "7", y: <?php echo findCount("7",$_GET["sem"],1) ?> },
      { label: "8", y: <?php echo findCount("8",$_GET["sem"],1) ?> },
      { label: "9", y: <?php echo findCount("9",$_GET["sem"],1) ?>},
      { label: "10", y:<?php echo findCount("10",$_GET["sem"],1) ?>},
      { label: "No Course Allotted", y: <?php echo findCount("No Course Allotted",$_GET["sem"],1) ?> }
      
    ]
  },

  {
    type: "column",
    name: "MA",
    legendText: "MA",
    showInLegend: true, 
    dataPoints:[
     
      
      { label: "1", y: <?php echo findCount("1",$_GET["sem"],2) ?> },
      { label: "2", y: <?php echo findCount("2",$_GET["sem"],2) ?> },
      { label: "3", y: <?php echo findCount("3",$_GET["sem"],2) ?> },
      { label: "4", y: <?php echo findCount("4",$_GET["sem"],2) ?> },
      { label: "5", y: <?php echo findCount("5",$_GET["sem"],2) ?> },
      { label: "6", y: <?php echo findCount("6",$_GET["sem"],2) ?> },
      { label: "7", y: <?php echo findCount("7",$_GET["sem"],2) ?> },
      { label: "8", y: <?php echo findCount("8",$_GET["sem"],2) ?> },
      { label: "9", y: <?php echo findCount("9",$_GET["sem"],2) ?>},
      { label: "10", y:<?php echo findCount("10",$_GET["sem"],2) ?>},
      { label: "No Course Allotted", y: <?php echo findCount("No Course Allotted",$_GET["sem"],2) ?> }
    ]
  },

  {
    type: "column",
    name: "Proffesional Electives",
    legendText: "Proffesional Electives",
    showInLegend: true, 
    dataPoints:[
      
      
      { label: "1", y: <?php echo findCount("1",$_GET["sem"],3) ?> },
      { label: "2", y: <?php echo findCount("2",$_GET["sem"],3) ?> },
      { label: "3", y: <?php echo findCount("3",$_GET["sem"],3) ?> },
      { label: "4", y: <?php echo findCount("4",$_GET["sem"],3) ?> },
      { label: "5", y: <?php echo findCount("5",$_GET["sem"],3) ?> },
      { label: "6", y: <?php echo findCount("6",$_GET["sem"],3) ?> },
      { label: "7", y: <?php echo findCount("7",$_GET["sem"],3) ?> },
      { label: "8", y: <?php echo findCount("8",$_GET["sem"],3) ?> },
      { label: "9", y: <?php echo findCount("9",$_GET["sem"],3) ?>},
      { label: "10", y:<?php echo findCount("10",$_GET["sem"],3) ?>},
      { label: "No Course Allotted", y: <?php echo findCount("No Course Allotted",$_GET["sem"],3) ?> },
      
    ]
  }
  
  ]
});
chart.render();

function toggleDataSeries(e) {
  if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
    e.dataSeries.visible = false;
  }
  else {
    e.dataSeries.visible = true;
  }
  chart.render();
}

}



</script>

<script>
  function myFunction82() {
    
    if(document.getElementById("mySelect").value.length>0)
    {
    a178 = "statistics.php?sem="+ document.getElementById("mySelect").value;
    window.location.assign(a178);
  }

   
}
  </script>

	

  </head>
<body id="page-top">

 <?php include 'header.php' ?>


     <section id="intro" class="bg-light">
       <div class="container">
         <div class="row">
           <div class="col-lg-8 mx-auto">
             <h3><?php echo $_GET["sem"] ?></h3>
             <h6>(Click on the regions present in the pie chart to know department wise statistics)</h6>

<table border="0" cellspacing="60" >
<tr>
<td><div id="piechart"></div></td>
<td>

<select id="mySelect" onchange="myFunction82()" >
  <option value="">Select a semester</option>
<?php
$sems=array("Jan-May 2018 Round 1","Jan-May 2018 Round 2","July-Nov 2017 Round 1","July-Nov 2017 Round 2","Jan-May 2017","July-Nov 2016");
$arrlength = count($sems);
  echo "<br>";
    echo "<br>";
	  echo "<br>";

for($x = 0; $x < $arrlength; $x++)
{
?>
<option value="<?php echo $sems[$x] ?>"> <?php echo $sems[$x] ?> </option>
<?php


}

?>
</select>

</td>
</tr>
<tr colspan="2">
	<td><div id="chartContainer" style="height: 300px; width: 100%;"></div>
</td>
	</tr>
</table>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Course', 'Count'],
  ['HS',<?php echo findCount1("HS",$_GET["sem"]) ?>],
  ['MA',<?php echo findCount1("MA",$_GET["sem"]) ?>],
  ['Proffessional Electives',<?php echo findCount1("Proffessional Electives",$_GET["sem"]) ?>],

]);

  function selectHandler() {
      var selectedItem = chart.getSelection()[0];
	  a1="course.php?cname=HS&sem="+"<?php echo $_GET["sem"] ?>";
	  a2="course.php?cname=MA&sem="+"<?php echo $_GET["sem"] ?>";
	  a3="course.php?cname=Proffessional Electives&sem="+"<?php echo $_GET["sem"] ?>";
      if (selectedItem) {
        var topping = data.getValue(selectedItem.row, 0);
      if(topping=='HS')
    	  window.location.assign(a1);
    	  else if(topping=='MA')
    		  window.location.assign(a2);
    		  else
    			  window.location.assign(a3);

      }
    }

  // Optional; add a title and set the width and height of the chart
  var options = {'title':null, 'width':550, 'height':300, fontSize:16};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));



    google.visualization.events.addListener(chart, 'select', selectHandler);
  chart.draw(data, options);
}
</script>


<?php
function findCount1($cname,$sem)
{

$studentrollnumber=[];
$courseid=[];
$i=0;

$c2=0;

$row = 0;
if (($handle = fopen("$sem.csv", "r")) !== FALSE)
{
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
	{
        $num = count($data);
        $row++;
        if($row===1)
        continue;
        $studentrollnumber[$c2]=$data[0];
		$courseid[$c2]=$data[1];
		$c2=$c2+1;

    }
    fclose($handle);
}

$count=0;
for($i=0;$i<$c2;$i++)
{
	if(strcmp($cname,'Proffessional Electives')===0)
	{
	  if(strpos($courseid[$i],'HS')===0 or strpos($courseid[$i],'MA')===0)
	  continue;
	  else
	  $count++;
	}
	else
	{
	   if(strpos($courseid[$i],$cname)===0)
         $count++;
	}

}

return $count;
}



function findCount($preference,$sem,$index)
{

$studentrollnumber=[];
$courseid=[];
$i=0;

$c2=0;

$row = 0;
if (($handle = fopen("agg"."$sem.csv", "r")) !== FALSE)
{
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
  {
        $num = count($data);
        $row++;
        if($row===1)
        continue;
       if($data[0]===$preference)
       {
        $abc=$data[$index];
        fclose($handle);
        return $abc;
       }
    

    }
    fclose($handle);
    return 0;
}


}




?>



			</div>
        </div>
      </div>
    </section>

<?php include 'footer.php' ?>

	 <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="js/scrolling-nav.js"></script>

    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
   

</body>
</html>
