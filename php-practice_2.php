<?php
// Q1 tic-tac問題
 for ($i = 1; $i <= 100; $i++) {
    $num = $i;
    
    if ($num % 4 === 0 && $num % 5 === 0) {
        echo "tic-tac\n";
    } elseif ($num % 5 === 0) {
        echo "tac\n";
    } elseif ($num % 4 === 0) {
        echo "tic\n";
    } else {
        echo "{$num}\n";
    }
 }



// Q2 多次元連想配列
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];

// 問題１
echo "{$personalInfos[1]['name']}の電話番号は{$personalInfos[1]['tel']}です。";

// 問題２
foreach ($personalInfos as $index => $user) {
    $index += 1;
    
    echo "{$index}番目の{$user['name']} のメールアドレスは{$user['mail']}で、電話番号は{$user['tel']}です。\n";
}

// 問題３
$ageList = [25, 30, 18];
foreach ($ageList as $index => $user) {
    $personalInfos[$index]['age'] = $ageList[$index];
}

var_dump($personalInfos);


// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        return "学籍番号{$this->studentId}番の生徒は{$this->studentName}です。";
    }
}

$user = new Student(120, '山田');

echo $user->attend();



// Q4 オブジェクト-2

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($kyoka)
    {
        return "{$this->studentName}は{$kyoka}の授業に参加しました。学籍番号：{$this->studentId}";
    }
}

$yamada = new Student(120, '山田');
echo $yamada->attend('PHP');



// Q5 定義済みクラス
// 問題１
$day = new DateTime('-1 month');

echo $day->format('Y-m-d');

// 問題２
$today = new DateTime();

$kako = new DateTime('1992-04-25');

$diff = $today->diff($kako);

echo $diff->format('あの日から%a日経過しました。');

?>