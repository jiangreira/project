<?php
require_once('../library.php');
switch ($_GET['prod']) {
    case 'add';
        // print_r($_POST);
        print_r($_POST['prodspec']['color']);
        break;
}
$ary=array(
    'a'=>array(1,2,3),
    'b'=>array(4,5,6),
    'c'=>array(7,8,9)
  );
  print_r($ary);
  print_r(array_column($ary,1));

?>

<!-- Array
(
    [prodname] => 123
    [maincate] => 19
    [subcate] => 23
    [prodshortdesc] => 156
    [prodspec] => Array
        (
            [color] => Array
                (
                    [0] => 4564
                    [1] => 456
                )

            [size] => Array
                (
                    [0] => 465
                    [1] => 456
                )

            [spec] => Array
                (
                    [0] => 4564
                    [1] => 456
                )

            [price] => Array
                (
                    [0] => 465
                    [1] => 456
                )

            [mprice] => Array
                (
                    [0] => 465
                    [1] => 456
                )

            [nprice] => Array
                (
                    [0] => 465
                    [1] => 465
                )

        )

    [prodpic] => Array
        (
            [0] => 62884.jpg
            [1] => 1577676138381.jpg
            [2] => 157647497390063.png
        )

    [proddesc] =>  -->