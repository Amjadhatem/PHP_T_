<?php
function eligible ($age){
    if($age>=18){
        echo "is eligible to vote";
    }
    else{
        echo "is no eligible to vote";
    }
}
eligible(25);
?>



<!-- 10.	Write php script to check if a person is eligible to vote, minimum age required for voting is 18.

Sample Input: 15
Sample Output: ‘is no eligible to vote’ -->
