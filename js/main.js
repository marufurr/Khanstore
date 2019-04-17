$(document).ready(function(){
	category();
	function category(){
		$.ajax({
			url		: "action.php",
			method	: "POST",
			data	:  {category:1},
			success	: function(data){
				$("#get_category").html(data);
			}
		})
	}
	
	

	brands();
	function brands(){
		$.ajax({
			url		: "action.php",
			method	: "POST",
			data	:  {brands:1},
			success	: function(data){
				$("#get_brand").html(data);
			}
		})
	}	
	products();
	function products(){
		$.ajax({
			url		: "action.php",
			method	: "POST",
			data	:  {products:1},
			success	: function(data){
				$("#get_product").html(data);
			}
		})
	}
	$("body").delegate(".category","click",function(event){
		event.preventDefault();
		var cid = $(this).attr('cid');
	
		$.ajax({
			url		: "action.php",
			method	: "POST",
			data	: {get_selected_category:1,category_id:cid},
			success	: function(data){
				$("#get_product").html(data);
			}
	
		})
	})

$("body").delegate(".selectBrand","click",function(event){
		event.preventDefault();
		var bid = $(this).attr('bid');
	
		$.ajax({
			url		: "action.php",
			method	: "POST",
			data	: {selectBrand:1,brand_id:bid},
			success	: function(data){
				$("#get_product").html(data);
			}
	
		})
	})

$("#search_btn").click(function(){
	var keyword = $("#search").val();
	if (keyword!="") {
		$.ajax({
			url: "action.php",
			method:"POST",
			data : {search:1,keyword:keyword},
			success: function(data){
				$("#get_product").html(data);
			}
		})
	}
})

$("#signup").click(function(event){
	event.preventDefault();
	$.ajax({
		url : "register.php",
		method : "POST",
		data :  $("form").serialize(),
		success: function(data){
			
			alert("#signup_msg").html(data);
		}
	})
})
$("#login").click(function(event){
	event.preventDefault();
	var email = $("#email").val();
	var pass = $("#password").val();
	$.ajax({
		url : "login.php",
		method : "POST",
		data : {userlogin:1,userEmail:email,userPassword:pass},
		success : function(data){
			if (data == "testing") {
				window.location.href = "profile.php";
			}
		}
	})
})
	
});