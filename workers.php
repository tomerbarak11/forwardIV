<html dir="rtl">
    <body>
    <head>
        <meta charset="utf-8">
    </head>
        <?php
        //דגל אם הכפתור נלחץ, מאותחל לכבוי
        $ifShowForm = empty($_POST['button']);
        //הראה את הטופס אם הדגל דולק
        if($ifShowForm)
        :?>
            <center><h1 style="color:blue">תודה על התעניינותכם</h1></center>
            אנא מלאו את פרטיכם ונציגנו ייצרו איתכם קשר בהקדם:
            <br>
            <form action="" method="post">
                <br>
                שם פרטי <br><input type="text" name="name"><br>
                שם משפחה <br><input type="text" name="familyName"><br>
                מספר טלפון<br><input type="text" name="phone"><br>
                כתובת דואר אלקטרוני<br><input type="text" name="email"><br><br>
                <button type="submit" name="button" formmethod="post" value="!isset">שלח</button>
            </form>
        <?php endif; ?>
    </body>
</html>

<html dir="rtl">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        //הכפתור של השליחה נלחץ
        if(isset($_POST['button']))
        {  
            //טעינת ערכי השדות לתוך משתנים
            $name = $_POST['name'];
            $familyName = $_POST['familyName'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $wrong = '';

            //ולידציה של שדה שם
            if(strlen($name)<2)
            {
                $wrong = $wrong . "שימו לב- שם פרטי חייב להכיל שתי אותיות לפחות<br/>";
            }

            //ולידציה של שדה שם משפחה
            if(strlen($familyName)<2)
            {
                $wrong = $wrong . "שימו לב- שם משפחה חייב להכיל שתי אותיות לפחות<br/>";
            }

            //ולידציה של שדה טלפון
            //אופציה ראשונה - טלפון באורך 11
            if(strlen($phone)==11)
            {
                $phoneDigitsCounter=0;
                while($phoneDigitsCounter<3)
                {
                    if($phone[$phoneDigitsCounter]<'0' && $phone[$phoneDigitsCounter]>'9') 
                    {
                        $wrong = $wrong . "מספר הטלפון שהוקלד אינו תקין. מספר תקין לטלפון קוי ייראה כך: 03-9366383
                        ומספר טלפון נייד ייראה כך: 054-4335232
                        <br/>";
                        $phoneDigitsCounter=3;
                    }
                    $phoneDigitsCounter++;
                }

                if($phone[$phoneDigitsCounter]<'0' && $phone[$phoneDigitsCounter]>'9') 
                {
                    $wrong = $wrong . "מספר הטלפון שהוקלד אינו תקין. מספר תקין לטלפון קוי ייראה כך: 03-9366383
                    ומספר טלפון נייד ייראה כך: 054-4335232
                    <br/>";
                }
                $phoneDigitsCounter++;

                while($phoneDigitsCounter<10)
                {
                    if($phone[$phoneDigitsCounter]<'0' && $phone[$phoneDigitsCounter]>'9') 
                    {
                        $wrong = $wrong . "מספר הטלפון שהוקלד אינו תקין. מספר תקין לטלפון קוי ייראה כך: 03-9366383
                        ומספר טלפון נייד ייראה כך: 054-4335232
                        <br/>";
                        $phoneDigitsCounter=10;
                    }
                    $phoneDigitsCounter++;
                }
            }
			//אופציה שנייה 0 טלפון באורך 10
            else if(strlen($phone)==10)
            {
                $phoneDigitsCounter=0;
                while($phoneDigitsCounter<2)
                {
                    if($phone[$phoneDigitsCounter]<'0' && $phone[$phoneDigitsCounter]>'9') 
                    {
                        $wrong = $wrong . "מספר הטלפון שהוקלד אינו תקין. מספר תקין לטלפון קוי ייראה כך: 03-9366383
                        ומספר טלפון נייד ייראה כך: 054-4335232
                        <br/>";
                        $phoneDigitsCounter=2;
                    }
                    $phoneDigitsCounter++;
                }                                                                                       

                if($phone[$phoneDigitsCounter]<'0' && $phone[$phoneDigitsCounter]>'9') 
                {
                    $wrong = $wrong . "מספר הטלפון שהוקלד אינו תקין. מספר תקין לטלפון קוי ייראה כך: 03-9366383
                    ומספר טלפון נייד ייראה כך: 054-4335232
                    <br/>";
                }
                $phoneDigitsCounter++;

                while($phoneDigitsCounter<9)
                {
                    if($phone[$phoneDigitsCounter]<'0' && $phone[$phoneDigitsCounter]>'9') 
                    {
                        $wrong = $wrong . "מספר הטלפון שהוקלד אינו תקין. מספר תקין לטלפון קוי ייראה כך: 03-9366383
                        ומספר טלפון נייד ייראה כך: 054-4335232
                        <br/>";
                        $phoneDigitsCounter=9;
                    }
                    $phoneDigitsCounter++;
                }

            }
            else
            {
                $wrong = $wrong . "מספר הטלפון שהוקלד אינו תקין. מספר תקין לטלפון קוי ייראה כך: 03-9366383
                ומספר טלפון נייד ייראה כך: 054-4335232<br/>";
            }

			//ולידציה של מייל
            if(strpos ($email, '@') == false || strpos ($email, '.') == false)
            {
                $wrong = $wrong . "כתובת מייל חייבת להכיל @ וגם- .<br/>";
            }
            
			//לפחות אחד מהשדות שגויים
            if ($wrong!='')
            {
                $ifShowForm = empty($_POST['button']);

                echo $wrong;
            }
            
            // כל השדות תקינים
            else
            {
                $ifShowForm = empty($_POST['button']);
                {
                    echo "תודה! נציג/ה יחזרו אליכם בהקדם<br/>";
                }
            }
            //הצג את הלינק למעבר לשליחת בקשה נוספת
            echo '<a href="http://localhost/midTask.php">שלח פנייה נוספת</a>';
        }    
        ?>
    
    </body>
</html>