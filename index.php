<? function checkSex($name) { 
    if(preg_match('#^[a-ząćęłńóśźżĄĆĘŁŃÓŚŹŻ ]*$#is', $name)==true) {
        $name = strtolower($name);

        if(($name == "kuba") || ($name == "bonawentura") || ($name == "kosma") || ($name == "jarema") || ($name == "barnaba") || ($name == "zawisza")) $sex = "Imię męskie";
        
        else if(substr($name, -1)=="a") $sex = "Imię żeńskie";
                            
        else if(substr($name, -1)!="a") $sex = "Imię męskie";
                            
        else $sex = "?";
    } 
    else {
        $sex = "Musisz podać imię";
    }
return $sex;
} ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Imię żeńskie czy męskie - mzielinski.pl</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
      <div class="container">
      <div class="col-md-6 col-md-offset-3">
        <h1 class="text-center">Imię żeńskie czy męskie mzielinski.pl</h1>
        <p class="lead text-center">Funkcja rozróżniająca płeć po imieniu.<br>Skrypt przydatny przy walidacji.</p>
        
        <form  method="post" action="">
            <div class="row">
                <label>Wprowadź Imię:</label>
				<input class="form-control auto" type="text" id="name" name="name" /> <br>
                <div class="buttons-box clearfix">
                    <input class="btn btn-info btn-lg pull-right" type="submit" value="Sprawdź" name="check">
                </div>
            </div>
		  </form>
          <b><? if (isset($_POST['check'])) {
                    if(!empty($_POST['name'])) {
                        echo checkSex($_POST['name']);
                    }
                }?>
         </b>
        <div class="footer text-center">Do you like it? Visit my page <a href="http://mzielinski.pl">mzielinski.pl</a> My work is usefull for you? Support me by BTC  <div id="coinwidget-bitcoin-14Qaw1shp8ccg2n5jxzHD1DSfyTkYoKNqe"></div></div>    
    </div>
    </div>
        <script src="//blockr.io/js_external/coinwidget/coin.js"></script>
    <script>
			CoinWidgetCom.go({
				wallet_address: '14Qaw1shp8ccg2n5jxzHD1DSfyTkYoKNqe',
				currency: 'bitcoin',
				counter: 'hide',
				lbl_button: 'Donate',
				lbl_count: 'donations',
				lbl_amount: 'BTC',
				lbl_address: 'Use address below to donate. Thanks!',
				qrcode: true,
				alignment: 'bl',
				decimals: 8,
				size: "big",
				color: "dark",
				countdownFrom: "1000",
				element: "#coinwidget-bitcoin-14Qaw1shp8ccg2n5jxzHD1DSfyTkYoKNqe",
				onShow: function(){},
				onHide: function(){}
			});
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>	
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>