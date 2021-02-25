<?php
$song = 'Пластмассовый мир победил
Макет оказался сильней
Последний кораблик остыл
Последний фонарик устал,
         а в горле сопят комья воспоминаний

         Оо- моя оборона
         Солнечный зайчик стеклянного глаза
         Оо- моя оборона
         Траурный мячик нелепого мира
         Траурный мячик дешёвого мира

Пластмассовый мир победил.
Ликует картонный набат-
          кому нужен ломтик июльского неба?

          Оо- моя оборона
          Солнечный зайчик незрячего мира
          Оо- моя оборона
          Траурный мячик стеклянного глаза
          Траурный зайчик нелепого мира...

Пластмассовый мир победил
Макет оказался сильней
Последний кораблик остыл
Последний фонарик устал,
          а в горле сопят комья воспоминаний.

          Оо- моя оборона
          Траурный мячик незрячего мира
          Оо- моя оборона
          Солнечный зайчик стеклянного глаза.

          Оо- моя оборона!';


$name = 'Abraham, Addison, Adrian, Albert, Alec, Alfred, Alvin, Andrew, Andy, Archibald, Archie, Arlo, Arthur, Arthur, Austen, Barnabe, Bartholomew, Bertram, Bramwell, Byam, Cardew, Chad, Chance, Colin, Coloman, Curtis, Cuthbert, Daniel, Darryl, David, Dickon, Donald, Dougie, Douglas, Earl, Ebenezer, Edgar, Edmund, Edward, Edwin, Elliot, Emil, Floyd, Franklin, Frederick, Gabriel, Galton, Gareth, George, Gerard, Gilbert, Gorden, Gordon, Graham, Grant, Henry, Hervey, Hudson, Hugh, Ian, Jack, Jaime, James, Jason, Jeffrey, Joey, John, Jolyon, Jonas, Joseph, Joshua, Julian, Justin, Kurt, Lanny, Larry, Laurence, Lawton, Lester, Malcolm, Marcus, Mark, Marshall, Martin, Marvin, Matt, Maximilian, Michael, Miles, Murray, Myron, Nate, Nathan, Neil, Nicholas, Nicolas, Norman, Oliver, Oscar, Osric, Owen, Patrick, Paul, Peleg, Philip, Phillipps, Raymond, Reginald, Rhys, Richard, Robert, Roderick, Rodger, Roger, Ronald, Rowland, Rufus, Russell, Sebastian, Shahaf, Simon, Stephen, Swaine, Thomas, Tobias, Travis, Victor, Vincent, Vincent, Vivian, Wayne, Wilfred, William, Winston, Zadoc';
$nameShort = 'Abraham, Addison, Adrian, Albert';


//заменяем кучу пробелов на один
$song = preg_replace("/\s+/u", " ", $song);
//делим строку на массив
$arrayWord = explode(" ", $song);
define("WORDS", $arrayWord);

$name = preg_replace("/\s+/u", " ", $nameShort);
$arrayName = explode(", ", $name);
define("NAMES", $arrayName);

//функция генерирует рандомное число полноценных комментов (дата+автор+комментарий)
function createRandomComments(int $x, int $y, array $arrayWords = WORDS, array $arrayNames = NAMES): array
{
    $countComments = rand($x, $y);
    $arrayComments = [];
    for ($i = 0; $i < $countComments; $i++) {
        $arrayComments['date'][$i] = genDate();
        $arrayComments['author'][$i] = genAutor($arrayNames);
        $arrayComments['comment'][$i] = genComment($arrayWords);
    }
    findBot($arrayComments);
    return $arrayComments;
}


//функция генерирует коммент из массива со строками
function genComment(array $mas): string
{
    $comment = '';
    $countWord = rand(3, 10);
    for ($j = 0; $j < $countWord; $j++) {
        $comment .= $mas[rand(0, count($mas) - 1)];
        if ($j != $countWord - 1) {
            $comment .= ' ';
        }
    }
    return $comment;
}

//функция генерирует дату
function genDate()
{
    $timestamp = rand(strtotime("Feb 16 2021 12:00:00"), strtotime("Feb 16 2021 12:00:10"));
    return date("d M Y H:i:s", $timestamp);
}

//функция генерирует имя автора
function genAutor(array $mas): string
{
    return $mas[rand(0, count($mas) - 1)];
}


function findBot(array &$mas): void
{
    $countValues = [];
    for ($i = 0; $i < count($mas['date']); $i++) {
        $countValues[$i] = md5($mas['date'][$i] . $mas['author'][$i]); //записываем в i элемент массива md5 от даты и автора коммента
    }
    $repeat = array_count_values($countValues);
    foreach ($repeat as $key => $value) {
        if ($value > 1) {
            for ($j = 0; $j < count($countValues); $j++) {
                if ($countValues[$j] == $key) {
                    $mas['comment'][$j] = 'Комментарий удален по причине: пользователь является ботом';
                }
            }
        }
    }
}


//удаляет файлы старше 1 суток
function recursiveDelete(string $str)
{
    if (is_file($str)) {
        if ((time() - filemtime($str)) > 86400) {
            return unlink($str);
        }
    } elseif (is_dir($str)) {
        $scan = glob(rtrim($str, '/') . '/*');
        foreach ($scan as $index => $path) {
            recursiveDelete($path);
        }
        return rmdir($str);
    }
}



function checkAuth(?string $login, ?string $pass): bool
{
    if ($login === null || empty($login)) {
        return false;
    }

    static $userArr = [
        'admin' => 'admin',
        'user' => 'qwerty',
    ];
    if (!isset($userArr[$login])) {
        return null;
    }

    return $userArr[$login] === $pass;
}

$isAuth = false;
if (isset($_POST['login'])) {
    $isAuth = checkAuth($_POST['login'], $_POST['Password']);
    if ($isAuth) {
        $_SESSION['user'] = $_POST['login'];
    }
} elseif (isset($_SESSION['user'])) {
    $isAuth = true;
}



$mysql = new mysqli('127.0.0.1:3306', 'root', 'root', 'it_school');
$res = $mysql->query('select 123');
$data = $res->fetch_assoc();
