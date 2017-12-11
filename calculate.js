$(document).ready(function () {
  $('button').click(function (event) {
    event.preventDefault();
    var errorDiv = $('#errors');
    var resultDiv = $('#result');
    errorDiv.empty();
    resultDiv.empty();



    var data = {
      type: $(this).val(),
      num1: $('#num1').val(),
      num2: $('#num2').val()
    };
    $.ajax({
      url: 'calculate.php',
      method: 'post',
      data: data
    }).done(function (data) {
      if (data.result !== undefined) {
        resultDiv.text(data.result);
      } else if (data.errors) {

        errorDiv.text('Error: ')
        data.errors.forEach(function (error) {
          errorDiv.append('<br>' + error);
        });
      }
    });
  })
});