

<!-- За навигација-->
<div class="card">
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="<?php echo $active1 ?>"><a id="osnovno" href="#home" aria-controls="home" role="tab" data-toggle="tab"><h4>ОСНОВНИ</h4></a></li>
    <li role="presentation" class="<?php echo $active2 ?>"><a id="vita" href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><h4>ВИТАМИНИ</h4></a></li>
    <li role="presentation" class="<?php echo $active3 ?>"><a id="mine" href="#messages" aria-controls="messages" role="tab" data-toggle="tab"><h4>МИНЕРАЛИ</h4></a></li>  
  </ul>

  <!-- Секој од табовите посебно се неговата содржина -->

  <div class="tab-content">

    <div role="tabpanel"  class="tab-pane  <?php echo $prikazi1; ?>" id="home">
      <div class="col-md-4"> 
        <form method="post"   action="<?php echo $PHP_SELF;?>">
          <div class="form-group">
            <!-- Селект листа за избор на состојка -->
            <select onchange="setTextField(this);this.form.submit()" class="btn btn-info" name="izbor" >
              <option value="fat">Масти</option>
              <option value="fat">Вкупно Масти</option>
              <option value="satfat">Заситени</option>
              <option value="monofat">Mононезаситени</option>
              <option value="polyfat">Полинезаситени </option>
            </select>
            <!-- Овде ја чувам селектираната вредност пред да се направи submit на формата -->
            <input id="make_text" type = "hidden" name = "make_text" value = "" />

          </div>        
        </form>
      </div>
      <div class="col-md-4"> 
        <form method="post"   action="<?php echo $PHP_SELF;?>">
          <div class="form-group">
            <!-- Селект листа за избор на состојка -->
            <select onchange="setTextField2(this);this.form.submit()" class="btn btn-info" name="izbor2" >
              <option value="carbs">Jаглехидрати</option>
              <option value="carbs">Вкупно Jаглехидрати</option>
              <option value="sugars">Шеќери</option>
              <option value="fiber">Диетални Влакна</option>              
            </select>
            <!-- Овде ја чувам селектираната вредност пред да се направи submit на формата -->
            <input id="make_text2" type = "hidden" name = "make_text2" value = "" />

          </div>        
        </form>
      </div>

      <div class="col-md-4"> 
        <form method="post"   action="<?php echo $PHP_SELF;?>">
          <div class="form-group">
            <!-- Селект листа за избор на состојка -->
            <select onchange="setTextField3(this);this.form.submit()" class="btn btn-info" name="izbor3" >
              <option value="carbs">Протеини</option>
              <option value="protein">Вкупно Протеини</option>
              <option value="tryptophan">Триптофан</option>
              <option value="threonine">Tреонин</option>
              <option value="isoleucine">Изолеуцин</option>             
              <option value="leucine">Леуцин</option>             
              <option value="lysine">Лизин</option>             
              <option value="methionine">Метионин</option>             
              <option value="cystine">Цистин</option>             
              <option value="henylalanine">фенилаланин</option>             
              <option value="tyrosine">Тирозин</option>             
              <option value="valine">Валин</option>             
              <option value="arginine">Аргинин</option>             
              <option value="histidine">Аистидин</option>             
              <option value="alanine">Аланин</option>             
              <option value="asparticAcid">Аспартинска киселина</option>             
              <option value="glutamicAcid">Глутаминска киселина</option>             
              <option value="glycine">Глицин</option>                        
              <option value="proline">Пролин</option>             
              <option value="serine">Серин</option>             
            </select>
            <!-- Овде ја чувам селектираната вредност пред да се направи submit на формата -->
            <input id="make_text3" type = "hidden" name = "make_text3" value = "" />

          </div>        
        </form>
      </div>
      <div class="col-md-12">
       <div class="col-md-12">
        <center><?php echo "<h4>Резултати за: ".$text."</h4><br />"; ?>  </center>   
      </div> 
    </div> 
  </div>

  <div role="tabpanel" class="tab-pane <?php echo $prikazi2; ?>" id="profile">

   <div class="col-md-4"> 
    <form method="post"   action="<?php echo $PHP_SELF;?>">
      <div class="form-group">
        <select onchange="setTextField4(this);this.form.submit()" class="btn btn-info" name="izbor4" >
          <option value=" ">Витамини</option>
          <option value="thiaminMg">Тиамин (B1) </option>
          <option value="riboflavinMg">Рибофлавин (B2) </option>
          <option value="niacinMg">Ниацин (B3) </option>
          <option value="pantothenicMg">Пантотенска киселина (B5) </option>
          <option value="vitb6Mg">Витамин B6 </option>
          <option value="folateUg">Фолати (B9) </option>
          <option value="vitcMg">Витамин C </option>
          <option value="viteMg">Витамин E </option>
          <option value="vitkUg">Витамин K </option>
          <option value="vitdIu">Витамин D </option>
        </select>
        <!-- Овде ја чувам селектираната вредност пред да се направи submit на формата -->
        <input id="make_text4" type = "hidden" name = "make_text4" value = "" />

      </div>        
    </form>
  </div>
  <div class="col-md-12">
    <center><?php echo "<h4>Резултати за: ".$text."</h4><br />"; ?>  </center>   
  </div> 
</div>


<div role="tabpanel" class="tab-pane <?php echo $prikazi3; ?>" id="messages">
  <div class="col-md-4"> 
    <form method="post"   action="<?php echo $PHP_SELF;?>">
      <div class="form-group">

        <select onchange="setTextField5(this);this.form.submit()" class="btn btn-info" name="izbor5" >
          <option value=" ">Минерали</option>
          <option value="calciumMg">Калциум </option>
          <option value="ironMg">Железо </option>
          <option value="calciumMg">Магнезиум </option>
          <option value="manganeseMg">Манган </option>
          <option value="phosphorusMg">Фосфор </option>
          <option value="potassiumMg">Калиум </option>
          <option value="zincMg">Цинк </option>
          <option value="sodiumMg">Натриум </option>
        </select>
        <!-- Овде ја чувам селектираната вредност пред да се направи submit на формата -->
        <input id="make_text5" type = "hidden" name = "make_text5" value = "" />

      </div>        
    </form>
  </div>
  <div class="col-md-12">
    <!-- Овде се ќе се прикаже тоа што е селектирано -->
    <center><?php echo "<h4>Резултати за: ".$text."</h4><br />"; ?>  </center>   
  </div>                                      

</div>




</div>
</div>


















