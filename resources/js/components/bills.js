let heading = document.getElementById('addOn')
heading.innerHTML=`<button type="button" class="btn btn-primary btn-lg btn-block" id="addBtn"> Add Bill </button>`

let overlay = document.getElementById('overlay')
let overlayBtn = document.getElementById('addBtn')


overlayBtn.addEventListener("click" , function(){
    overlay.classList.toggle("invisible")
});


let addItem = document.getElementById("addItem")
let itemDiv = document.getElementById("itemDiv")
let List=[];

addItem.addEventListener("click",function(){
    
  let itemName = document.getElementById("item_name").value
  let itemPrice = document.getElementById("price").value
  let itemQty = document.getElementById("qty").value
  let itemlist = document.getElementById("item_list")
  
  if(itemName && itemPrice && itemQty){
    let item={name:itemName,price:itemPrice,qty:itemQty};
    List.push(item)

    itemDiv.innerHTML = `<div class="row">
      <div class="form-floating col-4">
        <input type="text" class="form-control" name='item_name' value="${itemName}" disabled>
        <label for="floatingInput">Item Name</label>
      </div>
      <div class="form-floating col-4">
        <input type="number" class="form-control" name='price' value="${itemPrice}" disabled>
        <label for="floatingInput">Price</label>
      </div>
      <div class="form-floating col-4">
        <input type="number" class="form-control" name='qty' value="${itemQty}" disabled>
        <label for="floatingInput">Qty</label>
      </div>
    </div> <hr>` + itemDiv.innerHTML

    itemlist.value = JSON.stringify(List);

  }

    
})

let root = document.getElementById('data')

          fetch('/purchaseData')
              .then(res=>res.json())
              .then(json=>
                  {
                    let data = json.data
                    for(let x in data){
                      let date = new Date(data[x].created_at).toDateString()
                      root.innerHTML +=`
                      <td>${x}</td>
                      <td>
                      <a href="/expendpur/${data[x].id}">${data[x].name}</a></td>
                      <td>${data[x].amount}</td>
                      <td>${date}</td>
                      
                  `
                    }
                  });

