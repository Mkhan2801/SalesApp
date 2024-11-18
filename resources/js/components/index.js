import axios from 'axios';

let heading = document.getElementById('addOn')
heading.innerHTML=`<button type="button" class="btn btn-primary btn-lg btn-block" id="addBtn"> Add Employee </button>

<button type="button" class="btn btn-primary btn-lg btn-block" id="linkBtn"> Add Menu </button>`


let overlay = document.getElementById('overlay')
let overlayBtn = document.getElementById('addBtn')
let LinkOverlay = document.getElementById('linkOverlay')
let LinkOverlayBtn = document.getElementById('linkBtn')


overlayBtn.addEventListener("click" , function(){
  overlay.classList.toggle("invisible")
  LinkOverlay.classList.add("invisible")
})

LinkOverlayBtn.addEventListener("click" , function(){
  LinkOverlay.classList.toggle("invisible")
  overlay.classList.add("invisible")
})


 const myList = await axios('/salesItem');

 let data = myList.data.data;
 listPrint(data)

function listPrint(data){
  
itemDiv.innerHTML = ''
  for(let x in data){
        
    itemDiv.innerHTML += `
<div class="col">
    <div class="card mb-4 rounded-3 shadow-sm border-primary">
      <div class="card-header py-3 text-bg-primary border-primary">
        <h4 class="my-0 fw-normal">${data[x].name}</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">RS. ${data[x].price}</h1>
    
        <button type="button" class="w-100 btn btn-lg btn-primary addToList" id=${data[x].id }>Add</button>
      </div>
    </div>
</div> 
`
}
} 



let billList=[];
let itemList = document.getElementsByClassName('addToList')


let addFun = function(){
  let item = data.find(o => o.id == this.id)
  let billItem =billList.findIndex(o => o.id == this.id)
  if(billItem == -1){
  item.qty = 1;
    billList.push(item)
  } else{
    billList[billItem].qty += 1
  }
  console.log(billList)
  printbill(billList)
}



for(let i=0; i < itemList.length;i++){
  itemList[i].addEventListener("click", addFun)
}


let billListDiv = document.getElementById('billListDiv');

function printbill(data){
  let totaldiv = document.getElementById('total')
let total = 0;
  let text =''
 for(let x in data){
  text += `<tr>
                    <th scope="row">${x}</th>
                    <td>${data[x].name}</td>
                    <td>${data[x].qty}</td>
                    <td>${data[x].price}</td>
                    <td>${data[x].qty * data[x].price}</td>
                  </tr>`
                  total += data[x].qty * data[x].price

 }
 
billListDiv.innerHTML = text
totaldiv.innerHTML = total
}



let crBtn = document.getElementById("cr")
let cashBtn = document.getElementById("cash")
let billToName = document.getElementById("bill_to_name")
let billToAmount = document.getElementById("bill_amount")
let itemBillList = document.getElementById("item_list")
let payBy = document.getElementById("pay_by")

crBtn.addEventListener("click",submit)
cashBtn.addEventListener("click",submit)
 

function submit(){
  
billToName.value= document.getElementById("bill_name").value
billToAmount.value= document.getElementById("total").innerText
payBy.value=this.value
itemBillList.value =  JSON.stringify(billList);

document.getElementById("salesForm").submit();
  
}





const nameData = await axios('/dataEmployee');

let names = nameData.data.data;
let searchInput = document.getElementById('bill_name')
const div = document.getElementById("myDropdown");


const div2 = document.getElementById("myDropdown_2");
let searchnameInput = document.getElementById('Search_name');

// searchInput.onkeyup(searcharr)
searchInput.onkeyup = function (){searcharr(div,names)}
searchnameInput.onkeyup = function (){searchnamearr(div2,data)}

function searcharr(outdiv,namelist){

  let query = searchInput.value;
  
  
  
  let output=[]
  let text = ''
  for(let ele in namelist){
    if(namelist[ele].name.toLowerCase().includes(query.toLowerCase()) )
    output.push(namelist[ele])
  }
  for (let name in output){
    text += `<li onclick='select("${output[name].name}")'> ${output[name].name} </li>`
  }
  outdiv.innerHTML = text
  outdiv.classList.add("show");
  }



  function searchnamearr(outdiv,namelist){
  
  let query = searchnameInput.value;
  
  console.log(namelist)
  
  let output=[]
  let text = ''
  for(let ele in namelist){
    if(namelist[ele].name.toLowerCase().includes(query.toLowerCase()) )
    output.push(namelist[ele])
  }
  listPrint(output)
  console.log(output)
  for (let name in output){
    text += `<li onclick='selectname("${output[name].name}")'> ${output[name].name} </li>`
  }
  outdiv.innerHTML = text
  outdiv.classList.add("show");
  
let itemList = document.getElementsByClassName('addToList')
for(let i=0; i < itemList.length;i++){
  itemList[i].addEventListener("click", addFun)
}

  }



