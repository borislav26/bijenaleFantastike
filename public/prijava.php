<?php
require_once './partials/header.php';

if (isset($_POST['success'])) {
    echo $_POST["success"];
}
?>
<main>
    <!-- scrollToNav -->
    <!-- ourMissionBlock -->
    <article class="ourMissionBlock pt-6 pt-md-9 pb-3 pb-md-9 pt-lg-12 pb-lg-13 pt-xl-20 pb-xl-22">

        <div class="container">
            <?php
            if (isset($_GET['message']) && !empty($_GET['message'])) {
                echo "<div class='alert alert-success' role='alert'>
                Uspesno ste poslali prijavu za ucesce na ovogodisnjem bijenalu
            </div>";
            }
            ?>
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2">
                    <div class="px-xl-5">
                        <!-- headingHead -->
                        <header class="headingHead text-center">
                            <h1 class="mb-3"><?php echo htmlspecialchars($lang['rule']); ?></h1>
                            <div class="eabDescrText eabDescrTextII text-gray888 fontSerif">
                                <p><?php echo htmlspecialchars($lang['rule10']); ?></p>
                            </div>
                        </header>
                    </div>
                </div>
            </div>
            <?php echo htmlspecialchars($lang['rule11']); ?><br><br>
            <?php echo htmlspecialchars($lang['rule12']); ?><br><br>
            <?php echo htmlspecialchars($lang['rule13']); ?><br><br>
            <?php echo htmlspecialchars($lang['rule14']); ?><br><br>
            <?php echo htmlspecialchars($lang['rule15']); ?><br><br>
            <?php echo htmlspecialchars($lang['rule16']); ?><br><br>
            <?php echo htmlspecialchars($lang['rule17']); ?><br><br>
            <?php echo htmlspecialchars($lang['rule18']); ?><br>
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2 mt-5">
                    <div class="px-xl-5">
                        <!-- headingHead -->

                        <div class="eabDescrText eabDescrTextII text-gray888 fontSerif text-center">
                            <p><?php echo htmlspecialchars($lang['rule20']); ?></p>
                        </div>

                    </div>
                </div>
            </div>

            <?php echo htmlspecialchars($lang['rule21']); ?><br><br>
            <?php echo htmlspecialchars($lang['rule22']); ?><br><br>
            <?php echo htmlspecialchars($lang['rule20']); ?><br> <?php echo htmlspecialchars($lang['example']); ?>:<br>
            Slika 1_Petar Petrovic_Metafizicki predeo_2020_ulje na platnu_150x150 cm<br>
            Slika 2_Petar Petrovic_Istorija se ponavlja_2019_tempera na dasci_40x50 cm<br>
            Slika 3_Petar Petrovic_Sirene_2021_akvarel_50x60 cm<br><br>
            <?php echo htmlspecialchars($lang['rule24']); ?><br><br>
            <?php echo htmlspecialchars($lang['rule25']); ?><br><br>
            <?php echo htmlspecialchars($lang['rule26']); ?><br><br>
            <?php echo htmlspecialchars($lang['rule27']); ?><br>

            <div class="row">
                <div class="col-12 col-md-8 offset-md-2 mt-5">
                    <div class="px-xl-5">
                        <!-- headingHead -->

                        <div class="eabDescrText eabDescrTextII text-gray888 fontSerif text-center">
                            <p><?php echo htmlspecialchars($lang['rule30']); ?></p>
                        </div>

                    </div>
                </div>
            </div>
            <?php echo htmlspecialchars($lang['rule31']); ?><br><br>
            <?php echo htmlspecialchars($lang['rule32']); ?><br><br> 
            <?php echo htmlspecialchars($lang['rule33']); ?><br><br>
            <?php echo htmlspecialchars($lang['rule34']); ?> <br><br>
            <?php echo htmlspecialchars($lang['rule35']); ?><br>
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2 mt-5">
                    <div class="px-xl-5">
                        <!-- headingHead -->

                        <div class="eabDescrText eabDescrTextII text-gray888 fontSerif text-center">
                            <p><?php echo htmlspecialchars($lang['rule40']); ?></p>
                        </div>

                    </div>
                </div>
            </div>
            <?php echo htmlspecialchars($lang['rule41']); ?><br><br>
            <?php echo htmlspecialchars($lang['rule42']); ?><br><br>

            др уметности <b>Катарина Зарић</b>, професор Универзитета уметности, Београд<br>
            <b>Дејан Ђорић</b>, ликовни критичар, Београд<br>
            <b>Војислав Јовановић</b>, директор Модерне галерије, Ваљево<br><br>

            <?php echo htmlspecialchars($lang['rule43']); ?><br><br>
            <?php echo htmlspecialchars($lang['rule44']); ?><br>
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2 mt-5">
                    <div class="px-xl-5">
                        <!-- headingHead -->

                        <div class="eabDescrText eabDescrTextII text-gray888 fontSerif text-center">
                            <p><?php echo htmlspecialchars($lang['rule50']); ?></p>
                        </div>

                    </div>
                </div>
            </div>
            <?php echo htmlspecialchars($lang['rule51']); ?><br><br>
            <?php echo htmlspecialchars($lang['rule52']); ?><br><br>
            <?php echo htmlspecialchars($lang['rule53']); ?><br><br>
            <?php echo htmlspecialchars($lang['rule54']); ?><br><br>
            <?php echo htmlspecialchars($lang['rule55']); ?><br><br>
            <?php echo htmlspecialchars($lang['rule56']); ?> <br>
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2 mt-5">
                    <div class="px-xl-5">
                        <!-- headingHead -->

                        <div class="eabDescrText eabDescrTextII text-gray888 fontSerif text-center">
                            <p><?php echo htmlspecialchars($lang['rule60']); ?></p>
                        </div>

                    </div>
                </div>
            </div>
            <?php echo htmlspecialchars($lang['rule61']); ?><br><br>
            <?php echo htmlspecialchars($lang['rule611']); ?><br><br>
            <?php echo htmlspecialchars($lang['rule612']); ?><br><br>
            <?php echo htmlspecialchars($lang['rule613']); ?><br><br>
            <?php echo htmlspecialchars($lang['rule614']); ?><br><br>
            <?php echo htmlspecialchars($lang['rule615']); ?><br><br>
            <?php echo htmlspecialchars($lang['rule616']); ?><br><br>
            <?php echo htmlspecialchars($lang['rule62']); ?><br>

            <div class="row">
                <div class="col-12 col-md-8 offset-md-2 mt-5">
                    <div class="px-xl-5">
                        <!-- headingHead -->

                        <div class="eabDescrText eabDescrTextII text-gray888 fontSerif text-center">
                            <p><?php echo htmlspecialchars($lang['rule70']); ?></p>
                        </div>

                    </div>
                </div>
            </div>
            <?php echo htmlspecialchars($lang['rule71']); ?><br><br>
            <?php echo htmlspecialchars($lang['rule72']); ?><br><br>
            <?php echo htmlspecialchars($lang['rule73']); ?><br><br>
            <?php echo htmlspecialchars($lang['rule74']); ?><br><br>
            <?php echo htmlspecialchars($lang['rule75']); ?><br><br>
            <?php echo htmlspecialchars($lang['rule76']); ?><br><br>
            <?php echo htmlspecialchars($lang['rule77']); ?><br>

            <hr class="mt-5320 mb-12 mt-lg-8">

            <div class="row">
                <div class="col-1"></div>
                <div class="col-12 col-md-10 order-md-2">
                    <!-- contactFormWrap -->
                    <div class="contactFormWrap pl-lg-8 mb-6 mb-md-0">
                        <form method="post" enctype="multipart/form-data" action="./email/send-email.php">
                            <h2><?php echo htmlspecialchars($lang['candidateInformation']); ?></h2>
                            <div class="form-row mx-n2">
                                <div class="formCol formCol6 px-2">
                                    <label><?php echo htmlspecialchars($lang['surNameForm']); ?></label>
                                    <div class="form-group mb-4">
                                        <input required="required" name="surName" type="text" class="form-control w-100 d-block" placeholder="<?php echo htmlspecialchars($lang['surNameForm']); ?>">
                                    </div>
                                </div>
                                <div class="formCol formCol6 px-2">
                                    <label><?php echo htmlspecialchars($lang['nameForm']); ?></label>
                                    <div class="form-group mb-4">
                                        <input required="required" name="name" type="text" class="form-control w-100 d-block" placeholder="<?php echo htmlspecialchars($lang['nameForm']); ?>">
                                    </div>
                                </div>
                                <div class="formCol formCol6 px-2">
                                    <label><?php echo htmlspecialchars($lang['dateOfBirthForm']); ?></label>
                                    <div class="form-group mb-4">
                                        <input required="required" name="dateOfBirth" type="datetime-local" class="form-control w-100 d-block" placeholder="<?php echo htmlspecialchars($lang['dateOfBirthForm']); ?>">
                                    </div>
                                </div>
                                <div class="formCol formCol6 px-2">
                                    <label><?php echo htmlspecialchars($lang['cityOfBirthForm']); ?></label>
                                    <div class="form-group mb-4">
                                        <input required="required" name="cityOfBirth" type="text" class="form-control w-100 d-block" placeholder="<?php echo htmlspecialchars($lang['cityOfBirthForm']); ?>">
                                    </div>
                                </div>
                                <div class="formCol formCol12 px-2">
                                    <label><?php echo htmlspecialchars($lang['schoolForm']); ?></label>
                                    <div class="form-group mb-4">
                                        <input required="required" type="text" name="school" class="form-control w-100 d-block" placeholder="<?php echo htmlspecialchars($lang['schoolForm']); ?>">
                                    </div>
                                </div>
                                <div class="formCol formCol5 px-2">
                                    <label><?php echo htmlspecialchars($lang['adressForm']); ?></label>
                                    <div class="form-group mb-4">
                                        <input required="required" name="adress" type="text" class="form-control w-100 d-block" placeholder="<?php echo htmlspecialchars($lang['adressForm']); ?>">
                                    </div>
                                </div>
                                <div class="formCol formCol5 px-2">
                                    <label><?php echo htmlspecialchars($lang['cityForm']); ?></label>
                                    <div class="form-group mb-4">
                                        <input required="required" name="cityOfResidence" class="form-control w-100 d-block" placeholder="<?php echo htmlspecialchars($lang['cityForm']); ?>">
                                    </div>
                                </div>
                                <div class="formCol formCol5 px-2">
                                    <label><?php echo htmlspecialchars($lang['countryForm']); ?></label>
                                    <div class="form-group mb-4">
                                        <input required="required" name="countryOfResidence" class="form-control w-100 d-block" placeholder="<?php echo htmlspecialchars($lang['countryForm']); ?>">
                                    </div>
                                </div>
                                <div class="formCol formCol6 px-2">
                                    <label><?php echo htmlspecialchars($lang['emailForm']); ?></label>
                                    <div class="form-group mb-4">
                                        <input required="required" name="email" class="form-control w-100 d-block" placeholder="<?php echo htmlspecialchars($lang['emailForm']); ?>">
                                    </div>
                                </div>
                                <div class="formCol formCol6 px-2">
                                    <label><?php echo htmlspecialchars($lang['phoneForm']); ?></label>
                                    <div class="form-group mb-4">
                                        <input required="required" name="phoneNumber" class="form-control w-100 d-block" placeholder="<?php echo htmlspecialchars($lang['phoneForm']); ?>">
                                    </div>
                                </div>
                                <h2><?php echo htmlspecialchars($lang['imageInfo']); ?></h2>
                                <div class="formCol formCol12 px-2">
                                    <label><?php echo htmlspecialchars($lang['accessedImages']); ?></label>
                                    <div class="form-group mb-4">
                                        <select name="numberOfPictures" class="form-control w-100 d-block" placeholder="Број радова">
                                            <option value='-1'><?php echo htmlspecialchars($lang['chooseOption']); ?></option>
                                            <option value='1'>1</option>
                                            <option value='2'>2</option>
                                            <option value='3'>3</option>
                                        </select>
                                    </div>
                                </div>
                                <p>
                                    <a onclick="expand(this)" data-podatak="1" class="btn btn-secondary" id='firstPictureButton' data-toggle="collapse" href="#radBroj1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><?php echo htmlspecialchars($lang['firstPic']); ?></a>
                                    <a onclick="expand(this)" data-podatak="2" class="btn btn-secondary" id='secondPictureButton' data-toggle="collapse" href="#radBroj2" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><?php echo htmlspecialchars($lang['secondPic']); ?></a>
                                    <a onclick="expand(this)" data-podatak="3" class="btn btn-secondary" id='thirdPictureButton' data-toggle="collapse" href="#radBroj3" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><?php echo htmlspecialchars($lang['thirdPic']); ?></a>
                                </p>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="collapse" id="radBroj1">
                                            <div class="card card-body">
                                                <div class="form-row mx-n2">
                                                    <div class="formCol formCol12 px-2">
                                                        <h4><?php echo htmlspecialchars($lang['firstPic']); ?></h4> 
                                                    </div>
                                                    <div class="formCol formCol6 px-2">

                                                        <label><?php echo htmlspecialchars($lang['firstPicAuthor']); ?></label>
                                                        <div class="form-group mb-4">
                                                            <input name="firstPictureAuthor" class="form-control w-100 d-block" placeholder="<?php echo htmlspecialchars($lang['firstPicAuthor']); ?>">

                                                        </div>
                                                    </div>
                                                    <div class="formCol formCol6 px-2">
                                                        <label><?php echo htmlspecialchars($lang['firstPicName']); ?></label>
                                                        <div class="form-group mb-4">
                                                            <input name="firstPictureName" class="form-control w-100 d-block" placeholder="<?php echo htmlspecialchars($lang['firstPicName']); ?>">

                                                        </div>
                                                    </div>
                                                    <div class="formCol formCol6 px-2">
                                                        <label><?php echo htmlspecialchars($lang['firstPicYear']); ?></label>
                                                        <div class="form-group mb-4">
                                                            <input name="firstPictureYear" class="form-control w-100 d-block" placeholder="<?php echo htmlspecialchars($lang['firstPicYear']); ?>">

                                                        </div>
                                                    </div>
                                                    <div class="formCol formCol6 px-2">
                                                        <label><?php echo htmlspecialchars($lang['firstPicTehnique']); ?></label>
                                                        <div class="form-group mb-4">
                                                            <input name="firstPictureTehnique" class="form-control w-100 d-block" placeholder="<?php echo htmlspecialchars($lang['firstPicTehnique']); ?>">

                                                        </div>
                                                    </div>
                                                    <div class="formCol formCol4 px-2">
                                                        <label><?php echo htmlspecialchars($lang['firstPicHeight']); ?></label>
                                                        <div class="form-group mb-4">
                                                            <input name="firstPictureHeight" type="number" class="form-control w-100 d-block" placeholder="<?php echo htmlspecialchars($lang['firstPicHeight']); ?>">

                                                        </div>
                                                    </div>
                                                    <div class="formCol formCol4 px-2">
                                                        <label><?php echo htmlspecialchars($lang['firstPicWidth']); ?></label>
                                                        <div class="form-group mb-4">
                                                            <input name="firstPictureWidth" type="number" class="form-control w-100 d-block" placeholder="<?php echo htmlspecialchars($lang['firstPicWidth']); ?>">

                                                        </div>
                                                    </div>
                                                    <div class="formCol formCol4 px-2">
                                                        <label><?php echo htmlspecialchars($lang['firstPicWeight']); ?></label>
                                                        <div class="form-group mb-4">
                                                            <input name="firstPictureWeight" type="number" class="form-control w-100 d-block" placeholder="<?php echo htmlspecialchars($lang['firstPicWeight']); ?>">

                                                        </div>
                                                    </div>
                                                    <div class="formCol formCol6 px-2">
                                                        <label><?php echo htmlspecialchars($lang['firstPicPrice']); ?></label>
                                                        <div class="form-group mb-4">
                                                            <input name="firstPicturePrice" class="form-control w-100 d-block" placeholder="<?php echo htmlspecialchars($lang['firstPicPrice']); ?>">

                                                        </div>
                                                    </div>
                                                    <div class="formCol formCol6 px-2">
                                                        <label><?php echo htmlspecialchars($lang['firstPicPicture']); ?></label>
                                                        <div class="form-group mb-4">
                                                            <input name="firstPictureFile" type="file" class="form-control w-100 d-block" placeholder="<?php echo htmlspecialchars($lang['firstPicPicture']); ?>">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="collapse" id="radBroj2">
                                            <div class="card card-body">
                                                <div class="form-row mx-n2">
                                                    <div class="formCol formCol12 px-2">
                                                        <h4><?php echo htmlspecialchars($lang['secondPic']); ?></h4> 
                                                    </div>
                                                    <div class="formCol formCol6 px-2">

                                                        <label><?php echo htmlspecialchars($lang['firstPicAuthor']); ?></label>
                                                        <div class="form-group mb-4">
                                                            <input name="secondPictureAuthor" class="form-control w-100 d-block" placeholder="<?php echo htmlspecialchars($lang['firstPicAuthor']); ?>">

                                                        </div>
                                                    </div>
                                                    <div class="formCol formCol6 px-2">
                                                        <label><?php echo htmlspecialchars($lang['firstPicName']); ?></label>
                                                        <div class="form-group mb-4">
                                                            <input name="secondPictureName" class="form-control w-100 d-block" placeholder="<?php echo htmlspecialchars($lang['firstPicName']); ?>">

                                                        </div>
                                                    </div>
                                                    <div class="formCol formCol6 px-2">
                                                        <label><?php echo htmlspecialchars($lang['firstPicYear']); ?></label>
                                                        <div class="form-group mb-4">
                                                            <input name="secondPictureYear" class="form-control w-100 d-block" placeholder="<?php echo htmlspecialchars($lang['firstPicYear']); ?>">

                                                        </div>
                                                    </div>
                                                    <div class="formCol formCol6 px-2">
                                                        <label><?php echo htmlspecialchars($lang['firstPicTehnique']); ?></label>
                                                        <div class="form-group mb-4">
                                                            <input name="secondPictureTehnique" class="form-control w-100 d-block" placeholder="<?php echo htmlspecialchars($lang['firstPicTehnique']); ?>">

                                                        </div>
                                                    </div>
                                                    <div class="formCol formCol4 px-2">
                                                        <label><?php echo htmlspecialchars($lang['firstPicHeight']); ?></label>
                                                        <div class="form-group mb-4">
                                                            <input name="secondPictureHeight"  type="number" class="form-control w-100 d-block" placeholder="<?php echo htmlspecialchars($lang['firstPicHeight']); ?>">

                                                        </div>
                                                    </div>
                                                    <div class="formCol formCol4 px-2">
                                                        <label><?php echo htmlspecialchars($lang['firstPicWidth']); ?></label>
                                                        <div class="form-group mb-4">
                                                            <input name="secondPictureWidth"  type="number" class="form-control w-100 d-block" placeholder="<?php echo htmlspecialchars($lang['firstPicWidth']); ?>">

                                                        </div>
                                                    </div>
                                                    <div class="formCol formCol4 px-2">
                                                        <label><?php echo htmlspecialchars($lang['firstPicWeight']); ?></label>
                                                        <div class="form-group mb-4">
                                                            <input name="secondPictureWeight"  type="number" class="form-control w-100 d-block" placeholder="<?php echo htmlspecialchars($lang['firstPicWeight']); ?>">

                                                        </div>
                                                    </div>
                                                    <div class="formCol formCol6 px-2">
                                                        <label><?php echo htmlspecialchars($lang['firstPicPrice']); ?></label>
                                                        <div class="form-group mb-4">
                                                            <input name="secondPicturePrice" class="form-control w-100 d-block" placeholder="<?php echo htmlspecialchars($lang['firstPicPrice']); ?>">

                                                        </div>
                                                    </div>
                                                    <div class="formCol formCol6 px-2">
                                                        <label><?php echo htmlspecialchars($lang['firstPicPicture']); ?></label>
                                                        <div class="form-group mb-4">
                                                            <input name="secondPictureFile" type="file" class="form-control w-100 d-block" placeholder="<?php echo htmlspecialchars($lang['firstPicPicture']); ?>">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="collapse" id="radBroj3">
                                            <div class="card card-body">
                                                <div class="form-row mx-n2">
                                                    <div class="formCol formCol12 px-2">
                                                        <h4><?php echo htmlspecialchars($lang['thirdPic']); ?></h4> 
                                                    </div>
                                                    <div class="formCol formCol6 px-2">

                                                        <label><?php echo htmlspecialchars($lang['firstPicAuthor']); ?></label>
                                                        <div class="form-group mb-4">
                                                            <input name="thirdPictureAuthor" class="form-control w-100 d-block" placeholder="<?php echo htmlspecialchars($lang['firstPicAuthor']); ?>">

                                                        </div>
                                                    </div>
                                                    <div class="formCol formCol6 px-2">
                                                        <label><?php echo htmlspecialchars($lang['firstPicName']); ?></label>
                                                        <div class="form-group mb-4">
                                                            <input name="thirdPictureName" class="form-control w-100 d-block" placeholder="<?php echo htmlspecialchars($lang['firstPicName']); ?>">

                                                        </div>
                                                    </div>
                                                    <div class="formCol formCol6 px-2">
                                                        <label><?php echo htmlspecialchars($lang['firstPicYear']); ?></label>
                                                        <div class="form-group mb-4">
                                                            <input name="thirdPictureYear" class="form-control w-100 d-block" placeholder="<?php echo htmlspecialchars($lang['firstPicYear']); ?>">

                                                        </div>
                                                    </div>
                                                    <div class="formCol formCol6 px-2">
                                                        <label><?php echo htmlspecialchars($lang['firstPicTehnique']); ?></label>
                                                        <div class="form-group mb-4">
                                                            <input name="thirdPictureTehnique" class="form-control w-100 d-block" placeholder="<?php echo htmlspecialchars($lang['firstPicTehnique']); ?>">

                                                        </div>
                                                    </div>
                                                    <div class="formCol formCol4 px-2">
                                                        <label><?php echo htmlspecialchars($lang['firstPicHeight']); ?></label>
                                                        <div class="form-group mb-4">
                                                            <input name="thirdPictureHeight" class="form-control w-100 d-block" placeholder="<?php echo htmlspecialchars($lang['firstPicHeight']); ?>">

                                                        </div>
                                                    </div>
                                                    <div class="formCol formCol4 px-2">
                                                        <label><?php echo htmlspecialchars($lang['firstPicWidth']); ?></label>
                                                        <div class="form-group mb-4">
                                                            <input name="thirdPictureWidth" class="form-control w-100 d-block" placeholder="<?php echo htmlspecialchars($lang['firstPicWidth']); ?>">

                                                        </div>
                                                    </div>
                                                    <div class="formCol formCol4 px-2">
                                                        <label><?php echo htmlspecialchars($lang['firstPicWeight']); ?></label>
                                                        <div class="form-group mb-4">
                                                            <input name="thirdPictureWeight" class="form-control w-100 d-block" placeholder="<?php echo htmlspecialchars($lang['firstPicWeight']); ?>">

                                                        </div>
                                                    </div>
                                                    <div class="formCol formCol6 px-2">
                                                        <label><?php echo htmlspecialchars($lang['firstPicPrice']); ?></label>
                                                        <div class="form-group mb-4">
                                                            <input name="thirdPicturePrice" class="form-control w-100 d-block" placeholder="<?php echo htmlspecialchars($lang['firstPicPrice']); ?>">

                                                        </div>
                                                    </div>
                                                    <div class="formCol formCol6 px-2">
                                                        <label><?php echo htmlspecialchars($lang['firstPicPicture']); ?></label>
                                                        <div class="form-group mb-4">
                                                            <input name="thirdPictureFile" type="file" class="form-control w-100 d-block" placeholder="<?php echo htmlspecialchars($lang['firstPicPicture']); ?>">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--                                                                                <h4 style="display: block;">Rad broj 1</h4>-->
                                <!--                                <div class="formCol formCol12 px-2">
                                                                    <h4>Rad broj 1</h4> 
                                                                </div>
                                                                <div class="formCol formCol6 px-2">
                                
                                                                    <label>Ime autora</label>
                                                                    <div class="form-group mb-4">
                                                                        <input name="firstPicutreAuthor" class="form-control w-100 d-block" placeholder="Ime autora">
                                
                                                                    </div>
                                                                </div>
                                                                <div class="formCol formCol6 px-2">
                                                                    <label>Naziv rada</label>
                                                                    <div class="form-group mb-4">
                                                                        <input name="firstPicutreName" class="form-control w-100 d-block" placeholder="Naziv rada">
                                
                                                                    </div>
                                                                </div>
                                                                <div class="formCol formCol6 px-2">
                                                                    <label>Godina nastanka</label>
                                                                    <div class="form-group mb-4">
                                                                        <input name="firstPicutreYear" class="form-control w-100 d-block" placeholder="Naziv rada">
                                
                                                                    </div>
                                                                </div>
                                                                <div class="formCol formCol6 px-2">
                                                                    <label>Tehnika</label>
                                                                    <div class="form-group mb-4">
                                                                        <input name="firstPicutreTehnique" class="form-control w-100 d-block" placeholder="Naziv rada">
                                
                                                                    </div>
                                                                </div>
                                                                <div class="formCol formCol4 px-2">
                                                                    <label>Visina</label>
                                                                    <div class="form-group mb-4">
                                                                        <input name="firstPicutreHeight" type="number" class="form-control w-100 d-block" placeholder="Naziv rada">
                                
                                                                    </div>
                                                                </div>
                                                                <div class="formCol formCol4 px-2">
                                                                    <label>Sirina</label>
                                                                    <div class="form-group mb-4">
                                                                        <input name="firstPicutreWidth" type="number" class="form-control w-100 d-block" placeholder="Naziv rada">
                                
                                                                    </div>
                                                                </div>
                                                                <div class="formCol formCol4 px-2">
                                                                    <label>Tezina</label>
                                                                    <div class="form-group mb-4">
                                                                        <input name="firstPicutreWeight" type="number" class="form-control w-100 d-block" placeholder="Naziv rada">
                                
                                                                    </div>
                                                                </div>
                                                                <div class="formCol formCol6 px-2">
                                                                    <label>Neto cena</label>
                                                                    <div class="form-group mb-4">
                                                                        <input name="firstPicutrePrice" class="form-control w-100 d-block" placeholder="Naziv rada">
                                
                                                                    </div>
                                                                </div>
                                                                <div class="formCol formCol6 px-2">
                                                                    <label>Slika</label>
                                                                    <div class="form-group mb-4">
                                                                        <input name="firstPictureFile" type="file" class="form-control w-100 d-block" placeholder="Naziv rada">
                                
                                                                    </div>
                                                                </div>-->
                                <!--                                <div class="formCol formCol12 px-2">
                                                                    <h4>Rad broj 2</h4> 
                                                                </div>
                                                                <div class="formCol formCol6 px-2">
                                
                                                                    <label>Ime autora</label>
                                                                    <div class="form-group mb-4">
                                                                        <input name="secondPicutreAuthor" class="form-control w-100 d-block" placeholder="Ime autora">
                                
                                                                    </div>
                                                                </div>
                                                                <div class="formCol formCol6 px-2">
                                                                    <label>Naziv rada</label>
                                                                    <div class="form-group mb-4">
                                                                        <input name="secondPicutreName" class="form-control w-100 d-block" placeholder="Naziv rada">
                                
                                                                    </div>
                                                                </div>
                                                                <div class="formCol formCol6 px-2">
                                                                    <label>Godina nastanka</label>
                                                                    <div class="form-group mb-4">
                                                                        <input name="secondPicutreYear" class="form-control w-100 d-block" placeholder="Naziv rada">
                                
                                                                    </div>
                                                                </div>
                                                                <div class="formCol formCol6 px-2">
                                                                    <label>Tehnika</label>
                                                                    <div class="form-group mb-4">
                                                                        <input name="secondPicutreTehnique" class="form-control w-100 d-block" placeholder="Naziv rada">
                                
                                                                    </div>
                                                                </div>
                                                                <div class="formCol formCol4 px-2">
                                                                    <label>Visina</label>
                                                                    <div class="form-group mb-4">
                                                                        <input name="secondPicutreHeight"  type="number" class="form-control w-100 d-block" placeholder="Naziv rada">
                                
                                                                    </div>
                                                                </div>
                                                                <div class="formCol formCol4 px-2">
                                                                    <label>Sirina</label>
                                                                    <div class="form-group mb-4">
                                                                        <input name="secondPicutreWidth"  type="number" class="form-control w-100 d-block" placeholder="Naziv rada">
                                
                                                                    </div>
                                                                </div>
                                                                <div class="formCol formCol4 px-2">
                                                                    <label>Tezina</label>
                                                                    <div class="form-group mb-4">
                                                                        <input name="secondPicutreWeight"  type="number" class="form-control w-100 d-block" placeholder="Naziv rada">
                                
                                                                    </div>
                                                                </div>
                                                                <div class="formCol formCol6 px-2">
                                                                    <label>Neto cena</label>
                                                                    <div class="form-group mb-4">
                                                                        <input name="secondPicutrePrice" class="form-control w-100 d-block" placeholder="Naziv rada">
                                
                                                                    </div>
                                                                </div>
                                                                <div class="formCol formCol6 px-2">
                                                                    <label>Slika</label>
                                                                    <div class="form-group mb-4">
                                                                        <input name="secondPictureFile" type="file" class="form-control w-100 d-block" placeholder="Naziv rada">
                                
                                                                    </div>
                                                                </div>
                                                                <div class="formCol formCol12 px-2">
                                                                    <h4>Rad broj 3</h4> 
                                                                </div>
                                                                <div class="formCol formCol6 px-2">
                                
                                                                    <label>Ime autora</label>
                                                                    <div class="form-group mb-4">
                                                                        <input name="thirdPicutreAuthor" class="form-control w-100 d-block" placeholder="Ime autora">
                                
                                                                    </div>
                                                                </div>
                                                                <div class="formCol formCol6 px-2">
                                                                    <label>Naziv rada</label>
                                                                    <div class="form-group mb-4">
                                                                        <input name="thirdPicutreName" class="form-control w-100 d-block" placeholder="Naziv rada">
                                
                                                                    </div>
                                                                </div>
                                                                <div class="formCol formCol6 px-2">
                                                                    <label>Godina nastanka</label>
                                                                    <div class="form-group mb-4">
                                                                        <input name="thirdPicutreYear" class="form-control w-100 d-block" placeholder="Naziv rada">
                                
                                                                    </div>
                                                                </div>
                                                                <div class="formCol formCol6 px-2">
                                                                    <label>Tehnika</label>
                                                                    <div class="form-group mb-4">
                                                                        <input name="thirdPicutreTehnique" class="form-control w-100 d-block" placeholder="Naziv rada">
                                
                                                                    </div>
                                                                </div>
                                                                <div class="formCol formCol4 px-2">
                                                                    <label>Visina</label>
                                                                    <div class="form-group mb-4">
                                                                        <input name="thirdPicutreHeight" class="form-control w-100 d-block" placeholder="Naziv rada">
                                
                                                                    </div>
                                                                </div>
                                                                <div class="formCol formCol4 px-2">
                                                                    <label>Sirina</label>
                                                                    <div class="form-group mb-4">
                                                                        <input name="thirdPicutreWidth" class="form-control w-100 d-block" placeholder="Naziv rada">
                                
                                                                    </div>
                                                                </div>
                                                                <div class="formCol formCol4 px-2">
                                                                    <label>Tezina</label>
                                                                    <div class="form-group mb-4">
                                                                        <input name="thirdPicutreWeight" class="form-control w-100 d-block" placeholder="Naziv rada">
                                
                                                                    </div>
                                                                </div>
                                                                <div class="formCol formCol6 px-2">
                                                                    <label>Neto cena</label>
                                                                    <div class="form-group mb-4">
                                                                        <input name="thirdPicutrePrice" class="form-control w-100 d-block" placeholder="Naziv rada">
                                
                                                                    </div>
                                                                </div>
                                                                <div class="formCol formCol6 px-2">
                                                                    <label>Slika</label>
                                                                    <div class="form-group mb-4">
                                                                        <input name="thirdPictureFile" type="file" class="form-control w-100 d-block" placeholder="Slika">
                                
                                                                    </div>
                                                                </div>-->

                                <div class="formCol formCol12 px-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="termsOfUseCheck" value="option1">
                                        <label class="form-check-label" for="termsOfUseCheck"><?php echo htmlspecialchars($lang['termsOfConditions']); ?></label>
                                    </div>

                                    <p>
                                        <a class="btn btn-secondary"
                                           data-toggle="collapse"
                                           href="#multiCollapseExample1"
                                           role="button" aria-expanded="false"
                                           aria-controls="multiCollapseExample1"
                                           ><?php echo htmlspecialchars($lang['readTerms']); ?></a>
                                    </p>
                                    <div class="row">
                                        <div class="col">
                                            <div class="collapse multi-collapse" id="multiCollapseExample1">
                                                <div class="card card-body">
                                                    <b><?php echo htmlspecialchars($lang['termsTitle']); ?></b><br><br>

                                                        <?php echo htmlspecialchars($lang['termsFirst']); ?><br>

                                                        <?php echo htmlspecialchars($lang['termsSecond']); ?><br>

                                                        <?php echo htmlspecialchars($lang['termsThird']); ?><br>
                                                        
                                                        <?php echo htmlspecialchars($lang['termsFourth']); ?><br>
                                                        
                                                        <?php echo htmlspecialchars($lang['termsFifth']); ?><br>
                                                        
                                                        <?php echo htmlspecialchars($lang['termsSixth']); ?><br>
                                                        <?php echo htmlspecialchars($lang['termsIII']); ?><br>
                                                        <?php echo htmlspecialchars($lang['termsIV']); ?><br>
                                                        <?php echo htmlspecialchars($lang['termsV']); ?><br>
                                                        <?php echo htmlspecialchars($lang['termsVI']); ?><br>
                                                        <?php echo htmlspecialchars($lang['termsVII']); ?><br>
                                                        <?php echo htmlspecialchars($lang['termsVIII']); ?><br>
                                                        <?php echo htmlspecialchars($lang['termsIX']); ?><br>

                                                    <?php echo htmlspecialchars($lang['terms3']); ?><br>

                                                    <?php echo htmlspecialchars($lang['terms4']); ?><br>

                                                    <?php echo htmlspecialchars($lang['terms51']); ?>
                                                    <br> <?php echo htmlspecialchars($lang['terms52']); ?> 
                                                    <b>office@bijenalefantastike.rs</b><br>

                                                    <b><?php echo htmlspecialchars($lang['termsFinal']); ?></b>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <input id="submitButton" type="submit" class="btn btn-secondary btnMidMinWidth mt-2 text-uppercase" value="<?php echo htmlspecialchars($lang["applyButton"]) ?>">
                         </form>
                            </div>
                    </div>
                    <!--						<div class="col-12 col-md-4 order-md-1">
                                                                             ctInfoWrap 
                                                                            <div class="ctInfoWrap text-gray777 pt-1">
                                                                                    <strong class="title h4 d-block">Opening Hours</strong>
                                                                                    <p class="mb-5 mb-md-8">Open Daily 10am–5pm <br>Sunday Until 8pm.</p>
                                                                                    <strong class="title h4 d-block mb-2">Contact Info</strong>
                                                                                    <address class="mb-5 mb-md-9">
                                                                                            <p class="mb-5">22720 EL Camino Real <br>Santa Margarita, NY 93453</p>
                                                                                            <p><a href="tel:16179876543" class="textDecorationNone">1 (617) 987-6543</a><br><a href="mailto:museum@example.org" class="textDecorationNone">museum@example.org</a></p>
                                                                                    </address>
                                                                                    <strong class="title h4 d-block mb-4">Social Connect</strong>
                                                                                     socialNetworks 
                                                                                    <ul class="list-unstyled socialNetworks ctSocialNetworks d-flex flex-wrap mb-0">
                                                                                            <li>
                                                                                                    <a href="javascript:void(0);">
                                                                                                            <i class="fab fa-twitter"><span class="sr-only">twitter</span></i>
                                                                                                    </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                    <a href="javascript:void(0);">
                                                                                                            <i class="fab fa-pinterest"><span class="sr-only">pinterest</span></i>
                                                                                                    </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                    <a href="javascript:void(0);">
                                                                                                            <i class="fab fa-facebook-f"><span class="sr-only">facebook</span></i>
                                                                                                    </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                    <a href="javascript:void(0);">
                                                                                                            <i class="fab fa-instagram"><span class="sr-only">instagram</span></i>
                                                                                                    </a>
                                                                                            </li>
                                                                                    </ul>
                                                                            </div>
                                                                    </div>-->
                </div>
            </div>
    </article>
    <!-- saMap -->
    <aside class="saMap saMapII w-100 position-relative">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2832.1553677289166!2d20.453056815497145!3d44.777636079098905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a7047f5f504af%3A0xc6fa1a5abd9aff8b!2z0JrRgNC-0L3RiNGC0LDRgtGB0LrQsCA1LCDQkdC10L7Qs9GA0LDQtA!5e0!3m2!1ssr!2srs!4v1611527936356!5m2!1ssr!2srs" class="w-100 h-100 d-block border-0 position-absolute" aria-hidden="false" tabindex="0"></iframe>
            <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3117.259425640003!2d-90.29593598438974!3d38.61991257085702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87d8b57b271310d3%3A0x53ff7568884d5d00!2sKnox%20Industrial%20Dr%2C%20St.%20Louis%2C%20MO%2063139%2C%20USA!5e0!3m2!1sen!2s!4v1587836825553!5m2!1sen!2s" class="w-100 h-100 d-block border-0 position-absolute" aria-hidden="false" tabindex="0"></iframe>-->
    </aside>
