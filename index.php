<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Управление</title>
    <link rel="stylesheet" href="style/management.css">
</head>

<body>

    <?php
      
    ?>

    <div class="container">
        <div class="tabs">
            <form action="">

            </form>
            <input type="radio" name="tab-btn" id="tab-btn-1" value="" >
            <label for="tab-btn-1">Выдача литературы</label>
            <input type="radio" name="tab-btn" id="tab-btn-2" value="">
            <label for="tab-btn-2">Возврат литературы</label>
            <input type="radio" name="tab-btn" id="tab-btn-3" value="">
            <label for="tab-btn-3">Регистрация пользователей</label>
            <input type="radio" name="tab-btn" id="tab-btn-4" value="">
            <label for="tab-btn-4">Поиск литературы</label>
            <input type="radio" name="tab-btn" id="tab-btn-5" value="">
            <label for="tab-btn-5">Оплата</label>
            <input type="radio" name="tab-btn" id="tab-btn-6" value="">
            <label for="tab-btn-6">Пользователи</label>
            <input type="radio" name="tab-btn" id="tab-btn-7" value="">
            <label for="tab-btn-7">Фонд</label>
            <div id="content-1" class="content-form wrapper">
                <form name="extradition" method="post" action=" ">
                    <div class="text_field login form_grid ">
                        <label class="text-field__label" for="number">Айди читателя</label>
                        <input class="text-field__input" type="number" name="number" value=""
                            placeholder="Айди читателя" required>
                    </div>
                    <div class="text_field password form_grid">
                        <label class="text-field__label" for="number">Артикул книги</label>
                        <input class="text-field__input" type="number" name="number" placeholder="артикул книги"
                            required>
                    </div>
                    <div class="text_field password form_grid">
                        <label class="text-field__label" for="number">Артикул книги 2</label>
                        <input class="text-field__input" type="number" name="number" placeholder="артикул книги"
                            >
                    </div>
                    <div class="text_field password form_grid">
                        <label class="text-field__label" for="number">Артикул книги 3</label>
                        <input class="text-field__input" type="number" name="number" placeholder="артикул книги"
                        >
                    </div>
                    <div class="text_field password form_grid">
                        <label class="text-field__label" for="date">Дата выдачи</label>
                        <input class="text-field__input" type="date" name="date" placeholder="Дата выдачи" required>
                    </div>
                    <div class="text_field password form_grid">
                        <label class="text-field__label" for="date">Дата возврата</label>
                        <input class="text-field__input" type="date" name="date" placeholder="Дата возврата" required>
                    </div>

                    <input class="text-field__btn" type="submit" placeholder="Выдать" value="Выдать">
                    <input class="text-field__btn" type="reset" placeholder="Сбросить" value="Сбросить">



                </form>
            </div>
            <div id="content-2"  class="content-form wrapper">
                <form name="extradition" method="post" action=" ">
                    <div class="text_field login form_grid ">
                        <label class="text-field__label" for="number">Айди читателя</label>
                        <input class="text-field__input" type="number" name="number" value=""
                            placeholder="Айди читателя" required>
                    </div>
                    <div class="text_field password form_grid">
                        <label class="text-field__label" for="number">Артикул книги</label>
                        <input class="text-field__input" type="number" name="number" placeholder="артикул книги"
                            required>
                    </div>
                    <div class="text_field password form_grid">
                        <label class="text-field__label" for="number">Артикул книги 2</label>
                        <input class="text-field__input" type="number" name="number" placeholder="артикул книги"
                            >
                    </div>
                    <div class="text_field password form_grid">
                        <label class="text-field__label" for="number">Артикул книги 3</label>
                        <input class="text-field__input" type="number" name="number" placeholder="артикул книги"
                        >
                    </div>
                    <div class="text_field password form_grid">
                        <label class="text-field__label" for="date">Дата выдачи</label>
                        <input class="text-field__input" type="date" name="date" placeholder="Дата выдачи" required>
                    </div>
                    <div class="text_field password form_grid">
                        <label class="text-field__label" for="date">Дата возврата</label>
                        <input class="text-field__input" type="date" name="date" placeholder="Дата возврата" required>
                    </div>

                    <input class="text-field__btn" type="submit" placeholder="Сохранить" value="Сохранить">
                    <input class="text-field__btn" type="reset" placeholder="Сбросить" value="Сбросить">



                </form>
            </div>
            <div id="content-3" class="content-form wrapper">



                <form name="extradition" method="post" action=" " >
                    <div class="text_field login form_grid ">
                        <label class="text-field__label" for="name">Фамилия</label>
                        <input class="text-field__input" type="text" name="n_surname" value=""
                            placeholder="фамилия" required>
                    </div>
                    <div class="text_field password form_grid">
                        <label class="text-field__label" for="name">Имя</label>
                        <input class="text-field__input" type="text" name="n_name" placeholder="имя"
                            required>
                    </div>
                    <div class="text_field password form_grid">
                        <label class="text-field__label" for="name">Отчество</label>
                        <input class="text-field__input" type="text" name="n_patronumic" placeholder="отчество"
                            required>
                    </div>
                    <div class="text_field password form_grid">
                        <label class="text-field__label" for="number">Серия и номер паспорта</label>
                        <input class="text-field__input" type="number" name="n_passport" placeholder="Серия и номер паспорта"
                           required >
                    </div>
                    <div class="text_field password form_grid">
                        <label class="text-field__label" for="number">Номер телефона</label>
                        <input class="text-field__input" type="number" name="n_tel" placeholder="Номер телефона"
                        required>
                    </div>
                    <div class="text_field password form_grid">
                        <label class="text-field__label" for="text">Адрес</label>
                        <input class="text-field__input" type="text" name="n_address" placeholder="Адрес" required>
                    </div>
                    

                    <input class="text-field__btn" type="submit" placeholder="Сохранить" value="Сохранить">
                    <input class="text-field__btn" type="reset" placeholder="Сбросить" value="Сбросить">



                </form>
                <?php
                  

                  $conn = mysqli_connect('localhost','root','root','biblioteka');
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  echo "Connected successfully";
                  

                    $inputSurname = $_POST['n_surname'];
                    $inputName = $_POST['n_name'];
                    $inputPatronumic = $_POST['n_patronumic'];
                    $inputPassport = $_POST['n_passport'];
                    $inputTel = $_POST['n_tel'];
                    $inputAddress = $_POST['n_address'];
                    $query = "INSERT INTO users ( surname, name_imia, patronymic, passport, number_tel, address_adres) VALUES 
                    ('$inputSurname','$inputName','$inputPatronumic',$inputPassport,$inputTel,'$inputAddress')";
                    $result = mysqli_query($conn, $query);
                    echo $query
                    
                ?>
            </div>
            <div id="content-4" class="content-form wrapper">
                <p>Введите название книги,автора, жанр или артукул</p>
                <form name="extradition" method="post" action="">
                    
                    <div class="text_field password form_grid">
                        <label class="text-field__label" for="search">Название</label>
                        <input class="text-field__input" type="search" name="search" placeholder="Название" >
                        <input class="text-field__btn"  type="submit" name="submit" class="submit" value="Поиск">
                        <input class="text-field__btn" type="reset" placeholder="Сбросить" value="Сбросить">

                    </div>
                    <div class="text_field password form_grid">
                        <label class="text-field__label" for="search">Артикул</label>
                        <input class="text-field__input" type="search" name="search" placeholder="Артикул" >
                        <input class="text-field__btn" type="submit" name="submit" class="submit" value="Поиск">
                        <input class="text-field__btn" type="reset" placeholder="Сбросить" value="Сбросить">

                    </div>
                    
                   
                </form>
            </div>
            <div id="content-5" class="content-form wrapper">
                <form name="extradition" method="post" action="">
                    <div class="text_field password form_grid">
                    <label class="text-field__label" for="number">Айди читателя</label>
                    <input class="text-field__input" type="number" name="number" placeholder="Айди читателя" required>
                </div>

                <select name="price" id="price" >
                    <optgroup label="Опоздание"  >
                        <option value="1">100р</option>
                        <option value="2">400р</option>
                        <option value="3">800р</option>
                    </optgroup>
                    <optgroup label="Залог">
                        <option value="1">500р</option>
                        <option value="2">1000р</option>
                        <option value="3">1500р</option>
                    </optgroup>
                </select>
                <input class="text-field__btn" type="submit" placeholder="Сохранить" value="Сохранить">
                </form>
                

                <p>QR-code для оплаты</p>
                <div class="qr">
                    <a href="http://qrcoder.ru" target="_blank"><img src="http://qrcoder.ru/code/?%CE%EF%EB%E0%F2%E8%F2%E5+%EC%E8%EB%FC%B8%ED+%F0%F3%E1%EB%E5%E9+%E7%E0+%FD%F2%F3+%EA%ED%E8%E6%EA%F3&8&0" width="360" height="360" border="0" title="QR код"></a>
                </div>
            </div>
            <div id="content-6" class="content-form wrapper">
                <form  name="extradition" method="post" action="">
                    <div class="text_field password form_grid">
                    <label class="text-field__label" for="name_human">ФИО</label>
                    <input class="text-field__input" type="text" name="name_human" placeholder="ФИО" >
                    <label class="text-field__label" for="id_human">Айди</label>
                    <input class="text-field__input" type="text" name="idd_human" placeholder="Айди" >


                    


                    <input class="text-field__btn" type="submit" name="submit" class="submit" value="Поиск">
                    <input class="text-field__btn" type="reset" placeholder="Сбросить" value="Сбросить">

                </div>

                  <?php 
                  $conn = mysqli_connect('localhost','root','root','biblioteka');
                  if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                  }
                  echo "Connected successfully";
                  

                      $inputNHuman = $_POST['name_human'];
                      $inputIdHuman = $_POST['idd_human'];
                      
                        $query = "SELECT * FROM users WHERE surname='$inputNHuman' AND idusers='$inputIdHuman'";
                      $result= mysqli_query($conn,$query) or die(mysqli_error($conn));
                      var_dump($result);
                      $row = mysqli_fetch_assoc($result);
                      var_dump($row);
                    //    $result = mysqli_query($conn, $query);
                    //   echo $query
                  ?>





                </form>
                
            </div>

            <div id="content-7" class="content-form wrapper" checked>



                    <form name="extradition" method="post" action=" " >
                        <div class="text_field login form_grid ">
                            <label class="text-field__label" for="name">Название</label>
                            <input class="text-field__input" type="text" name="f_title" placeholder="Название" required>
                        </div>
                        <div class="text_field password form_grid">
                            <label class="text-field__label" for="name">Автор</label>
                            <input class="text-field__input" type="text" name="f_autor" placeholder="Автор"
                                required>
                        </div>
                        <div class="text_field password form_grid">
                            <label class="text-field__label" for="name">Жанр</label>
                            <input class="text-field__input" type="text" name="f_genre" placeholder="Жанр"
                                required>
                        </div>
                        
                        

                        <input class="text-field__btn" type="submit" placeholder="Сохранить" value="Сохранить">
                        <input class="text-field__btn" type="reset" placeholder="Сбросить" value="Сбросить">



                    </form>
                    <?php
                    

                    $conn = mysqli_connect('localhost','root','root','biblioteka');
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    echo "Connected successfully";
                    

                        $inputTitles = $_POST['f_title'];
                        $inputAutor = $_POST['f_autor'];
                        $inputGenre = $_POST['f_genre'];

                        $query = "INSERT INTO fund_litr ( f_title, f_autor, f_genre  ) VALUES 
                        ('$inputTitles','$inputAutor','$inputGenre')";
                        $result = mysqli_query($conn, $query);
                        echo $query
                        
                    ?>
            </div>
        </div>
    </div>
</body>

</html>