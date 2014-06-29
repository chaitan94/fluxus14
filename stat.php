<html>
  <head>
  <title>Statistics | Fluxus 2014</title>
  <style type="text/css">
html,body{margin: 0;padding: 0;}
a{text-decoration: inherit;color: inherit;}
*{font-family:Helvetica;}
.stat-card{
  float: left;
}
.clearfix{clear: both;}
header{
  background: #555;
  font-weight: bold;
  color: #DDD;
  padding: 20px 0;
  margin-bottom: 10px;
}
footer{
  color: #555;
  background: #DDD;
  padding: 100px 0 250px 0;
}
footer span{
  margin: 50px;
  padding: 10px;
  border-radius: 4px;
  border: 1px solid #DDD;
}
footer span:hover{
  background: #555;
  color: #DDD;
  cursor: pointer;
}
  </style>
  </head>
  <body>
  <center>
    <header>Fluxus 2014 Statistics</header>
    <div class="clearfix">
      <?php
      include 'connect.inc.php';
      $db = mysqli_connect($MySQLhost,$MySQLuser,$MySQLpass,$MySQLdbname);
      $result = $db->query("SELECT COUNT(*) FROM users");
      $nreg = $result->fetch_all()[0][0];
      $result = $db->query("SELECT COUNT(*) FROM users WHERE accommodation=1;");
      $nacom = $result->fetch_all()[0][0];
      ?>
      No of registrations: <?=$nreg?><br>
      No of registrations for acommodation: <?=$nacom?>
    </div>
    <div class="stat-card" id="college"></div>
    <div class="stat-card" id="places"></div>
    <div class="stat-card" id="mfr"></div>
    <footer class="clearfix">
      <a href="http://www.fluxus.in"><span>Fluxus 2014</span></a>
      <a href="http://docm-iiti.github.io"><span>Department of Creative Media</span></a>
    </footer>
</center>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load('visualization', '1.0', {'packages':['corechart']});
      google.setOnLoadCallback(drawChart);

      function drawChart() {
        var mfrdata = new google.visualization.DataTable();
        mfrdata.addColumn('string', 'Gender');
        mfrdata.addColumn('number', 'PeopleCount');
        mfrdata.addRows([
          <?php
            $result = $db->query("SELECT COUNT(gender) as COUNT,gender FROM users GROUP BY gender ORDER BY COUNT DESC;");
            $results=$result->fetch_all();
            foreach ($results as $key => $value) {
              if($value[1]&&$value[2]>1) echo '["'.$value[1].'",'.$value[0].'],';
            }
          ?>
        ]);
        var mfr = new google.visualization.PieChart(document.getElementById('mfr'));
        mfr.draw(mfrdata, {'title':'By gender',
                       'width':400,
                       'height':300});

        var placesdata = new google.visualization.DataTable();
        placesdata.addColumn('string', 'Gender');
        placesdata.addColumn('number', 'PeopleCount');
        placesdata.addRows([
          <?php
            $result = $db->query("SELECT COUNT(city) as COUNT,city FROM users GROUP BY city ORDER BY COUNT DESC;");
            $results=$result->fetch_all();
            foreach ($results as $key => $value) {
              if($value[1]&&$value[2]>1) echo '["'.$value[1].'",'.$value[0].'],';
            }
          ?>
        ]);
        var places = new google.visualization.PieChart(document.getElementById('places'));
        places.draw(placesdata, {'title':'By city',
                       'width':400,
                       'height':300});

        var collegedata = new google.visualization.DataTable();
        collegedata.addColumn('string', 'Gender');
        collegedata.addColumn('number', 'PeopleCount');
        collegedata.addRows([
          <?php
            $result = $db->query("SELECT COUNT(college) as COUNT,college FROM users GROUP BY college ORDER BY COUNT DESC;");
            $results=$result->fetch_all();
            foreach ($results as $key => $value) {
              if($value[1]&&$value[2]>1) echo '["'.$value[1].'",'.$value[0].'],';
            }
          ?>
        ]);
        var college = new google.visualization.PieChart(document.getElementById('college'));
        college.draw(collegedata, {'title':'By College',
                       'width':800,
                       'height':600});
      }
    </script>
  </body>
</html>