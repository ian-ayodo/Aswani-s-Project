<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
    <title>Make an order</title>
</head>
<body>
<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Order Form</h2>
                    </div>
                    <p>Please fill this form and submit to Make an order.</p>
                    <form action="order_insert.php" method="post">
                        <div class="form-group">
                            <label>Menu</label>
                            <input type="text" name="menu" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Item Name</label>
                            <input type="text" name="item_name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Quantity</label>
                            <input type = "number" name="quantity" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>