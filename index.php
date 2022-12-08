<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAT201 Assignment Excel to CSV Converter</title>
    <link rel="stylesheet" href="css/Landing.css">
</head>
    <body>
        <article>
            <div class="itemWrapper">
                <div class="itemBox">
                    <div class="Title">
                        <h1>Excel to CSV Converter</h1>
                        <h3>Convert file from excel to CSV format online for free.</h3>
                    </div>

                    <div class="uploadContainer">
                        <form action = "download.php" method = "POST" enctype="multipart/form-data">
                            <div class="Card">
                                <img src="Public/selectFile.png" alt="fileIcon" width="313" height="313">
                                <input type="file" name="userFile" value="excel" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" />
                            </div>
                            <div class="Submit">
                                <button type="submit" value="Convert" name="submit">Convert</button>
                            </div>
                        </form>
                    </div>
                    <div class="descContainer">
                        <div class="step1">
                            <div class="imgBox" >
                                <img src="Public/fileIcon.png" alt="fileIcon" width="113" height="113">
                            </div>
                            <p>Select an excel file from your computer</p>
                        </div>
                        <hr>
                        <div class="step2">
                            <div class="imgBox">
                                <img src="Public/convertIcon.png" alt="convertIcon" width="113" height="113">
                            </div>

                            <p>Our system will automatically help you to convert the filetype to CSV</p>
                        </div>
                        <hr>
                        <div class="step3">
                            <div class="imgBox">
                                <img src="Public/downloadIcon.png" alt="downloadIcon" width="113" height="113">
                            </div>
                            <p>Download your converted file immediately</p>
                        </div>
                    </div>
                </div>

            </div>
        </article>
    </body>
</html>