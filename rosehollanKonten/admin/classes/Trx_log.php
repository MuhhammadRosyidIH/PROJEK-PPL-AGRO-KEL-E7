<?php 
session_start();
/**
 * ALTER TABLE products ADD product_qty INT(11) NOT NULL AFTER `product_price`;
 	UPDATE `products` SET product_qty = 1000 WHERE 1;

	CREATE TABLE `products` (
 `product_id` int(100) NOT NULL AUTO_INCREMENT,
 `product_cat` int(11) NOT NULL,
 `product_brand` int(100) NOT NULL,
 `product_title` varchar(255) NOT NULL,
 `product_price` int(100) NOT NULL,
 `product_qty` int(11) NOT NULL,
 `product_desc` text NOT NULL,
 `product_image` text NOT NULL,
 `product_keywords` text NOT NULL,
  CONSTRAINT fk_product_cat FOREIGN KEY fk_product_cat (product_cat) REFERENCES categories(cat_id),
    CONSTRAINT fk_product_brand FOREIGN KEY fk_product_brand (product_brand) REFERENCES brands(brand_id),
 PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1
 	
 */
class Trx_log
{
	
	private $con;

	function __construct()
	{
		include_once("Database.php");
		$db = new Database();
		$this->con = $db->connect();
	}

	public function getTrx_log(){
		$q = $this->con->query("SELECT t.id, t.activity, t.income, t.outcome, t.date, t.description, t.description FROM trx_log t");
		
		$trx_log = [];
		if ($q->num_rows > 0) {
			while($row = $q->fetch_assoc()){
				$trx_log[] = $row;
			}
		}

		return ['status'=> 202, 'message'=> $trx_log];
	}
}

if (isset($_POST['GET_TRX_LOG'])) {
	$t = new Trx_log();
	echo json_encode($t->getTrx_log());
	exit();
	
}

?>

	// public function addProduct($product_name,
	// 							$product_desc,
	// 							$product_qty,
	// 							$product_price,
	// 							$product_keywords,
	// 							$file){


// 		$fileName = $file['name'];
// 		$fileNameAr= explode(".", $fileName);
// 		$extension = end($fileNameAr);
// 		$ext = strtolower($extension);

// 		if ($ext == "jpg" || $ext == "jpeg" || $ext == "png") {
			
// 			//print_r($file['size']);

// 			if ($file['size'] > (1024 * 2)) {
				
// 				$uniqueImageName = time()."_".$file['name'];
// 				if (move_uploaded_file($file['tmp_name'], $_SERVER['DOCUMENT_ROOT']."/rosehollan/product_images/".$uniqueImageName)) {
					
// 					$q = $this->con->query("INSERT INTO `products`(`product_title`, `product_qty`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES ('$product_name', '$product_qty', '$product_price', '$product_desc', '$uniqueImageName', '$product_keywords')");

// 					if ($q) {
// 						return ['status'=> 202, 'message'=> 'Product Added Successfully..!'];
						
// 					}else{
// 						return ['status'=> 303, 'message'=> 'Failed to run query'];
// 					}

// 				}else{
// 					return ['status'=> 303, 'message'=> 'Failed to upload image'];
// 				}

// 			}else{
// 				return ['status'=> 303, 'message'=> 'Large Image ,Max Size allowed 2MB'];
// 			}

// 		}else{
// 			return ['status'=> 303, 'message'=> 'Invalid Image Format [Valid Formats : jpg, jpeg, png]'];
// 		}

// 	}


// 	public function editProductWithImage($pid,
// 										$product_name,
// 										$product_desc,
// 										$product_qty,
// 										$product_price,
// 										$product_keywords,
// 										$file){


// 		$fileName = $file['name'];
// 		$fileNameAr= explode(".", $fileName);
// 		$extension = end($fileNameAr);
// 		$ext = strtolower($extension);

// 		if ($ext == "jpg" || $ext == "jpeg" || $ext == "png") {
			
// 			//print_r($file['size']);

// 			if ($file['size'] > (1024 * 2)) {
				
// 				$uniqueImageName = time()."_".$file['name'];
// 				if (move_uploaded_file($file['tmp_name'], $_SERVER['DOCUMENT_ROOT']."/rosehollan/product_images/".$uniqueImageName)) {
					
// 					$q = $this->con->query("UPDATE `products` SET 
// 										`product_title` = '$product_name', 
// 										`product_qty` = '$product_qty', 
// 										`product_price` = '$product_price', 
// 										`product_desc` = '$product_desc', 
// 										`product_image` = '$uniqueImageName', 
// 										`product_keywords` = '$product_keywords'
// 										WHERE product_id = '$pid'");

