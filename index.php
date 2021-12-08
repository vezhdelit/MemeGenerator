<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css">

    <div class="container mt-2 shadow p-2 mb-2 bg-body rounded " style="width: 40%;">
        <form action="image-proccesing.php" method="post" class="col text-center" enctype="multipart/form-data" >
            <input type="file" name="file" class="form-control"><br>
            <input type="text" name="text" placeholder="Enter text" class="form-control" autocomplete="off"><br>

            <div class="row">
                <label for="fontStyle" class="col-sm-4">Font style</label>
                <div class="col-sm-8">
                    <p><select  name="fontStyle" class="form-select">
                            <option value="Roboto-Regular.ttf">Roboto-Regular</option>
                            <option selected value="Impact.ttf">Impact</option>
                            <option value="Comic-Sans-MS.ttf">Comic-Sans-MS</option>
                            <option value="Montserrat-Regular.ttf">Montserrat-Regular</option>
                            <option value="Arial-Regular.ttf">Arial-Regular</option>
                        </select></p>
                </div>
            </div>

            <div class="row">
                <label for="positionX" class="col-sm-4">% of X-position</label>
                <div class="col-sm-8">
                    <input type="range"  step="5" id="positionX" name="positionX" class="form-control-plaintext" min="0" max="80">
                </div>
            </div>
            <div class="row">
                <label for="positionY" class="col-sm-4">% of Y-position</label>
                <div class="col-sm-8">
                    <input type="range" step="5" id="positionY" name="positionY" class="form-control-plaintext" min="10" max="90">
                </div>
            </div>
            <div class="row">
                <label for="textSize" class="col-sm-4">Size of text</label>
                <div class="col-sm-8">
                    <input type="range" step="10" id="textSize" name="textSize" class="form-control-plaintext" min="10" max="230">
                </div>
            </div>
            <div class="row">
                <label for="borderSize" class="col-sm-4">Size of border</label>
                <div class="col-sm-8">
                    <input type="range" step="1" id="borderSize" name="borderSize" class="form-control-plaintext" min="0" max="20">
                </div>
            </div>
            <div class="row">
                <label for="textAngle" class="col-sm-4">Angle of text</label>
                <div class="col-sm-8">
                    <input type="range" step="30" id="textAngle" name="textAngle" class="form-control-plaintext"
                           min="-180" max="180">
                </div>
            </div>
            <div class="row">
                <label for="fontColor" class="col-sm-4">Font Color</label>
                <div class="col-sm-8">
                    <input type="color" id="fontColor" name="fontColor" value="#ffffff" class="form-control-plaintext">
                </div>
            </div>

            <input type="submit" name="submit" value="Generate" class="btn btn-primary"><br>
        </form>
    </div>

