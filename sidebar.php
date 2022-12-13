<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
body {
  font-family: "Lato", sans-serif;
}
i{
    color:green;
    margin:0.6rem;

}

/* Fixed sidenav, full height */
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a,  .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover{
  color: #f1f1f1;
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: green;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div class="sidenav">
  <a href="#dashboard.php"><i class="fa-solid fa-bars-staggered"></i> Dashboard</a>
  <a href="category.php"><i class="fa-solid fa-wand-magic-sparkles"></i>category</a>
  <a href="items.php"><i class="fa-solid fa-cart-plus"></i>Items</a>
 
  <button class="dropdown-btn"><i class="fa-sharp fa-solid fa-gauge"></i> customer 
  <i class="fa-solid fa-caret-down text-light m-0"></i>
  </button>
  <div class="dropdown-container">
    <a href="addCustomer.php">Add New Customer</a>
    <a href="sells.php">Sells By Cash</a>
    <a href="createInvioce.php">Create Invioce</a>
    <a href="receicable.php">Receicable</a>
  </div>
  <button class="dropdown-btn"><i class="fa-solid fa-people-group"></i>Suplier 
  <i class="fa-solid fa-caret-down text-light m-0"></i>
  </button>
  <div class="dropdown-container">
    <a href="addNewSupleir.php">Add New Suplier</a>
    <a href="purchase.php">Purchase</a>
    <a href="payable.php">Payabal</a>
    <a href="receicable.php">Receicable</a>
  </div>
  <a href="expences.php"><i class="fa-solid fa-comments-dollar"></i>Expences</a>
  <a href="report.php"><i class="fa-solid fa-file-invoice-dollar"></i>Report</a>
  <a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i>Logout</a>
</div>



<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>

</body>
</html> 
