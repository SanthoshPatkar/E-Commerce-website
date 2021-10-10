<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (isset($_POST['buy'])) {
    $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
  }
}
?>

<div class="row">
    <div class="containerr">
        <div style="text-align:center">
            <h2>Placing Your Order</h2>
            <p>Please fill the details</p>
        </div>
        <div class="row">
            <div class="column">
                <img src="assests/place-ord.png" style="width:100%">
            </div>
            <div class="column">
                <form method="" action="confirm.php">
                    <label for="fname">Enter your Name <span style="color: red;">*</span></label>
                    <input type="text" id="fname" name="name" placeholder="Your Name.." required>
                    <label for="email">Enter Your E-mail <span style="color: red;">*</span></label><br/>
                    <input type="text" id="lname" name="Email" placeholder="Your Email.." required><br/>
                    <label for="email">Enter Your Phone Number <span style="color: red;">*</span></label><br/>
                    <input type="text" id="lname" name="Email" placeholder="Phone numberr.." required><br/>
                    <label for="address">Enter your Full Address <span style="color: red;">*</span></label>
                    <input type="text" id="address" name="address" placeholder="Your Address" required>
                    <input type="submit" name="buy" value="Buy Now">
                </form>
            </div>
        </div>
    </div>
</div>