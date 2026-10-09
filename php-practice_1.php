<?php
// Q1 変数と文字列
$name = '高木';
echo '私の名前は「' . $name . '」です。';



// Q2 四則演算
$num = 5 * 4;
echo "$num\n";
$num = $num / 2;
echo $num;



// Q3 日付操作
echo date('現在時刻は、Y年m月d日 H時i分s秒です。');



// Q4 条件分岐-1 if文
$device = 'mac';

if ($device === 'windows') {
    echo '使用OSは、windowsです。';
} else { 
    if ($device === 'mac') {
        echo '使用OSは、macです。';
        } else { 
            echo 'どちらでもありません';
        }
};



// Q5 条件分岐-2 三項演算子
$age = 23;

$msg = ($age < 18) ? '未成年です。' : '成人です';

echo $msg;



// Q6 配列
$ary = ['東京都', '茨城県', '群馬県', '栃木県', '千葉県', '埼玉県', '神奈川県',];
echo $ary[3] . 'と' . $ary[4] . 'は関東地方の都道府県です。';


$ary = ['東京都', '茨城県', '群馬県', '栃木県', '千葉県', '埼玉県', '神奈川県'];
echo "{$ary[3]}と{$ary[4]}は関東地方の都道府県です。";



// Q7 連想配列-1
$ary = ['tokyo' => '新宿区','kanagawa' => '横浜市','chiba' => '千葉市', 'saitama' => 'さいたま市', 'tochigi' => '宇都宮市', 'gunma' => '前橋市', 'ibaraki' => '水戸市'];

foreach ($ary as $ary) {
    echo $ary . "\n";
}



// Q8 連想配列-2
$ary = ['東京都' => '新宿区','神奈川県' => '横浜市','千葉県' => '千葉市', '埼玉県' => 'さいたま市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市'];
$keys = array_keys($ary);   /*連想配列のキーの変数*/

/* foreachで配列を一つずつ取得して値をxに代入してif文で判断 */
foreach ($ary as $x) {
    if ($x === 'さいたま市') {
        echo "{$keys[3]}の県庁所在地は、{$x}です。";
    }
}



// Q9 連想配列-3
$ary = ['東京都' => '新宿区','神奈川県' => '横浜市','千葉県' => '千葉市', '埼玉県' => 'さいたま市', '栃木県' => '宇都宮市', '群馬県' => '前橋市', '茨城県' => '水戸市'];
$keys = array_keys($ary);

$ary['愛知県'] = '名古屋市';  /*関東以外の要素追加 */
$ary['大阪府'] = '大阪市';

foreach ($ary as $ken => $shi) {
    switch ($ken) {
        case '東京都':
        case '神奈川県':
        case '千葉県':
        case '埼玉県':
        case '栃木県':
        case '群馬県':
        case '茨城県':
            echo "{$ken}の県庁所在地は、{$shi}です。\n";
            break;
        
        default:
            echo "{$ken}は関東地方ではありません。\n";
            break;
    }
}



// Q10 関数-1
function hello($name) {
    
    return "{$name}さん、こんにちは。\n";
}

echo hello('金谷');
echo hello('安藤');




// Q11 関数-2
function calcTaxInPrice($price) {
    $taxInPrice = $price * 1.1;
    $msg = "{$price}円の商品の税込価格は{$taxInPrice}円です。";
    return $msg;
}

echo calcTaxInPrice(1000);



// Q12 関数とif文
function distinguishNum($num) {
    
    if ($num % 2 === 0) {   /*偶数か判断*/
        return "{$num}は偶数です。\n";
    }  else {
        return "{$num}は奇数です。\n";
    }
}


echo distinguishNum(11);
echo distinguishNum(24);



// Q13 関数とswitch文
function evaluateGrade($tokuten) {
    
    switch ($tokuten) {
        
        case 'A':
        case 'B':
            return "合格です。\n";

        case 'C':
            return  "合格ですが追加課題があります。\n";

        case 'D':
            return  "不合格です。\n";

        default:
            return  "判定不明です。講師に問い合わせてください。\n";
    }
}

echo evaluateGrade('A');
echo evaluateGrade('E');

?>