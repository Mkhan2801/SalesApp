let heading = document.getElementById('addOn')
heading.innerHTML=`<button type="button" class="btn btn-primary btn-lg btn-block" id="addBtn"> Add Inventory </button>`

let overlay = document.getElementById('overlay')
let overlayBtn = document.getElementById('addBtn')


overlayBtn.addEventListener("click" , function(){
    overlay.classList.toggle("invisible")
  })
            //   fetch('/inventoryData')
            //   .then(res=>res.json())
            //   .then(json=>
            //       {
            //           let root = document.getElementById('data')
                      
            //           root.innerHTML=`
            //           <td>01</td>
            //           <td>${json.name}</td>
            //           <td>${json.amount}</td>
            //           <td>${json.date}</td>
            //           <td>${json.pay ? '<button  class="btn btn-outline-success" >Cash</button>'
            //           :'<button class="btn btn-outline-danger">Cr</button>'}</td>
            //       `
              
            //       });