<?php require_once('Connection/dbset.php'); ?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<?php require_once('headfile.php'); ?>
	<script language="javascript" src="commlib.js"></script>
</head>

<body style="padding-top: 58px">
	<!-- body code goes here -->
	<section id="mainmenu">
		<?php require_once('navbar.php'); ?>
	</section>
	<hr>
	<?php 
	if(isset($_POST['formctl']) and $_POST['formctl']=='reg'){
		$email=$_POST['email'];
		$pw1=md5($_POST['pw1']);
		$cname=$_POST['cname'];
		$tssn=$_POST['tssn'];
		$birthday=$_POST['birthday'];
		$mobile=$_POST['mobile'];
		$myzip=$_POST['myZip']==''?NULL:$_POST['myZip'];
		$address=$_POST['address']==''?NULL:$_POST['address'];
		$uploadname=$_POST['uploadname']==''?NULL:$_POST['uploadname'];
		$insertsql="insert into member (email,pw1,cname,tssn,birthday,mobile,myzip,address,uploadname) value('".$email."','".$pw1."','".$cname."','".$tssn."','".$birthday."','".$mobile."','".$myzip."','".$address."','".$uploadname."')";
		echo "<h1>".$insertsql."</h1>";
		$result=mysqli_query($link,$insertsql);
		if($result){
			echo "<script language='javascript'>alert('謝謝您。資料已完成註冊！！');location.href='index.php';</script>";
		}
	}
	?>
	<section id="content">
		<!--新內容放這裡 -->
		<div class="container text-center">
			<div class="row">
				<div class="col-xl-12">
					<h1>會員註冊頁面</h1>
					<p>請輸入相關資料，*為必要輸入欄位！</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-8 offset-2 text-left">
					<form id="reg" name="reg" action="register.php" method="post">
						<div class="row form-group-lg">
							<input type="text" class="form-control" name="email" id="email" placeholder="*請輸入email帳號"/>
						</div><br>
						<div class="row form-group-lg">
							<input type="password" class="form-control" name="pw1" id="pw1" placeholder="*請輸入密碼"/>
						</div><br>
						<div class="row form-group-lg">
							<input type="password" class="form-control" name="pw2" id="pw2" placeholder="*請再輸入密碼確認"/>
						</div><br>
						<div class="row form-group-lg">
							<input type="text" class="form-control" name="cname" id="cname" placeholder="*中文姓名"/>
						</div><br>
						<div class="row form-group-lg">
							<input type="text" class="form-control" name="tssn" id="tssn" placeholder="*身份證字號"/>
						</div><br>
						<div class="row form-group-lg">
							<input type="text" class="form-control" name="birthday" id="birthday" readonly onclick="WdatePicker({dateFmt:'yyyy-MM-dd'})" placeholder="*請選擇生日"/>
						</div><br>
						<div class="row form-group-lg">
							<input type="text" class="form-control" name="mobile" id="mobile" placeholder="*請輸入手機號碼"/>
						</div><br>
						<div class="row form-group-lg">
							<select name="myCity" id="myCity" class="form-control">
								<option value="">請選擇城市</option>
								<?php $City="select * from city where State=0";
					  	  $City_rs=mysqli_query($link,$City);
					  	  while($City_rows=mysqli_fetch_array($City_rs)){ ?>
								<option value="<?php echo $City_rows['AutoNo']; ?>">
									<?php echo $City_rows['Name']; ?>
								</option>
								<?php } ?>
							</select>
						</div>
						<br>
						<div class="row form-group-lg">
							<select name="myTown" id="myTown" class="form-control">
								<option value="">請選擇地區</option>
							</select>
						</div><br>
						<div class="row form-group-lg">
							<p id="zipcode" name="zipcode">郵遞區號：地址</p>
							<input type="hidden" name="myZip" id="myZip" value=""/>
							<input type="text" class="form-control" name="address" id="address" placeholder="*請輸入後續地址"/>
						</div><br>
						<div class="row form-group-lg">
							<p style="margin-bottom: 0px;">上傳相片圖示：</p>
							<input type="file" class="form-control" name="fileToUpload" id="fileToUpload" title="請上傳相片圖示：" accept="image/x-png,image/gif,image/jpeg">
							<button type="button" class="btn btn-danger" onclick="ajaxFileUpload();return false;" style="margin-top:5px;">開始上傳</button>
							<input type="hidden" id="uploadname" name="uploadname" value=""/>
							<img id="showimg" name="showimg" src="" style="display:none;" class="img-fluid"/>
						</div><br>
						<div class="row form-group-lg">
							<input type="hidden" id="captcha" name="captcha" value=""/>
							<a href="javascript:void(0);" title="按我認證碼更新" onClick="getcaptcha_img( 200, 50, 5, '44f91a', 'f7aa05', 'ffffff', 'captcha', '');">
								<script language="javascript">
									getcaptcha_img( 200, 50, 5, '44f91a', 'f7aa05', 'ffffff', 'captcha', 'new' );
								</script>
							</a>
							<input type="text" class="form-control" name="recaptcha" id="recaptcha" placeholder="＊請輸入認確碼：" />
						</div><br>
						<input type="hidden" id="formctl" name="formctl" value="reg">
						<div class="row ">
							<button type="submit" class="btn btn-success btn-lg mx-auto">送出</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<?php require_once('footer.php'); ?>
	<?php require_once('jsfile.php'); ?>
	<script src="jquery-1.11.3.min.js"></script>
	
	<script src="My97DatePicker/WdatePicker.js"></script>
	<script src="jquery.validate.js"></script>
	<script src="ajaxfileupload.js"></script>
	<script language="javascript">
		$( document ).ready( function () {
			$( '#myCity' ).change( function () {
				var CNo = $( '#myCity' ).val();
				$.ajax( {
					url: 'Town_ajax.php',
					type: 'post',
					dataType: 'json',
					data: {
						CNo: CNo
					},
					success: function ( da ) {
						if ( da.c == true ) {
							$( '#myTown' ).html( da.m );
							$( '#myZip' ).val( "" ); //避免重新選擇縣市後郵遞區號還存在，所以在重新選擇縣市後郵遞區號欄位清空
						} else {
							alert( "Database reponse error：" + da.m );
						}
					},
					error: function ( da ) {
						alert( "ajax request error" );
					}
				} );
			} );
			$( '#myTown' ).change( function () {
				var TNo = $( '#myTown' ).val();
				$.ajax( {
					url: 'Zip_ajax01.php',
					type: 'get',
					dataType: 'json',
					data: {
						TNo: TNo
					},
					success: function ( data ) {
						if ( data.c == true ) {
							$( '#myZip' ).val( data.Post );
							$( '#zipcode' ).html( data.Post + data.Cityname + data.Name );
						} else {
							alert( "Database reponse error：" + da.m );
						}
					},
					error: function ( data ) {
						alert( "ajax request error" );
					}
				} );
			} );

		} );
	</script>
	<script language="javascript">
		jQuery.validator.addMethod("tssn", function(value, element, param) {
			var tssn = /^[a-zA-Z]{1}[1-2]{1}[0-9]{8}$/;
			return this.optional(element) || (tssn.test(value));
		}, "身份證格式有誤！");
		
		jQuery.validator.addMethod("checkphone", function(value, element, param) {
			var checkphone = /^[0-9]{10}$/;
			return this.optional(element) || (checkphone.test(value));
		}, "電話格式有誤！");
		jQuery.validator.addMethod("captcha", function(value, element, param) {
			// var captcha = /^[0-9a-z_A-Z]{4}$/;
			var captcha = /^[0-9a-z_A-Z]{5}$/;
			return this.optional(element) || (captcha.test(value));
		}, "驗證碼格式有誤！");

		$('#reg' ).validate( {
			rules: {
				email: {
					required: true,
					email:true,
					remote: 'checkemail.php'
				},
				pw1: {
					required: true,
					maxlength:20,
					minlength:4, 
				},
				pw2: {
					required: true,
					equalTo: '#pw1'
				},
				cname: {
					required: true
				},
				tssn: {
					required: true,
					tssn:true
				},
				birthday: {
					required: true,
				},
				mobile: {
					required: true,
					checkphone: true,
				},
				recaptcha: {
					required: true,
					equalTo: '#captcha',
					captcha: true
				}
			},
			messages: {
				email:{
					required:'email信箱不得為空白',
					email:'email信箱格式有誤',
					remote:'email信箱已經註冊'
				},
				pw1: {
					required: '密碼不得為空白',
					maxlength: '密碼最大長度為20位(4-20位英文字母與數字的組合)',
					minlength: '密碼最小長度為4位(4-20位英文字母與數字的組合)'
				},
				pw2: {
					required: '確認密碼不得為空白',
					equalTo: '兩次輸入的密碼必須一致！'
				},
				cname: {
					required: '使用者名稱不得為空白',
				},
				tssn: {
					required: '身份證ID不得為空白',
					tssn: '身份證ID格式有誤'
				},
				birthday: {
					required: '生日不得為空白'
				},
				mobile: {
					required: '手機號碼不得為空白',
					checkphone: '手機號碼格式有誤'
				},
				recaptcha: {
					required: '驗證碼不得為空！',
					equalTo: '驗證碼需相同！'
				}
			},
			// errorPlacement: function ( error, element ) {}
		} );

	
	</script>
	<script language="javascript">
	function ajaxFileUpload(){
		var fileName = $('#fileToUpload').val();
		var idxDot = fileName.lastIndexOf(".") + 1;
		var extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
		if (extFile=="jpg" || extFile=="jpeg" || extFile=="png"|| extFile=="gif"){
			$.ajaxFileUpload({
				url:'doajaxfileupload01.php',
				secureuri:false,
				fileElementId:'fileToUpload',
				dataType: 'json',
				success: function (data){
					if(data.success=='true'){
						alert(data.msg);
						$('#uploadname').val(data.filename[0]);
						$('#showimg').attr({'src':'uploads/'+data.filename[0],'style':'display:block;'});
					} else {
						alert(data.error);
					}
				},
				error: function (data, status, e){
					alert(e);
				}
			})
		}else{
			alert("目前只支援jpg,jpeg,png,gif檔案格式上傳！");
		}
		return false;
	} 
	</script>
	
	
</body>
</html>