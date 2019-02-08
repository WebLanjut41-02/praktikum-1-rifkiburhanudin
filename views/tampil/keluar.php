<?php 
$this->load->view('main/header')
?>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-26">
						Welcome
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>
                    <table>
                    <th>NO</th>
                    <th>username</th>
                    <th>Password</th>
                    <?php for ($i=0; $i < count($data); $i++){
                        ?>
                        <tr>
                        <td><?=$i + 1; ?></td>
                        <td><input type="text" value="<? $data[$i]['username']?>" name= "username"></td>
                        <td><input type="text" value="<? $data[$i]['password']?>" name= "pass"></td>
                        </tr>
                    <?php }?>
                    }
                    </table>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
                            <a href="<?php echo base_url()?>index.php/tampil">Logout
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" href="#">
							Sign Up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

<?php 
$this->load->view('main/footer')
?>