                        <!-- ex-1 -->
<a class="to_jump" name="switch_ex-1"></a>
<div class="all-center100"><h2 class="mark">01. PHP Switch</h2></div>
<div class="code">
    code-
    <pre>
    $vowel="a";

        switch($vowel){
        case "a";
        echo 'Input Character is Vowel';
        break;

        case "a";
        echo 'Input Character is Vowel';
        break;

        case "e";
        echo 'Input Character is Vowel';
        break;

        case "i";
        echo 'Input Character is Vowel';
        break;

        case "0";
        echo 'Input Character is Vowel';
        break;

        case "u";
        echo 'Input Character is Vowel';
        break;

        default;
        echo 'Input Character is Consonant';
        break;
        }
    
    </pre>
</div>
                        <!-- ex-2 -->
<a class="to_jump" name="switch_ex-2"></a>
<div class="all-center100"><h2 class="mark">02.PHP Nested Switch</h2></div>
<div class="code">
    code-2
    <pre>
    $car="BMW";
            $model="BMW X3";

            switch($car){
                case "Honda";
                switch($model){
                    case"Civic":
                    echo $car." ".$model." price is 9.3 lakh.";
                    break;

                    case"HR-v":
                    echo $car." ".$model." price is 10.5 lakh.";
                    break;

                    case"Cr-v":
                    echo $car." ".$model." price is 12.8 lakh.";
                    break;

                    case"City":
                    echo $car." ".$model." price is 10 lakh.";
                    break;

                    case"Fit":
                    echo $car." ".$model." price is 13 lakh.";
                    break;

                    default:
                    echo $model." is not a ". $car." car model.";
                }
                break;

                case "BMW";
                switch($model){
                    case"BMW 3 Series":
                    echo $model." price is 67.3 lakh.";
                    break;

                    case"BMW 5 Series":
                    echo $model." price is 70.5 lakh.";
                    break;

                    case"BMW X5":
                    echo $model." price is 65.8 lakh.";
                    break;

                    case"BMW X3":
                    echo $model." price is 69 lakh.";
                    break;

                    case"BMW X7":
                    echo $model." price is 66 lakh.";
                    break;

                    default:
                    echo $model." is not a ". $car." car model.";
                }
            }
    </pre>
</div>