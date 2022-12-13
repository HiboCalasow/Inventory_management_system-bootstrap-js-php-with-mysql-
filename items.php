<?php
include("sidebar.php");
include("header.php");
include("db_connect.php");
?>
<div class="main">
    <div class="container-fluid mt-5">
        <div class="card">
            <div class="card-header p-1 bg-success text-white">item registration</div>
            <div class="card-body">
                <form action="item.php">
                    <label for="" class="form-label">Item Id</label>
                    <input type="text" name="itemId" class="form-control form-control-sm" readonly>
                <form action="item.php">
                    <label for="" class="form-label">Item Name</label>
                    <input type="text" name="itemName" class="form-control form-control-sm">
                  
                    <label for="" class="form-label">Category Name </label>
                    <select type="text" name="itemId" class="form-control form-control-sm">
                         <option value="Select category Name">Select Category Name</option>
                </select>
                    
                    <label for="" class="form-label">Description</label>
                    <input type="text" name="description" class="form-control form-control-sm">
                  
                    <label for="" class="form-label">Date Created</label>
                    <input type="date" name="dateCreated" class="form-control form-control-sm" >
                    
                    <input type="submit" value="Save Item" class="btn btn-primary btn-sm mt-2">

                    <a href="ItemView.php" class="btn btn-danger btn-sm mt-2">View Item</a>
                </form>
            </div>
        </div>
    </div>
</div>