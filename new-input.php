<?php
    session_start();
if(isset($_SESSION['text'])){ ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css">
    <div class="container mt-2 shadow p-2 mb-2 bg-body rounded " style="width: 40%;">
        <form action="image-proccesing.php" method="post" class="col text-center" enctype="multipart/form-data" >
            <input type="text" name="text" placeholder="Enter text" class="form-control" autocomplete="off" required value="<?= $_SESSION['text']; ?>"><br>

            <div class="row">
                <label for="fontStyle" class="col-sm-3 ">Font style</label>
                <div class="col-sm-8">
                    <p><select  name="fontStyle" class="form-select" value="<?= $_SESSION['fontStyle']; ?>">
                            <option selected value="<?= $_SESSION['fontStyle']; ?>" hidden=""><?= $_SESSION['fontStyle']; ?></option>
                            <option value="Roboto-Regular.ttf">Roboto-Regular</option>
                            <option value="Impact.ttf">Impact</option>
                            <option value="Comic-Sans-MS.ttf">Comic-Sans-MS</option>
                            <option value="Montserrat-Regular.ttf">Montserrat-Regular</option>
                            <option value="Arial-Regular.ttf">Arial-Regular</option>
                        </select></p>
                </div>
            </div>

            <div class="row">
                <label for="positionX" class="col-sm-3">% of X-position</label>
                <div class="col-sm-7">
                    <input type="range"  step="5" id="positionX" name="positionX" value="<?= $_SESSION['positionX']; ?>" class="form-control-plaintext" min="0" max="100" oninput="posX.value = this.value + '%'">
                </div>
                <output class="col-sm-1" name="posX"><?= $_SESSION['positionX']; ?>%</output>
            </div>

            <div class="row">
                <label for="positionY" class="col-sm-3">% of Y-position</label>
                <div class="col-sm-7">
                    <input type="range" step="5" id="positionY" name="positionY" value="<?= $_SESSION['positionY']; ?>" class="form-control-plaintext" min="0" max="100" oninput="posY.value = this.value + '%'">
                </div>
                <output class="col-sm-1" name="posY"><?= $_SESSION['positionY']; ?>%</output>
            </div>

            <div class="row">
                <label for="textSize" class="col-sm-3">Size of text</label>
                <div class="col-sm-7">
                    <input type="range" step="10" id="textSize" name="textSize" value="<?= $_SESSION['textSize']; ?>" class="form-control-plaintext" min="10" max="230" oninput="txtSize.value = this.value + 'px'">
                </div>
                <output class="col-sm-1" name="txtSize"><?= $_SESSION['textSize']; ?>px</output>
            </div>
            <div class="row">
                <label for="borderSize" class="col-sm-3">Size of border</label>
                <div class="col-sm-7">
                    <input type="range" step="1" id="borderSize" name="borderSize" value="<?= $_SESSION['borderSize']; ?>" class="form-control-plaintext" min="0" max="20" oninput="brdrSize.value = this.value + 'px'">
                </div>
                <output class="col-sm-1" name="brdrSize"><?= $_SESSION['borderSize']; ?>px</output>
            </div>
            <div class="row">
                <label for="textAngle" class="col-sm-3">Angle of text</label>
                <div class="col-sm-7">
                    <input type="range" step="15" id="textAngle" name="textAngle" value="<?= $_SESSION['textAngle']; ?>" class="form-control-plaintext" min="-180" max="180" oninput="txtAngle.value = this.value + '°'">
                </div>
                <output class="col-sm-1" name="txtAngle"><?= $_SESSION['textAngle']; ?>°</output>
            </div>
            <div class="row">
                <label for="fontColor" class="col-sm-3">Font Color</label>
                <div class="col-sm-7">
                    <input type="color" id="fontColor" name="fontColor" value="<?= $_SESSION['fontColor'];?>" class="form-control">
                </div>
            </div><br>

            <input type="submit" name="submit" value="Generate again" class="btn btn-primary"><br>
        </form>
    </div>
    <?php } ?>

