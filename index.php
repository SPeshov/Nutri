


<!-- Иницијализација на променливите и поставување на sparql endpoint -->
<?php require 'init.php';  ?>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Го користам bootstrap framework-от -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <!-- Тема -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
  <!-- Мојот css  за обликување на табовите на главната навигација -->
  <link rel="stylesheet" href="main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <title>NUTRI</title>
</head>



<body>
  <div class="container">
    <div class="row">  
      <!-- Овде ќе биде главната навигација и формите за избирање на состојка -->
      <?php require 'form.php';  ?>              

    </div>              
    <!-- Овде започнува табелата со резултатите -->
    <div class="row">  
      <div class="col-md-12">  
        <table class="table table-condensed table-hover" >
         <tr>
          <th class="text-center"><strong>Количина / 100g</strong></th>
          <th class="text-center"><strong>Енергетска Вредност</strong></th>
          <th class="text-center"><strong>Име</strong></th>
          <th class="text-center"><strong>Слика</strong></th>
          <th class="text-center"><strong>Дознај Повеќе</strong></th>
        </tr>
        <!-- Доколку е поставена некоја од формите ќе се повика генерирање на резулатите -->
        <?php if (isset($_POST['izbor']) or isset($_POST['izbor2']) or isset($_POST['izbor3']) or isset($_POST['izbor4']) or isset($_POST['izbor5'])) { require 'rezultati.php';} ?>
      </table>
    </div>
  </div>


</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- Овие функции служат за зимање на селектирана вредност и се прикажува како "Резултати за: Tекст" -->
<script type="text/javascript">

function setTextField(ddl) {
  // make_text елементот е празен во него ја чувам селиктираната вредност 
  document.getElementById('make_text').value = ddl.options[ddl.selectedIndex].text;
}
function setTextField2(ddl) {
  document.getElementById('make_text2').value = ddl.options[ddl.selectedIndex].text;
}
function setTextField3(ddl) {
  document.getElementById('make_text3').value = ddl.options[ddl.selectedIndex].text;
} 
function setTextField4(ddl) {
  document.getElementById('make_text4').value = ddl.options[ddl.selectedIndex].text;
}
function setTextField5(ddl) {
  document.getElementById('make_text5').value = ddl.options[ddl.selectedIndex].text;
}
</script>
</body>
</html>


