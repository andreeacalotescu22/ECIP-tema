<?
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
  $file = '/tmp/sample-app.log';
  $message = file_get_contents('php://input');
  file_put_contents($file, date('Y-m-d H:i:s') . " Received message: " . $message . "\n", FILE_APPEND);
}
else
{
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Rase de pisici - ECIP</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://wwf.panda.org/knowledge_hub/endangered_species/" type="text/css">
    <link rel="icon" href="http://icons.iconarchive.com/icons/mattahan/umicons/48/Mics-Bullet-2-icon.png" type="image/ico" >
    <link rel="shortcut icon" href="http://icons.iconarchive.com/icons/mattahan/umicons/48/Mics-Bullet-2-icon.png" type="image/ico" >
    <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="/styles2.css" type="text/css">
</head>
<body>
    <section class="congratulations">
        <h1>Rase de Pisici</h1>
        <p></p>
		<p></p>
		<p></p>
        <p>Rasele mele preferate de PISICI <?= phpversion() ?></p>
    </section>

    <section class="instructions">
        <h2>Persana</h2>
        <ul>
            <li><a href="https://www.pinterest.com/Brianna_MD/white-persian-cats/">Persana Alba</a></li>
            <li><a href="https://www.pinterest.com/pin/447404544222064964/">Persana Albastra</a></li>
            <li><a href="https://cats.lovetoknow.com/cat-breeds/chinchilla-persian-cats">Persana Chinchilla</a>
            <li><a href="https://www.sweetpurrfections.com/2017/01/whos-who-telling-us-apart.html">Persana Argintie</a></li>
        </ul>

        <h2>Scottish Fold</h2>
        <ul>
            <li><a href="https://www.pinterest.com/pin/159596380527931803/?d=t&mt=signupOrPersonalizedLogin">Scottish Fold Albastra</a></li>
            <li><a href="https://www.gettyimages.com/detail/photo/cute-kitten-royalty-free-image/95712916?adppopup=true">Scottish Fold Bej</a></li>
            <li><a href="https://www.gettyimages.com/detail/photo/kitten-playing-royalty-free-image/625701582?adppopup=true">Scottish Fold Blue Point</a></li>
        </ul>
    </section>

    <!--[if lt IE 9]><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
</body>
</html>
<? 
} 
?>
