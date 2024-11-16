<x-nav2>
<hr>
@vite(['resources\js\components\tally.js'])

<div class="container mb-5">
<table class="table table-striped table-class hidden-sm hidden-xs mb-5 mt-5" id="data" >




    <hr>
	<tr>
		<th>#</th>
		<th>Name</th>
		<th>Amount</th>
		<th>Date</th>
		<th>CR/DR</th>
	</tr>
 

		
	
	
	
</table>
</div>

<hr>















<div class="d-flex bg-body-tertiary position-absolute top-50 start-50 translate-middle z-2 invisible"  style="height: 100vh; width:100vw" id="overlay">
<main class="container form-signin w-25 m-auto">
  <form class=" align-middle" method="POST" action="/addCash">
    @csrf
    <h1 class="h3 mb-3 fw-normal">Add Cash</h1>

    <div class="form-floating">
      <input type="text" class="form-control" name='name' placeholder="Name">
      <label for="floatingInput">Name</label>
    </div>
    <div class="form-floating">
      <input type="number" class="form-control" name='amount' placeholder="Amount">
      <label for="floatingInput">Amount</label>
    </div>

    <button class="btn btn-primary w-100 py-2" type="submit">Add</button>
  </form>
</main>
</div>


</x-nav2>