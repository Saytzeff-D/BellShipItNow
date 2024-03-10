<?php
    include('header.php');
?>
<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<form>
                            <div class="col-md-2">
							<div class="form-group">
									<select class="form-control">
										<option value="Parcel">Parcel</option>
                                        <option value="Document">Document</option>
                                        <option value="Cosmetic">Cosmetic</option>
                                        <option value="Food">Food</option>
                                        <option value="Home Goods">Home Goods</option>
									</select>
									<span class="select-arrow"></span>
									<span class="form-label">Type</span>
								</div>
							</div>
                            <div class="col-md-3">
								<div class="form-group">
									<select class="form-control">
										<option value="Canada">Canada</option>
                                        <option value="UK">UK</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="France">France</option>
									</select>
									<span class="select-arrow"></span>
									<span class="form-label">Destination Country</span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Enter Address, zip, city or airport">
									<span class="form-label">Zipcode</span>
								</div>
							</div>
							
							<div class="col-md-3">
								<div class="form-group">
                                    <input class="form-control" type="number" placeholder="Enter in lbs">
									<span class="select-arrow"></span>
									<span class="form-label">Weight</span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<input class="form-control" type="number" required>
									<span class="form-label">Length</span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<input class="form-control" type="number" required>
									<span class="form-label">Width</span>
								</div>
							</div>
                            <div class="col-md-4">
								<div class="form-group">
									<input class="form-control" type="number" required>
									<span class="form-label">Height</span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-btn">
									<button class="submit-btn">Check rate</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
    include('footer.php');
?>