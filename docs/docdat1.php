<h1>Добавление данных в таблицу</h1>
<form id="form1">
      <select id="param">
          <option selected value="1">Глубина дефекта</option>
           <option selected value="2">Температура материала</option>
      </select>
      <label><input class="btn" type="date" id="bdata"></label>
      <label><input class="btn" type="date" id="edata"></label>
      <input class="btn" type="button" name="adddata" value="Добавить данные" onclick="addData();">
      <input class="btn" type="button" value="Назад" onclick="document.location.href = 'index.php?page=24'">

  </form>

  <script src="js1/Chart.min.js"></script>

<canvas id="myChart" height="90"></canvas><script src="js1/Chart.js"></script>
