<!DOCTYPE html>
<html>
  <head>
    <title>Nmap Port Scanner</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta ch
  </head>
  <body bgcolor="black">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Viaoda+Libre&display=swap');
      body {
        margin: 0;
        padding: 0;
      }
      pre {
        color: yellow;
      }
      .h2 {
        font-family: 'Viaoda Libre', cursive;
        text-align: center;
        color: #fff;
        text-shadow:
        0 0 7px #fff,
        0 0 10px #fff,
        0 0 21px #fff,
        0 0 42px #f09,
        0 0 82px #f09,
        0 0 92px #f09,
        0 0 102px #f09,
        0 0 151px #f09;
        
      }

      input[type=text] {
  padding: 7px ;
  margin: 5px 0;
  border: 1px solid #000000;
  }
input[type=submit] {
  width: 100px;
  padding: 9px;
  margin: 5px 0;
  
  border: 2px solid #000000;
  outline: none;
   background-color:green;
   color:white;
    
}
    </style>
    <pre>
                           :::!~!!!!!:.
                  .xUHWH!! !!?M88WHX:.
                .X*#M@$!!  !X!M$$$$$$WWx:.
               :!!!!!!?H! :!$!$$$$$$$$$$8X:
              !!~  ~:~!! :~!$!#$$$$$$$$$$8X:
             :!~::!H!<   ~.U$X!?R$$$$$$$$MM!
             ~!~!!!!~~ .:XW$$$U!!?$$$$$$RMM!
               !:~~~ .:!M"T#$$$$WX??#MRRMMM!
               ~?WuxiW*`   `"#$$$$8!!!!??!!!
             :X- M$$$$       `"T#$T~!8$WUXU~
            :%`  ~#$$$m:        ~!~ ?$$$$$$
          :!`.-   ~T$$$$8xx.  .xWW- ~""##*"
.....   -~~:<` !    ~?T#$$@@W@*?$$      /`
W$@@M!!! .!~~ !!     .:XUW$W!~ `"~:    :
#"~~`.:x%`!!  !H:   !WM$$$$Ti.: .!WUn+!`
:::~:!!`:X~ .: ?H.!u "$$$B$$$!W:U!T$$M~
.~~   :X@!.-~   ?@WTWo("*$$$W$TH$! `
Wi.~!X$?!-~    : ?$$$B$Wu("**$RM!
$R@i.~~ !     :   ~$$$$$B$$en:``
?MXT@Wx.~    :     ~"##*$$$$M~
    </pre>
    <h2 class="h2">Nmap port Scanner</h2>
    <hr><center>
     
    <form action="" method="post">
      <input type="text" name="ip" placeholder="eg:127.0.0.1"/>
      <input type="submit" name="submit" value="Scan"/>
      <?php



if( isset( $_POST[ 'submit' ]  ) ) {
	
	$target = trim($_REQUEST[ 'ip' ]);
$substitutions = array(
    'php' => '',
    'she' => '',
    'wget' => '',
		'2'  => '',
		'3' => '',
'phtml' => '',
'htm' => '',
'>' => '',
'<' => '',
'touch' => '',
'rm' => '',
'cp' => '',
'mv' => '',
'curl' => '',
'%00' => '',
'pwd' => '',
		
	);
  $target = str_replace( array_keys( $substitutions ), $substitutions, $target );
$target = str_replace( array_keys( $substitutions ), $substitutions, $target );
$target = str_replace( array_keys( $substitutions ), $substitutions, $target );
$target = str_replace( array_keys( $substitutions ), $substitutions, $target );
$target = str_replace( array_keys( $substitutions ), $substitutions, $target );
$target = str_replace( array_keys( $substitutions ), $substitutions, $target );
$target = str_replace( array_keys( $substitutions ), $substitutions, $target );
$target = str_replace( array_keys( $substitutions ), $substitutions, $target );

	if( stristr( php_uname( 's' ), 'Windows NT' ) ) {

		$cmd = shell_exec( 'nmap -Pn' . $target );
	}
	else {

		$cmd = shell_exec( 'nmap -Pn'. $target );
	}

  echo '<font color="yellow">';
	echo "<pre>{$cmd}</pre>";
}

?>
    </form>
   </center>
   </body>
   </html>