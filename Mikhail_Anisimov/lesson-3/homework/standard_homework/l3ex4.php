 <!DOCTYPE html>
 <html lang="ru">
 <head>
   <meta charset="UTF-8">
   <title>Document</title>
 </head>
 <body>
   
  <?php 

$alphabet = [ 'а' => 'a',
              'б' => 'b',
              'в' => 'v',
              'г' => 'g',
              'д' => 'd',
              'е' => 'ye',
              'ё' => 'yo',
              'ж' => 'zh',
              'з' => 'z',
              'и' => 'i',
              'к' => 'k',
              'л' => 'l',
              'м' => 'm',
              'н' => 'n',
              'о' => 'o',
              'п' => 'p',
              'р' => 'r',
              'с' => 's',
              'т' => 't',
              'у' => 'u',
              'ф' => 'f',
              'х' => 'h',
              'ц' => 'ts',
              'ч' => 'ch',
              'ш' => 'sch',
              'щ' => 'shch',
              'ь' => '\'',
              'ъ' => '\'',
              'ы' => 'y',
              'э' => 'e',
              'ю' => 'yu',
              'я' => 'ya'
              ];



function translit ( $str ) {
  global $alphabet;
  $length = mb_strlen ($str, 'UTF-8' );
  $str = strtolower ( $str );
    for ( $i = 0; $i <= $length; $i++ ){
      var_dump ($str[$i]);
      foreach ( $alphabet as $input => $output ) {
        if ( $str[$i] === $input ) {
          print_r ( $output );
        }
      }
    }
  }           

translit ("Привет");   

 ?>



 </body>
 </html>