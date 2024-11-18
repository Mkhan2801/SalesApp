import axios from 'axios';

let root = document.getElementById('table_div')

fetch('/salesData')
.then(res=>res.json())
.then(json=>
    {
       console.log(json)
        
       let data = json.data
       print(data)
       
   
        let CrBtn = document.getElementById('crBtn')
        CrBtn.addEventListener('click',function(){



         let  crdata = data.filter((el) => !el.cr);
         
          print(crdata)


        })

    });


    let heading = document.getElementById('addOn')
    heading.innerHTML=`<button type="button" class="btn btn-primary btn-lg btn-block" id="crBtn"> Cr </button>`
 

    function print(data){
      for(let x in data){
         let date = new Date(data[x].created_at).toDateString()
         root.innerHTML +=`
         <td>${x}</td>
         <td><a href="/expendsale/${data[x].id}">${data[x].name}</a></td>
     <td>${data[x].amount}</td>
     <td>${date}</td>
     
         <td>${data[x].cr ? '<button  class="btn btn-outline-success" >Cash</button>'
     :'<button class="btn btn-outline-danger"><a href="/crPay/'+data[x].id+' ">Cr</a></button>'}</td>
   `
      
        }
    }


      

