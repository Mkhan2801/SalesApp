<x-nav2>




<div class="container mb-5">
<table class="table table-striped table-class hidden-sm hidden-xs mb-5 mt-5" id="data_table" >



    <hr>
	<tr>
		<th>#</th>
		<th>Name</th>
		<th>Price</th>
		<th>Qty</th>
	</tr>
 

		
	
	
	
</table>
</div>
<hr class='mb-5 pb-5'>



<script>
  
var data = {!! json_encode($data) !!};

console.log(data)
let root = document.getElementById('data_table')

for(let x in data){
         root.innerHTML +=`
         <td>01</td>
         <td>${data[x].name}</td>
     <td>${data[x].price}</td>
     <td>${data[x].qty}</td>
     
   `
      
        }


</script>


</x-nav2>