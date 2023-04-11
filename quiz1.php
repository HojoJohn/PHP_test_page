<?php
$page = "Quiz1";
$path = '../';
include($path . 'assets/inc/header.php');
include($path . 'assets/inc/nav.php');
?>


<?php

$Questions = array(
    1 => array(
        'Question' => '1.) What is the permission number for complete open access?',
        'Answers' => array(
            'A' => '667',
            'B' => '755',
            'C' => '777',
            'D' => '111'
        ),
        'CorrectAnswer' => 'C'
    ),
    2 => array(
        'Question' => '2.) What is the command to change file permissions?',
        'Answers' => array(
            'A' => '657',
            'B' => 'chmod',
            'C' => 'chfileperm',
            'D' => 'pwd'
        ),
        'CorrectAnswer' => 'B'
    ),
    3 => array(
        'Question' => '3.) What does Ctrl+C do in a terminal setting?',
        'Answers' => array(
            'A' => 'Copies the current command line',
            'B' => 'Cancels the currently running command',
            'C' => 'Copies the terminal window',
            'D' => 'Closes the program'
        ),
        'CorrectAnswer' => 'B'
    ),
    4 => array(
        'Question' => '4.) What is the command to make a new directory?',
        'Answers' => array(
            'A' => 'mkdir filename',
            'B' => 'crdir filename',
            'C' => 'cd filename',
            'D' => 'make directory filename'
        ),
        'CorrectAnswer' => 'A'
    ),
    5 => array(
        'Question' => '5.) What is the Root?',
        'Answers' => array(
            'A' => 'The thing plants use to get water and nutrients',
            'B' => 'The top file in the file directory that all others branch off from',
            'C' => 'Any file that has multiple files branching off from it',
            'D' => 'The text input that interfaces with the Console'
        ),
        'CorrectAnswer' => 'B'
    )
);

if (isset($_POST['answers'])) {
    $Answers = $_POST['answers']; // Get submitted answers.



    foreach ($Questions as $QuestionNo => $Value) {
        // Echo the question
        echo $Value['Question'] . '<br />';

        if ($Answers[$QuestionNo] != $Value['CorrectAnswer']) {
            echo 'You answered: <span style="color: red;">' . $Value['Answers'][$Answers[$QuestionNo]] . '</span><br>'; // Replace style with a class
            echo 'Correct answer: <span style="color: green;">' . $Value['Answers'][$Value['CorrectAnswer']] . '</span>';
        } else {
            echo 'Correct answer: <span style="color: green;">' . $Value['Answers'][$Answers[$QuestionNo]] . '</span><br>'; // Replace style with a class
            echo 'You are correct: <span style="color: green;">' . $Value['Answers'][$Answers[$QuestionNo]] . '</span>';
            $counter++;
        }

        echo '<br /><hr>';
        if ($counter == "") {
            $counter = '0';
            $results = "Your score: $counter/5";
        } else {
            $results = "Your score: $counter/5";
        }
    }
    echo $results;
} else {
?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="quiz">
        <?php foreach ($Questions as $QuestionNo => $Value) { ?>

            <h3><?php echo $Value['Question']; ?></h3>
            <?php
            foreach ($Value['Answers'] as $Letter => $Answer) {
                $Label = 'question-' . $QuestionNo . '-answers-' . $Letter;
            ?>
                <div>
                    <input type="radio" name="answers[<?php echo $QuestionNo; ?>]" id="<?php echo $Label; ?>" value="<?php echo $Letter; ?>" />
                    <label for="<?php echo $Label; ?>"><?php echo $Letter; ?>) <?php echo $Answer; ?> </label>
                </div>
            <?php } ?>

        <?php } ?>
        <input type="submit" value="Submit Quiz" />
    </form>
<?php
}
?>

<?php
include($path . 'assets/inc/footer.php');
?>
