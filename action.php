<?php 
include_once('db.php');
if (isset($_POST['category'])) {
	$category_query = "SELECT * FROM categories";
	$run_query = mysqli_query($con,$category_query);
	echo "
		<ul class='nav nav-pills nav-stacked'>
                    <li class='nav-item active'><a href='' class='nav-link'><h4>Categories</h4></a></li>
	";
	if (mysqli_num_rows($run_query) > 0) {
		while ($row = mysqli_fetch_array($run_query)) {
			$cid = $row['category_id'];
			$cat_name = $row['category_title'];

			echo "<li class='nav-item'><a href='' class='nav-link category' cid='$cid'>$cat_name</a></li>";
		}
		echo "</ul>";
	}

}

if (isset($_POST['brands'])) {
	$brand_query = "SELECT * FROM brands";
	$run_query = mysqli_query($con,$brand_query);
	echo "
		<ul class='nav nav-pills nav-stacked'>
                    <li class='nav-item active'><a href='' class='nav-link'><h4>Brand</h4></a></li>
	";
	if (mysqli_num_rows($run_query) > 0) {
		while ($row = mysqli_fetch_array($run_query)) {
			$bid = $row['brand_id'];
			$brand_name = $row['brand_title'];

			echo "<li class='nav-item'><a href='' class='nav-link selectBrand' bid = '$bid'>{$brand_name}</a></li>";
		}
		echo "</ul>";
	}
}

	if (isset($_POST['products'])) {
	$product_query = "SELECT * FROM products ORDER BY Rand() LIMIT 0,9";
	$run_query = mysqli_query($con,$product_query);
	echo "
		<ul class='nav nav-pills nav-stacked'>
                    <li class='nav-item'><a href='' class='nav-link'><h4></h4></a></li>
	";
	if (mysqli_num_rows($run_query) > 0) {
		while ($row = mysqli_fetch_array($run_query)) {
			$product_id = $row['product_id'];
			$product_category = $row['product_category'];
			$product_brand = $row['product_brand'];
			$product_title = $row['product_title'];
			$product_price = $row['product_price'];
			$product_description = $row['product_description'];
			$product_image = $row['product_image'];
			$product_keywords = $row['product_keywords'];
			
 			echo "<div class='col-md-4'>
                            <div class='panel panel-info'>
                                <div class='panel-heading'>$product_title</div>
                                <div class='panel-body'>
                               <img src='images/b1.jpg' style='height:200px' width='200px'>
                                </div>
                                <div class='panel-heading'>$product_price
                                    <button pid=$product_id' class='btn btn-danger'>AddToCart</button>
                                </div>
                            </div>
                        </div>";
		}
		echo "</ul>";
	}

}
if (isset($_POST['get_selected_category']) || isset($_POST['selectBrand']) || isset($_POST['search'])) {
	if (isset($_POST['get_selected_category'])) {
		$id = $_POST["category_id"];
		$sql = "SELECT * FROM products WHERE product_category = '$id'";
	}else if (isset($_POST['selectBrand'])) {
		$bid = $_POST["brand_id"];
		$sql = "SELECT * FROM products WHERE product_brand = '$bid'";
	}else{
		$keyword = $_POST["keyword"];
		$sql = "SELECT * FROM products WHERE product_keywords
		LIKE '%keyword%'";
	}
	
	$run_query = mysqli_query($con,$sql);
	while ($row = mysqli_fetch_array($run_query)) {
			$product_id = $row['product_id'];
			$product_category = $row['product_category'];
			$product_brand = $row['product_brand'];
			$product_title = $row['product_title'];
			$product_price = $row['product_price'];
			$product_description = $row['product_description'];
			$product_image = $row['product_image'];
			$product_keywords = $row['product_keywords'];
			
 			echo "<div class='col-md-4'>
                            <div class='panel panel-info'>
                                <div class='panel-heading'>$product_title</div>
                                <div class='panel-body'>
                               <img src='images/b1.jpg' style='height:200px' width='200px'>
                                </div>
                                <div class='panel-heading'>$product_price
                                    <button pid=$product_id'>AddToCart</button>
                                </div>
                            </div>
                        </div>";
		}
		echo "</ul>";
		
	}



