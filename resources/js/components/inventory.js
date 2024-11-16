let heading = document.getElementById('addOn')
heading.innerHTML=`<button type="button" class="btn btn-primary btn-lg btn-block" id="addBtn"> Add Inventory </button>`

let overlay = document.getElementById('overlay')
let overlayBtn = document.getElementById('addBtn')


overlayBtn.addEventListener("click" , function(){
    overlay.classList.toggle("invisible")
  })


  
let root = document.getElementById('data')

              fetch('/inventoryData')
              .then(res=>res.json())
              .then(json=>
                  {  
                    console.log(json)
                    let data = json.data
                    for(let x in data){
                      root.innerHTML +=`
                      <td>${x}</td>
                      <td>${data[x].name}</td>
                      <td>${data[x].price}</td>
                      <td>${data[x].remain}</td>
                      </tr><tr>
                  `
                    }
              
                  });