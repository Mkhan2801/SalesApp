let heading = document.getElementById('addOn')
heading.innerHTML=`<button type="button" class="btn btn-primary btn-lg btn-block" id="addBtn"> Add Employee </button>`


let overlay = document.getElementById('overlay')
let overlayBtn = document.getElementById('addBtn')


overlayBtn.addEventListener("click" , function(){
    overlay.classList.toggle("invisible")
  })