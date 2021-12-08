<?php
if(!isset($_SESSION))
{
    session_start();
}
if(isset($_SESSION['text'])){ ?>
    <div class="container mt-2 shadow p-2 mb-2 bg-body rounded " style="width: 40%;">
        <form action="image-proccesing.php" method="post" class="col text-center" enctype="multipart/form-data" >
            <input type="text" name="text" placeholder="Enter text" class="form-control" autocomplete="off" value="<?php echo $_SESSION['text']; ?>"><br>

            <div class="row">
                <label for="fontStyle" class="col-sm-4">Font style</label>
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
                <label for="positionX" class="col-sm-4">% of X-position</label>
                <div class="col-sm-8">
                    <input type="range"  step="5" id="positionX" name="positionX" value="<?= $_SESSION['positionX']; ?>" class="form-control-plaintext" min="0" max="80">
                </div>
            </div>
            <div class="row">
                <label for="positionY" class="col-sm-4">% of Y-position</label>
                <div class="col-sm-8">
                    <input type="range" step="5" id="positionY" name="positionY" value="<?= $_SESSION['positionY']; ?>" class="form-control-plaintext" min="10" max="90">
                </div>
            </div>
            <div class="row">
                <label for="textSize" class="col-sm-4">Size of text</label>
                <div class="col-sm-8">
                    <input type="range" step="10" id="textSize" name="textSize" value="<?= $_SESSION['textSize']; ?>" class="form-control-plaintext" min="10" max="230">
                </div>
            </div>
            <div class="row">
                <label for="borderSize" class="col-sm-4">Size of border</label>
                <div class="col-sm-8">
                    <input type="range" step="1" id="borderSize" name="borderSize"  value="<?= $_SESSION['borderSize']; ?>"class="form-control-plaintext" min="0" max="20">
                </div>
            </div>
            <div class="row">
                <label for="textAngle" class="col-sm-4">Angle of text</label>
                <div class="col-sm-8">
                    <input type="range" step="30" id="textAngle" name="textAngle" value="<?= $_SESSION['textAngle']; ?>" class="form-control-plaintext" min="-180" max="180">
                </div>
            </div>
            <div class="row">
                <label for="fontColor" class="col-sm-4">Font Color</label>
                <div class="col-sm-8">
                    <input type="color" id="fontColor" name="fontColor" value="<?= $_SESSION['fontColor'];?>" class="form-control-plaintext">
                </div>
            </div>

            <input type="submit" name="submit" value="Generate again" class="btn btn-primary"><br>
        </form>
    </div>
    <?php } ?>

