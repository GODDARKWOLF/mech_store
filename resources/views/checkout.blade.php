<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>checkout</title>
</head>
<body>
    
    <p>Information > Shipping > Payment</p>

    <div>

        <h2>Contact Information</h2>
        <textarea name="email" rows="2" cols="40" placeholder="Email"></textarea><br>
    </div>


    <h2>Shipping Address</Address></h2>
    
    <div>
        <form action="">
            
            

            <textarea name="First name" rows="2" cols="40" placeholder="First name"></textarea>

            <textarea name="Last name" rows="2" cols="40" placeholder="Last name"></textarea><br>

            <textarea name="Address" rows="2" cols="40" placeholder="Address"></textarea><br>

            <textarea name="Country/Region" rows="2" cols="20" placeholder="Country/State"></textarea>

            <textarea name="City" rows="2" cols="20" placeholder="City"></textarea>

            <textarea name="Zip Code" rows="2" cols="20" placeholder="Zip Code"></textarea><br>

            <textarea name="Phone" rows="2" cols="20" placeholder="Phone"></textarea><br>
           
        

        </form>



    </div>
    <div >

        <h2> Payment Method</h2>
        <form action="">
        <input type="radio" name="payment" value="Direct Bank Transfer">Direct Bank Transfer<br>
        <input type="radio" name="payment" value="Paypal">Paypal<br>
        <input type="radio" name="payment" value="Credit card">Credit card<br>
        <input type="radio" name="payment" value="Cash-on-delivery">Cash-on-delivery<br>
        <button type="submit" >Purchase</button>
        </form>
    </div>
    
</body>
</html>