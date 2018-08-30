function submitNumbers (event) {
  event.preventDefault()
  const errorDiv = $('#errors')
  const resultDiv = $('#result')

  errorDiv.empty()
  resultDiv.empty()

  const data = {
    type: $(this).val(),
    num1: $('#num1').val(),
    num2: $('#num2').val()
  }

  $.ajax({
    url: 'calculate.php',
    method: 'post',
    data: data
  }).done(data => {
    if (data.result !== undefined) {
      resultDiv.text(data.result)
    } else if (data.errors) {
      errorDiv.text('Error: ')
      data.errors.forEach(function (error) {
        errorDiv.append('<br>' + error)
      })
    }
  })
}

document.addEventListener('DOMContentLoaded', ev => $('button').on('click', submitNumbers))