// 					if ($q) {
// 						return ['status'=> 202, 'message'=> 'Product Modified Successfully..!'];
// 					}else{
// 						return ['status'=> 303, 'message'=> 'Failed to run query'];
// 					}

// 				}else{
// 					return ['status'=> 303, 'message'=> 'Failed to upload image'];
// 				}

// 			}else{
// 				return ['status'=> 303, 'message'=> 'Large Image ,Max Size allowed 2MB'];
// 			}

// 		}else{
// 			return ['status'=> 303, 'message'=> 'Invalid Image Format [Valid Formats : jpg, jpeg, png]'];
// 		}

// 	}

// 	public function editProductWithoutImage($pid,
// 										$product_name,
// 										$product_desc,
// 										$product_qty,
// 										$product_price,
// 										$product_keywords){

// 		if ($pid != null) {
// 			$q = $this->con->query("UPDATE `products` SET 
// 										`product_title` = '$product_name', 
// 										`product_qty` = '$product_qty', 
// 										`product_price` = '$product_price', 
// 										`product_desc` = '$product_desc',
// 										`product_keywords` = '$product_keywords'
// 										WHERE product_id = '$pid'");

// 			if ($q) {
// 				return ['status'=> 202, 'message'=> 'Product updated Successfully'];
// 			}else{
// 				return ['status'=> 303, 'message'=> 'Failed to run query'];
// 			}
			
// 		}else{
// 			return ['status'=> 303, 'message'=> 'Invalid product id'];
// 		}
		
// 	}


// 	public function deleteProduct($pid = null){
// 		if ($pid != null) {
// 			$q = $this->con->query("DELETE FROM products WHERE product_id = '$pid'");
// 			if ($q) {
// 				return ['status'=> 202, 'message'=> 'Product removed from stocks'];
// 			}else{
// 				return ['status'=> 202, 'message'=> 'Failed to run query'];
// 			}
			
// 		}else{
// 			return ['status'=> 303, 'message'=>'Invalid product id'];
// 		}

// 	}
// }


// if (isset($_POST['GET_PRODUCT'])) {
// 	if (isset($_SESSION['admin_id'])) {
// 		$p = new Products();
// 		echo json_encode($p->getProducts());
// 		exit();
// 	}
// }


// if (isset($_POST['add_product'])) {

// 	extract($_POST);
// 	if (!empty($product_name) 
// 	&& !empty($product_desc)
// 	&& !empty($product_qty)
// 	&& !empty($product_price)
// 	&& !empty($product_keywords)
// 	&& !empty($_FILES['product_image']['name'])) {
		

// 		$p = new Products();
// 		$result = $p->addProduct($product_name,
// 								$product_desc,
// 								$product_qty,
// 								$product_price,
// 								$product_keywords,
// 								$_FILES['product_image']);
		
// 		header("Content-type: application/json");
// 		echo json_encode($result);
// 		http_response_code($result['status']);
// 		exit();


// 	}else{
// 		echo json_encode(['status'=> 303, 'message'=> 'Empty fields']);
// 		exit();
// 	}
	
// }


// if (isset($_POST['edit_product'])) {

// 	extract($_POST);
// 	if (!empty($pid)
// 	&& !empty($e_product_name) 
// 	&& !empty($e_product_desc)
// 	&& !empty($e_product_qty)
// 	&& !empty($e_product_price)
// 	&& !empty($e_product_keywords) ) {
		
// 		$p = new Products();

// 		if (isset($_FILES['e_product_image']['name']) 
// 			&& !empty($_FILES['e_product_image']['name'])) {
// 			$result = $p->editProductWithImage($pid,
// 								$e_product_name,
// 								$e_product_desc,
// 								$e_product_qty,
// 								$e_product_price,
// 								$e_product_keywords,
// 								$_FILES['e_product_image']);
// 		}else{
// 			$result = $p->editProductWithoutImage($pid,
// 								$e_product_name,
// 								$e_product_desc,
// 								$e_product_qty,
// 								$e_product_price,
// 								$e_product_keywords);
// 		}

// 		echo json_encode($result);
// 		exit();


// 	}else{
// 		echo json_encode(['status'=> 303, 'message'=> 'Empty fields']);
// 		exit();
// 	}



	
// }



// if (isset($_POST['DELETE_PRODUCT'])) {
// 	$p = new Products();
// 	if (isset($_SESSION['admin_id'])) {
// 		if(!empty($_POST['pid'])){
// 			$pid = $_POST['pid'];
// 			echo json_encode($p->deleteProduct($pid));
// 			exit();
// 		}else{
// 			echo json_encode(['status'=> 303, 'message'=> 'Invalid product id']);
// 			exit();
// 		}
// 	}else{
// 		echo json_encode(['status'=> 303, 'message'=> 'Invalid Session']);
// 	}


// }




// ?>