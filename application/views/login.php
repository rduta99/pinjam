	<div class="container">
		<div class="row">
			<div class="col-md-4">
				
			</div>
			<div class="col-md-4">
				<?= $this->session->flashdata('msg') ?>
				<div class="card mt-4 mb-4 bg-unique">
					<div class="card-body">
						<div class="view overlay">
							<img src="<?= base_url() ?>assets/img/bem.png" class="card-img-top">
							<div class="mask rgba-white-slight"></div>
						</div>
						<?= form_open('login') ?>
							<div class="md-form">
								<i class="fa fa-user prefix grey-text"></i>
								<input type="text" name="user" id="username" class="form-control">
								<label for="username">Username</label>
							</div>
							<div class="md-form">
								<i class="fa fa-lock prefix grey-text"></i>
								<input type="password" name="pass" id="password" class="form-control">
								<label for="password">Password</label>
							</div>
							<div class="text-center mt-4">
								<button class="btn btn-primary" type="submit">Log In</button>
							</div> 
						<?= form_close() ?><br>
					<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					    <div class="modal-dialog" role="document">
					        <div class="modal-content">
					            <div class="modal-header text-center">
					                <h4 class="modal-title w-100 font-weight-bold">Sign up</h4>
					                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					                    <span aria-hidden="true">&times;</span>
					                </button>
					            </div>
					            <div class="modal-body mx-3">
					            	<form action="register.php" method="POST">
						                <div class="md-form mb-5">
						                    <i class="fa fa-user prefix grey-text"></i>
						                    <input name="user" type="text" id="orangeForm-name" class="form-control validate">
						                    <label data-error="wrong" data-success="right" for="orangeForm-name">Username</label>
						                </div>
						                <div class="md-form mb-5">
						                    <i class="fa fa-envelope prefix grey-text"></i>
						                    <input name="pass" type="password" id="orangeForm-email" class="form-control validate">
						                    <label data-error="wrong" data-success="right" for="orangeForm-email">Password</label>
						                </div>

						                <div class="md-form mb-4">
						                    <i class="fa fa-lock prefix grey-text"></i>
						                    <input name="pass2" type="password" id="orangeForm-pass" class="form-control validate">
						                    <label data-error="wrong" data-success="right" for="orangeForm-pass">Re-type Password</label>
						                </div>
						            </form>
					            </div>
					            <div class="modal-footer d-flex justify-content-center">
					                <button class="btn btn-orange">Sign up</button>
					            </div>
					        </div>
					    </div>
					</div>
					<p class="text-muted" align="right">Not a Member? <a href="" data-toggle="modal" data-target="#modalRegisterForm">Sign-Up</a></p>
				</div>
			</div>
			<div class="col-md-4">
				
			</div>
		</div>
	</div>