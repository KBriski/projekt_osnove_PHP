
function pretražiGrad() {
  let input = document.getElementById('tražilica').value
  input = input.toLowerCase();
  let x = document.getElementsByClassName('grad');

  for (i = 0; i < x.length; i++) {
    if (!x[i].innerHTML.toLowerCase().includes(input)) {
      x[i].style.display = "none";
    }
    else {
      x[i].style.display = "list-item";
    }
    }
  }

//pazi na input i na x, šta je šta
