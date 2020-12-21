<!DOCTYPE html>
<html>
<head>
	<title>
		Products
	</title>
	<link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
<?php require 'header.php';?>

<?php
$products = array(
  "Electronics" => array(
    "Television" => array(
      array(
        "id" => "PR001",
        "name" => "MAX-001",
		"brand" => "Samsung",
		"url" => "tv.gif",
		"width"=>"500px",
		"height" => "500px",
		"button" => "Add To Cart"
		
      ),
      array(
        "id" => "PR002",
        "name" => "BIG-301",
		"brand" => "Bravia",
		"url" => "tv.gif",
		"width"=>"500px",
		"height" => "500px",
		"button" => "Add To Cart"
      ),
      array(
        "id" => "PR003",
        "name" => "APL-02",
		"brand" => "Apple",
		"url" => "tv.gif",
		"width"=>"500px",
		"height" => "500px",
		"button" => "Add To Cart"
      )
    ),
    "Mobile" => array(
      array(
        "id" => "PR004",
        "name" => "GT-1980",
		"brand" => "Samsung",
		"url" => "https://source.unsplash.com/600x600/?xiaomi-phone",
		"button" => "Add To Cart"
      ),
      array(
        "id" => "PR005",
        "name" => "IG-5467",
		"brand" => "Motorola",
		"url" => "https://source.unsplash.com/600x600/?apple-iphone",
		"button" => "Add To Cart"
      ),
      array(
        "id" => "PR006",
        "name" => "IP-8930",
		"brand" => "Apple",
		"url" => "https://source.unsplash.com/600x600/?samsung-phone",
		"button" => "Add To Cart"
      )
    )
  ),
  "Jewelry" => array(
    "Earring" => array(
      array(
        "id" => "PR007",
        "name" => "ER-001",
		"brand" => "Chopard",
		"url" => "ear3.jpg",
		"button" => "Add To Cart"
      ),
      array(
        "id" => "PR008",
        "name" => "ER-002",
		"brand" => "Mikimoto",
		"url" => "ear4.jpg",
		"button" => "Add To Cart"
      ),
      array(
        "id" => "PR009",
        "name" => "ER-003",
		"brand" => "Bvlgari",
		"url" => "ear5.jpeg",
		"button" => "Add To Cart"
		
      )
    ),
    "Necklace" => array(
      array(
        "id" => "PR010",
        "name" => "NK-001",
		"brand" => "Piaget",
		"url" => "neck.jpg",
		"button" => "Add To Cart"
      ),
      array(
        "id" => "PR011",
        "name" => "NK-002",
		"brand" => "Graff",
		"url" => "neck.jpg",
		"button" => "Add To Cart"
		
		
      ),
      array(
        "id" => "PR012",
        "name" => "NK-003",
		"brand" => "Tiffany",
		"url" =>"neck.jpg",
		"button" => "Add To Cart"
      )
    )
  )
);


?>
<?php 
      foreach($products as $key => $subcat)
{echo '<div class="container bg-warning my-3 " ><h1>'.$key.'</h1></div>';
        foreach($subcat as $sub_key => $sub_value)
{
	
		echo '<div class="container bg-light text-info my-3 " >
		<center> <h1>'.$sub_key.'</h1></div><div class="container">  </center>
<div class="row">';
foreach($sub_value as $detail_key => $detail_val)
{
echo '<div class="col-sm my-3"><div class="card" >
<div class="container my-3" ><img class="card-img img-fluid"
src= '.$detail_val["url"].' style="
    width: 100%;
    height: 300px;
    
" alt="Card image cap"></div>

<div class="card-body " >
<center>
<h5 class="card-title " style = "font-size:30px;color:black ;font-style:bold;">'.$sub_key.'</h5>
<h6 style = "font-size:15px; ">'.$detail_val["id"].'</h6>
<h6 style = "font-size:15px;">'.$detail_val["name"].'</h6>
<h6 style = "font-size:15px;">'.$detail_val["brand"].'</h6>
<i class="fa fa-shopping-cart fa-4x" aria-hidden="true" style="margin-top:10px;">
<button class="button button1" style="margin-top:10px;margin-bottom:15px;  margin-left:10px;" >'.$detail_val["button"].'</button>
</i>
<a href="" class="btn btn-lg"><i class="far fa-heart fa-4x" style="margin-top:-5px;"></i></a>
</center>
</div>
</div></div>';
}

}
}
?>

</body>

<?php require 'footer.php';?>
</html>