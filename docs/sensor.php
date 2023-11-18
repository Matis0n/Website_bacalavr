
<h1>Показания глубины и температуры дефекта</h1>
  

  <form id="form1">
      <select id="param">
          <option selected value="1">Глубина дефекта</option>
          <option selected value="2">Температура материала</option>
      </select>
      <input class="btn" type="button" name="showd" value="Показать данные" onclick="sshowd();" >
      <input class="btn" type="button" name="adddata" value="Добавить данные" onclick="addata();">
      <input class="btn" type="button" name="del" value="Удалить все данные" onclick="Del();">

      <div>
      <input class="btn" type="button"  id="Max" value="Максимальное значение" onclick="agrfunc(this);">
      <input class="btn" type="button"  id="Min" value="Минимальное значение" onclick="agrfunc(this);">
      <input class="btn" type="button"  id="avg" value="Среднее значение" onclick="agrfunc(this);">
      </div>

  </form>

  <script src="js1/Chart.min.js"></script>

<canvas id="myChart" height="90"></canvas><script src="js1/Chart.js"></script>

    


  