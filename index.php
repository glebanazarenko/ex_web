<!doctype html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ЕдОк</title>
        <link href="styles.css" rel="stylesheet" type="text/css" />
        <link href="bootstrap.min.css" rel="stylesheet" type="text/css" />

        <link rel="shortcut icon" href="img/logo.ico" />
    </head>
    <body class="Site">
        <header>
            <nav class="navbar navbar-expand-lg fixed-top sticky" id="navbar">
                <div class="container">
                    <img src="img/logo.png" alt="" height="50" />
                    <div class="navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto navbar-center mt-lg-0 mt-2">
                            <li class="nav-item">
                                <a class="nav-link-a" href="#">Главная</a>
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link-a" href="#search">Поиск</a>
                            </li><!--end nav-item-->                        
                        </ul><!--end navbar-nav-->
                        <button type="button" class="btn btn-primary btn-hover"><a class="btn-a" href="signUp.php">Регистрация<a></button>
                        <button type="button" class="btn btn-green"><a class="btn-a" href="signIn.php">Вход<a></button>
                        <!--<a href="singUp.php" class="btn btn-sm nav-btn text-primary mb-4 mb-lg-0">Регистрация<i class="icon-xxs ms-1" data-feather="chevrons-right"></i></a>-->
                    </div><!-- end #navbarNav -->
                </div><!-- end container -->
            </nav>
        </header>
        <main class="Site-content">
        <?php
        include "db.php";
        ?>
            <div>Область для вспылвающих уведомлений</div>
            <br>
            <br>
            <p> Привет</p>
            <br>

            <h3 class="text-center" id="search">Предприятия общественного питания города Москвы</h3>

            <div class="row">
                <div class="col col-lg-3">

            <section class="container  border">
            <?php
                    $name = $_POST["name"];
                    $AdmArea = $_POST["AdmArea"];
                    $District = $_POST["District"];
                    $TypeObject = $_POST["TypeObject"];
                    $IsNetObject = $_POST["IsNetObject"];
                    $placebegin = $_POST["placebegin"];
                    $placeend = $_POST["placeend"];
                    $SocialPrivileges = $_POST["SocialPrivileges"];

                    echo $SocialPrivilegesl;

                    ?>



                    <form method="POST">
                        

                    <div class="input-group mb-2">
                        <span class="input-group-text text-danger" id="basic-addon1">Наименование</span>
                        <input type="text" name="name" class="form-control" value="<?=$name?>">
                    </div> 

                        <div class="input-group mb-2 ">
                        
                    <label class="input-group-text text-danger"   for="inputGroupSelect01">Административный округ</label>
                    <select name="AdmArea" class="select-css" id="inputGroupSelect01">
                        <option selected>Выберите</option>
                        <option value="1" <?php if (isset($AdmArea) && $AdmArea=="1") echo "selected='selected'";?> >Восточный административный округ</option>
                        <option value="2" <?php if (isset($AdmArea) && $AdmArea=="2") echo "selected='selected'";?> >Западный административный округ</option>
                        <option value="3" <?php if (isset($AdmArea) && $AdmArea=="3") echo "selected='selected'";?> >Зеленоградский административный округ</option>
                        <option value="4" <?php if (isset($AdmArea) && $AdmArea=="4") echo "selected='selected'";?> >Новомосковский административный округ</option>
                        <option value="5" <?php if (isset($AdmArea) && $AdmArea=="5") echo "selected='selected'";?> >Северный административный округ</option>
                        <option value="6" <?php if (isset($AdmArea) && $AdmArea=="6") echo "selected='selected'";?> >Северо-Восточный административный округ</option>
                        <option value="7" <?php if (isset($AdmArea) && $AdmArea=="7") echo "selected='selected'";?> >Северо-Западный административный округ</option>
                        <option value="8" <?php if (isset($AdmArea) && $AdmArea=="8") echo "selected='selected'";?> >Троицкий административный округ</option>
                        <option value="9" <?php if (isset($AdmArea) && $AdmArea=="9") echo "selected='selected'";?> >Центральный административный округ</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text text-danger" for="inputGroupSelect01">Район</label>
                    <select name="District" class="select-css" id="inputGroupSelect01">
                        <option selected>Выберите</option>
                        <option value="1" <?php if (isset($District) && $District=="1") echo "selected='selected'";?> >Академический район</option>
                        <option value="2" <?php if (isset($District) && $District=="2") echo "selected='selected'";?> >Алексеевский район</option>
                        <option value="3" <?php if (isset($District) && $District=="3") echo "selected='selected'";?> >Алтуфьевский район</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text text-danger" for="inputGroupSelect01">Вид объекта</label>
                    <select name="TypeObject" class="select-css" id="inputGroupSelect01">
                        <option selected>Выберите</option>
                        <option value="1" <?php if (isset($TypeObject) && $TypeObject=="1") echo "selected='selected'";?> >бар</option>
                        <option value="2" <?php if (isset($TypeObject) && $TypeObject=="2") echo "selected='selected'";?> >буфет</option>
                        <option value="3" <?php if (isset($TypeObject) && $TypeObject=="3") echo "selected='selected'";?> >закусочная</option>
                        <option value="4" <?php if (isset($TypeObject) && $TypeObject=="4") echo "selected='selected'";?> >кафе</option>
                        <option value="5" <?php if (isset($TypeObject) && $TypeObject=="5") echo "selected='selected'";?> >кафетерий</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <label class="input-group-text text-danger" for="inputGroupSelect01">Является сетевым</label>
                    <select name="IsNetObject" class="select-css" id="inputGroupSelect01">
                        <option value="1" <?php if (isset($IsNetObject) && $IsNetObject=="1") echo "selected='selected'";?> >Да</option>
                        <option value="2" <?php if (isset($IsNetObject) && $IsNetObject=="2") echo "selected='selected'";?> >Нет</option>
                    </select>
                </div>
                <label class="input-group-text text-danger">Кол-во посадочных мест</label>
                <div class="input-group mb-3">
                    <span class="input-group-text text-danger" id="basic-addon1">С</span>
                    <input type="text" name="placebegin" class="form-control" placeholder="100"
                    value="<?=$placebegin?>">
                    <span class="input-group-text text-danger" id="basic-addon1">до</span>
                    <input type="text" name="placeend" class="form-control" placeholder="500"
                    value="<?=$placeend?>">
                </div> 
                <div class="input-group mb-3">
                    <label class="input-group-text text-danger" for="inputGroupSelect01">Льготы</label>
                    <select name="SocialPrivileges" class="select-css" id="inputGroupSelect01">
                        <option value="1" <?php if (isset($SocialPrivileges) && $SocialPrivileges=="1") echo "selected='selected'";?> >Да</option>
                        <option value="2" <?php if (isset($SocialPrivileges) && $SocialPrivileges=="2") echo "selected='selected'";?> >Нет</option>
                    </select>
                </div>

                        <button type="submit" class="btn-danger">Найти</button>
                    </form>
                    </section>

                    </div>

                    <div class="col col-lg-7">

                    <?php
                    $name = $_POST["name"];
                    $AdmArea = $_POST["AdmArea"];
                    $District = $_POST["District"];
                    $TypeObject = $_POST["TypeObject"];
                    $IsNetObject = $_POST["IsNetObject"];
                    $placebegin = $_POST["placebegin"];
                    $placeend = $_POST["placeend"];
                    $SocialPrivileges = $_POST["SocialPrivileges"];

                    if($AdmArea == 1){
                        $AdmArea = "Восточный административный округ";
                    }
                    if($AdmArea == 2){
                        $AdmArea = "Западный административный округ";
                    }
                    if($AdmArea == 3){
                        $AdmArea = "Зеленоградский административный округ";
                    }
                    if($AdmArea == 4){
                        $AdmArea = "Новомосковский административный округ";
                    }
                    if($AdmArea == 5){
                        $AdmArea = "Северный административный округ";
                    }
                    if($AdmArea == 6){
                        $AdmArea = "Северо-Восточный административный округ";
                    }
                    if($AdmArea == 7){
                        $AdmArea = "Северо-Западный административный округ";
                    }
                    if($AdmArea == 8){
                        $AdmArea = "Троицкий административный округ";
                    }
                    if($AdmArea == 9){
                        $AdmArea = "Центральный административный округ";
                    }
                    if($District == 1){
                        $District = "Академический район";
                    }
                    if($District == 2){
                        $District = "Алексеевский район";
                    }
                    if($District == 3){
                        $District = "Алтуфьевский район";
                    }
                    if($TypeObject == 1){
                        $TypeObject = "бар";
                    }
                    if($TypeObject == 2){
                        $TypeObject = "буфет";
                    }
                    if($TypeObject == 3){
                        $TypeObject = "закусочная";
                    }
                    if($TypeObject == 4){
                        $TypeObject = "кофе";
                    }
                    if($TypeObject == 5){
                        $TypeObject = "кафетерий";
                    }
                    if($IsNetObject == 1){
                        $IsNetObject = "да";
                    }
                    if($IsNetObject == 2){
                        $IsNetObject = "нет";
                    }
                    if($SocialPrivileges == 1){
                        $SocialPrivileges = "да";
                    }
                    if($SocialPrivileges == 2){
                        $SocialPrivileges = "нет";
                    }

                    if($name == null){
                        if($AdmArea == "Выберите"){
                            if($District == "Выберите"){
                                if($TypeObject == "Выберите"){
                                    if($placebegin == null){
                                        if($placeend == null){
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e where
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\"
                                            Limit 10");
                                        }else{
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e WHERE
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\" ANd
                                            e.SeatsCount < $placeend
                                            Limit 10");
                                        }
                                    }else{
                                        if($placeend == null){
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e where
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\"
                                            And e.SeatsCount > $placebegin
                                            Limit 10");
                                        }else{
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e WHERE
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\" ANd
                                            e.SeatsCount < $placeend And e.SeatsCount > $placebegin
                                            Limit 10");
                                        }
                                    }
                                }else{
                                    if($placebegin == null){
                                        if($placeend == null){
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e where
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\" And e.TypeObject = \"$TypeObject\"
                                            Limit 10");
                                        }else{
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e WHERE
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\" ANd
                                            e.SeatsCount < $placeend And e.TypeObject = \"$TypeObject\"
                                            Limit 10");
                                        }
                                    }else{
                                        if($placeend == null){
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e where
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\"
                                            And e.SeatsCount > $placebegin And e.TypeObject = \"$TypeObject\"
                                            Limit 10");
                                        }else{
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e WHERE
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\" ANd
                                            e.SeatsCount < $placeend And e.SeatsCount > $placebegin And e.TypeObject = \"$TypeObject\"
                                            Limit 10");
                                        }
                                    }
                                }
                            }else{
                                if($TypeObject == "Выберите"){
                                    if($placebegin == null){
                                        if($placeend == null){
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e where
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\" AND e.District = \"$District\" 
                                            Limit 10");
                                        }else{
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e WHERE
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\" ANd
                                            e.SeatsCount < $placeend AND e.District = \"$District\" 
                                            Limit 10");
                                        }
                                    }else{
                                        if($placeend == null){
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e where
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\"
                                            And e.SeatsCount > $placebegin AND e.District = \"$District\" 
                                            Limit 10");
                                        }else{
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e WHERE
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\" ANd
                                            e.SeatsCount < $placeend And e.SeatsCount > $placebegin AND e.District = \"$District\" 
                                            Limit 10");
                                        }
                                    }
                                }else{
                                    if($placebegin == null){
                                        if($placeend == null){
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e where
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\" And e.TypeObject = \"$TypeObject\" AND e.District = \"$District\" 
                                            Limit 10");
                                        }else{
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e WHERE
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\" ANd
                                            e.SeatsCount < $placeend And e.TypeObject = \"$TypeObject\" AND e.District = \"$District\" 
                                            Limit 10");
                                        }
                                    }else{
                                        if($placeend == null){
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e where
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\"
                                            And e.SeatsCount > $placebegin And e.TypeObject = \"$TypeObject\" AND e.District = \"$District\" 
                                            Limit 10");
                                        }else{
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e WHERE
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\" ANd
                                            e.SeatsCount < $placeend And e.SeatsCount > $placebegin And e.TypeObject = \"$TypeObject\" AND e.District = \"$District\" 
                                            Limit 10");
                                        }
                                    }
                                }
                            }
                        }else{
                            if($District == "Выберите"){
                                if($TypeObject == "Выберите"){
                                    if($placebegin == null){
                                        if($placeend == null){
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e where
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\"
                                            Limit 10");
                                        }else{
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e WHERE
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\" ANd
                                            e.SeatsCount < $placeend AND e.AdmArea = \"$AdmArea\"
                                            Limit 10");
                                        }
                                    }else{
                                        if($placeend == null){
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e where
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\"
                                            And e.SeatsCount > $placebegin AND e.AdmArea = \"$AdmArea\"
                                            Limit 10");
                                        }else{
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e WHERE
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\" ANd
                                            e.SeatsCount < $placeend And e.SeatsCount > $placebegin AND e.AdmArea = \"$AdmArea\"
                                            Limit 10");
                                        }
                                    }
                                }else{
                                    if($placebegin == null){
                                        if($placeend == null){
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e where
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\" And e.TypeObject = \"$TypeObject\" AND e.AdmArea = \"$AdmArea\"
                                            Limit 10");
                                        }else{
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e WHERE
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\" ANd
                                            e.SeatsCount < $placeend And e.TypeObject = \"$TypeObject\" AND e.AdmArea = \"$AdmArea\"
                                            Limit 10");
                                        }
                                    }else{
                                        if($placeend == null){
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e where
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\"
                                            And e.SeatsCount > $placebegin And e.TypeObject = \"$TypeObject\" AND e.AdmArea = \"$AdmArea\"
                                            Limit 10");
                                        }else{
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e WHERE
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\" ANd
                                            e.SeatsCount < $placeend And e.SeatsCount > $placebegin And e.TypeObject = \"$TypeObject\" AND e.AdmArea = \"$AdmArea\"
                                            Limit 10");
                                        }
                                    }
                                }
                            }else{
                                if($TypeObject == "Выберите"){
                                    if($placebegin == null){
                                        if($placeend == null){
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e where
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\" AND e.District = \"$District\"  AND e.AdmArea = \"$AdmArea\"
                                            Limit 10");
                                        }else{
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e WHERE
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\" ANd
                                            e.SeatsCount < $placeend AND e.District = \"$District\"  AND e.AdmArea = \"$AdmArea\"
                                            Limit 10");
                                        }
                                    }else{
                                        if($placeend == null){
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e where
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\"
                                            And e.SeatsCount > $placebegin AND e.District = \"$District\"  AND e.AdmArea = \"$AdmArea\"
                                            Limit 10");
                                        }else{
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e WHERE
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\" ANd
                                            e.SeatsCount < $placeend And e.SeatsCount > $placebegin AND e.District = \"$District\"  AND e.AdmArea = \"$AdmArea\"
                                            Limit 10");
                                        }
                                    }
                                }else{
                                    if($placebegin == null){
                                        if($placeend == null){
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e where
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\" And e.TypeObject = \"$TypeObject\" AND e.District = \"$District\" 
                                            AND e.AdmArea = \"$AdmArea\"
                                            Limit 10");
                                        }else{
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e WHERE
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\" ANd
                                            e.SeatsCount < $placeend And e.TypeObject = \"$TypeObject\" AND e.District = \"$District\" AND e.AdmArea = \"$AdmArea\"
                                            Limit 10");
                                        }
                                    }else{
                                        if($placeend == null){
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e where
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\"
                                            And e.SeatsCount > $placebegin And e.TypeObject = \"$TypeObject\" AND e.District = \"$District\"  AND e.AdmArea = \"$AdmArea\"
                                            Limit 10");
                                        }else{
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e WHERE
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\" ANd
                                            e.SeatsCount < $placeend And e.SeatsCount > $placebegin And e.TypeObject = \"$TypeObject\" AND e.District = \"$District\"  AND e.AdmArea = \"$AdmArea\"
                                            Limit 10");
                                        }
                                    }
                                }
                            }
                        }
                    }else{
                        if($AdmArea == "Выберите"){
                            if($District == "Выберите"){
                                if($TypeObject == "Выберите"){
                                    if($placebegin == null){
                                        if($placeend == null){
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e where
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\" AND e.Name = \"$name\"
                                            Limit 10");
                                        }else{
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e WHERE
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\" ANd
                                            e.SeatsCount < $placeend AND e.Name = \"$name\"
                                            Limit 10");
                                        }
                                    }else{
                                        if($placeend == null){
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e where
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\"
                                            And e.SeatsCount > $placebegin AND e.Name = \"$name\"
                                            Limit 10");
                                        }else{
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e WHERE
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\" ANd
                                            e.SeatsCount < $placeend And e.SeatsCount > $placebegin AND e.Name = \"$name\"
                                            Limit 10");
                                        }
                                    }
                                }else{
                                    if($placebegin == null){
                                        if($placeend == null){
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e where
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\" And e.TypeObject = \"$TypeObject\" AND e.Name = \"$name\"
                                            Limit 10");
                                        }else{
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e WHERE
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\" ANd
                                            e.SeatsCount < $placeend And e.TypeObject = \"$TypeObject\" AND e.Name = \"$name\"
                                            Limit 10");
                                        }
                                    }else{
                                        if($placeend == null){
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e where
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\"
                                            And e.SeatsCount > $placebegin And e.TypeObject = \"$TypeObject\" AND e.Name = \"$name\"
                                            Limit 10");
                                        }else{
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e WHERE
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\" ANd
                                            e.SeatsCount < $placeend And e.SeatsCount > $placebegin And e.TypeObject = \"$TypeObject\" AND e.Name = \"$name\"
                                            Limit 10");
                                        }
                                    }
                                }
                            }else{
                                if($TypeObject == "Выберите"){
                                    if($placebegin == null){
                                        if($placeend == null){
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e where
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\" AND e.District = \"$District\"  AND e.Name = \"$name\"
                                            Limit 10");
                                        }else{
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e WHERE
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\" ANd
                                            e.SeatsCount < $placeend AND e.District = \"$District\"  AND e.Name = \"$name\"
                                            Limit 10");
                                        }
                                    }else{
                                        if($placeend == null){
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e where
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\" AND e.Name = \"$name\"
                                            And e.SeatsCount > $placebegin AND e.District = \"$District\" 
                                            Limit 10");
                                        }else{
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e WHERE
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\" ANd
                                            e.SeatsCount < $placeend And e.SeatsCount > $placebegin AND e.District = \"$District\"  AND e.Name = \"$name\"
                                            Limit 10");
                                        }
                                    }
                                }else{
                                    if($placebegin == null){
                                        if($placeend == null){
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e where
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\" And e.TypeObject = \"$TypeObject\" AND e.District = \"$District\"  AND e.Name = \"$name\"
                                            Limit 10");
                                        }else{
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e WHERE
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\" ANd
                                            e.SeatsCount < $placeend And e.TypeObject = \"$TypeObject\" AND e.District = \"$District\"  AND e.Name = \"$name\"
                                            Limit 10");
                                        }
                                    }else{
                                        if($placeend == null){
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e where
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\"
                                            And e.SeatsCount > $placebegin And e.TypeObject = \"$TypeObject\" AND e.District = \"$District\"  AND e.Name = \"$name\"
                                            Limit 10");
                                        }else{
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e WHERE
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\" ANd
                                            e.SeatsCount < $placeend And e.SeatsCount > $placebegin And e.TypeObject = \"$TypeObject\" AND e.District = \"$District\"  AND e.Name = \"$name\"
                                            Limit 10");
                                        }
                                    }
                                }
                            }
                        }else{
                            if($District == "Выберите"){
                                if($TypeObject == "Выберите"){
                                    if($placebegin == null){
                                        if($placeend == null){
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e where
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\" AND e.Name = \"$name\"
                                            Limit 10");
                                        }else{
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e WHERE
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\" ANd
                                            e.SeatsCount < $placeend AND e.AdmArea = \"$AdmArea\" AND e.Name = \"$name\"
                                            Limit 10");
                                        }
                                    }else{
                                        if($placeend == null){
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e where
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\"
                                            And e.SeatsCount > $placebegin AND e.AdmArea = \"$AdmArea\" AND e.Name = \"$name\"
                                            Limit 10");
                                        }else{
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e WHERE
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\" ANd
                                            e.SeatsCount < $placeend And e.SeatsCount > $placebegin AND e.AdmArea = \"$AdmArea\" AND e.Name = \"$name\"
                                            Limit 10");
                                        }
                                    }
                                }else{
                                    if($placebegin == null){
                                        if($placeend == null){
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e where
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\" And e.TypeObject = \"$TypeObject\" AND e.AdmArea = \"$AdmArea\" AND e.Name = \"$name\"
                                            Limit 10");
                                        }else{
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e WHERE
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\" ANd
                                            e.SeatsCount < $placeend And e.TypeObject = \"$TypeObject\" AND e.AdmArea = \"$AdmArea\" AND e.Name = \"$name\"
                                            Limit 10");
                                        }
                                    }else{
                                        if($placeend == null){
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e where
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\"
                                            And e.SeatsCount > $placebegin And e.TypeObject = \"$TypeObject\" AND e.AdmArea = \"$AdmArea\" AND e.Name = \"$name\"
                                            Limit 10");
                                        }else{
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e WHERE
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\" ANd
                                            e.SeatsCount < $placeend And e.SeatsCount > $placebegin And e.TypeObject = \"$TypeObject\" AND e.AdmArea = \"$AdmArea\" AND e.Name = \"$name\"
                                            Limit 10");
                                        }
                                    }
                                }
                            }else{
                                if($TypeObject == "Выберите"){
                                    if($placebegin == null){
                                        if($placeend == null){
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e where
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\" AND e.District = \"$District\"  AND e.AdmArea = \"$AdmArea\" AND e.Name = \"$name\"
                                            Limit 10");
                                        }else{
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e WHERE
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\" ANd
                                            e.SeatsCount < $placeend AND e.District = \"$District\"  AND e.AdmArea = \"$AdmArea\" AND e.Name = \"$name\"
                                            Limit 10");
                                        }
                                    }else{
                                        if($placeend == null){
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e where
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\"
                                            And e.SeatsCount > $placebegin AND e.District = \"$District\"  AND e.AdmArea = \"$AdmArea\" AND e.Name = \"$name\"
                                            Limit 10");
                                        }else{
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e WHERE
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\" ANd
                                            e.SeatsCount < $placeend And e.SeatsCount > $placebegin AND e.District = \"$District\"  AND e.AdmArea = \"$AdmArea\" AND e.Name = \"$name\"
                                            Limit 10");
                                        }
                                    }
                                }else{
                                    if($placebegin == null){
                                        if($placeend == null){
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e where
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\" And e.TypeObject = \"$TypeObject\" AND e.District = \"$District\"  AND e.Name = \"$name\"
                                            AND e.AdmArea = \"$AdmArea\"
                                            Limit 10");
                                        }else{
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e WHERE
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\" ANd
                                            e.SeatsCount < $placeend And e.TypeObject = \"$TypeObject\" AND e.District = \"$District\" AND e.AdmArea = \"$AdmArea\" AND e.Name = \"$name\"
                                            Limit 10");
                                        }
                                    }else{
                                        if($placeend == null){
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e where
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\"
                                            And e.SeatsCount > $placebegin And e.TypeObject = \"$TypeObject\" AND e.District = \"$District\"  AND e.AdmArea = \"$AdmArea\" AND e.Name = \"$name\"
                                            Limit 10");
                                        }else{
                                            $result = mysqli_query($mysql, "SELECT * FROM eda as e WHERE
                                            e.SocialPrivileges = \"$SocialPrivileges\" and e.IsNetObject = \"$IsNetObject\" ANd
                                            e.SeatsCount < $placeend And e.SeatsCount > $placebegin And e.TypeObject = \"$TypeObject\" AND e.District = \"$District\"  AND e.AdmArea = \"$AdmArea\" AND e.Name = \"$name\"
                                            Limit 10");
                                        }
                                    }
                                }
                            }
                        }



        }

                    if($result != NULL){
                        while( $product = mysqli_fetch_assoc($result)){
                            if($context == NULL){
                                $context = '
                                <div style="container-lg text-align: center;">
                                <table class="table" style="width: 1200px; margin: auto;">
                                    <thead>
                                    <tr>
                                        <td> Наименование
                                        </td>
                                        <td style="width: 200px"> Вид объекта
                                        </td>
                                        <td> Адрес
                                        </td>
                                        <td> Действия
                                        </td>
                                    </tr>
                                    </thead>';
                            }
                                $context .= '
                                <tr>
                                    <td>'.$product["Name"].'
                                    </td>
                                    <td>'.$product["TypeObject"].'
                                    </td>
                                    <td>'.$product["Address"].'
                                    </td>
                                    <td><a>Удалить</a>
                                    </td>
                                </tr>
                                ';
                            
                        
                        }
                        $context .= '</table>';
                    }
                    
                    echo $context;
        



                    ?>
            </div>
        </div>



        </main>
        <?php
        include "footer.php";
        ?>

    </body>