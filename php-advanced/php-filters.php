<html>
    <body>
        <table>
            <tr>
                <td>Filter Name</td>
                <td> Filter ID</td>
            </tr>
            <?php
            foreach (filter_list() as $id => $filter) {
                echo'<tr><td>'. $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
            }
            ?>
        </table>

        <?php
            // Sanitize a string
            $str = "<h1>Hello World!</h1>";
            $newstr = filter_var($str, FILTER_SANITIZE_STRING);
            echo $newstr . "<br>";
            

            // Validate an integer
            $int = -1.5;

            if (filter_var($int, FILTER_VALIDATE_INT) === 0 ||
            !filter_var($int, FILTER_VALIDATE_INT) === false) {
            echo("Integer is valid") . "<br>";
            } else {
            echo("Integer is not valid") . "<br>";
            }
        
            // validate an IP Address
            $ip = "127.0.0.1";

            if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
            echo("$ip is a valid IP address") . "<br>";
            } else {
            echo("$ip is not a valid IP address") . "<br>";
            }

            // Sanitize and validate an email address

            $email = "john.doe@example";

            // Remove all illegal characters from email address
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);

            // Validate email address
            if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                echo("$email is a valid email address") . "<br>";
            } else {
                echo("$email is not a valid email address") . "<br>";
            }

            // Sanitize and validate a URL
            $url = "http://www.example.com";

            // Remove all illegal characters from URL
            $url = filter_var($url, FILTER_SANITIZE_URL);

            // Validate URL
            if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
                echo("$url is a valid URL"). "<br>";
            } else {
                echo("$url is not a valid URL"). "<br>";
            }

        
        ?>


    </body>
</html>
