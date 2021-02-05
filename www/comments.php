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


          $name='Abraham, Addison, Adrian, Albert, Alec, Alfred, Alvin, Andrew, Andy, Archibald, Archie, Arlo, Arthur, Arthur, Austen, Barnabe, Bartholomew, Bertram, Bramwell, Byam, Cardew, Chad, Chance, Colin, Coloman, Curtis, Cuthbert, Daniel, Darryl, David, Dickon, Donald, Dougie, Douglas, Earl, Ebenezer, Edgar, Edmund, Edward, Edwin, Elliot, Emil, Floyd, Franklin, Frederick, Gabriel, Galton, Gareth, George, Gerard, Gilbert, Gorden, Gordon, Graham, Grant, Henry, Hervey, Hudson, Hugh, Ian, Jack, Jaime, James, Jason, Jeffrey, Joey, John, Jolyon, Jonas, Joseph, Joshua, Julian, Justin, Kurt, Lanny, Larry, Laurence, Lawton, Lester, Malcolm, Marcus, Mark, Marshall, Martin, Marvin, Matt, Maximilian, Michael, Miles, Murray, Myron, Nate, Nathan, Neil, Nicholas, Nicolas, Norman, Oliver, Oscar, Osric, Owen, Patrick, Paul, Peleg, Philip, Phillipps, Raymond, Reginald, Rhys, Richard, Robert, Roderick, Rodger, Roger, Ronald, Rowland, Rufus, Russell, Sebastian, Shahaf, Simon, Stephen, Swaine, Thomas, Tobias, Travis, Victor, Vincent, Vincent, Vivian, Wayne, Wilfred, William, Winston, Zadoc';

//заменяем кучу пробелов на один
$song = preg_replace("/\s+/u", " ", $song);
//делим строку на массив
$arrayWord = explode(" ", $song);

$name=preg_replace("/\s+/u", " ", $name);
$arrayName = explode(", ",$name);

//функция генерирует рандомное число полноценных комментов (дата+автор+комментарий)
function createRandomComments(int $x, int $y, array $arrayWords, array $arrayNames)
{
    $countComments = rand($x, $y);
    $arrayComments = [];
    for ($i = 0; $i < $countComments; $i++) {
        $arrayComments[$i][0] = genDate();
        $arrayComments[$i][1] = genAutor($arrayNames);
        $arrayComments[$i][2] = genComment($arrayWords);
    }
    return $arrayComments;
}


//функция генерирует коммент из массива со строками
function genComment(array $mas)
{
    $comment = '';
    $countWord = rand(3, 10);
    for ($j = 0; $j < $countWord; $j++) {
        $comment .= $mas[rand(0, count($mas))];
        if($j!=$countWord-1){
            $comment .= ' ';
        }
    }
    return $comment;
}

//функция генерирует дату
function genDate()
{
    $timestamp = rand(strtotime("Jan 01 2020"), strtotime("Feb 04 2021"));
    return date("d M Y", $timestamp);
}

//функция генерирует имя автора
function genAutor(array $mas)
{
    return $mas[rand(0, count($mas))];
}
