<x-nav2>
<hr>
@vite(['resources\js\components\bills.js'])


<div class="container align-middle mb-5 z-2  bg-body-tertiary position-raletive invisible" id="overlay"  >
  <div class="row mt-5 mb-5">
    <div class="col col-12">
      <div class=" align-middle">
        <form method="POST" action="/purchase">
          @csrf
          <h1 class="h3 mb-3 fw-normal">Bill</h1>
          <div class="row">
            <div class="form-floating col-6">
              <input type="text" class="form-control" name='name' placeholder="Name" id="name">
              <label for="floatingInput">Name</label>
            </div>
            <div class="form-floating col-6">
              <input type="number" class="form-control" name='amount' placeholder="Amount" id="amount">
              <label for="floatingInput">Amount</label>
            </div>
  
            <input type="text" class="form-control invisible" name='item_list' id="item_list">

            <button class="btn btn-primary w-100 py-2">Submit</button>
          </div>
        </form>
        <hr>
        <div id="itemDiv">
          <div class="row">
            <div class="form-floating col-4">
              <input type="text" class="form-control" name='name' id="item_name" placeholder="Item Name">
              <label for="floatingInput">Item Name</label>
            </div>
            <div class="form-floating col-4">
              <input type="number" class="form-control" name='price' id="price" placeholder="Price">
              <label for="floatingInput">Price</label>
            </div>
            <div class="form-floating col-4">
              <input type="number" id="qty" class="form-control" name='qty' placeholder="Qty">
              <label for="floatingInput">Qty</label>
            </div>
          </div>
        </div>
       

        <button class="btn btn-primary w-10 py-2 mb-5" id='addItem'>Add Item</button>
      </div>  
    </div>
  </div>
 
</div>

<div class="container mb-5">
<table class="table table-striped table-class hidden-sm hidden-xs mb-5 mt-5" id="data" >




    <hr>
	<tr>
		<th>#</th>
		<th>Name</th>
		<th>Amount</th>
		<th>Date</th>
	</tr>
 

		
	
	
	
</table>
</div>
<hr class='mb-5 pb-5'>



<hr>
</x-nav2>