<html>

<head>
    <meta charset="UTF-8" />

    <title>PHP QUIZ 2 </title>


</head>
<?php
$page = "Home";
$path = './';
include($path . 'assets/inc/header.php');
include($path . 'assets/inc/nav.php');
?>

<body>

    <div id="page-wrap">

        <h1>Unix Basic</h1>

        <form action="result.php" method="post" id="quiz">

            <ol>

                <li>

                    <h3>What is UNIX?</h3>

                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A) An operating system </label>
                    </div>

                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) A File</label>
                    </div>

                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) A Command </label>
                    </div>

                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) A picture</label>
                    </div>

                </li>

                <li>

                    <h3>What command is used to list all files in a folder? </h3>

                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A) cp</label>
                    </div>

                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) mv</label>
                    </div>

                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C) ls</label>
                    </div>

                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D) rm</label>
                    </div>

                </li>

                <li>

                    <h3>The directory structure is a</h3>

                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A) Hierarchy Structure</label>
                    </div>

                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B) Tribal Structure</label>
                    </div>

                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C) Organization Structure</label>
                    </div>

                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D) Weak Structure</label>
                    </div>

                </li>

                <li>

                    <h3>What are the 3 Basic File Permissions?</h3>

                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A) Read, Write, Consolidate</label>
                    </div>

                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) Read, Process, Copy</label>
                    </div>

                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C) Keep, Change, Flip</label>
                    </div>

                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D) Read, Write, Execute</label>
                    </div>

                </li>

                <li>

                    <h3>What is the root in a directory structure?</h3>

                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">A) A file canal</label>
                    </div>

                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B) The folder in which a file is located</label>
                    </div>

                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C) The top file in a file directory</label>
                    </div>

                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D) The bottom file in a file directory</label>
                    </div>

                </li>

            </ol>

            <input type="submit" value="Submit" class="submitbtn" />

        </form>

    </div>

    <div id="page-wrap">

        <h1>Result </h1>

        <?php

        $answer1 = $_POST['question-1-answers'];
        $answer2 = $_POST['question-2-answers'];
        $answer3 = $_POST['question-3-answers'];
        $answer4 = $_POST['question-4-answers'];
        $answer5 = $_POST['question-5-answers'];

        $totalCorrect = 0;

        if ($answer1 == "A") {
            $totalCorrect++;
        }
        if ($answer2 == "C") {
            $totalCorrect++;
        }
        if ($answer3 == "A") {
            $totalCorrect++;
        }
        if ($answer4 == "D") {
            $totalCorrect++;
        }
        if ($answer5 == "C") {
            $totalCorrect++;
        }

        echo "<div id='results'>$totalCorrect / 5 correct</div>";

        ?>

    </div>


</body>

<?php
include($path . 'assets/inc/footer.php');
?>

</html>