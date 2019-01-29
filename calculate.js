function submitNumbers (element) {
  const resultDiv = document.getElementById('result')
  const form = document.getElementById('calcForm')

  resultDiv.textContent = ''

  const data = {
    type: element.value,
    num1: form.elements.namedItem('num1').value,
    num2: form.elements.namedItem('num2').value
  }

  console.log(data)

  fetch('/calculate.php', {
    method: 'post',
    mode: 'same-origin',
    credentials: 'omit',
    headers: {
      'Accept': 'application/json',
      'Content-Type': 'application/json',
      'X-Requested-With': 'XMLHttpRequest'
    },
    body: JSON.stringify(data)
  })
    .then(response => response.json())
    .then(data => {
      if (data.result !== undefined) {
        resultDiv.value = data.result
        form.reset()
      } else if (data.errors) {
        resultDiv.value = `Error: ${data.errors.join(', ')}`
      }
    })
    .catch(error => {
      M.toast(error)
      console.log(error)
    })
}

document.addEventListener('DOMContentLoaded', () => {
  const buttonIds = ['addition', 'subtraction', 'multiplication', 'division']

  buttonIds.forEach(id => {
    const button = document.getElementById(id)
    button.addEventListener('click', evt => {
      evt.preventDefault()
      submitNumbers(button)
    })
  })
})
