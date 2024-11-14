  
fetch('/salesData')
.then(res=>res.json())
.then(json=>
    {
        let root = document.getElementById('data')
        
        root.innerHTML=`
        <td>01</td>
        <td>${json.name}</td>
		<td>${json.amount}</td>
		<td>${json.date}</td>
        <td>${json.pay ? '<button  class="btn btn-outline-success" >Cash</button>'
		:'<button class="btn btn-outline-danger">Cr</button>'}</td>
	`

    });


    let heading = document.getElementById('addOn')
    heading.innerHTML=`<button type="button" class="btn btn-primary btn-lg btn-block" id="addBtn"> Date Search </button>`
    

    let overlay = document.getElementById('overlay')
    let overlayBtn = document.getElementById('addBtn')
    
    
    overlayBtn.addEventListener("click" , function(){
        overlay.classList.toggle("invisible")
      })




      $('.input-daterange').datepicker({
        format: 'dd/mm/yy',
      })
      .on({
        changeDate: function() {
          console.log('From :', $('input[name="from"]').val() );
          console.log('To :', $('input[name="to"]').val() );
        }
      });


      