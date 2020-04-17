<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Payment Gateway Using Php</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/0.4.2/sweet-alert.min.js"></script>
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/0.4.2/sweet-alert.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
		<style>
			label{
				font-weight: bold;
			}
			 .per-tree-block {
			    width: 100%;
			    float: none;
			    text-align: center;
			    display: inline-block;
			    font-family: "FedraSansStd-medium",sans-serif;
			    font-size: 2em;
			    font-weight: bold;
			    margin: 0;
			    margin-top: 19px;
			    color: #000056;
			    text-shadow: 4px 4px 8px black;
			}
			.radio {
			    float: left;
			    width: 100%;
			    height: 50px;
			    text-align: center;
			    padding-top: 12px;
			    border-radius: 6px;
			    border: solid 1.5px #0b0c7c;
			    background-color: #fff;
			    position: relative;
			}
			.settree {
			    display: block;
			    position: absolute;
			    top: 0px;
			    text-align: center;
			    left: 0;
			    border: none;;
			    padding: 5px;
			    font-family: "FedraSansStd-medium",sans-serif;
			    font-size: 1.125em;
			    font-weight: normal;
			    height: 48px;
			}
			input[type="text"],input[type="email"]{
				border: 1.5px solid #0b0c7c;
			}
			.text{
				color: #0b0c7c;
				text-shadow: 4px 4px 8px black;
			}
			.btnset{
				background: #0b0c7c;
				color: white;
			}
		</style>
	</head>
	<body class="bg-dark">
		<div class="container">
			<div class="row">
				<div class="col-md-12 p-5 display-4 text-capitalize text-center">
					<h3 class="text-white">Payment Gateway Using PHP</h3>
				</div>
			</div>
			<div class="row justify-content-center mt-3">
				<div class="col-md-8">
					<div class="card border-0">
						<div class="card-header bg-white">
							<h4 class="card-title text-center">
								MCA Foundation (Save Tree , Save India)
							</h4>
						</div>
						<div class="card-body">
							<form action="pay.php" method="post">
								<div class="row">
									<div class="col-md-6">
										<label for="">Name:</label>
										<div class="form-group">
											<input type="text" name="name" id="name" class="form-control" placeholder="Enter the name..." required>
										</div>
									</div>
									<div class="col-md-6">
										<label for="">Email:</label>
										<div class="form-group">
											<input type="email" name="email" id="email" class="form-control" placeholder="Enter the email..." required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please Enter Currect Email..">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<label for="">Phone No:</label>
										<div class="form-group">
											<input type="text" name="phone" id="phone" class="form-control" placeholder="Enter the phone..." required pattern=".{10,}" title="Only Ten or more Mobile Number ..">
										</div>
									</div>
									<div class="col-md-6">
										<div class="per-tree-block" id="per_tree_msg">₹ <span class="">99</span> per Tree
										</div>

									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<h5 class="text-center text">Please select the number of trees you would like to plant</h5>
									</div>
								</div>
								<div class="row justify-content-center mt-4">
									<div class="col-md-3 text-center">
										<div class="radio radio1" data="10">
                                           <div class="span">10 Trees</div>
                                        </div>
                                        Rs.<span id="amt">990</span>
									</div>
									<div class="col-md-3 text-center">
										<div class="radio radio2" data="50">
                                           <div class="span" >50 Trees</div>
                                        </div>
                                        Rs. <span id="amt">4950</span>
									</div>
									<div class="col-md-3 text-center">
										<div class="radio radio3" data="100">
                                           <div class="span" >100 Trees</div>
                                        </div>
                                        Rs. <span id="amt">9900</span>
									</div>
									<div class="col-md-3">
										<div class="radio">
                                           <div class="span">
                                           		<input type="text" id="choose_amt" class="form-control settree" placeholder="No. of trees.">
                                           </div>
                                           <span id="amt"></span>
                                        </div>
									</div>
								</div>
								<div class="row justify-content-center mt-4">
									<div class="col-md-12 text-center font-weight-bold">
										<input type="hidden" name="amt" id="amt1">
										Total Amount Rs: <span class="text" id="totol_show"></span>
									</div>
								</div>
								<div class="row mt-4">
									<div class="col-md-12 text-right">
										<button type="submit" name="payment" class="btn btnset font-weight-bold col-2">Continue 
											<i class="fas fa-sign-out-alt"></i>
										</button>
									</div>
								</div>
							</form>
						</div>
						<div class="card-footer bg-white">
							<h6>&copy;Design By Kishan Maurya</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>
			
			//first dive click
			$(document).on('click', '.radio1', function() {
				var id=$(this).attr('data');
				if (id!=null) {
					var total=id*99;
					$('#totol_show').html(total);
					$('#amt1').val(total);
					// alert(total)
					console.log(total);
					$('.radio2').css({
						'background': 'none',
						'color': '#0b0c7c'
					});
					$('.radio3').css({
						'background': 'none',
						'color': '#0b0c7c'
					});
					return $('.radio1').css({
						'background-color': '#0b0c7c',
						'color': 'white',
						'font-weight':'bold'
					});
				}
				
			});
			//second dive click
			$(document).on('click', '.radio2', function() {
				var id=$(this).attr('data');
				if (id!=null) {
					var total=id*99;
					$('#totol_show').html(total);
					$('#amt1').val(total);
					//alert(total)
					console.log(total);
					$('.radio1').css({
						'background': 'none',
						'color': '#0b0c7c'
					});
					$('.radio3').css({
						'background': 'none',
						'color': '#0b0c7c'
					});
					return $('.radio2').css({
						'background-color': '#0b0c7c',
						'color': 'white',
						'font-weight':'bold'
					});
				}
			});
			//third dive click
			$(document).on('click', '.radio3', function() {
				var id=$(this).attr('data');
				if (id!=null) {
					var total=id*99;
					$('#totol_show').html(total);
					$('#amt1').val(total);
					//alert(total)
					console.log(total);
					$('.radio1').css({
						'background': 'none',
						'color': '#0b0c7c'
					});
					$('.radio2').css({
						'background': 'none',
						'color': '#0b0c7c'
					});
					return $('.radio3').css({
						'background-color': '#0b0c7c',
						'color': 'white',
						'font-weight':'bold'
					});
				}
			});
			//input select amount click
			$(document).ready(function() {
				$('#choose_amt').keyup(function() {
					user_check();
				});
				function user_check(){
					var e_amt=$('#choose_amt').val();
					if (e_amt!=null) {
						var amt=e_amt*99;
						$('#amt1').val(amt);
						$('#totol_show').html(amt);
						console.log(amt);
						$('.radio1').css({
							'background': 'none',
							'color': '#0b0c7c'
						});
						$('.radio2').css({
							'background': 'none',
							'color': '#0b0c7c'
						});
						$('.radio3').css({
							'background': 'none',
							'color': '#0b0c7c'
						});
						return $('input.#choose_amt').css({
							'background-color': '#0b0c7c',
							'color': 'white',
							'font-weight':'bold'
						});
					}
				}
			});
		</script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>