function mostrarCamposAdicionales() {
    var medioTransporte = document.getElementById('medioTransporte').value;

    // Ocultar todos los campos adicionales
    document.getElementById('terrestreFields').style.display = 'none';
    document.getElementById('aereoFields').style.display = 'none';

    // Mostrar campos adicionales según el medio de transporte seleccionado
    if (medioTransporte === 'terrestre') {
      document.getElementById('terrestreFields').style.display = 'block';
    } else if (medioTransporte === 'aereo') {
      document.getElementById('aereoFields').style.display = 'block';
    }
  }


  // Funciones para la tabla de precios
  $(document).ready(function() {
    // Función para actualizar los totales
    function actualizarTotales() {
      // Iterar sobre las filas (excluyendo la última fila de totales)
      $('tbody tr:not(:last-child)').each(function() {
        var totalFila = 0;

        // Iterar sobre las celdas de la fila (excluyendo las primeras dos y la última)
        $(this).find('td:not(:first-child, :nth-child(2), :last-child) input').each(function() {
          var valorCelda = parseInt($(this).val()) || '';
          // Validar que el valor sea mayor o igual a cero
          valorCelda = valorCelda === '' ? '' : Math.max(parseInt(valorCelda), 0);
          $(this).val(valorCelda);

          // Mostrar el valor solo si no está vacío
          if (valorCelda !== '') {
            $(this).attr('placeholder', valorCelda);
          } else {
            $(this).removeAttr('placeholder');
          }

          totalFila += valorCelda || 0;
        });

        // Actualizar el campo de total de la fila
        $(this).find('td:last-child input').val(totalFila || '');
      });

      // Iterar sobre las columnas (excluyendo las primeras dos y la última)
      for (var i = 3; i <= 10; i++) {
        var totalColumna = 0;

        // Iterar sobre las filas (excluyendo la última fila de totales)
        $('tbody tr:not(:last-child)').each(function() {
          var valorCelda = parseInt($(this).find('td:nth-child(' + i + ') input').val()) || '';
          // Validar que el valor sea mayor o igual a cero
          valorCelda = valorCelda === '' ? '' : Math.max(parseInt(valorCelda), 0);
          $(this).find('td:nth-child(' + i + ') input').val(valorCelda);

          // Mostrar el valor solo si no está vacío
          if (valorCelda !== '') {
            $(this).find('td:nth-child(' + i + ') input').attr('placeholder', valorCelda);
          } else {
            $(this).find('td:nth-child(' + i + ') input').removeAttr('placeholder');
          }

          totalColumna += valorCelda || 0;
        });

        // Actualizar el campo de total de la columna
        $('tbody tr:last-child td:nth-child(' + i + ') input').val(totalColumna || '');
      }

      // Calcular y actualizar el total general
      var totalGeneral = 0;
      $('tbody tr:not(:last-child) td:last-child input').each(function() {
        var valorCelda = parseInt($(this).val()) || '';
        // Validar que el valor sea mayor o igual a cero
        valorCelda = valorCelda === '' ? '' : Math.max(parseInt(valorCelda), 0);
        $(this).val(valorCelda);

        // Mostrar el valor solo si no está vacío
        if (valorCelda !== '') {
          $(this).attr('placeholder', valorCelda);
        } else {
          $(this).removeAttr('placeholder');
        }

        totalGeneral += valorCelda || 0;
      });
      $('#precio_total').val(totalGeneral || '');
    }

    // Manejar eventos de cambio en las celdas
    $('input[type="number"]').on('input', function() {
      actualizarTotales();
    });

    // Llamar a la función de actualización al cargar la página
    actualizarTotales();

    // Prevenir el envío del formulario al presionar Enter en las celdas de la tabla
    $('tbody td input[type="number"]').on('keydown', function(e) {
      if (e.key === 'Enter') {
        e.preventDefault();
      }
    });
  });


 