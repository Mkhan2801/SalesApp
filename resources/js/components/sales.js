import axios from 'axios';

let root = document.getElementById('table_div')


const nameData = await axios('/salesData');
let data = nameData.data.data;
print(data)


// const crData = await axios('/crData');
// let crdata = crData.data.data;
// print(crdata)


    let heading = document.getElementById('addOn')
    heading.innerHTML=`<button type="button" class="btn btn-primary btn-lg btn-block" id="crBtn"> Cr </button>`
 

    function print(data){
      root.innerHTML=`   <hr>
	<tr>
		<th>#</th>
		<th>Name</th>
		<th>Amount</th>
		<th>Date</th>
		<th>Pay</th>
	</tr>
	
  `
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


      


    
let searchnameInput = document.getElementById('Search_name');
const div2 = document.getElementById("myDropdown_2");

searchnameInput.onkeyup = function (){searchnamearr(div2,data)}

function searchnamearr(outdiv,namelist){
  
  let query = searchnameInput.value;
  
  let output=[]
  let text = ''
  for(let ele in namelist){
    if(namelist[ele].name.toLowerCase().includes(query.toLowerCase()) )
    output.push(namelist[ele])
  }
  print(output)
  // console.log(output)
  for (let name in output){
    text += `<li onclick='selectname("${output[name].name}")'> ${output[name].name} </li>`
  }
  outdiv.innerHTML = text
  outdiv.classList.add("show");
  

  }