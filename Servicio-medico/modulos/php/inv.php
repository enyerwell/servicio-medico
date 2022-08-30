<script type="text/javascript">
      var sumar = document.getElementById("mas");
      var restar = document.getElementById("menos");
      var contador = document.getElementById("contador");
      var importe = document.getElementById("importe");
      var can = $_GET ['can']
      var prevValue;

      function calcular() {
        var value = contador.value;
        var isValid = /^[1-9][0-9]*$/.test(value);

        if (!isValid) {
          contador.value = prevValue;
        } else {
          prevValue = value;
        }

        importe.value = Number.parseFloat(contador.value * valorBase).toFixed(2);
      }

      sumar.onclick = function() {
        contador.value = Number(contador.value) + 1;
        calcular();
      };

      restar.onclick = function() {
        contador.value = Number(contador.value) - 1;
        calcular();
      };

      contador.onchange = function() {
        calcular();
      };

      contador.onkeyup = function() {
        if (contador.value === "") {
          return;
        }
        calcular();
      };

      calcular();
    </script>