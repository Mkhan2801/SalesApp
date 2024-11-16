

fetch('/cashData')
    .then(res=>res.json())
    .then(json=>
        {

          let heading = document.getElementById('addOn')
heading.innerHTML=`<button type="button" class="btn btn-primary btn-lg btn-block" id="addBtn"> Cash: ${json.data[0].amount} </button>`


let overlay = document.getElementById('overlay')
let overlayBtn = document.getElementById('addBtn')


overlayBtn.addEventListener("click" , function(){
    overlay.classList.toggle("invisible")
  })



  
let root = document.getElementById('data')


          console.log(json)
          let data = json.data
          for(let x in data){
            let date = new Date(data[x].created_at).toDateString()
            root.innerHTML +=`
            <td>${x}</td>
            <td>${data[x].name}</td>
            <td>${data[x].amount}</td>
            <td>${date}</td>
            <td>${data[x].in_out ? '<button  class="btn btn-outline-success" >Dr</button>'
		:'<button class="btn btn-outline-danger">Cr</button>'}</td>
            
        `
          }
           
            
           
    
        });