</main>
<!-- ftAreaWrap -->
<div class="ftAreaWrap bg-secondary text-gray888">
    <!-- pageFooter -->
    <?php
    require_once './partials/footer.php';
    ?>
</div>
</div>
<!-- include jQuery library -->
<script src="js/jquery-3.4.1.min.js"></script>
<!-- include bootstrap popper JavaScript -->
<script src="js/popper.min.js"></script>
<!-- include bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- include custom JavaScript -->
<script src="js/jqueryCustom.js"></script>
<!-- include fontawesome kit -->
<script src="https://kit.fontawesome.com/391f644c42.js"></script>
<script type="text/javascript">
                                        $(document).ready(function () {
                                            $("#submitButton").prop("disabled", true);
                                            $("#termsOfUseCheck").on("change", function () {
                                                var checked = $(this).prop("checked");
                                                $("#submitButton").prop("disabled", checked == false ? true : false);
                                            });

                                        }).trigger("change");


                                        function expand(elem) {
                                            var el = $(elem).data("podatak");
                                            if (el == "1") {
                                                $("#radBroj1").show();
                                                $("#radBroj2").hide();
                                                $("#radBroj3").hide();
                                                return;
                                            }
                                            if (el == "2") {
                                                $("#radBroj1").hide();
                                                $("#radBroj2").show();
                                                $("#radBroj3").hide();
                                                return;
                                            }
                                            if (el == "3") {
                                                $("#radBroj1").hide();
                                                $("#radBroj2").hide();
                                                $("#radBroj3").show();
                                                return;
                                            }

                                        }
                                        $("#termsOfUse").val("")
</script>
</body>
</html>