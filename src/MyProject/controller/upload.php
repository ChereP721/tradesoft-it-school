<?php

// загрузка картинки

move_uploaded_file($_FILES['image']['tmp_name'], '../uploads/' . uniqid() . '.jpg');


?>