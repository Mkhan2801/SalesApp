<div class="d-flex flex-nowrap">
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary " style="width: 25vw;">

    


      <div class="container p-3 my-3 bg-white mt-3">
	      <div class="bg-dark text-light rounded text-center text-uppercase mb-3" style="letter-spacing:.25rem;"><h1>Invoice</h1></div>
	        <div class="row">
		        <div class="col">
			        <address class="mb-1">
                <div class="font-weight-bold">Test Name</div>
                <div>**** </div>
                <div>*****</div>
			        </address>
			        <div>sample@test.com</div>
		        </div>
            <div class="col">
              <div class="">
                Invoce No. <span>0000</span>
              </div>   
            </div>
	        </div> <!-- end of row -->
          
          <hr>
	        
          <div class="row">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" id="bill_name">
            <div class="drpodown">
            <div id="myDropdown" class="dropdown-content">

            </div>
</div>
          </div>

          <div class="row">
            <div class="container table-responsive py-5"> 
              <table class="table table-bordered table-hover">
                <thead class="bg-dark text-light">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Item name</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Price</th>
                    <th scope="col">Total</th>
                  </tr>
                </thead>
                <tbody id='billListDiv'>
                  
                </tbody>
              </table>
              <hr>
              <div class="row">
                <div class="col">
                  Total: 
                </div>
                
                <div class="col text-end">
                  <span class="" id="total">000</span>
                </div>
              </div>
              
            </div>

          </div>

          <div class="row">
            <div class="d-grid gap-2 col-6 mx-auto">
              <button type="button" class="btn btn-outline-primary btn-lg btn-block" id="cash" value=1>
                Cash
              </button>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
              <button type="button" class="btn btn-outline-danger btn-lg btn-block" id="cr" value=0>
                Cr
              </button>
      
            </div>
          </div>
      
        </div> 
      </div> <!-- end of container -->

      <div class="b-example-divider b-example-vr"></div>
    
      {{$slot}}

      
<div class="d-flex position-absolute top-50 start-50 translate-middle z-2 invisible"  >
<form method="POST" action="/sales" id="salesForm">
          @csrf
          <h1 class="h3 mb-3 fw-normal">Bill</h1>
          <div class="row">
            <div class="form-floating col-6">
              <input type="text" class="form-control" name='name' placeholder="Name" id="bill_to_name">
              <label for="floatingInput">Name</label>
            </div>
            <div class="form-floating col-6">
              <input type="number" class="form-control" name='amount' placeholder="Amount" id="bill_amount">
              <label for="floatingInput">Amount</label>
            </div>
  
            <input type="text" class="form-control invisible" name='item_list' id="item_list">
            <input type="text" class="form-control invisible" name='pay_by' id="pay_by">

          </div>
        </form>

</div>
    </div>

</div>

